<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function test()
    {
        $journals = auth()->user()->editJournal()->get();
        
        return view('layouts.test', compact('journals'));
    }
}
