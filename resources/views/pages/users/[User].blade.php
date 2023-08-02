@php
    // use App\Models\User;
    // $user = User::findOrFail($id);
@endphp

<x-blog-layout>
    <div class="container mx-auto">
        <div>User ID Route Model Binding: {{ $user->id }}</div>
        <div>User: {{ $user->name }}</div>

    </div>
</x-blog-layout>
