<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\HomePageContentResource;
use App\Models\AboutUsPageContent;

class AboutUsController extends Controller
{
    public function index(){
        return new HomePageContentResource(AboutUsPageContent::first());
    }
}
