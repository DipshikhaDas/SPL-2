<?php

namespace App\Http\Controllers\journalAdmin;

use App\Http\Controllers\Controller;
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

    public function submitPublishedArticle(){
        return view('layouts.dashboard.journalAdmin.submitPublishedArticle');
    }

    public function submitPublishedJournal($id){
        $journal = Journal::find($id);
        return view('layouts.dashboard.journalAdmin.submitPublishedJournal', compact('journal'));
    }

    public function addPublishedJournalPage(){
        $journals = Journal::all();
        return view('layouts.dashboard.journalAdmin.addPublishedJournal', compact('journals'));
    }

}
