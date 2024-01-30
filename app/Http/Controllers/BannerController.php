<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bannerContent = Banner::first();
        return view('pages.banner.index', compact('bannerContent'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.banner.create');
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
    public function show(Banner $banner)
    {
        return false;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner)
    {
        return view('pages.banner.edit', ['banner' => $banner]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banner $banner)
    {
        $image = $request->file('file');

        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('images'), $imageName);

        $bannerContent = Banner::find(1);
        $bannerContent->src = $imageName;
        $bannerContent->save();

        $bannerContent = Banner::first();
        return view('pages.banner.index', compact('bannerContent'))->withSuccess('Banner has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        //
    }
}
