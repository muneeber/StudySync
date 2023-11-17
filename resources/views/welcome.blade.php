<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}


    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.0.7/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Laravel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

</head>

<body class="antialiased">
    <div
        class="relative sm:hidden  sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center  bg-dots-lighter bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="font-semibold   text-gray-400 hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}"
                        class="font-semibold  text-gray-400 hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                        in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 font-semibold text-gray-400 hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif
        <div class="  overflow-hidden max-w-[200px] flex flex-col h-[400px] mx-auto  items-center justify-center">
            <div class="mb-40">
                <h1 class="text-2xl font-bold text-center text-white">Welcome To Study Sync</h1>
            </div>
            <div class="flex w-full  justify-around ">
                <div class="">

                    <a href="{{ route('login') }}"> <button class="btn-primary btn">Login</button></a>
                </div>
                <div class="">

                    <a href="{{ route('register') }}"> <button class="btn-secondry btn">Register</button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-slate-200">
        <div class="alert alert-warning hidden sm:flex w-1/2 mx-auto">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
            </svg>
            <span>Warning: Use this only for Mobile please or open mobile view in dev tools</span>
        </div>
    </div>
    <div class=" justify-center hidden sm:flex items-center h-screen bg-slate-200 w-screen">
        <div class="mockup-phone ">
            <div class="camera"></div>
            <div class="display">
                <div class="artboard bg-gray-900 text-white flex flex-col items-center justify-center  phone-1">
                    <div class=" mb-16">
                        <h1 class="text-2xl font-bold text-center text-white">Welcome To<br> Study Sync</h1>
                    </div>
                    <div class="flex w-full  justify-around ">
                        <div class="">

                            <a href="{{ route('login') }}"> <button class="btn-primary btn">Login</button></a>
                        </div>
                        <div class="">

                            <a href="{{ route('register') }}"> <button class="btn-secondry btn">Register</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
