<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel - Tugas Praktikum 13</title>

        <!-- Fonts --> 
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700" rel="stylesheet" />

        <!-- Tailwind CSS CDN -->
        <script src="https://cdn.tailwindcss.com"></script>
        
        <!-- Custom font configuration for Tailwind -->
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        fontFamily: {
                            'inter': ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif']
                        }
                    }
                }
            }
        </script>
    </head>
    <body class="font-inter bg-white text-black min-h-screen flex items-center justify-center p-8">
        <div class="max-w-4xl w-full">
            <div class="border-2 border-black bg-transparent p-12 relative">
                <!-- Header -->
                <header class="text-center mb-12">
                    <h1 class="text-4xl font-bold mb-2 tracking-tight">Laravel Framework</h1>
                    <p class="text-lg text-gray-600">Tugas Praktikum 13 - Pemrograman Berbasis Web</p>
                </header>

                <!-- Info Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                    <div class="border border-black p-6 bg-transparent">
                        <div class="text-sm font-semibold uppercase tracking-wide text-gray-600 mb-2">Nama</div>
                        <div class="text-lg font-medium">Rifqi Muhadzib</div>
                    </div>
                    
                    <div class="border border-black p-6 bg-transparent">
                        <div class="text-sm font-semibold uppercase tracking-wide text-gray-600 mb-2">NIM</div>
                        <div class="text-lg font-medium">222313350</div>
                    </div>
                    
                    <div class="border border-black p-6 bg-transparent">
                        <div class="text-sm font-semibold uppercase tracking-wide text-gray-600 mb-2">Kelas</div>
                        <div class="text-lg font-medium">2KS2</div>
                    </div>
                    
                    <div class="border border-black p-6 bg-transparent">
                        <div class="text-sm font-semibold uppercase tracking-wide text-gray-600 mb-2">No. Absen</div>
                        <div class="text-lg font-medium">27</div>
                    </div>
                </div>

                <!-- Navigation -->
                <nav class="flex justify-center gap-4 flex-wrap">
                    <a href="{{ route('posts.index') }}" class="inline-flex items-center px-6 py-3 border border-black bg-transparent text-black font-medium hover:bg-black hover:text-white transition-all duration-200">
                        Posts
                    </a>
                    <a href="/api/mahasiswa" class="inline-flex items-center px-6 py-3 border border-black bg-transparent text-black font-medium hover:bg-black hover:text-white transition-all duration-200">
                        API
                    </a>
                    <a href="https://github.com" target="_blank" class="inline-flex items-center px-6 py-3 border border-black bg-black text-white font-medium hover:bg-transparent hover:text-black transition-all duration-200">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24" class="mr-2">
                            <path d="M12 0C5.374 0 0 5.373 0 12 0 17.302 3.438 21.8 8.207 23.387c.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0112 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/>
                        </svg>
                        Go to GitHub
                    </a>
                </nav>

                <!-- Footer -->
                <footer class="text-center mt-12 pt-8 border-t border-black">
                    <p class="text-sm text-gray-600">
                        Built with Laravel {{ app()->version() }} &middot; 
                        PHP {{ PHP_VERSION }}
                    </p>
                </footer>
            </div>
        </div>
    </body>
</html>