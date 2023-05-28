<?php

namespace App\Http\Controllers\editor;

use App\Enums\ArticleStatus;
use App\Enums\ConsideredReviewerStatus;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ArticleRevision;
use App\Models\Journal;
use App\Models\User;
use Illuminate\Http\Request;

class EditorController extends Controller
{
    //

    public function viewSubmittedArticles()
    {
        $articles = auth()->user()->editedArticles()->where('status', ArticleStatus::WITH_EDITOR->value)->get();

        return view('layouts.dashboard.editor.viewArticles', compact('articles'));
    }

    public function getArticle(Article $article)
    {
        $article_editor_id = $article->journal->editor->id;
        $userId = auth()->user()->id;


        if ($article_editor_id != $userId) {
            abort(403, "You are not authorized to view this article");
        }

        return view('layouts.dashboard.editor.singleArticle', compact('article'));
    }

    public function viewArticlesForFeedback()
    {
        $articles = auth()->user()->editedArticles()->get();

        return view('layouts.dashboard.editor.viewArticlesForFeedback', compact('articles'));
    }

    public function searchReviewer(Request $request)
    {
        $request->validate([
            'article_id' => 'exists:articles,id',
        ]);

        $query = $request->input('query');

        $allReviewers = User::where(function ($queryBuilder) use ($query) {
            $queryBuilder->where('name', 'like', "%$query%")
                ->orWhere('email', 'like', "%$query%");
        })
            ->whereHas('roles', function ($roleQuery) {
                $roleQuery->where('name', 'reviewer');
            })
            ->get();
        $allReviewersIds = $allReviewers->pluck('id')->all();

        $considered = Article::find($request->input('article_id'))->consideredReviewers()->get();
        $consideredIds = $considered->pluck('id')->all();

        $diffIds = array_diff($allReviewersIds, $consideredIds);
        $filtered_res = $allReviewers->whereIn('id', $diffIds);

        // dd($allReviewersIds, $filtered_res);

        return response()->json($filtered_res);
    }

    public function sendReviewersToJournalAdmin(Request $request)
    {

        $request->validate(
            [
                'reviewers.*' => 'required|exists:users,id',
                'article_id' => 'required|exists:articles,id'
            ]
        );

        $article = Article::findOrFail($request->input('article_id'));
        $alreadyConsidered = $article->consideredReviewers()->get()->pluck('id')->all();

        $reviewerIds = $request->input('reviewers');

        $diff = array_diff($reviewerIds, $alreadyConsidered);

        $reviewers = User::whereIn('id', $diff)
            ->whereHas('roles', function ($query) {
                $query->where('name', 'reviewer');
            })
            ->get();

        $article->consideredReviewers()->attach($reviewers, ['status' => ConsideredReviewerStatus::REQUEST_PENDING->value]);

        return redirect()->back();
    }

    public function viewRevisedArticlesEditor(Article $article)
    {
        $r_articles = $article->revisions()->get();

        return view('layouts.dashboard.editor.revisedArticlesView', compact('r_articles'));
    }

    public function getRevisedArticle(ArticleRevision $r_article)
    {
        // dd($r_article->reviewFeedbacks()->get());

        return view('layouts.dashboard.editor.submitFeedback', compact('r_article'));
    }

    public function submitFeedback(Request $request)
    {
        // $request->validate()

        $r_article = ArticleRevision::find($request->input('r_article_id'));

        $article = $r_article->article;

        $status = $request->input('feedback_status');

        $feedback = $request->input('feedback');


        $r_article->editor_comments = $feedback;
        $r_article->revision_status = $status;
        $r_article->save();

        if ($status == ArticleStatus::ACCEPTED->value){
            $article->status = $status;
            $article->save();
        }
        if ($status == ArticleStatus::REJECTED->value){
            $article->status = $status;
            $article->save();
        }

        $request->session()->flash('Success', 'Feedback sent successfully');

        return redirect()->route('viewArticlesForFeedback');

    }
}