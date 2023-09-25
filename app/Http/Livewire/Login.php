<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.login');
    }

    public function authenticate()
{
    $credentials = $this->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::attempt($credentials)) {
        // Authentication passed
        return redirect()->route('products.index');
    }

    // Authentication failed
    $this->addError('email', 'Invalid credentials.');
}
}