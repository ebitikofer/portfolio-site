<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Class to contol the main pages that don't need thier own controller
class PagesController extends Controller
{
    
    // 'Home' page with my name and the links to get elsewhere
    public function index() {
        return view('index');
    }

    // 'Blog' page, will probably end up getting its own controller
    public function blog() {
        return view('pages.blog');
    }

    // 'About' page that give an in depth description of me and my life and talents and shit
    public function about() {
        return view('pages.about');
    }

}
