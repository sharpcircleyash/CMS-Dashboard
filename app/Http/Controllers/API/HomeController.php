<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\HomePageContentResource;
use App\Models\HomePageContent;

class HomeController extends Controller
{
    public function index(){
        return new HomePageContentResource(HomePageContent::first());
    }
}
