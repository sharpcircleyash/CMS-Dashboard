<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.profile');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function passwordUpdate(Request $request)
    {
        $request->validate([
            'old_password' => ['required','current_password'],
            'new_password' => ['required','confirmed'],
        ],[
            "old_password.current_password" => "The old password field does not match with the current password !",
        ]);
        $new_pwd = Hash::make($request->new_password);
        auth()->user()->update([
            "password" => $new_pwd
        ]);
        return redirect()->back()->withSuccess('Password has been changed successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'password' => ['required','current_password'],
            'name' => ['required','min:3'],
        ]);
        auth()->user()->update([
            "name" => $request->name
        ]);
        return redirect()->back()->withSuccess('Profile has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
