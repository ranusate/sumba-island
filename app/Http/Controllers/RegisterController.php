<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function indexs()
    {
        return view('login.index', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function store(Request $request)
    {
        $validateData =  $request->validate([
            'name' => 'required|min:3|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:rfc,dns|min:3|max:255|unique:users',
            'password' => 'required|min:3|max:255',
        ]);
        $validateData['password'] = Hash::make($request->username);
        $request->session()->flash('success', 'Register successfull! Please login');
        User::create($validateData);
        return redirect('/logins');
    }
}
