<?php

namespace App\Http\Controllers\UserAndRoleManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JournalAdminDashboardController extends Controller
{
    public function journalAdmin()
    {
        return view('layouts.dashboard.journalAdmin');
    }

    public function viewRoles(){
        return view('layouts.dashboard.journalAdmin');
    }


}
