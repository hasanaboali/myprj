@extends('livewire.layout')
     
@section('content')
<div>
    <h2>Login Form</h2>

    <form wire:submit.prevent="authenticate">
        @csrf
        <input type="email" wire:model="email" placeholder="Email" required>
        <input type="password" wire:model="password" placeholder="Password" required>
        <button wire:click="authenticate" type="submit" >Login</button>
    </form>
</div>
<div >
    <a class="btn btn-primary" href="{{ route('signupp') }}"> create new acount</a>
</div>
<div >
    <a class="btn btn-primary" href="{{ route('products.index') }}"> to the list</a>
</div>

@endsection