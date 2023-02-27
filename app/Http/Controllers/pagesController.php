<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    // load all pages
    public function index() {
        return view('Pages.index', []);
    }
}
