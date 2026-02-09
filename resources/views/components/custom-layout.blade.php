<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body>
    <header class="bg-gray-700 p-5 text-white">
        <div class="container flex justify-between items-center mx-auto">
            <a href="/address" class="text-2xl">AddressBook</a>
            <nav>
                <ul>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <input type="submit" value="Logout" class="cursor-pointer">
                        </form>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    {{-- Navbar --}}
    {{ $slot }}
</body>

</html>
