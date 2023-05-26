<?php

namespace App\Http\Controllers\UserAndRoleManagement;

use App\Http\Controllers\Controller;
use App\Models\CreateUser;
use App\Models\User;
use App\Notifications\AccountCreatedNotification;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Hash;


class CreateUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (auth()->user()->hasRole('superAdmin')) {

            $validatedData = $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'role' => 'required|array|min:1',
                'role.*' => 'required|string|in:superAdmin,journalAdmin,editor,subEditor,reviewer,author',
            ], [
                    'role.required' => 'Please select at least one role.',
                    'role.in' => 'Invalid role selected.',
                ]);

            $user = User::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'password' => Hash::make("password"),
            ])->assignRole($validatedData['role']);

            $user->notify(new AccountCreatedNotification($validatedData['role'], 'email', 'password'));

            // $user->assignRole($validatedData['role']);

            return redirect()->route('createUserIndex')->with('success', 'User created successfully.');
        }


        else if (auth()->user()->hasRole('journalAdmin')) {


            $validatedData = $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'role' => 'required|array|min:1',
                'role.*' => 'required|string|in:journalAdmin,editor,subEditor,reviewer,author',
            ], [
                    'role.required' => 'Please select at least one role.',
                    'role.in' => 'Invalid role selected.',
                ]);


            if (in_array('superAdmin', $validatedData['role'])) {
                return redirect()->back()->withInput()->withErrors(['role' => 'You are not authorized to create a user with Super Admin role.']);
            }

            $user = User::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'password' => Hash::make("password"),
            ]);


            $user->assignRole($validatedData['role']);


            return redirect()->route('createUserIndex')->with('success', 'User created successfully.');
        } else {
            return redirect()->back()->withInput()->withErrors(['role' => 'You are not authorized to create a user.']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(CreateUser $createUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CreateUser $createUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CreateUser $createUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CreateUser $createUser)
    {
        //
    }
}
