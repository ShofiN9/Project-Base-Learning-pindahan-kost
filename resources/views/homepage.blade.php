<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Homepage</title>
</head>
<body>
    <section class="bg-gradient-to-tl from-red-950 to-red-600" style="height: 100vh;">
        <header class="top-0 left-0 w-full flex items-center">
            <div class="container">
                <div class="flex items-center justify-center">
                    <div class="px-10 flex flex-row">
                        <img class="w-8 mx-3 my-6 mr-2 rounded-full" src="/img/logo.png" />
                        <a href="" class="ml-2 my-7 font-bold text-base text-white block"> PICKOST</a>
                        <nav class="flex ps-80 items-center justify-end">
                            <ul class="flex">
                                <li class="group">
                                    <a href="" class="text-sm text-white py-5 px-8 flex group-hover:text-red-500">HOME</a>
                                </li>
                                <li class="group">
                                    <a href="" class="text-sm text-white py-5 px-8 flex group-hover:text-red-500">PEMESANAN</a>
                                </li>
                                <li class="group">
                                    <a href="" class="text-sm text-white py-5 px-6 flex group-hover:text-red-500">TESTIMONI</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="flex space-x-1.5 pl-56">
                        <button class="my-6 bg-white px-5 py-0 rounded-md text-red-600 font-semibold 
                        font-inter block shadow-2xl  hover:bg-red-200 active:bg-red-400"><a href="/login">Masuk</button>
                        <button class="my-6 bg-red-600 px-5 py-0 rounded-md text-white font-semibold 
                        font-inter block shadow-2xl  hover:bg-red-700 active:bg-red-800"><a href="/register">Daftar</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="container items-center justify-center">
            <div class="flex">
                <div class="mx-7 my-8 ml-10 w-full items-center px-4">
                    <h1 class="text-white pt-10 font-semibold text-4xl">Pindahan Kost Tanpa Ribet</h1>
                    <p class="text-white pt-5 mt-7"> <span class="font-semibold">PICKOST</span> hadir untuk membantu melalui 
                        jasa pindahan terbaik untukmu,lebih mudah, cepat dan terjangkau</p>
                    <button class="my-20 text-base font-semibold text-red-600 bg-white pt-2 px-8 py-2 rounded-md
                    font-inter block hover:shadow hover:bg-red-200 active:bg-red-400">Konsultasi</button>
                </div>
                <div class=" w-full self-end pt-32">
                    <div class="relative">
                        <img class="max-w-full"src="/img/pickup1.svg"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white" style="height: 100vh;">
        <div class="container">
            <div class="flex items-center justify-center">
                <div class="mt-20">
                    <img class="scale-75 pt-5" src="/img/paket1.svg">
                </div>
                <div class="mt-10">
                    <h1 class="text-3xl font-bold pl-24 text-red-600">Mengapa Pilih PICKOST?</h1>
                    <p class="text-base pl-32 mt-3">PICKOST hadir menjadi solusi bagi kamu</p>
                    <div class="flex items-center mt-2 mb-2">
                        <img class="scale-75 ml-20 mt-14" src="/img/jam.svg" alt="Gambar jam">
                        <div class="ml-4 mt-14">
                            <h1 class="font-semibold text-lg">Hemat Waktu</h1>
                            <p class="text-base">Kami siap membantu mengirimkan barangmu<br>sampai ke lokasi tujuan dan bahkan membantu<br>mengangkut barang apabila dibutuhkan.</p>
                        </div>
                    </div>
                    <div class="flex items-center mt-2 mb-2">
                        <img class="scale-75 ml-20 mt-10" src="/img/box.svg" alt="Gambar kotak">
                        <div class="ml-4 mt-14">
                            <h1 class="font-semibold text-lg">Pengiriman Aman</h1>
                            <p class="text-base">Pengiriman tenang dengan<br>driver kami yang sudah terlatih.</p>
                        </div>
                    </div>
                    <div class="flex items-center mt-2 mb-2">
                        <img class="scale-75 ml-20 mt-10" src="/img/data.svg" alt="Gambar data">
                        <div class="ml-4 mt-14">
                            <h1 class="font-semibold text-lg">Harga Terjangkau</h1>
                            <p class="text-base">Harga kami masih terjangkau oleh<br>kalangan anak kost.</p>
                        </div>
                    </div>
                </div>   
            </div>
        </div>
    </section>
    <section class="bg-white" style="height: 100vh;">
        <div class="container">
            <div class="items-center justify-center">
                    <h1 class="font-bold text-3xl text-red-600 pt-14 text-center">DRIVER</h1>
                <div class="flex items-center justify-center">
                <div class=" h-20 w-29 p-4 ml-10 mt-10">
                    <img src="/img/viar.svg" alt="Gambar viar"> 
                    <div class="my-10">
                        <h1 class="text-center font-bold text-lg">VIAR</h1>
                        <p class="text-center font-normal text-base">Muatan Maksimal : 500 kg<br>Wilayah Cakupan : Kota Malang</p>
                    </div>   
                </div>   
                <div class="h-20 w-29 p-4 ml-20 mt-10">
                    <img src="/img/pickup2.svg" alt="Gambar pickup2">   
                    <div class="my-10">
                        <h1 class="text-center font-bold text-lg">PICKUP</h1>
                        <p class="text-center font-normal text-base">Muatan Maksimal : 800 kg<br>Wilayah Cakupan : Kota Malang</p>
                    </div>   
                </div>  
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white" style="height: 100vh;">
        <div class="container">
            <div class="flex items-center justify-center">
                <div class="ml-20 mt-24 px-8 mx-5">
                    <h1 class="text-red-600 text-center pt-10 font-bold text-4xl">Bagaimana Pemesanan PICKOST?</h1>
                    <button class="my-20 ml-48 text-base font-semibold text-white bg-red-600 pt-3 px-8 py-3 rounded-md
                    font-inter block hover:shadow hover:bg-red-500 active:bg-red-700">Pemesanan</button>
                </div>
                <div class="items-end">
                    <div class="mt-20 mr-10">
                        <img class="scale-75 pt-5"src="/img/paket2.svg"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-gray-950" style="height:50vh">
        <div class="container">
            <div class="">
                <div class="ml-16 pt-10">
                    <h1 class="text-white font-semibold text-lg">Kontak</h1>
                </div>
                <div class="flex items-center mt-2 mb-2">
                    <img class="ml-16 my-2" src="/img/icon1.svg">
                    <div class="ml-8 my-2">
                        <h1 class="font-normal text-base text-white">Jl. Dieng Atas Malang Indonesia</h1>
                    </div>
                </div>
                <div class="flex items-center mt-2 mb-2">
                    <img class="ml-16 my-1" src="/img/icon2.svg">
                    <div class="ml-8 my-1">
                        <h1 class="font-normal text-base text-white">pickost@gmail.com</h1>
                    </div>
                </div>
                <div class="flex items-center mt-2 mb-2">
                    <img class="ml-16 my-1" src="/img/icon3.svg">
                    <div class="ml-8 my-1">
                        <h1 class="font-normal text-base text-white">223-14071-41229</h1>
                    </div>
                </div>
                <div class="text-center my-5">
                    <h1 class="text-white font-normal">© 2024, made with by Vokasi UB</h1>
                </div>
            </div>
        </div>
    </section>  
</body>
</html>