<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Allium Prime</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <x-header></x-header>

    <div class="main-container">
        <x-sidebar :username="$username" :role="$role" />  <!-- Komponen Sidebar -->
        
        <div class="content">
            @yield('content')
        </div>
    </div>

    <x-footer />  <!-- Komponen Footer -->
</body>
</html>