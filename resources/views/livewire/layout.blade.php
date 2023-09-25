<!DOCTYPE html>
<html>
<head>
    <script src="{{ asset('livewire/livewire.js') }}"></script>
    
<link rel="stylesheet" href="{{ asset('livewire/livewire.css') }}">

    
    <title>first test</title>
</head>
@livewireScripts
@livewireStyles
<body>
 @livewireStyles 
 
    
<div class="container">
    @yield('content')
</div>

</body>
</html>