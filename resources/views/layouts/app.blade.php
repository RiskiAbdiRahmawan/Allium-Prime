<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <title>Allium Prime</title>
    @vite(['resources/css/app.css','resources/js/app.js', 'resources/css/nucleo-icons.css','resources/css/nucleo-svg.css','resources/css/soft-ui-dashboard-tailwind.css', 'resources/js/soft-ui-dashboard-tailwind.js'])
</head>
<body class=" h-screen m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">
    <x-sidebar :username="$username" :role="$role" />  <!-- Komponen Sidebar -->
    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
        <x-header />
        @yield('content')
    </main>
</body>
</html>