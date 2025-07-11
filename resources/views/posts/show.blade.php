@extends('layout')

@section('content')
<div class="max-w-4xl mx-auto p-8">
    <!-- Header with Back Button -->
    <div class="flex justify-between items-start mb-8">
        <div>
            <h1 class="text-3xl font-bold mb-2">Detail Post</h1>
            <p class="text-gray-600">Informasi lengkap post</p>
        </div>
        <a href="{{ route('posts.index') }}" class="inline-flex items-center px-4 py-2 border border-black bg-transparent text-black font-medium hover:bg-black hover:text-white transition-all duration-200">
            ← Kembali ke Daftar
        </a>
    </div>
    
    <!-- Post Content -->
    <div class="border-2 border-black bg-transparent p-8">
        <!-- Post Title -->
        <div class="mb-6">
            <label class="block font-semibold mb-2 text-sm uppercase tracking-wide text-gray-600">Judul</label>
            <h2 class="text-2xl font-bold">{{ $post->title }}</h2>
        </div>
        
        <!-- Post Content -->
        <div class="mb-6">
            <label class="block font-semibold mb-2 text-sm uppercase tracking-wide text-gray-600">Konten</label>
            <div class="prose prose-lg max-w-none">
                <p class="text-gray-900 leading-relaxed whitespace-pre-wrap">{{ $post->content }}</p>
            </div>
        </div>
        
        <!-- Post Meta (if you have timestamps) -->
        @if(isset($post->created_at))
        <div class="border-t border-black pt-6 mt-8">
            <div class="flex gap-8 text-sm text-gray-600">
                <div>
                    <span class="font-semibold">Dibuat:</span>
                    {{ $post->created_at->format('d M Y, H:i') }}
                </div>
                @if($post->updated_at && $post->updated_at != $post->created_at)
                <div>
                    <span class="font-semibold">Diperbarui:</span>
                    {{ $post->updated_at->format('d M Y, H:i') }}
                </div>
                @endif
            </div>
        </div>
        @endif
        
        <!-- Action Buttons -->
        <div class="flex gap-4 pt-6 mt-8 border-t border-black">
            <a href="{{ route('posts.edit', $post->id) }}" class="inline-flex items-center px-6 py-3 border border-black bg-black text-white font-medium hover:bg-transparent hover:text-black transition-all duration-200">
                Edit Post
            </a>
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="inline-flex items-center px-6 py-3 border border-black bg-transparent text-black font-medium hover:bg-black hover:text-white transition-all duration-200"
                    onclick="return confirm('Apakah Anda yakin ingin menghapus post ini?')">
                    Hapus Post
                </button>
            </form>
        </div>
    </div>
</div>
@endsection