<x-blog-layout>
    <div class="container mx-auto">
        <div class="bg-white my-12 rounded shadow px-4 py-4">
            @if (session('success_message'))
                <div class="bg-green-200 text-green-800 px-4 py-2 rounded mb-4">
                    {{ session('success_message') }}
                </div>
            @endif
            <h2 class="font-semibold text-2xl">Posts</h2>

            <ul class="list-disc list-inside space-y-2 mt-4">
                @foreach ($posts as $post)
                    <li>
                        <a href="{{ route('post.show', $post) }}" class="text-blue-600 hover:underline">{{ $post->title }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</x-blog-layout>
