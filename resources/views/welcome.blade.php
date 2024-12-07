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
                    To Do
                </div>
            </div>
        </div>
        <div class="border-t-2 border-gray-200 mx-4"></div>
    </header>

    <main>
        <div class="w-full h-full flex flex-col">
            <div class="inline-flex">
                <button
                    class="bg-purple-700 hover:bg-purple-800 text-white px-4 py-1 mx-2 border border-purple-700 rounded-lg font-semibold inline-flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M13 4v7h7v2h-7v7h-2v-7H4v-2h7V4h2Z"/>
                    </svg>
                    New Task
                </button>
            </div>

            <div class="flex flex-col gap-4">
                <div class="border-2 border-gray-200 rounded-xl px-4 py-5 m-2 flex flex-row bg-white shadow">
                    <div class="mx-1 p-1">
                        <input type="checkbox" name="" id="">
                    </div>
                    <div class="block">
                        <p class="font-semibold text-lg py-1">Task Title</p>
                        <p>Task Description</p>
                    </div>
                </div>
            </div>
        </div>
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
