<?php

namespace App\Http\Controllers\reviewer;

use App\Enums\ArticleStatus;
use App\Enums\ConsideredReviewerStatus;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ArticleReview;
use App\Models\ArticleRevision;
use App\Models\User;
use Illuminate\Http\Request;

class ReviewerController extends Controller
{
    //
    public function viewReviewRequests()
    {
        $user = auth()->user();

        $articles = $user->reviews()->get();

        return view('layouts.dashboard.reviewer.reviewRequestView', compact('articles'));
    }

    public function viewReviewRequestSingle(Article $article)
    {
        return view('layouts.dashboard.reviewer.viewArticle', compact('article'));
    }

    public function declineRequest(Request $request)
    {
        $request->validate([
            'article_id' => 'exists:articles,id',
            'reviewer_id' => 'exists:users,id',
        ]);

        $article = Article::find($request->input('article_id'));

        $reviwer = $article->consideredReviewers()->where('reviewer_id', $request->input('reviewer_id'))->first();

        if ($reviwer->pivot->status == ConsideredReviewerStatus::REQUEST_SENT->value) {
            $reviwer->pivot->status = ConsideredReviewerStatus::REQUEST_DECLINED->value;
            $reviwer->pivot->save();
        }

        $request->session()->flash('Success Declined', "You you have declined to review ".$article->title);

        return redirect()->route('viewReviewRequests');
    }

    public function acceptRequest(Request $request)
    {
        $request->validate([
            'article_id' => 'exists:articles,id',
            'reviewer_id' => 'exists:users,id',
        ]);

        $article = Article::find($request->input('article_id'));

        $reviwer = $article->consideredReviewers()->where('reviewer_id', $request->input('reviewer_id'))->first();

        if ($reviwer->pivot->status == ConsideredReviewerStatus::REQUEST_SENT->value) {
            $reviwer->pivot->status = ConsideredReviewerStatus::REQUEST_ACCEPTED->value;
            $reviwer->pivot->save();
        }

        $request->session()->flash('Success Accepted', "You have accepted to review ".$article->title);

        return redirect()->route('viewReviewRequests');
    }

    public function viewArticles()
    {

        $articles = auth()->user()->reviews()->where('considered_reviewers.status', ConsideredReviewerStatus::REQUEST_ACCEPTED->value)->get();

        // dd($articles);

        return view('layouts.dashboard.reviewer.viewArticlesForReview', compact('articles'));
    }

    public function viewRevisedArticles(Article $article)
    {
        $r_articles = $article->revisions()->get();

        return view('layouts.dashboard.reviewer.revisedArticleView', compact('r_articles'));
    }

    public function getRevisedArticle(ArticleRevision $r_article)
    {
        // dd($r_article->article->keywords());
        return view('layouts.dashboard.reviewer.submitReview', compact('r_article'));
    }

    public function submitReview(Request $request)
    {
        $request->validate([
            'r_article_id' => 'required|exists:article_revisions,id',
            'reviewer_id' => 'required',
            'review' => 'required',
            'review_status' => 'required'
        ]);

        
        $r_article = ArticleRevision::find($request->input('r_article_id'));
        $review = new ArticleReview();
        $review->revised_article_id = $request->input('r_article_id');
        $review->reviewer_id = $request->input('reviewer_id');
        $review->status = $request->input('review_status');
        $review->review = $request->input('review');
        
        $review->save();

        $article = $r_article->article;
        if ($article->status != ArticleStatus::ACCEPTED->value or $article->status !=  ArticleStatus::REJECTED->value){
            $article->status = ArticleStatus::IN_REVIEW;
            $article->save();
        }

        $request->session()->flash('Success', "Review Submitted");

        return redirect()->route('viewArticlesReviewer');
    }
}