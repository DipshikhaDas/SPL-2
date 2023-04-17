<?php

namespace App\Http\Controllers\JournalAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JournalAdminDashboardController extends Controller
{
    public function journalAdmin()
    {
        return view('layouts.dashboard.journalAdmin');
    }


}
