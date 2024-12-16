<!-- resources/views/components/why-us.blade.php -->
<section class="min-h-screen flex items-center my-10">
    <div class="flex gap-x-10 px-24 ">
        <div class="w-1/2 font-urbanist">
            <p class="text-green-700 font-extrabold pb-6 text-lg">Mengapa Memilih Kami</p>
            <h1 class="font-extrabold text-4xl text-gray-900 pb-8">Penyedia Alat Laboratorium dan Kesehatan Terbaik</h1>
            <div class="flex space-x-4">
                <div class="flex flex-col items-center pt-9">
                    <!-- Vertikal SVG Icons -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10 text-red-500">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <!-- More SVG icons with vertical lines between them -->
                </div>
                <div class="px-4 rounded-md w-full">
                    <!-- Reasons content -->
                    <div>
                        <h4 class="text-2xl text-gray-800 font-bold">Produk Berkualitas Tinggi</h4>
                        <p class="mt-1 text-lg text-gray-500 font-medium">Kami menyediakan berbagai alat laboratorium dengan merek-merek ternama seperti Memmert, Binder, dan Alfa Mirage</p>
                    </div>
                    <!-- More reasons -->
                </div>
            </div>
        </div>
        <div class="w-1/2">
            <img class="w-full" src="{{ asset('images/why_us.jpg') }}" alt="Logo">
        </div>
    </div>
</section>