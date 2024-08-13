<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Profil</title>
</head>
<body class="bg-white">
    <div class="container">
        <a href="/dashboard"><img class="ml-8 mt-5" src="/img/kembali.svg"></a>
        <div class="flex items-center justify-between">
            <h1 class="text-2xl text-red-600 font-bold pt-8 ml-12">Profil Saya</h1>
            <div class="flex items-center">
                <img class="pt-8 mr-0" src="/img/logo2.svg">
            </div>
        </div>
        <p class="text-base font-semibold ml-12 mb-3">Kelola informasi profil Anda untuk mengontrol, melindungi dan mengamankan akun</p>
        <div class="border border-gray-700 ml-12"></div>
        <div class="flex justify-center">
            <div class="flex justify-center items-center h-full">
                <div class="border-l border-gray-950 h-96 my-10 mx-20"></div>
            </div>
            <form action="{{ route('profil.update', ['id' => auth()->user()->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <!-- input fields here -->
                <label class="flex">
                    <span class="ml-40 mt-20 mr-20 block text-base font-medium mb-1 text-gray-900">
                        Nama
                    </span>
                    <input type="text" name="name" value="{{ auth()->user()->name }}" class="mt-16 px-5 py-3 bg-white border shadow-sm border-gray-800
                    placeholder-slate-400 focus:outline-none focus:border-red-500 focus:ring-red-500 block w-full rounded-lg sm:text-sm focus:ring-1" placeholder="Masukkan Nama" />
                </label>
                <label class="flex">
                    <span class="ml-40 mt-14 mr-20 block text-base font-medium mb-1 text-gray-900">
                        Email
                    </span>
                    <input type="email" name="email" value="{{ auth()->user()->email }}" class="mt-12 px-5 py-3 bg-white border shadow-sm border-gray-800
                    placeholder-slate-400 focus:outline-none focus:border-red-500 focus:ring-red-500 block w-full rounded-lg sm:text-sm focus:ring-1" placeholder="Masukkan Email" />
                </label>
                <label class="flex">
                    <span class="ml-40 mt-14 mr-20 block text-base font-medium mb-1 text-gray-900">
                        Alamat
                    </span>
                    <textarea name="alamat" rows="4" class="mt-12 px-5 py-3 bg-white border shadow-sm border-gray-800
                    placeholder-slate-400 focus:outline-none focus:border-red-500 focus:ring-red-500 block w-full rounded-lg sm:text-sm focus:ring-1 overflow-y-auto" placeholder="Masukkan Alamat">{{ auth()->user()->alamat }}</textarea>
                </label>
                <button type="submit" class="my-8 mr-1 bg-red-700 px-8 py-2 rounded-lg text-white font-semibold 
                font-inter block mx-auto hover:bg-red-600 active:bg-red-700">Save</button>
            </form>
            <div class="flex justify-center items-center h-full">
                <div class="border-l border-gray-950 h-96 my-10 mx-20"></div>
            </div>
        </div>
    </div>
</body>
</html>
