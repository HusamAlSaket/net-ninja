<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Network</title>
    @vite('resources/css/app.css')
</head>
<body>
<header class="bg-white">
        <nav class="flex items-center gap-5 max-w-screen-lg px-12 py-4 mx-auto">
            <h1 class="text-2xl font-bold text-red-500 mr-auto">Ninja Network</h1>
            <a href="{{route('ninjas.index')}}" class="text-red-500 hover:text-red-700">All Ninjas</a>
            <a href="{{route('ninjas.create')}}" class="text-red-500 hover:text-red-700">Create New Ninja</a>
        </nav>
    </header>
    <main class ="container">
    {{ $slot }}
    </main>
</body>
</html>