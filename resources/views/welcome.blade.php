<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Anugrah Niaga Mandiri</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="font-poppins">
    <nav class="fixed top-0 left-0 right-0 z-50 bg-white shadow ">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-24">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <img class="h-16" src="{{ asset('images/navbar_logo.jpg') }}" alt="Logo">
                </div>
                <div class="hidden md:block">
                    <div class="flex space-x-6">
                        <a href="#"
                            class="text-gray-900 hover:text-red-500 px-3 py-1 text-base font-medium border-b border-transparent hover:border-red-500 transition-all duration-300">Home</a>
                        <a href="#"
                            class="text-gray-900 hover:text-red-500 px-3 py-1 text-base font-medium border-b border-transparent hover:border-red-500 transition-all duration-300">Why
                            Us?</a>
                        <a href="#"
                            class="text-gray-900 hover:text-red-500 px-3 py-1 text-base font-medium border-b border-transparent hover:border-red-500 transition-all duration-300">Best
                            Product</a>
                        <a href="#"
                            class="text-gray-900 hover:text-red-500 px-3 py-1 text-base font-medium border-b border-transparent hover:border-red-500 transition-all duration-300">How
                            to Order</a>
                        <a href="#"
                            class="text-gray-900 hover:text-red-500 px-3 py-1 text-base font-medium border-b border-transparent hover:border-red-500 transition-all duration-300">Contact
                            Us</a>
                    </div>
                </div>
                <div>
                    <a href="#"
                        class="text-red-500 border-2 border-red-500 px-6 py-3 rounded-md text-base font-semibold">Minta
                        Penawaran</a>
                </div>
            </div>
        </div>
    </nav>
    {{-- Hero Section --}}
    <section class="pt-24">
        <div class="bg-white h-[86vh] flex items-center relative">
            <div class="w-2/3 pl-20 font-urbanist">
                <h2 class="text-3xl font-semibold text-gray-800">PT. Anugrah Niaga Mandiri</h2>
                <h1 class="py-6 text-5xl font-extrabold text-gray-900">Solusi Lengkap untuk Kebutuhan <br>
                    <span class="text-7xl font-extrabold text-green-700">Peralatan Laboratorium</span>
                </h1>
                <p class="font-poppins text-xl text-gray-700 italic pb-10">
                    Distributor dan Agen Terpercaya Alat Laboratorium Berkualitas Tinggi di Indonesia
                </p>
                <a href="#"
                    class="bg-red-500 text-white border-2 border-red-500 px-6 py-3 rounded-md text-base font-semibold">
                    Konsultasi Sekarang
                </a>
            </div>
            <div class="w-1/3">
                <img class="w-96" src="{{ asset('images/densimeter.jpg') }}" alt="Logo">
            </div>
            <img src="{{ asset('images/navbar_logo.jpg') }}" alt="Densimeter" class="absolute bottom-12 right-10 w-40">
        </div>
    </section>
    {{-- About Us --}}
    <section class="min-h-screen flex items-center">
        <div class="flex gap-x-10 px-24 ">
            <div class="w-1/2">
                <img class="w-full" src="{{ asset('images/about_us.jpg') }}" alt="Logo">
            </div>
            <div class="w-1/2 font-urbanist">
                <p class="text-green-700 font-extrabold pb-6 text-lg">Tentang Kami</p>
                <h1 class="font-extrabold text-5xl text-gray-800 pb-6">Penyedia Utama Solusi Alat Laboratorium dan Alat
                    Kesehatan</h1>
                <h1 class="font-poppins text-gray-500 text-xl ">PT. Anugrah Niaga Mandiri adalah perusahaan yang
                    bergerak di bidang jual beli, distribusi, dan
                    keagenan alat-alat laboratorium. Kami berkomitmen menyediakan produk-produk berkualitas tinggi yang
                    mendukung penelitian, pengujian, dan pengembangan di berbagai bidang, mulai dari pendidikan hingga
                    industri.</h1>
                <div class="flex items-center justify-center pt-14">
                    <div class="flex items-center text-center">
                        <div class="px-16">
                            <p class="text-5xl text-gray-800">20+</p>
                            <p class="text-red-500 text-lg font-semibold mt-2">Tahun Pengalaman</p>
                        </div>
                        <div class="h-16 border-l-2 border-gray-300"></div>
                        <div class="px-16">
                            <p class="text-5xl text-gray-800">67+</p>
                            <p class="text-red-500 text-lg font-semibold mt-2">Produk Terbaik</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Why Us --}}
    <section class="min-h-screen flex items-center my-10">
        <div class="flex gap-x-10 px-24 ">
            <div class="w-1/2 font-urbanist">
                <p class="text-green-700 font-extrabold pb-6 text-lg">Mengapa Memilih Kami</p>
                <h1 class="font-extrabold text-4xl text-gray-900 pb-8">Penyedia Alat Laboratorium dan Kesehatan Terbaik
                </h1>
                <div class="flex space-x-4">
                    <div class="flex flex-col items-center pt-9">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-10 text-red-500">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <div class="w-0.5 h-20 bg-red-500 "></div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-10 text-red-500">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <div class="w-0.5 h-20 bg-red-500 "></div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-10 text-red-500">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <div class="w-0.5 h-20 bg-red-500 "></div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-10 text-red-500">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </div>
                    <div class="px-4 rounded-md w-full">
                        <div>
                            <h4 class="text-2xl text-gray-800 font-bold">Produk Berkualitas Tinggi</h4>
                            <p class="mt-1 text-lg text-gray-500 font-medium">Kami menyediakan berbagai alat
                                laboratorium
                                dengan merek-merek ternama
                                seperti Memmert, Binder, dan Alfa Mirage</p>
                        </div>
                        <div class="pt-6">
                            <h4 class="text-2xl text-gray-800 font-bold">Harga Kompetitif</h4>
                            <p class="mt-1 text-lg text-gray-500 font-medium">Menawarkan solusi alat laboratorium
                                dengan harga yang terjangkau dan nilai terbaik.</p>
                        </div>
                        <div class="pt-6">
                            <h4 class="text-2xl text-gray-800 font-bold">Layanan Purna Jual Terpercaya</h4>
                            <p class="mt-1 text-lg text-gray-500 font-medium">Didukung dengan garansi dan layanan purna
                                jual yang memuaskan.</p>
                        </div>
                        <div class="pt-6">
                            <h4 class="text-2xl text-gray-800 font-bold">Pengiriman Cepat dan Aman</h4>
                            <p class="mt-1 text-lg text-gray-500 font-medium">Produk dikirim dengan standar pengemasan
                                terbaik agar tiba dengan aman dan cepat di lokasi Anda.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/2">
                <img class="w-full" src="{{ asset('images/why_us.jpg') }}" alt="Logo">
            </div>
        </div>
    </section>
    {{-- Products --}}
    <section class="min-h-screen my-10 mx-20">
        <div class="flex flex-col text-center font-urbanist">
            <p class="text-lg font-extrabold text-green-800 pt-14 pb-5">Produk Unggulan Kami</p>
            <h1 class="text-5xl font-extrabold text-gray-800 pb-14">Produk Terbaik untuk Kebutuhan <br> Laboratorium
                dan
                Kesehatan</h1>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white rounded-lg border hover:border-red-500  overflow-hidden pt-10">
                <div class="flex justify-center">
                    <img src="{{ asset('images/goldMeter.jpg') }}" alt="Gold Meter & Precious Metal Tester"
                        class=" h-56 object-cover">

                </div>
                <div class="p-6 flex flex-col items-center">
                    <h1 class="text-2xl text-center font-semibold text-gray-800">Gold Meter & Precious Metal Tester
                    </h1>
                    <p class="text-gray-600 text-sm text-center py-5">Terdapat alat Alfa Mirage GKK 3000 dan Gold Meter
                        GK-300 untuk
                        akurasi tinggi dalam pengukuran kadar logam mulia.</p>
                    <button
                        class="bg-green-500 hover:bg-green-600 text-white font-medium py-2 px-4 rounded-md mt-4">Pesan
                        Produk</button>
                </div>
            </div>
            <div class="bg-white rounded-lg border hover:border-red-500  overflow-hidden pt-10">
                <div class="flex justify-center">
                    <img src="{{ asset('images/densimeter.jpg') }}" alt="Gold Meter & Precious Metal Tester"
                        class=" h-56 object-cover">

                </div>
                <div class="p-6 flex flex-col items-center">
                    <h1 class="text-2xl text-center font-semibold text-gray-800">Densimeter</h1>
                    <p class="text-gray-600 text-sm text-center py-5 pb-[5.5rem]">MD-300S untuk pengukuran densitas
                        yang akurat.

                    </p>
                    <button
                        class="bg-green-500 hover:bg-green-600 text-white font-medium py-2 px-4 rounded-md mt-4">Pesan
                        Produk</button>
                </div>
            </div>
            <div class="bg-white rounded-lg border hover:border-red-500  overflow-hidden pt-10">
                <div class="flex justify-center">
                    <img src="{{ asset('images/densimeter.jpg') }}" alt="Gold Meter & Precious Metal Tester"
                        class=" h-56 object-cover">

                </div>
                <div class="p-6 flex flex-col items-center">
                    <h1 class="text-2xl text-center font-semibold text-gray-800">Mikroskop & Preparat
                    </h1>
                    <p class="text-gray-600 text-sm text-center py-5 pb-[4.2rem]">Berbagai jenis mikroskop dan preparat untuk
                        kebutuhan penelitian.</p>
                    <button
                        class="bg-green-500 hover:bg-green-600 text-white font-medium py-2 px-4 rounded-md mt-4">Pesan
                        Produk</button>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
