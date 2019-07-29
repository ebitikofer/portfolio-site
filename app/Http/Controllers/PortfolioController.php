<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index() {
        return view('pages.portfolio');
    }

    public function create() {
        return view('pages.createProject');
    }

    public function store(Request $request) {
        return;
    }
}
