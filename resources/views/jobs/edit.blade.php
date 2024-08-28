<x-layout>
    <x-slot:heading>
        Edit Job {{ $job->title }}
    </x-slot:heading>
    <form
        class="p-10 h-fit w-[30%] bg-purple-100 rounded-md bg-clip-padding backdrop-filter backdrop-blur-md bg-opacity-30 border border-gray-100"
        method="POST" action="/Jobs/{{ $job->id }}">
        @csrf
        @method('PATCH')
        <div class="space-y-12 ">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Create a New Job</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">We just need handful of details.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="text" name="title" id=title" value="{{ $job->title }}"
                                    autocomplete="title" required
                                    class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                    placeholder="It Programmer">
                            </div>
                            @error('title')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="salary" class="block text-sm font-medium leading-6 text-gray-900">Salary</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="text" inputmode="numeric" name="salary" id="salary"
                                    value="{{ $job->salary }}" required
                                    class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                    placeholder="$100,000">
                            </div>
                            @error('salary')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="salary"
                            class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <textarea type="text" name="description" id="description" required
                                    class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6 max-h-[200px] min-h-max"
                                    placeholder="$100,000"> {{ $job->description }} </textarea>
                            </div>
                            @error('description')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                {{-- @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif --}}
            </div>
        </div>
        <div class="mt-6 flex items-center justify-between gap-x-6">
            <div>
                @can('destroy', $job)
                    <button form="delete-form" class="text-sm font-semibold leading-6 text-red-600 flex-grow">
                        Delete
                    </button>
                @endcan
            </div>
            <div>
                <a href="/Jobs/{{ $job->id }}" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                @can('update', $job)
                    <button
                        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                        type="submit">
                        Save
                    </button>
                @endcan
            </div>
        </div>
    </form>

    <form method="post" action="/Jobs/{{ $job->id }}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
