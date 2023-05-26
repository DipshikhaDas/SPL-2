<?php

namespace App\Http\Controllers\journalAdmin;

use App\Http\Controllers\Controller;
use App\Models\Journal;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Spatie\Permission\Models\Role;

class JournalController extends Controller
{
    // In the controller

    public function store(Request $request)
    {
        dd($request);

        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'aims&scope' => 'nullable|string',
            'author_guidelines' => 'nullable|string',
            'editorial_board' => 'nullable|string',
            'editor_id' => 'exists:users,id',
            'cover_photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $faculty = auth()->user()->faculties()->first();

        // $deadline_date = Carbon::createFromFormat('Y-m-d\TH:i', $request->input('deadline_date'));

        $journal = new Journal();
        $journal->title = $request->input('title');
        $journal->description = $request->input('description');
        $journal->aims_and_scope = $request->input('aims_and_scope');
        $journal->author_guideline = $request->input('author_guidelines');
        $journal->editorial_board = $request->input('editorial_board');
        $journal->faculty_id = $faculty->id;
        $journal->editor_id = $request->input('editor_id');

        if ($request->hasFile('cover_photo')) {
            $cover_photo = $request->file('cover_photo');
            $filename = time() . '_' . $cover_photo->hashName();
            $path = $cover_photo->storeAs('public/cover-photos', $filename);
            $journal->cover_photo = $path;
            $journal->save();
        } else {
            $defaultCover = 'public/cover-photos/default.jpg';
            $journal->cover_photo = $defaultCover;
            $journal->save();
        }
        return redirect()->back()->with('success', 'Journal created successfully!');
    }

    public function getAvailableJournalsForSubmissionPage()
    {
        $journals = Journal::where('deadline_date', '>=', now()->toDateString())
            ->orderBy('deadline_date')
            ->get();

        return view('layouts.guests.viewJournals', compact('journals'));
    }

    public function getEditors(Request $request)
    {
        // dd($request);

        $searchTerm = $request->input('query');

        // Get the editor role
        $editorRole = Role::where('name', 'editor')->first();

        // Search for users by email or username and filter by the editor role
        $users = User::where(function ($query) use ($searchTerm) {
            $query->where('email', 'LIKE', "%$searchTerm%")
                ->orWhere('name', 'LIKE', "%$searchTerm%");
        })
            ->role($editorRole)
            ->get();

        return response()->json($users);


    }

    public function getAllJournals()
    {
        $faculty = auth()->user()->faculties()->first();


        $journals = $faculty->journals()->get();

        // dd($journals);

        return view('layouts.dashboard.journalAdmin.allJournalsOfFaculty', compact('faculty', 'journals'));
    }

    public function edit($id)
    {
        $journal = Journal::findOrFail($id);

        $faculty = auth()->user()->faculties()->first();
        if (auth()->user()->faculties()->first()->id != $journal->faculty_id) {
            abort(403, "You are not authorized to edit this Journal");
        }

        return view('layouts.dashboard.journalAdmin.journalEdit', compact('journal', 'faculty'));
    }

    public function update(Request $request, $id)
    {
        // Find the journal by ID
        $journal = Journal::findOrFail($id);

        // Only allow authorized users to update the journal

        if (auth()->user()->faculties()->first()->id != $journal->faculty_id) {
            abort(403, "You are not authorized to edit this Journal");
        }
        // Validate the form data
        $validatedData = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'aims&scope' => 'required|string',
            'author_guidelines' => 'required|string',
            'editorial_board' => 'required|string',
            'cover_photo' => 'nullable|image|max:2048',
            'accepting' => 'required|boolean',
        ]);

        // Update the journal with the validated data
        $journal->title = $validatedData['title'];
        $journal->description = $validatedData['description'];
        $journal->aims_and_scope = $validatedData['aims&scope'];
        $journal->author_guideline = $validatedData['author_guidelines'];
        $journal->editorial_board = $validatedData['editorial_board'];
        $journal->accepting_articles = $validatedData['accepting'];

        // Handle the cover photo if provided
        if ($request->hasFile('cover_photo')) {
            $coverPhoto = $request->file('cover_photo');
            $coverPhotoPath = $coverPhoto->store('public/cover_photos');
            $journal->cover_photo = $coverPhotoPath;
        }

        // Save the updated journal
        $journal->save();

        // Redirect the user back to the edit page with a success message
        return redirect()->back()->with('success', 'Journal updated successfully.');
    }

}