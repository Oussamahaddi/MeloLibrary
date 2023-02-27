<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ClientController extends Controller
{
    // show register form
    public function create() {
        return view('users.register');
    }

    // show login form
    // public function login() {
    //     return view('users.login');
    // }

    // store register data
    public function store(Request $request) {
        // dd($request->all());
        $formField = $request->validate([
            'fullname' => 'required',
            'email' => ['required', 'email'],
            'password' => ['required', Rule::unique('client', 'password')],
            'date' => 'required'
        ]);

        return redirect('/');
    }
}
