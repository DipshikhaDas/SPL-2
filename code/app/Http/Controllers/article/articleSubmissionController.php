<?php

namespace App\Http\Controllers\article;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ArticleAuthor;
use App\Models\Journal;
use App\Models\User;
use Illuminate\Http\Request;

class articleSubmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $journals = Journal::where('deadline_date', '>=', now()->toDateString())
            ->orderBy('deadline_date')
            ->get();

        $defaultCover = 'public/cover-photos/default.jpg';
        return view('layouts.guests.availableJournalsForArticleSubmission', compact('journals', 'defaultCover'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($journal_id)
    {
        $journal = Journal::find($journal_id);
        return view('layouts.dashboard.author.submitArticle', compact('journal'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request);

        // $validatedData = $request->validate(
        //     [
        //         'comments_for_editor' => 'nullable|string',
        //         'file_with_author_info' => 'required|file',
        //         'file_without_author_info' => 'required|file',
        //         'first_name.*' => 'required|string',
        //         'middle_name.*' => 'required|string',
        //         'last_name.*' => 'required|string',
        //         'email.*' => 'required|email',
        //         'url_input.*' => 'nullable|url',
        //         'affiliation.*' => 'nullable|string',
        //         'statement.*' => 'nullable|string',
        //         'corresponding' => 'required',
        //         'title' => 'required|string',
        //         'abstract' => 'required|string',
        //         'keywords' => 'required|string',
        //         'supplementary_file.*' => 'nullable|file',

        //     ]
        // );


        //store the article
        $article = new Article();
        $article->journal_id = $request->input('journal_id');
        $article->title = $request->input('title');
        $article->abstract = $request->input('abstract');
        $article->keywords = $request->input('keywords');
        $article->save();

        // dd($article);

        $authors = [];
        foreach ($request->input('first_name') as $index => $firstName) {
            $author = new ArticleAuthor();
            $author->article_id = $article->id;
            $author->first_name = $firstName;
            $author->middle_name = $request->input('middle_name')[$index];
            $author->last_name = $request->input('last_name')[$index];
            $author->email = $request->input('email')[$index];
            $author->url = $request->input('url_input')[$index];
            $author->affiliation = $request->input('affiliation')[$index];
            $author->bio_statement = $request->input('statement')[$index];

            $author->save();

            $authors[] = $author;


            if ($index === ($request->input('corresponding') - 1)){
                $user = User::where('email', $author->email)->first();

                if($user){
                    $article->correspondingAuthors()->sync([$user->id]);
                }

            }
        }
        $article->authors()->saveMany($authors);

        $supplementaryFiles = [];
        if ($request->hasFile('supplementary_file')) {
            foreach ($request->file('supplementary_file') as $file) {
                $filename = $file->store('supplementary_files');
                $supplementaryFiles[] = $filename;
            }
        }

        $article->additionalFiles()->saveMany($supplementaryFiles);
        
        $article->save();

        return redirect()->back(); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}