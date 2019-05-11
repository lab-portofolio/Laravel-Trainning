<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicWebsiteController extends Controller
{
    
    // Index
    public function index() {
        return view('basic-website.index');
    }
    // About
    public function about() {
        return view('basic-website.about');
    }
    // Services
    public function services() {
        return view('basic-website.services');
    }

}
