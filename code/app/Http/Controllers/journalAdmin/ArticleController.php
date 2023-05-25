<?php

namespace App\Http\Controllers\journalAdmin;

use App\Http\Controllers\Controller;
use App\Models\Keyword;
use App\Models\PublishedArticle;
use App\Models\PublishedArticleAuthor;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // public function viewCompletedArticles(){
    //     return view('layouts.dashboard.journalAdmin.viewSubmittedArticlesButton');
    // }

    public function viewCompletedArticles()
    {

        //get all the articles of every journal of a faculty that have not been sent to the editor.
        $articles = auth()->user()
            ->faculties()
            ->with('journals.articles')
            ->get()
            ->pluck('journals')
            ->flatten()
            ->pluck('articles')
            ->flatten()
            ->where('status', null);
        //    dd($articles);

        return view('layouts.dashboard.journalAdmin.viewSubmittedArticlesButton', compact('articles'));
    }

    public function storePublishedArticle(Request $request)
    {

        $validatedData = $request->validate(
            [
                'first_name.*' => 'required|string',
                'middle_name.*' => 'nullable|string',
                'last_name.*' => 'required|string',
                'email.*' => 'required|email',
                'url.*' => 'nullable|url',
                'title' => 'required|string',
                'abstract' => 'required|string',
                'keywords' => 'required|string',
                'reference' => 'required|string',
                'cover_photo' => 'nullable|file',
                'article_file' => 'required|file',
                'journal_id' => 'required|string',
                'publication_date' => 'required|string',

            ]
        );

        $article = new PublishedArticle();
        $article->journal_id = $request->input('journal_id');
        $article->title = $request->input('title');
        $article->abstract = $request->input('abstract');
        $article->reference = $request->input('reference');
        $article->doi = $request->input('doi');
        $article->publication_date = Carbon::parse($request->input('publication_date'));

        if ($request->hasFile('article_file')) {
            $file = $request->file('article_file');
            $filename = time() . $article->title . "article_file" . $file->hashName();
            $path = $file->storeAs('public/published_articles', $filename);
            $article->published_article_file = $path;
        }

        if ($request->hasFile('cover_photo')) {
            $cover_photo = $request->file('cover_photo');
            $filename = time() . '_' . $cover_photo->hashName();
            $path = $cover_photo->storeAs('public/cover-photos', $filename);
            $article->cover_photo = $path;
            $article->save();
        } else {
            $defaultCover = 'public/cover-photos/default.jpg';
            $article->cover_photo = $defaultCover;
            $article->save();
        }

        $article->save();

        // Get the keywords from the form
        $keywordsString = $request->input('keywords');

        // Convert keywords to lowercase
        $keywordsString = strtolower($keywordsString);

        // Split the string into an array of keywords
        $keywordsArray = explode(';', $keywordsString);

        // Remove leading and trailing whitespace from each keyword
        $keywordsArray = array_map('trim', $keywordsArray);

        // Associate the keywords with the article
        $uniqueKeywords = [];
        foreach ($keywordsArray as $keyword) {
            $keyword = strtolower($keyword);

            // Skip empty keywords
            if ($keyword === '') {
                continue;
            }

            if (!in_array($keyword, $uniqueKeywords)) {
                $existingKeyword = Keyword::where('name', $keyword)->first();

                if ($existingKeyword) {
                    $article->keywords()->attach($existingKeyword->id);
                } else {
                    $newKeyword = Keyword::create(['name' => $keyword]);
                    $article->keywords()->attach($newKeyword->id);
                }

                $uniqueKeywords[] = $keyword;
            }
        }
        $authors = [];
        foreach ($request->input('first_name') as $index => $firstName) {
            $author = new PublishedArticleAuthor();
            $author->published_article_id = $article->id;
            $author->first_name = $firstName;
            $author->middle_name = $request->input('middle_name')[$index];
            $author->last_name = $request->input('last_name')[$index];
            $author->email = $request->input('email')[$index];
            $author->url = $request->input('url')[$index];

            $author->save();

            $authors[] = $author;

        }

        $article->authors()->saveMany($authors);

    }
}
