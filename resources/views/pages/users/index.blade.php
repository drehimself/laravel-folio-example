@php
    use App\Models\User;
    $users = User::all();
@endphp

<x-blog-layout>
    <div class="container mx-auto">
        Users page
        <div class="mt-4">
            @foreach ($users as $user)
                <div>{{ $user->name }}</div>
            @endforeach
        </div>
    </div>
</x-blog-layout>
