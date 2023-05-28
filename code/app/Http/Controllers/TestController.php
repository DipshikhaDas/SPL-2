<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
    
        // dd($user);
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

    public function download($id)
    {
        $article = Article::findOrFail($id);

        $path = storage_path('app/secure/'. $article->file_with_author_info);
        $cleanFileName = Str::slug($article->title) . '.' . pathinfo($article->file_with_author_info, PATHINFO_EXTENSION);
        return response()->download($path, $cleanFileName);
    }
}