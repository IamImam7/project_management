<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Inventaris Pro - Manajemen Stok Modern</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    {{-- Jika Anda menggunakan font custom seperti Poppins --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">


    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased font-sans bg-gray-50 text-gray-800">
    <div class="min-h-screen">
        <header class="flex flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full bg-white text-sm py-4 shadow-sm">
            <nav class="max-w-7xl w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between" aria-label="Global">
                <div class="flex items-center justify-between">
                    <a class="flex-none text-xl font-semibold text-primary-600" href="#">InventarisPro</a>
                </div>
                <div class="flex flex-row items-center gap-5 mt-5 sm:justify-end sm:mt-0 sm:ps-5">
                    @auth
                        <a class="font-medium text-gray-600 hover:text-gray-400" href="{{ route('dashboard') }}">Dashboard</a>
                    @else
                        <a class="font-medium text-gray-600 hover:text-gray-400" href="{{ route('login') }}">Log in</a>
                        <a class="font-medium text-primary-600 hover:text-primary-500" href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            </nav>
        </header>
        <main>
            <div class="relative overflow-hidden">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 sm:py-32">
                    <div class="text-center">
                        <h1 class="text-4xl sm:text-6xl font-extrabold text-gray-800 tracking-tight">
                            Kendalikan Stok Anda
                            <span class="block text-primary-600">dengan Presisi & Mudah</span>
                        </h1>

                        <p class="mt-6 max-w-2xl mx-auto text-lg text-gray-600">
                            Aplikasi manajemen inventaris modern untuk melacak setiap pergerakan barang, dari stok masuk hingga keluar, lengkap dengan laporan analitis.
                        </p>

                        <div class="mt-8 flex justify-center gap-x-4">
                            <a class="inline-flex items-center gap-x-2 bg-primary-600 text-white font-semibold text-sm px-6 py-3 rounded-lg hover:bg-primary-700 transition" href="{{ route('register') }}">
                                Mulai
                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white py-20">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-12">
                         <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Fitur Unggulan Kami</h2>
                         <p class="mt-4 text-lg leading-8 text-gray-600">Semua yang Anda butuhkan dalam satu platform.</p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                        <div class="p-6 border border-gray-200 rounded-lg">
                            <div class="flex-shrink-0 bg-primary-500 rounded-md p-3 w-min mb-4">
                                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5A1.125 1.125 0 013.75 9.375v-4.5zM3.75 14.625c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5a1.125 1.125 0 01-1.125-1.125v-4.5zM13.5 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5A1.125 1.125 0 0113.5 9.375v-4.5zM13.5 14.625c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5a1.125 1.125 0 01-1.125-1.125v-4.5z" /></svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900">Pelacakan Stok Real-time</h3>
                            <p class="mt-2 text-gray-600">Monitor jumlah stok setiap produk secara akurat saat barang masuk dan keluar.</p>
                        </div>

                        <div class="p-6 border border-gray-200 rounded-lg">
                            <div class="flex-shrink-0 bg-primary-500 rounded-md p-3 w-min mb-4">
                               <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" /></svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900">Notifikasi Stok Menipis</h3>
                            <p class="mt-2 text-gray-600">Dapatkan peringatan otomatis saat stok produk mencapai batas minimum, cegah kehabisan barang.</p>
                        </div>

                        <div class="p-6 border border-gray-200 rounded-lg">
                            <div class="flex-shrink-0 bg-primary-500 rounded-md p-3 w-min mb-4">
                                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 100 15 7.5 7.5 0 000-15zM21 21l-5.197-5.197" /></svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900">Laporan Analitis</h3>
                            <p class="mt-2 text-gray-600">Akses laporan stok opname, riwayat produk, dan data penting lainnya untuk pengambilan keputusan.</p>
                        </div>

                    </div>
                </div>
            </div>
            </main>
        <footer class="bg-gray-100">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 text-center text-sm text-gray-500">
                <p>&copy; {{ date('Y') }} InventarisPro. Semua Hak Cipta Dilindungi.</p>
            </div>
        </footer>
        </div>
</body>
</html>
