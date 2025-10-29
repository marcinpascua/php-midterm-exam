<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Chin | Gallery</title>
</head>
<body class="bg-gray-100">
    <!-- Navbar -->
    <div class="navbar bg-base-100 shadow-md">
        <div class="flex-1 ml-10">
            <img src="{{ asset('images/chin-logo.png') }}" alt="Chin Logo" class="w-35">
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1 text-xl gap-x-4">
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

    <div class=" mb-10 h-150 bg-cover bg-center flex items-center shadow-md" style="background-image: url('{{ asset('images/gallery-bg.png') }}');">
        <div class="carousel carousel-center bg-black rounded-box max-w-md space-x-4 p-4 float-right ml-250">
            <div class="carousel-item">
                <img class="w-full h-100 object-cover rounded-lg" src="{{asset('images/pic14.jpg')}}" alt="marcin-pic-14" class="rounded-box" />
            </div>
            <div class="carousel-item">
                <img class="w-full h-100 object-cover rounded-lg" src="{{asset('images/pic13.jpg')}}" alt="marcin-pic-13" class="rounded-box" />
            </div>
            <div class="carousel-item">
                <img class="w-full h-100 object-cover rounded-lg" src="{{asset('images/pic10.jpg')}}" alt="marcin-pic-10" class="rounded-box" />
            </div>
            <div class="carousel-item">
                <img class="w-full h-100 object-cover rounded-lg" src="{{asset('images/pic12.jpg')}}" alt="marcin-pic-12" class="rounded-box" />
            </div>
            <div class="carousel-item">
                <img class="w-full h-100 object-cover rounded-lg" src="{{asset('images/pic11.jpg')}}" alt="marcin-pic-11" class="rounded-box" />
            </div>
            <div class="carousel-item">
                <img class="w-full h-100 object-cover rounded-lg" src="{{asset('images/pic9.jpg')}}" alt="marcin-pic-9" class="rounded-box" />
            </div>
            <div class="carousel-item">
                <img class="w-full h-100 object-cover rounded-lg" src="{{asset('images/pic8.jpg')}}" alt="marcin-pic-8" class="rounded-box" />
            </div>
        </div>
    </div>

    <div id="photos" class="mb-20container mx-auto px-4 pb-20">
        <div class="text-center mb-10">
            <h1 class="text-2xl font-bold">GALLERY</h1>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 ml-30 mr-30">
            <div>
                <img class="w-full h-100 object-cover rounded-lg" src="{{asset('images/pic1.jpg')}}" alt="marcin-pic-1">
            </div>
            <div>
                <img class="w-full h-100 object-cover rounded-lg" src="{{asset('images/pic2.jpg')}}" alt="marcin-pic-2">
            </div>
            <div>
                <img class="w-full h-100 object-cover rounded-lg" src="{{asset('images/pic3.jpg')}}" alt="marcin-pic-3">
            </div>
            <div>
                <img class="w-full h-100 object-cover rounded-lg" src="{{asset('images/pic4.jpg')}}" alt="marcin-pic-4">
            </div>
            <div>
                <img class="w-full h-100 object-cover rounded-lg" src="{{asset('images/pic5.jpg')}}" alt="marcin-pic-5">
            </div>
            <div>
                <img class="w-full h-100 object-cover rounded-lg" src="{{asset('images/pic6.jpg')}}" alt="marcin-pic-6">
            </div>
            <div>
                <img class="w-full h-100 object-cover rounded-lg" src="{{asset('images/pic7.jpg')}}" alt="marcin-pic-7">
            </div>
            <div>
                <img class="w-full h-100 object-cover rounded-lg" src="{{asset('images/pic8.jpg')}}" alt="marcin-pic-8">
            </div>
            <div>
                <img class="w-full h-100 object-cover rounded-lg" src="{{asset('images/pic9.jpg')}}" alt="marcin-pic-9">
            </div>
            <div>
                <img class="w-full h-100 object-cover rounded-lg" src="{{asset('images/pic10.jpg')}}" alt="marcin-pic-10">
            </div>
            <div>
                <img class="w-full h-100 object-cover rounded-lg" src="{{asset('images/pic11.jpg')}}" alt="marcin-pic-11">
            </div>
            <div>
                <img class="w-full h-100 object-cover rounded-lg" src="{{asset('images/pic12.jpg')}}" alt="marcin-pic-12">
            </div>
            <div>
                <img class="w-full h-100 object-cover rounded-lg" src="{{asset('images/pic13.jpg')}}" alt="marcin-pic-13">
            </div>
            <div>
                <img class="w-full h-100 object-cover rounded-lg" src="{{asset('images/pic14.jpg')}}" alt="marcin-pic-14">
            </div>
            <div>
                <img class="w-full h-100 object-cover rounded-lg" src="{{asset('images/pic15.jpg')}}" alt="marcin-pic-15">
            </div>
        </div>
    </div>
</body>
</html>
