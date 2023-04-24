<?php

namespace App\Http\Controllers\superAdmin;

use App\Http\Controllers\Controller;
use App\Models\Faculty;
use Illuminate\Http\Request;

class SuperAdminDashboardController extends Controller
{
    public function index()
    {
        return view('layouts.dashboard.superAdmin.index');
    }

    public function getFacultyPage()
    {

        // dd($faculties);
        return view('layouts.dashboard.superAdmin.faculty');
    }
}