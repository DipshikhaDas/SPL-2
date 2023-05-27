<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function test()
    {
        
        $journals = auth()->user()->editJournal()->get();
        
        return view('layouts.test', compact('journals'));
    }
    
    public function index()
    {
        $user = User::role('author')->where('id', '104')->get();
    
        dd($user);
        return view('layouts.test');
    }

    public function selected(Request $request)
    {
        $selectedIds = $request->input('selected');

        // Retrieve selected results from the database based on the IDs
        $selectedResults = User::whereIn('id', $selectedIds)->get();

        // You can then insert the selected results into a table or perform any other desired operation

        return redirect('/search')->with('success', 'Selected results have been saved.');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        // Perform the search based on the query
        $results = User::where('name', 'like', "%$query%")
            ->orWhere('email', 'like', "%$query%")
            ->get();

        return response()->json($results);
    }
}