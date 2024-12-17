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

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-poppins">
    <x-navbar />
    <x-heroSection />
    <x-aboutUs />
    <x-whyUs />
    <x-products />
    <x-howToOrder />
    <x-testimonial />
    <section class="h-[80vh] bg-gray-100  py-6 px-36">
        <div class="flex w-full h-full gap-x-8">
            <div class="w-1/3 bg-white p-5 rounded-lg">
                <h1 class="font-urbanist text-green-700 font-bold text-lg">Hubungi Kami</h1>
                <h1 class="font-urbanist text-gray-800 py-4 font-extrabold text-3xl">Butuh Konsultasi atau Ingin
                    Memesan?</h1>
                <p class="text-lg text-gray-500 pb-3">Hubungi kami untuk konsultasi, pemesanan, atau pertanyaan lainnya.
                    Kami
                    berkomitmen memberikan solusi
                    terbaik untuk kebutuhan laboratorium dan kesehatan Anda.</p>
                <button
                    class="flex items-center w-80 justify-center border border-red-500 rounded-md py-3 mx-3 my-6 text-red-600 space-x-4">
                    <img class="h-4 w-4" src="{{ asset('images/call.png') }}" alt="Logo">
                    <p class=" font-medium">0816-1740-8900</p>
                </button>
                <button
                    class="flex items-center w-80 justify-center border border-red-500 rounded-md py-3 mx-3 my-6 text-red-600 space-x-4">
                    <img class="h-4 w-4" src="{{ asset('images/mail.png') }}" alt="Logo">
                    <p class=" font-medium">sales@anm.co.id</p>
                </button>
            </div>
            <div class="w-2/3 bg-white rounded-lg p-10">
                <h1 class="font-urbanist text-gray-800 font-extrabold text-5xl">Dapatkan Penawaran Spesial Sekarang!
                </h1>
                <form class="space-y-4 pt-7">
                    <input type="text" placeholder="Name"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent" />
                    <input type="email" placeholder="Email"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent" />
                    <textarea placeholder="Message" rows="5"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent"></textarea>
                    <button type="submit"
                        class="w-full bg-red-500 text-white font-semibold py-2 rounded-md hover:bg-red-600 transition duration-300">
                        Send
                    </button>
                </form>
            </div>
        </div>
    </section>
</body>

</html>
