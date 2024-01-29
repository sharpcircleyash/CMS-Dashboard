<?php

namespace App\Http\Controllers;

use App\Models\AboutUsPageContent;
use Illuminate\Http\Request;

class AboutUsPageContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.about-us-content.index');
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
    public function show(AboutUsPageContent $aboutUsPageContent)
    {
        return false;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AboutUsPageContent $aboutUsPageContent)
    {
        return false;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AboutUsPageContent $aboutUsPageContent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AboutUsPageContent $aboutUsPageContent)
    {
        //
    }
}
