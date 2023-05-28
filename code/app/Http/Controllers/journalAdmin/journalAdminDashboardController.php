<?php

namespace App\Http\Controllers\journalAdmin;

use App\Enums\ArticleStatus;
use App\Enums\ConsideredReviewerStatus;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Journal;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class journalAdminDashboardController extends Controller
{
    public function createUserIndex()
    {
        return view('layouts.dashboard.journalAdmin.createUser');
    }

    public function index()
    {
        $faculty = auth()->user()->faculties()->first();

        return view('layouts.dashboard.journalAdmin.index', compact('faculty'));
    }

    public function rolesIndex()
    {
        $roles = Role::all();
        $users = User::all();

        // return view('layouts.dashboard.userRoles.index',compact('roles'));
        return view('layouts.dashboard.userRoles.index', [
            'roles' => $roles,
            'users' => $users
        ]);
    }

    public function getUsersWithRoles()
    {
        $users = User::with('roles')->get();

        return response()->json($users);
    }

    public function getCreateJournalPage()
    {

        $faculty = auth()->user()->faculties()->first();
        if (!$faculty) {
            return redirect()->back()->with('error', 'No faculty available.');
        }
        return view('layouts.dashboard.journalAdmin.createJournal', compact('faculty'));
    }

    public function viewSubmittedArticles()
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
            ->where('status', ArticleStatus::MANUSCRIPT_SUBMITTED->value);
    

        return view('layouts.dashboard.journalAdmin.viewSubmittedArticles', compact('articles'));

    }

    public function sendReviewRequestView()
    {
             $articles = auth()->user()
            ->faculties()
            ->with('journals.articles')
            ->get()
            ->pluck('journals')
            ->flatten()
            ->pluck('articles')
            ->flatten()
            ->where('status', ArticleStatus::WITH_EDITOR->value);
    

        return view('layouts.dashboard.journalAdmin.sendReviewRequestView', compact('articles'));
    }

    public function submitPublishedArticle(Article $article)
    {
        return view('layouts.dashboard.journalAdmin.submitPublishedArticle', compact('article'));
    }

    public function sendReviewRequest(Article $article)
    {
        if (auth()->user()->faculties()->first()->id != $article->journal->faculty_id){
            abort(403, "You are not authorized to view this page");
        }

        return view('layouts.dashboard.journalAdmin.sendReviewRequestSingleView', compact('article'));
    }
    public function submitPublishedJournal($id)
    {
        $journal = Journal::find($id);
        return view('layouts.dashboard.journalAdmin.submitPublishedJournal', compact('journal'));
    }

    public function addPublishedJournalPage()
    {
        $journals = Journal::all();
        return view('layouts.dashboard.journalAdmin.addPublishedJournal', compact('journals'));
    }

    public function sendReviewRequestPost(Request $request)
    {
        $request->validate([
            'article_id' => 'exists:articles,id',
            'journal_admin_id' => 'exists:users,id',
            'reviewer_id' => 'exists:users,id',
        ]);

        $article = Article::find($request->input('article_id'));

        $reviwer = $article->consideredReviewers()->where('reviewer_id', $request->input('reviewer_id'))->first();
        // ->find($request->input('reviwer_id'));

        
        if ($reviwer->pivot->status == ConsideredReviewerStatus::REQUEST_PENDING->value)
        {
            $reviwer->pivot->status = ConsideredReviewerStatus::REQUEST_SENT->value;    
            $reviwer->pivot->save();        
        }

        return redirect()->back();
    }
}