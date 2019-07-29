<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('index');
    }
    public function blog() {
        return view('pages.blog');
    }
    public function about() {
        return view('pages.about');
    }
}
