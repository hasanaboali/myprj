<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Hash;



class usercontroller extends Controller
{
    public function signup(Request $request)
{
    // Validate the request
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|unique:users|max:255',
        'password' => 'required|string|min:8',
        'gender' => 'required|in:male,female,other',
    ]);

    // Create a new user
    User::create([
        'name' => $validatedData['name'],
        'email' => $validatedData['email'],
        'password' => Hash::make($validatedData['password']),
        'gender' => $validatedData['gender'],
    ]);

    return redirect()->route('signup')->with('success', 'User created successfully.');
}
}
