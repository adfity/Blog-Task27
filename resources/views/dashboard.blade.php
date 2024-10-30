<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <body class="bg-white">
        <main class="container mx-auto mt-8 px-6 pt-24">
            <div class="flex flex-wrap -mx-4 "> <!-- Menambahkan flex dan margin untuk responsivitas -->
                <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-8"> <!-- Mengatur lebar responsif -->
                    <div class="bg-white custom-shadow rounded-lg overflow-hidden">
                        <img alt="Three children performing traditional dance in colorful costumes" class="w-full h-64 object-cover" src="https://storage.googleapis.com/a1aa/image/wSi9fVjPBHz2ZSEavNPgVdmWJHIsNplYkGxsfmaR5tpZfJKnA.jpg" />
                        <div class="p-6">
                            <h2 class="text-2xl font-bold mb-4">
                                Workshop Pementasan Seni di Desa Leuwimalang
                            </h2>
                            <p class="text-gray-700 mb-4">
                                Workshop Pementasan Seni di Desa Leuwimalang adalah kesempatan unik bagi.
                            </p>
                            <div class="flex justify-between items-center">
                                <a class="text-green-600 hover:underline" href="#">
                                    Read More
                                </a>
                                <a href="/pay">
                                    <button class="bg-green-600 text-white px-4 py-2 rounded-full">
                                        Gabung
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-8"> <!-- Menambahkan elemen kedua -->
                    <div class="bg-white custom-shadow rounded-lg overflow-hidden">
                        <img alt="Three children performing traditional dance in colorful costumes" class="w-full h-64 object-cover" src="https://storage.googleapis.com/a1aa/image/t4R5eqQlM4TTFqpqdgQjF8usQzG5ZM6oHb5urff14MGrHKKnA.jpg" />
                        <div class="p-6">
                            <h2 class="text-2xl font-bold mb-4">
                                Workshop Pementasan Seni di Desa Leuwimalang
                            </h2>
                            <p class="text-gray-700 mb-4">
                                Workshop Pementasan Seni di Desa Leuwimalang adalah kesempatan unik bagi peserta untu
                            </p>
                            <div class="flex justify-between items-center">
                                <a class="text-green-600 hover:underline" href="#">
                                    Read More
                                </a>
                                <a href="/pay">
                                    <button class="bg-green-600 text-white px-4 py-2 rounded-full">
                                        Gabung
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-8"> <!-- Menambahkan elemen kedua -->
                    <div class="bg-white custom-shadow rounded-lg overflow-hidden">
                        <img alt="Three children performing traditional dance in colorful costumes" class="w-full h-64 object-cover" src="https://storage.googleapis.com/a1aa/image/t4R5eqQlM4TTFqpqdgQjF8usQzG5ZM6oHb5urff14MGrHKKnA.jpg" />
                        <div class="p-6">
                            <h2 class="text-2xl font-bold mb-4">
                                Workshop Pementasan Seni di Desa Leuwimalang
                            </h2>
                            <p class="text-gray-700 mb-4">
                                Workshop Pementasan Seni di Desa Leuwimalang adalah kesempatan unik bagi peserta untu
                            </p>
                            <div class="flex justify-between items-center">
                                <a class="text-green-600 hover:underline" href="#">
                                    Read More
                                </a>
                                <a href="/pay">
                                    <button class="bg-green-600 text-white px-4 py-2 rounded-full">
                                        Gabung
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</x-app-layout>
