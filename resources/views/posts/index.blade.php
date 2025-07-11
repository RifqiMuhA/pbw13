@extends('layout')

@section('content')
<div class="max-w-6xl mx-auto p-8">
    <!-- Header with Back Button -->
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-bold">Posts Management</h1>
        <a href="/" class="inline-flex items-center px-4 py-2 border border-black bg-transparent text-black font-medium hover:bg-black hover:text-white transition-all duration-200">
            ← Back to Welcome
        </a>
    </div>
    
    <!-- Add Post Button -->
    <div class="mb-6">
        <a href="{{ route('posts.create') }}" class="inline-flex items-center px-6 py-3 border border-black bg-black text-white font-medium hover:bg-transparent hover:text-black transition-all duration-200">
            + Tambah Post
        </a>
    </div>
    
    <!-- Posts Table -->
    <div class="border-2 border-black bg-transparent">
        <table class="w-full">
            <thead>
                <tr class="border-b border-black">
                    <th class="px-6 py-4 text-left font-semibold">Judul</th>
                    <th class="px-6 py-4 text-center font-semibold">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr class="border-b border-black hover:bg-gray-50 transition-colors duration-200">
                        <td class="px-6 py-4">{{ $post->title }}</td>
                        <td class="px-6 py-4 text-center">
                            <div class="flex justify-center gap-2">
                                <a href="{{ route('posts.show', $post->id) }}" class="px-3 py-1 border border-black bg-transparent text-black text-sm hover:bg-black hover:text-white transition-all duration-200">
                                    Detail
                                </a>
                                <a href="{{ route('posts.edit', $post->id) }}" class="px-3 py-1 border border-black bg-transparent text-black text-sm hover:bg-black hover:text-white transition-all duration-200">
                                    Edit
                                </a>
                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-3 py-1 border border-black bg-transparent text-black text-sm hover:bg-black hover:text-white transition-all duration-200"
                                        onclick="return confirm('Hapus post ini?')">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
        @if($posts->isEmpty())
            <div class="px-6 py-12 text-center text-gray-600">
                <p class="text-lg">Belum ada post yang tersedia.</p>
                <p class="text-sm mt-2">Klik "Tambah Post" untuk membuat post pertama Anda.</p>
            </div>
        @endif
    </div>
</div>
@endsection