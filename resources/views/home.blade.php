<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        html {
            scroll-behavior: smooth;
        }

    </style>

    <title>Chin | Home Page</title>
</head>
<body class="bg-white">

    <!-- Navbar -->
    <div class="navbar bg-base-100">
        <div class="flex-1 ml-10">
            <img src="{{ asset('images/chin-logo.png') }}" alt="Chin Logo" class="w-35">
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1 text-xl mr-10 gap-x-4">
                <li>
                    <a href="{{url("http://localhost:8000/")}}" class="transition duration-300 hover:bg-red-600 hover:text-white rounded-lg px-6 py-2">Home</a>
                </li>
                <li>
                    <a href="{{url("http://localhost:8000/about")}}" class="transition duration-300 hover:bg-red-600 hover:text-white rounded-lg px-6 py-2">About</a>
                </li>
                <li>
                    <a href="{{url("http://localhost:8000/gallery")}}" class="transition duration-300 hover:bg-red-600 hover:text-white rounded-lg px-6 py-2">Gallery</a>
                </li>
            </ul>
        </div>
    </div>
    <div>
        <div class="ml-20 mb-20 min-h-screen bg-cover bg-center flex items-center" style="background-image: url('{{ asset('images/home-bg.png') }}');">
            <a href="#laraveldef" class="mt-40 ml-50 text-2xl bg-orange-600 text-white hover:bg-black hover:text-white px-4 py-2 rounded-xl transition duration-300">
                Get Started
            </a>
        </div>
        <div class="mt-15 mb-20 min-h-screen bg-cover bg-center flex items-center justify-center text-center" style="background-image: url('{{ asset('images/laravel-pic.png') }}');">

            <div id="laraveldef" class=" p-8 rounded-lg max-w-4xl text-white">
                <h1 class="mb-5 text-7xl font-bold">Getting to know Laravel</h1>
                <p class="mb-5 mt-10 text-2xl text-justify">
                    Laravel is a modern PHP framework designed to make web development more efficient, organized, and enjoyable.
                    It follows the MVC (Model-View-Controller) architectural pattern, which separates logic, design, and data management,
                    making your code cleaner and easier to maintain.
                    With its elegant syntax, built-in tools for routing, authentication, and database management,
                    Laravel allows developers to build robust web applications quickly while maintaining clean, readable code.
                </p>
                <div class="mt-10">
                    <a href="#setup-steps" class="text-2xl border border-white text-white hover:bg-red-600 hover:border-red-600 hover:text-white px-4 py-2 rounded-xl transition duration-300">
                        Setting up Laravel
                    </a>
                </div>
            </div>

        </div>

        <div class="ml-20 mb-10 font-bold text-4xl" id="setup-steps">
            <h2>How to set up:</h2>
        </div>

        <div class="grid grid-cols-2 gap-8 px-20 pb-20">

            <!-- Step 1 -->
            <div class="relative group border border-orange-600 bg-white rounded-xl shadow-lg p-10 text-center cursor-pointer transition duration-300 hover:bg-pink-600 hover:text-white">
                <h2 class="text-3xl font-bold">Step 1</h2>
                <div class="absolute inset-0 flex items-center justify-center text-center opacity-0 group-hover:opacity-100 transition duration-300 bg-orange-600 text-white rounded-xl p-6">
                    <p class="text-lg">Install PHP (≥8.1), Composer, and a database like MySQL or MariaDB.</p>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="relative group border border-orange-600 bg-white rounded-xl shadow-lg p-10 text-center cursor-pointer transition duration-300 hover:bg-pink-600 hover:text-white">
                <h2 class="text-3xl font-bold">Step 2</h2>
                <div class="absolute inset-0 flex items-center justify-center text-center opacity-0 group-hover:opacity-100 transition duration-300 bg-orange-600 text-white rounded-xl p-6">
                    <p class="text-lg">Run: composer create-project --prefer-dist laravel/laravel myproject</p>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="relative group border border-orange-600 bg-white rounded-xl shadow-lg p-10 text-center cursor-pointer transition duration-300 hover:bg-pink-600 hover:text-white">
                <h2 class="text-3xl font-bold">Step 3</h2>
                <div class="absolute inset-0 flex items-center justify-center text-center opacity-0 group-hover:opacity-100 transition duration-300 bg-orange-600 text-white rounded-xl p-6">
                    <p class="text-lg">Go to your project folder: cd myproject</p>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="relative group border border-orange-600 bg-white rounded-xl shadow-lg p-10 text-center cursor-pointer transition duration-300 hover:bg-pink-600 hover:text-white">
                <h2 class="text-3xl font-bold">Step 4</h2>
                <div class="absolute inset-0 flex items-center justify-center text-center opacity-0 group-hover:opacity-100 transition duration-300 bg-orange-600 text-white rounded-xl p-6">
                    <p class="text-lg">Copy env file: copy .env.example .env</p>
                </div>
            </div>

            <!-- Step 5 -->
            <div class="relative group border border-orange-600 bg-white rounded-xl shadow-lg p-10 text-center cursor-pointer transition duration-300 hover:bg-pink-600 hover:text-white">
                <h2 class="text-3xl font-bold">Step 5</h2>
                <div class="absolute inset-0 flex items-center justify-center text-center opacity-0 group-hover:opacity-100 transition duration-300 bg-orange-600 text-white rounded-xl p-6">
                    <p class="text-lg">Generate app key: php artisan key:generate</p>
                </div>
            </div>

            <!-- Step 6 -->
            <div class="relative group  border border-orange-600 bg-white rounded-xl shadow-lg p-10 text-center cursor-pointer transition duration-300 hover:bg-pink-600 hover:text-white">
                <h2 class="text-3xl font-bold">Step 6</h2>
                <div class="absolute inset-0 flex items-center justify-center text-center opacity-0 group-hover:opacity-100 transition duration-300 bg-orange-600 text-white rounded-xl p-6">
                    <p class="text-lg">Edit .env file and set DB name, username, and password.</p>
                </div>
            </div>

            <!-- Step 7 -->
            <div class="relative group border border-orange-600 bg-white rounded-xl shadow-lg p-10 text-center cursor-pointer transition duration-300 hover:bg-pink-600 hover:text-white">
                <h2 class="text-3xl font-bold">Step 7</h2>
                <div class="absolute inset-0 flex items-center justify-center text-center opacity-0 group-hover:opacity-100 transition duration-300 bg-orange-600 text-white rounded-xl p-6">
                    <p class="text-lg">Run migrations: php artisan migrate</p>
                </div>
            </div>

            <!-- Step 8 -->
            <div class="relative group border border-orange-600 bg-white rounded-xl shadow-lg p-10 text-center cursor-pointer transition duration-300 hover:bg-pink-600 hover:text-white">
                <h2 class="text-3xl font-bold">Step 8</h2>
                <div class="absolute inset-0 flex items-center justify-center text-center opacity-0 group-hover:opacity-100 transition duration-300 bg-orange-600 text-white rounded-xl p-6">
                    <p class="text-lg">Start the local server: php artisan serve</p>
                </div>
            </div>

            <!-- Step 9 -->
            <div class="relative group border border-orange-600 bg-white rounded-xl shadow-lg p-10 text-center cursor-pointer transition duration-300 hover:bg-pink-600 hover:text-white">
                <h2 class="text-3xl font-bold">Step 9</h2>
                <div class="absolute inset-0 flex items-center justify-center text-center opacity-0 group-hover:opacity-100 transition duration-300 bg-orange-600 text-white rounded-xl p-6">
                    <p class="text-lg">Open browser: http://127.0.0.1:8000</p>
                </div>
            </div>

            <!-- Step 10 -->
            <div class="relative group border border-orange-600 bg-white rounded-xl shadow-lg p-10 text-center cursor-pointer transition duration-300 hover:bg-pink-600 hover:text-white">
                <h2 class="text-3xl font-bold">Step 10</h2>
                <div class="absolute inset-0 flex items-center justify-center text-center opacity-0 group-hover:opacity-100 transition duration-300 bg-orange-600 text-white rounded-xl p-6">
                    <p class="text-lg">Use artisan commands: make:controller, make:model, route:list</p>
                </div>
            </div>

        </div>
</body>
</html>
