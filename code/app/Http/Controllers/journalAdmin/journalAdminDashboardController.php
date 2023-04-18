<?php

namespace App\Http\Controllers\journalAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}