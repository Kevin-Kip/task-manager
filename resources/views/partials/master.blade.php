<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    @vite('resources/css/app.css')

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-50 antialiased w-full flex flex-col items-center">
<div class="h-full w-[700px]">
    <header class="w-full pt-12 pb-4 mt-6">
        <div class="w-max h-min inline-flex justify-start mx-5">
            <div class="inline-flex justify-center w-max">
                <div class="text-4xl text-gray-700 font-semibold">
                    {{ $pageTitle ?? config('app.name') }}
                </div>
            </div>
        </div>
        <div class="border-t-2 border-gray-200 mx-4"></div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="w-full h-max">
        <div class="w-full h-full py-6 flex flex-col justify-center items-center">
            <div class="inline-flex">
                <span class="font-semibold px-2">{{ config('app.name') }}</span> &copy; {{ now()->format('Y') }}
            </div>
        </div>
    </footer>
</div>
</body>
</html>
