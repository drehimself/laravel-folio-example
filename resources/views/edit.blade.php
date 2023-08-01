<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('post.update', $post) }}" class="flex flex-col space-y-6">
                        @csrf
                        @method('PATCH')

                        <div>
                            <label class="block font-medium text-sm text-gray-700" for="title">
                                Title
                            </label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" id="title" type="text" name="title" value="{{ old('title', $post->title) }}">
                            @error('title')
                                <div class="text-red-500 mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div>
                            <label class="block font-medium text-sm text-gray-700" for="body">
                                Body
                            </label>
                            <textarea class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" id="body" name="body" rows="6">{{ old('body', $post->body) }}</textarea>
                            @error('body')
                                <div class="text-red-500 mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div>
                            <button class="bg-gray-700 hover:bg-gray-600 rounded text-white px-4 py-2">Submit</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
