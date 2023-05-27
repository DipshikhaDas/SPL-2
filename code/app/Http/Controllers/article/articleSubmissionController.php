<?php

namespace App\Http\Controllers\article;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ArticleAdditionalFile;
use App\Models\ArticleAuthor;
use App\Models\ArticleSubmission;
use App\Models\Journal;
use App\Models\Keyword;
use App\Models\User;
use App\Notifications\ArticleSubmissionConfirmationCorrespondingAuthorNotification;
use App\Notifications\ArticleSubmissionConfirmationNotification;
use Illuminate\Http\Request;

class articleSubmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $journals = Journal::where('accepting_articles', true)->get();
        $defaultCover = 'public/cover-photos/default.jpg';
        return view('layouts.guests.availableJournalsForArticleSubmission', compact('journals', 'defaultCover'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($journal_id)
    {
        $journal = Journal::find($journal_id);
        return view('layouts.dashboard.author.submitArticle', compact('journal'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request);

        // $validatedData = $request->validate(
        //     [
        //         'never_published_req' => 'required|string',
        //         'file_format_req' => 'required|string',
        //         'document_formatting_req' => 'required|string',
        //         'stylistic_req' => 'required|string',
        //         'figure_placement_req' => 'required|string',
        //         'comments_for_editor' => 'nullable|string',
        //         'file_with_author_info' => 'required|file',
        //         'file_without_author_info' => 'required|file',
        //         'first_name.*' => 'required|string',
        //         'middle_name.*' => 'required|string',
        //         'last_name.*' => 'required|string',
        //         'email.*' => 'required|email',
        //         'url_input.*' => 'nullable|url',
        //         'affiliation.*' => 'nullable|string',
        //         'statement.*' => 'nullable|string',
        //         'corresponding' => 'required',
        //         'title' => 'required|string',
        //         'abstract' => 'required|string',
        //         'keywords' => 'required|string',
        //         'reference' => 'required|string',
        //         'supplementary_file.*' => 'nullable|file',

        //     ]
        // );


        //store the article

        // dd($request);

        $article = new Article();
        $article->journal_id = $request->input('journal_id');
        $article->title = $request->input('title');
        $article->abstract = $request->input('abstract');
        $article->keywords = $request->input('keywords');
        $article->reference = $request->input('reference');


        if ($request->hasFile('file_with_author_info')) {
            $file = $request->file('file_with_author_info');
            $filename = time() . $article->title . "with_author_info" . $file->hashName();
            $path = $file->storeAs('public/article_submissions/with_author_info', $filename);
            $article->file_with_author_info = $path;
        }
        if ($request->hasFile('file_without_author_info')) {
            $file = $request->file('file_without_author_info');
            $filename = time() . $article->title . "without_author_info" . $file->hashName();
            $path = $file->storeAs('public/article_submissions/without_author_info', $filename);
            $article->file_without_author_info = $path;

        }
        $article->author_comments = $request->input('comments_for_editor');

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
        $submitted_by = [];
        foreach ($request->input('first_name') as $index => $firstName) {
            $author = new ArticleAuthor();
            $author->article_id = $article->id;
            $author->first_name = $firstName;
            $author->middle_name = $request->input('middle_name')[$index];
            $author->last_name = $request->input('last_name')[$index];
            $author->email = $request->input('email')[$index];
            $author->url = $request->input('url_input')[$index];
            $author->affiliation = $request->input('affiliation')[$index];
            $author->bio_statement = $request->input('statement')[$index];

            $author->save();

            $authors[] = $author;


            if ($index === ($request->input('corresponding') - 1)) {
                $user = User::where('email', $author->email)->first();

                if ($user) {
                    $article->correspondingAuthors()->sync([$user->id]);
                    $author->is_corresponding = true;
                    $submitted_by = $author->first_name. ' ' . $author->middle_name . ' ' . $author->last_name;
                }

            }
        }
        $article->authors()->saveMany($authors);

        $supplementaryFiles = [];
        if ($request->hasFile('supplementary_file')) {
            foreach ($request->file('supplementary_file') as $file) {

                $additionalFile = new ArticleAdditionalFile();
                $additionalFile->article_id = $article->id;
                $filename = time() . $article->title . "supplementary" . $file->hashName();
                $path = $file->storeAs('public/article_submissions/supplementary_files', $filename);
                $additionalFile->additional_file_name = $path;
                $additionalFile->save();

                $supplementaryFiles[] = $additionalFile;
            }
        }

        $article->additionalFiles()->saveMany($supplementaryFiles);


        $article->save();

        foreach ($authors as $author) {

            if($author->is_corresponding){
                $author->notify(new ArticleSubmissionConfirmationCorrespondingAuthorNotification($article));
            }
            else{
            $author->notify(new ArticleSubmissionConfirmationNotification($article, $submitted_by));
            }
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
