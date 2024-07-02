<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    // index page 
    public function index() {
        return view('frontend.index');
    }


    // vendre page 
    public function vendre() {
        return view('frontend.vendre');
    }
}
