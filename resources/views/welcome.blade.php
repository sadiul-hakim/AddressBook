<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body>
    <header class="bg-gray-900 p-6">
        <div class="container flex justify-between mx-auto">
            <div class="text-white">
                <a href="#">LOGO</a>
            </div>
            <nav class=" text-white">
                @auth

                    <a href="{{ url('/address') }}" class="p-2 bg-white text-black rounded-sm mx-2">
                        Address
                    </a>
                @else
                    @if (Route::has('login'))
                        <a href="{{ route('login') }}" class="p-2 bg-white text-black rounded-sm mx-2">
                            Log in
                        </a>
                    @endif
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="p-2 bg-white text-black rounded-sm mx-2">
                            Register
                        </a>
                    @endif

                @endauth
            </nav>
        </div>
    </header>


    <main class="container mx-auto bg-gray-300 p-5 flex items-center justify-center">
        <div class="flex flex-col items-center">
            <h1 class="text-3xl mb-4">Address Book</h1>
            <a href="/address" class="p-2 bg-white text-black rounded-sm hover:bg-gray-400 hover:text-white">
                Let's Get Started
            </a>
        </div>
    </main>

</body>

</html>
