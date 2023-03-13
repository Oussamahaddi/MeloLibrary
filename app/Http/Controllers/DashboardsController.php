<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardsController extends Controller
{
    public function index() {
        return view('Dash.statistique');
    }
    public function music() {
        return view('Dash.musics');
    }
    public function artist() {
        return view('Dash.artist');
    }
}
