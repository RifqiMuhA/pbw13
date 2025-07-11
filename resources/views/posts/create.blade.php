@extends('layout')

@section('content')
<div class="max-w-4xl mx-auto p-8">
    <!-- Header -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold mb-2">Tambah Post Baru</h1>
        <p class="text-gray-600">Isi form di bawah untuk membuat post baru</p>
    </div>
    
    <!-- Form -->
    <div class="border-2 border-black bg-transparent p-8">
        <form action="{{ route('posts.store') }}" method="POST" class="space-y-6">
            @csrf
            
            <!-- Title Field -->
            <div>
                <label class="block font-semibold mb-2 text-sm uppercase tracking-wide">Judul Post</label>
                <input type="text" name="title" class="w-full border border-black px-4 py-3 bg-transparent focus:outline-none focus:ring-2 focus:ring-black focus:ring-opacity-20 transition-all duration-200" required placeholder="Masukkan judul post...">
            </div>
            
            <!-- Content Field -->
            <div>
                <label class="block font-semibold mb-2 text-sm uppercase tracking-wide">Konten</label>
                <textarea name="content" rows="6" class="w-full border border-black px-4 py-3 bg-transparent focus:outline-none focus:ring-2 focus:ring-black focus:ring-opacity-20 transition-all duration-200 resize-y" required placeholder="Tulis konten post di sini..."></textarea>
            </div>
            
            <!-- Buttons -->
            <div class="flex gap-4 pt-4">
                <button type="submit" class="inline-flex items-center px-6 py-3 border border-black bg-black text-white font-medium hover:bg-transparent hover:text-black transition-all duration-200">
                    Simpan Post
                </button>
                <a href="{{ route('posts.index') }}" class="inline-flex items-center px-6 py-3 border border-black bg-transparent text-black font-medium hover:bg-black hover:text-white transition-all duration-200">
                    Batal
                </a>
            </div>
        </form>
    </div>
</div>
@endsection