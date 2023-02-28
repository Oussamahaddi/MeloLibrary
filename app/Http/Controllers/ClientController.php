<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ClientController extends Controller
{
    // show register form
    public function create() {
        return view('users.register');
    }

    // store register data
    public function store(Request $request) {
        // dd($request->all());
        $formField = $request->validate([
            'name' => ['required', 'min:4'],
            'email' => ['required', 'email' , Rule::unique('clients', 'email')],
            'password' => ['required', 'min:6'],
            'age' => 'required',
        ]);

        // hash password
        $formField['password'] = bcrypt($formField['password']);

        // create user 
        $user = Client::create($formField);

        // login
        auth()->login($user);

        return redirect('/')->with('message', 'Register Succefully and logged in');
    }


    // show login form
    public function login() {
        return view('users.login');
    }

    public function authentification(Request $request) {
        // dd($request->all());
        $formField = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6']
        ]);
        // dd(auth()->attempt($formField));

        if (auth()->attempt($formField)) {
            $request->session()->regenerate();
            return redirect('/')->with('message', 'you are now logged in');
        }

        return back()->withErrors(['email' => 'invalid email'])->onlyInput('email');
    }

}
