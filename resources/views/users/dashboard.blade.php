<!DOCTYPE html>
<html lang="en">
    <x-app-layout>
<head>
    @include('layouts.head')
    {{-- <title>YUHUYY</title> --}}
</head>
<body>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="mb-6">
                    <h3 class="text-2xl font-bold">Hello, {{ auth()->user()->name }}!</h3>
                    <p>Welcome back to your dashboard.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
                    <div class="bg-blue-100 p-4 rounded shadow">
                        <h4 class="text-lg font-semibold">Total Comments</h4>
                        <p class="text-3xl font-bold">{{ $totalUserComments }}</p>
                    </div>

                    <div class="bg-green-100 p-4 rounded shadow">
                        <h4 class="text-lg font-semibold">Total Likes</h4>
                        <p class="text-3xl font-bold">{{ $totalUserLikes }}</p>
                    </div>
                </div>

                <div class="mb-6">
                    <h4 class="text-xl font-bold mb-4">Recent Posts You Might Like</h4>
                    @if($posts->isEmpty())
                        <p class="text-gray-600">No posts available at the moment.</p>
                    @else
                        <ul class="space-y-4">
                            @foreach($posts as $post)
                                <li class="bg-gray-100 p-4 rounded shadow">
                                    <h5 class="text-lg font-semibold">{{ $post->title }}</h5>
                                    <p class="text-gray-600">{{ \Illuminate\Support\Str::limit($post->content, 100) }}</p>
                                    <a href="{{ route('posts.show', $post->id) }}" class="text-blue-500 hover:underline">Read more</a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</body>
</x-app-layout>
</html>