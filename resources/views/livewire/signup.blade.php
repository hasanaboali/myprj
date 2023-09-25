@extends('livewire.layout')  
@section('content')
<div>
    <h2>Signup Form</h2>

    <div>
        <h2>Signup Form</h2>
    
        <form action="{{ route('signup') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
            <button type="submit">Sign Up</button>
        </form>
        @if(session()->has('error'))
    <div class="error">{{ session('error') }}</div>
@endif
    </div>

<div >
    <a class="btn btn-primary" href="{{ route('loginn') }}"> Back</a>
</div>
@endsection