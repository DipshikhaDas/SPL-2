<?php

namespace App\Http\Controllers\journalAdmin;

use App\Http\Controllers\Controller;
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

    public function rolesIndex(){
        $roles = Role::all();
        $users = User::all();
        
        // return view('layouts.dashboard.userRoles.index',compact('roles'));
        return view('layouts.dashboard.userRoles.index',[
            'roles' => $roles,
            'users' => $users
        ]);
    }

    public function getUsersWithRoles(){
        $users = User::with('roles')->get();
        
        return response()->json($users);
    }

    public function getCreateJournalPage(){

        $faculty = auth()->user()->faculties()->first();

        return view('layouts.dashboard.journalAdmin.createJournal', compact('faculty'));
    }

    public function viewSubmittedArticles(){

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

        return view('layouts.dashboard.journalAdmin.viewSubmittedArticles', compact('articles'));

    }

}
