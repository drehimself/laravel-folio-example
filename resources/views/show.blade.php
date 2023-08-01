<x-blog-layout>
    <div class="container mx-auto">
        <div class="bg-white my-12 rounded shadow px-4 py-4">
            @if (session('success_message'))
                <div class="bg-green-200 text-green-800 px-4 py-2 rounded mb-4">
                    {{ session('success_message') }}
                </div>
            @endif
            <h2 class="font-semibold text-2xl">{{ $post->title }}</h2>

            <div class="text-gray-600">By: {{ $post->user->name }}</div>

            <div class="mt-4">
                {{ $post->body }}
            </div>

            <div class="flex space-x-4 mt-4">
                <a href="/" class="text-blue-600 hover:underline">Home</a>
                @can('update', $post)
                    <a href="{{ route('post.edit', $post) }}" class="text-blue-600 hover:underline">Edit</a>
                @endcan
            </div>
        </div>
    </div>
</x-blog-layout>
