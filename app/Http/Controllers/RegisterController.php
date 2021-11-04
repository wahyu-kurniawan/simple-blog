<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:5|',
            'username' => 'required|min:3|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required'
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData)->with('success', 'Successfully Register, Please Login now');
        return redirect('/login');
    }
}
