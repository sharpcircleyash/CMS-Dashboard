<?php

namespace App\Http\Controllers;

use App\Models\HomePageContent;
use Illuminate\Http\Request;

class HomePageContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $homeContent = HomePageContent::find(1);
        return view('pages.home-page-content.index', compact('homeContent'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return false;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(HomePageContent $homePageContent)
    {
        return false;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HomePageContent $homePageContent)
    {
        return false;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HomePageContent $homePageContent)
    {
        // $request->validate([
        //     'title' => ['required'],
        //     'description' => ['required','min:3'],
        // ]);

        $homeContent = HomePageContent::find($request->home_content);
        $homeContent->title = $request->input('title');
        $homeContent->description = $request->input('description');
        $homeContent->save();

        return redirect()->back()->withSuccess('Home Page Content has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HomePageContent $homePageContent)
    {
        //
    }
}
