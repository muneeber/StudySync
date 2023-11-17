<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- <link href="https://cdn.jsdelivr.net/npm/daisyui@4.0.7/dist/full.min.css" rel="stylesheet" type="text/css" /> --}}
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
</head>

<body class="font-sans antialiased">
    <div class="flex w-screen h-screen items-center justify-center">
        <div class="mockup-phone">
            <div class="camera"></div>
            <div class="display">
                <div class="artboard  phone-1">


                    <div class="min-h-screen bg-gray-100">
                        @include('layouts.navigation')

                        <!-- Page Heading -->
                        @if (isset($header))
                            <header class="bg-white shadow">
                                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                                    {{ $header }}
                                </div>
                            </header>
                        @endif

                        <!-- Page Content -->
                        <main class="m-1">
                            {{ $slot }}
                        </main>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>
