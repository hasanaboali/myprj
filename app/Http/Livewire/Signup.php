<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class Signup extends Component
{
    public $name;
    public $email;
    public $password;
    public $gender;

   

    public function signup()
    {
        $validatedData = $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|string|min:8',
            'gender' => 'required|in:male,female,other',
        ]);

        // Create a new user
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'gender' => $validatedData['gender'],
        ]);
    
        // Debugging
        dd($user); // Output the user to see if it's created successfully
    
        // Redirect to a thank you page or any other page
        return redirect()->route('login')
                         ->with('success',' created successfully.');
    }
}