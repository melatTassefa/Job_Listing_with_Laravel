<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trial</title>
    @vite('resources/css/app.css')
    <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
</head>
<body>

    @vite('resources/js/app.js')
    <!-- resources/views/layouts/navbar.blade.php -->

<nav class="bg-white shadow-lg">
    <div class="container mx-auto px-4">
        <div class="flex justify-between">
            <!-- Logo -->
            <div class="flex space-x-4">
                <a href="#" class="flex items-center py-5 px-2 text-gray-700">
                    <img src="resources/images/logo.jpg" alt="Logo" class="h-8 w-8 mr-2">
                    <span class="font-bold text-lg">Job FInder</span>
                </a>
            </div>

            <!-- Primary Nav -->
            <div class="hidden md:flex items-center space-x-1">
                <a href="/" class="py-5 px-3 text-gray-700 hover:text-gray-900">Home</a>
                <a href="#" class="py-5 px-3 text-gray-700 hover:text-gray-900">Find a Jobs</a>
                <a href="#" class="py-5 px-3 text-gray-700 hover:text-gray-900">About</a>
                <a href="#" class="py-5 px-3 text-gray-700 hover:text-gray-900">Page</a>
                <a href="#" class="py-5 px-3 text-gray-700 hover:text-gray-900">Contact</a>
            </div>

            <!-- Secondary Nav -->
            <div class="hidden md:flex items-center space-x-1">
                <a href="{{ route('register') }}" class="py-2 px-3 bg-pink-500 text-white rounded hover:bg-pink-700">Register</a>
                <a href="{{route('login')}}" class="py-2 px-3 border border-pink-500 text-pink-500 rounded hover:bg-pink-500 hover:text-white">Login</a>
                <a href="{{ route('logout') }}" class="py-2 px-3 border border-pink-500 text-pink-500 rounded hover:bg-pink-500 hover:text-white">Logout</a>
            </div>

            <!-- Mobile Button -->
            <div class="md:hidden flex items-center">
                <button class="mobile-menu-button">
                    <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="mobile-menu hidden md:hidden">
        <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-200">Home</a>
        <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-200">Find a Jobs</a>
        <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-200">About</a>
        <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-200">Page</a>
        <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-200">Contact</a>
        <a href="#" class="block py-2 px-4 text-sm bg-pink-500 text-white rounded hover:bg-pink-700">Register</a>
        <a href="#" class="block py-2 px-4 text-sm border border-pink-500 text-pink-500 rounded hover:bg-pink-500 hover:text-white">Login</a>
    </div>
</nav>
@yield('content');

<script>
    const btn = document.querySelector('button.mobile-menu-button');
    const menu = document.querySelector('.mobile-menu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>



{{-- @yield('content') --}}
</body>
</html>
