<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Chin | About</title>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar bg-base-100">
        <div class="flex-1 ml-10">
            <img src="{{ asset('images/chin-logo.png') }}" alt="Chin Logo" class="w-35">
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1 text-xl  gap-x-4">
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

    <div class="intro bg-gray-200 flex flex-col md:flex-row items-center justify-between h-auto w-fit">
        <div class="formal pic ml-20 w-2/3">
            <img src="{{ asset('images/formal-pic.png') }}" alt="About Me bg" class="h-80">
        </div>

        <div class="info mt-10 mr-20">
            <h1 class="text-5xl font-bold">Marcin A. Pascua</h1>
            <div class="flex items-end gap-3">
                <h2 class="text-xl italic text-gray-500">21 years old</h2><i class="fa-solid fa-venus text-pink-600 text-2xl"></i>
            </div>

            <p class="text-xl italic text-gray-500">November 1, 2004</P>
            <p class="text-2xl text-justify mt-10 mb-5">I’m a frontend-focused web development student at the University of Cebu – Lapu-Lapu and Mandaue, pursuing a Bachelor’s in Information Technology. I love designing clean, responsive, and user-friendly interfaces that blend functionality with a touch of charm.</p>
            <hr>
            <div class="skills flex flex-row items-center gap-10 mt-5">
                <div class="mb-5">
                    <p class="text-xl font-bold">Programming Languages</p>
                    <img src="https://skillicons.dev/icons?i=c,cs,java" />
                </div>
                <div class=" mb-5">
                    <p class="text-xl font-bold">Frontend Development</p>
                    <img src="https://skillicons.dev/icons?i=html,css,javascript,figma,tailwind" class="text-lg" />
                </div>
            </div>

            <div class="skills flex flex-row items-center gap-10 mt-5 mb-10">
                <div class="mb-5">
                    <p class="text-xl font-bold">Backend Development</p>
                    <img src="https://skillicons.dev/icons?i=php,laravel" />
                </div>
                <div class=" mb-5">
                    <p class="text-xl font-bold">Accounts</p>
                    <a href="https://github.com/marcinpascua" target="_blank">
                        <i class="fa-brands fa-github text-5xl"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/marcinpascua/" target="_blank">
                        <i class="fa-brands fa-linkedin text-blue-800 text-5xl"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-center mb-20 mt-20">
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

    <div id="education" class="flex flex-col md:flex row items-center justify-center ">
        <div class="border border-black w-auto h-auto rounded-3xl">
            <p class="text-5xl font-bold text-gray-500 flex justify-center mt-10">Education</p>
            <div class="school1 m-10">
                <div class="flex justify-between items-center">
                    <div class="flex items-center gap-6">
                        <img src="{{ asset('images/uc-logo.png') }}" alt="uclm-pic" class="w-40 h-40">
                        <div>
                            <p class="font-bold text-2xl leading-tight">
                                University of Cebu Lapu - Lapu and Mandaue
                            </p>
                            <p class="text-xl text-gray-600 leading-tight">
                                Bachelor of Science in Information Technology
                            </p>
                        </div>
                    </div>
                    <p class="italic text-gray-500 text-xl">2023-2027</p>
                </div>
            </div>

            <div class="school2 m-10">
                <div class="flex justify-between items-center">
                    <div class="flex items-center gap-6">
                        <img src="{{ asset('images/monhs-logo.png') }}" alt="uclm-pic" class="w-40 h-40">
                        <div>
                            <p class="font-bold text-2xl leading-tight">
                                Misamis Occidental National High School
                            </p>
                            <p class="text-xl text-gray-600 leading-tight">
                                Accountancy, Business and Management
                            </p>
                            <p class="text-xl text-gray-600 leading-tight">
                                With High Honors
                            </p>
                        </div>
                    </div>
                    <p class="italic text-gray-500 text-xl">2021-2023</p>
                </div>
            </div>

            <div class="school3 m-10">
                <div class="flex justify-between items-center">
                    <div class="flex items-center gap-6">
                        <img src="{{ asset('images/cnchs-logo.png') }}" alt="uclm-pic" class="w-40 h-40">
                        <div>
                            <p class="font-bold text-2xl leading-tight">
                                Calamba National Comprehensive High School
                            </p>
                            <p class="text-xl text-gray-600 leading-tight">
                                Special Program in Journalism
                            </p>
                            <p class="text-xl text-gray-600 leading-tight">
                                With High Honors
                            </p>
                        </div>
                    </div>
                    <p class="italic text-gray-500 text-xl ml-30">2017-2021</p>
                </div>
            </div>

            <div class="school4 m-10">
                <div class="flex justify-between items-center">
                    <div class="flex items-center gap-6">
                        <img src="{{ asset('images/ccs-logo.png') }}" alt="uclm-pic" class="w-40 h-40">
                        <div>
                            <p class="font-bold text-2xl leading-tight">
                                Calamba Central School
                            </p>
                            <p class="text-xl text-gray-600 leading-tight">
                                With High Honors
                            </p>
                        </div>
                    </div>
                    <p class="italic text-gray-500 text-xl ml-30">2011-2017</p>
                </div>
            </div>
        </div>

        <div id="achievement" class="achievement ml-30 mr-30">
            <img src="{{ asset('images/award1.png') }}" alt="award-1" class="block mx-auto h-135 mb-5 float-left">
            <img src="{{ asset('images/award2.png') }}" alt="award-2" class="block mx-auto h-100 mb-5 float-right">
            <img src="{{ asset('images/award3.png') }}" alt="award-3" class="block mx-auto h-100 mb-5 float-left">
        </div>
</body>
</html>
