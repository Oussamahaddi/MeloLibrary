<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtistController extends Controller
{
    // load home page
    public function index() {
        return view('Pages.index', []);
    }
}
