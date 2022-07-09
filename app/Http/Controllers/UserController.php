<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function create(){
        return view('register');
    }

    public function store(Request $request){
        $fields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed']
        ]);

        $fields['password'] = bcrypt($fields['password']);

        $user = (new \App\Models\User)->create($fields);

        auth()->login($user);
        return redirect('/')->with('message', 'You have successfully registered.');
    }

    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('message', 'You have successfully logged out.');
    }

    public function login(){
        return view('login');
    }

    public function loginNow(Request $request){
        $fields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        if(auth()->attempt($fields)){
            $request->session()->regenerate();
            return redirect('/')->with('message', 'You have successfully logged in.');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }
}
