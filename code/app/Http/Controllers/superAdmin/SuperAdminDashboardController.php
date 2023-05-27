<?php

namespace App\Http\Controllers\superAdmin;

use App\Http\Controllers\Controller;
use App\Models\Faculty;
use App\Models\User;
use App\Notifications\AssignJournalAdminToFacultyNotification;
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

    public function getAssignJournalAdminPage(Request $request)
    {

        $search = $request->input('search', '');

        $journalAdmins = User::role('journalAdmin')
            ->when($search, function ($query, $search) {
                return $query->whereRaw('LOWER(name) LIKE ?', ['%' . strtolower($search) . '%'])
                    ->orWhereRaw('LOWER(email) LIKE ?', ['%' . strtolower($search) . '%']);
            })
            ->whereHas('roles', function ($query) {
                return $query->where('name', 'journalAdmin');
            })
            ->paginate(10);

        $faculties = Faculty::all();

        return view('layouts.dashboard.superAdmin.addJournalAdmin', compact('journalAdmins', 'faculties', 'search'));

    }

    public function addJournalAdminToFaculty(Request $request, User $journalAdmin)
    {
        // dd($request->faculty_id);
        // $validatedData = $request->validate([
        //     'faculty_id' => 'exists:faculties,id',
        // ]);

        // dd($request);

        $validatedData = $request->validate([
            'faculty_id' => 'nullable|exists:faculties,id|required',
        ], [
                'faculty_id' => 'Please select a faculty for '.$journalAdmin->name . ' ('.$journalAdmin->email.')',
            ]);

        // if (!$validatedData) {
        //     return redirect()->back()->withErrors('Please select a faculty.');
        // }

        $faculty = Faculty::find($validatedData['faculty_id']);
        $journalAdmin->faculties()->sync([$faculty->id]);

        $journalAdmin->save();

        $journalAdmin->notify(new AssignJournalAdminToFacultyNotification($faculty->name, $journalAdmin->name));

        return redirect()->back();
    }

    public function removeJournalAdminFromFaculty(User $journalAdmin, Faculty $faculty)
    {
        // dd($journalAdmin->faculties);
        // dd($faculty);

        $journalAdmin->faculties()->detach();
        return redirect()->back()->with('success', 'Faculty removed from journal admin successfully.');
    }

}
