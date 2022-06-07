<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            "title" => "Register"
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'username' => ['required', 'unique:users'],
            'email' => 'required|unique:users|email',
            'password' => 'required'
        ]);

        $data['password'] = bcrypt($data['password']);
        User::create($data);

        // $request->session()->flash('key', $value);

        return redirect('/register')->with('success', 'Registration Successfull!');
        
        
    }
}
