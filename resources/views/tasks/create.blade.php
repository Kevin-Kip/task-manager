@extends('partials.master')
@section('content')
    <div class="w-full h-full flex flex-col">
        <div class="inline-flex">
            <a
                href="/"
                class="text-purple-700 hover:underline px-4 py-1 mx-2 font-semibold inline-flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="currentColor"
                          d="m4 10l-.707.707L2.586 10l.707-.707zm17 8a1 1 0 1 1-2 0zM8.293 15.707l-5-5l1.414-1.414l5 5zm-5-6.414l5-5l1.414 1.414l-5 5zM4 9h10v2H4zm17 7v2h-2v-2zm-7-7a7 7 0 0 1 7 7h-2a5 5 0 0 0-5-5z"/>
                </svg>
                Back to main page
            </a>
        </div>

        <div class="flex flex-col gap-4">
            <form action="{{ route('task.store') }}" method="post">
                {{ csrf_field() }}

                <div class="mx-6 my-4">
                    <label for="project" class="block text-sm/6 font-medium text-gray-900">Category</label>
                    <div class="mt-2">
                        <div
                            class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 has-[select:focus-within]:outline has-[select:focus-within]:outline-2 has-[select:focus-within]:-outline-offset-2 has-[select:focus-within]:outline-purple-600">
                            <select
                                name="project"
                                id="project"
                                class="min-h-[36px] bg-white block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6">
                                <option value="" disabled selected>-- Select a project --</option>
                                @foreach($projects as $project)
                                    <option value="{{ $project->id }}">{{ $project->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    @error('project')
                    <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mx-6 my-4">
                    <label for="name" class="block text-sm/6 font-medium text-gray-900">Task name</label>
                    <div class="mt-2">
                        <div
                            class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 has-[input:focus-within]:outline has-[input:focus-within]:outline-2 has-[input:focus-within]:-outline-offset-2 has-[input:focus-within]:outline-purple-600">
                            <input
                                type="text"
                                name="name"
                                id="name"
                                autofocus
                                class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6"
                                placeholder="Task name ...">
                        </div>
                    </div>
                    @error('name')
                    <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mx-6 my-4">
                    <label for="description" class="block text-sm/6 font-medium text-gray-900">Description</label>
                    <div class="mt-2">
                        <div
                            class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 has-[input:focus-within]:outline has-[input:focus-within]:outline-2 has-[input:focus-within]:-outline-offset-2 has-[input:focus-within]:outline-purple-600">
                            <textarea
                                name="description"
                                id="description"
                                rows="4"
                                class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6"
                                placeholder="Short description ..."></textarea>
                        </div>
                    </div>
                    @error('description')
                    <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mx-6 my-4">
                    <div class="mt-2">
                        <div
                            class="flex items-center pl-3">
                            <input
                                type="submit"
                                value="Save"
                                class="bg-purple-700 hover:bg-purple-800 text-white px-8 py-1.5 mx-2 border border-purple-700 rounded-lg font-semibold inline-flex items-center"/>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
