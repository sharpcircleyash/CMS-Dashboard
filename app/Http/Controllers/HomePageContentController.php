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
        return view('pages.home-page-content.index');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HomePageContent $homePageContent)
    {
        //
    }
}
