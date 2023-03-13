<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardsController extends Controller
{
    public function index() {
        return view('Dash.statistique');
    }
    public function music() {
        $musics = DB::table('music')->get() ;
        return view('Dash.musics', [
            'musics' => $musics
        ]);
    }
    public function artist() {
        return view('Dash.artist');
    }
}
