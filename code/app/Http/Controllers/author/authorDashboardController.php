<?php

namespace App\Http\Controllers\author;

use App\Enums\ArticleStatus;
use App\Enums\ReviewStatus;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ArticleRevision;
use App\Models\FinalCopy;
use Illuminate\Http\Request;

class authorDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layouts.dashboard.author');
    }


    public function destroy(string $id)
    {
        //
    }

    public function submitArticle()
    {
        return view('layouts.dashboard.author.submitArticle');
    }

    public function myArticles()
    {
        $articles = auth()->user()->submittedArticles;

        return view('layouts.dashboard.author.myarticles', compact('articles'));
    }

    public function mySubmittedArticle(Article $article)
    {
        if ($article->correspondingAuthors()->first()->id != auth()->user()->id) {
            abort(403, "You are not authorized to view this article");
        }

        $r_articles = $article->revisions()->get();

        return view('layouts.dashboard.author.mySubmittedArticle', compact('r_articles'));
    }

    public function myarticlefeedback(ArticleRevision $r_article)
    {
        return view('layouts.dashboard.author.myarticleFeedback', compact('r_article'));
    }

    public function submitRevision(Request $request)
    {
        // dd($request, $request->hasFile('file_without_author_info'));

        $r_article = ArticleRevision::find($request->input('r_article_id'));
        $article = $r_article->article;

        $new_r_article = new ArticleRevision();

        $new_r_article->article_id = $article->id;
        $new_r_article->reply_letter = $request->input('reply_letter');
        $new_r_article->revision_status = ArticleStatus::MANUSCRIPT_SUBMITTED->value;


        if ($request->hasFile('file_without_author_info')) {
            $file = $request->file('file_without_author_info');
            $filename = $file->hashName();
            $path = $file->storeAs('file_with_info', $filename, 'secure');
            $new_r_article->file_without_author_info = $path;
        }

        $new_r_article->save();

        $request->session()->flash('Success', "Article Submitted");
        return redirect()->route('myarticles');

    }

    public function finalCopyForm(Article $article)
    {
        // dd($article);

        if ($article->status == ArticleStatus::ACCEPTED->value or $article->status == ReviewStatus::ACCEPTED->value) {
            return view('layouts.forms.finalCopyForm', compact('article'));
        }
    }

    public function submitFinalCopy(Request $request)
    {
        // dd($request);

        $request->validate(
            [
                'reference' => 'required',
                'final_copy' => 'required',
            ]
        );

        $article = Article::find($request->input('article_id'));

        $final = new FinalCopy();
        $final->article_id = $article->id;
        if ($request->hasFile('final_copy')) {
            $file = $request->file('final_copy');
            $filename = $file->hashName();
            $path = $file->storeAs('file_with_info', $filename, 'secure');
            $final->file = $path;
        }
        $final->reference = $request->input('reference');

        $final->save();

        $request->session()->flash('Success', 'Successfully uploaded final copy');

        return redirect()->back();
    }
}