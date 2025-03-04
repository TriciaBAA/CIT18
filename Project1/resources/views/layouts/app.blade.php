<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'My Laravel App' }}</title>

    <!-- Tailwind CSS -->
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-100 text-gray-900">

    <!-- Navbar -->
    <nav class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold">{{  'Welcome' }}</h1>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container mx-auto p-6">
        @yield('content')
    </main>

</body>
</html>
