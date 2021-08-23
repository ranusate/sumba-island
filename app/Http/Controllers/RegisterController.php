<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    /**
     *
     * To load form register
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
        ]);
    }

    /**
     *
     * To proses store the user register.
     *
     * @param Request $request To store the request users
     * @return Application|RedirectResponse|Redirector
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|min:3|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email|min:3|max:255|unique:users',
            'password' => 'required|min:3|max:255',
        ]);
        if (isset($request->password)) {
            $validateData['password'] = Hash::make($request->password);
        }
        $request->session()->flash('success', 'Register successful! Please login');
        User::create($validateData);
        return redirect('/auth');
    }
}
