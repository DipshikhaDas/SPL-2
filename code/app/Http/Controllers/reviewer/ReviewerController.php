<?php

namespace App\Http\Controllers\reviewer;

use App\Enums\ConsideredReviewerStatus;
use App\Http\Controllers\Controller;
use App\Models\Article;
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
}