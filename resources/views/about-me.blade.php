<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Chin | About</title>
</head>
<body>
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


    <img src="{{ asset('images/about-bg.png') }}" alt="About Me bg" class="block mx-auto h-135 mb-5">
    <div class="flex justify-center mb-30">
        <ul class="menu menu-horizontal px-1 text-xl flex gap-x-4">
            <li>
                <a href="#education" class="transition duration-300 hover:underline decoration-2 hover:decoration-orange-600 bg-transparent">
                    Education
                </a>
            </li>
            <li>
                <a href="#achievement" class="transition duration-300 hover:underline decoration-2 hover:decoration-orange-600 bg-transparent">
                    Achievement
                </a>
            </li>
        </ul>
    </div>

    <div id="education" class="education bg-gray flex flex-col items-center">
        <img src="{{ asset('images/education.png') }}" alt="education image" class="h-135 mb-5">
    </div>

    <div id="achievement" class="achievement ml-30 mr-30">
        <img src="{{ asset('images/award1.png') }}" alt="award-1" class="block mx-auto h-135 mb-5 float-left">
        <img src="{{ asset('images/award2.png') }}" alt="award-2" class="block mx-auto h-100 mb-5 float-right">
        <img src="{{ asset('images/award3.png') }}" alt="award-3" class="block mx-auto h-100 mb-5 float-left">
    </div>
</body>
</html>
