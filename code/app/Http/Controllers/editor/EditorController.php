<?php

namespace App\Http\Controllers\editor;

use App\Enums\ArticleStatus;
use App\Http\Controllers\Controller;
use App\Models\Article;
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

    public function searchReviewer(Request $request)
    {
        $query = $request->input('query');

        $results = User::where(function ($queryBuilder) use ($query) {
            $queryBuilder->where('name', 'like', "%$query%")
                ->orWhere('email', 'like', "%$query%");
        })
            ->whereHas('roles', function ($roleQuery) {
                $roleQuery->where('name', 'reviewer');
            })
            ->get();


        return response()->json($results);
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

        $reviewerIds = $request->input('reviewers');
        $reviewers = User::whereIn('id', $reviewerIds)
            ->whereHas('roles', function ($query) {
                $query->where('name', 'reviewer');
            })
            ->get();

        $article->consideredReviewers()->attach($reviewers);


    }
}