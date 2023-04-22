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
        return view('layouts.dashboard.journalAdmin');
    }

    public function rolesIndex(){
        $roles = Role::all();
        $users = User::all();
        
        return view('layouts.dashboard.userRoles.index', compact('roles', 'users'));
    }

    public function getUsersWithRoles(){
        $users = User::with('roles')->get();
        
        return response()->json($users);
    }
}