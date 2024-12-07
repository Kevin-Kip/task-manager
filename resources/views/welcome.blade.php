@extends('partials.master')
@section('content')
    <div class="w-full h-full flex flex-col">
        <div class="inline-flex">
            <a
                href="{{ route('task.create') }}"
                class="bg-purple-700 hover:bg-purple-800 text-white px-4 py-1 mx-2 border border-purple-700 rounded-lg font-semibold inline-flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M13 4v7h7v2h-7v7h-2v-7H4v-2h7V4h2Z"/>
                </svg>
                New Task
            </a>
        </div>

        <div class="flex flex-col">
            @foreach($tasks as $task)
                <div class="border-2 border-gray-200 rounded-xl px-4 py-5 m-1 flex flex-row bg-white shadow">
                    <div class="mx-1 p-1">
                        <input type="checkbox" name="" id="">
                    </div>
                    <div class="block">
                        <p class="font-semibold text-lg py-1">{{ $task->name }}</p>
                        <p>{{ $task->description ?? '' }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
