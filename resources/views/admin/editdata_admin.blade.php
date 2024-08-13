<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Edit Data</title>
</head>
<body class="flex w-full min-h-screen bg-gradient-to-tl from-red-950 to-red-600"> 
    <div class="container my-10 mx-40 rounded-md bg-white">
        <h1 class="text-2xl font-bold text-center text-red-600 my-5">Edit Data Customer</h1>
        <div class="flex my-3 mx-60">
        <form>
            <label class="flex">
                <span class="mx-20 mt-10 block text-base font-medium mb-1 text-gray-900">
                  Nama
                </span>
                <input type="text" name="nama" class="ml-8 mt-8 px-5 py-3 bg-white border shadow-sm border-gray-800 
                 placeholder-slate-400 focus:outline-none focus:border-red-500 focus:ring-red-500 block w-full rounded-lg sm:text-sm focus:ring-1" placeholder="Masukkan nama" />
            </label>
            <label class="flex">
                <span class="mx-20 mt-10 block text-base font-medium mb-1 text-gray-900">
                  Alamat
                </span>
                <input type="text" name="nama" class="ml-6 mt-8 px-5 py-3 bg-white border shadow-sm border-gray-800 
                 placeholder-slate-400 focus:outline-none focus:border-red-500 focus:ring-red-500 block w-full rounded-lg sm:text-sm focus:ring-1" placeholder="Masukkan nama" />
            </label>
            <label class="flex">
                <span class="mx-20 mt-10 block text-base font-medium mb-1 text-gray-900">
                    Kendaraan
                </span>
                <select name="kendaraan" class="mt-8 px-5 py-3 bg-white border shadow-sm border-gray-800 
                    focus:outline-none focus:border-red-500 focus:ring-red-500 block w-full rounded-lg sm:text-sm focus:ring-1">
                    <option value="" disabled selected>Pilih Kendaraan</option>
                    <option value="Viar">Viar</option>
                    <option value="Pickup">Pickup</option>
                </select>
            </label>
            <label class="flex">
                <span class="mx-20 mt-10 block text-base font-medium mb-1 text-gray-900">
                  Tanggal
                </span>
                <input type="date" name="tanggal" class="mt-8 ml-5 px-5 py-3 bg-white border shadow-sm border-gray-800 
                 placeholder-slate-400 focus:outline-none focus:border-red-500 focus:ring-red-500 block w-full rounded-lg sm:text-sm focus:ring-1" placeholder="Catat Tanggl" />
            </label>
            <label class="flex">
                <span class="mx-20 mt-10 block text-base font-medium mb-1 text-gray-900">
                  No.HP
                </span>
                <input type="text" name="telepon" class="mt-8 ml-7 px-5 py-3 bg-white border shadow-sm border-gray-800 
                 placeholder-slate-400 focus:outline-none focus:border-red-500 focus:ring-red-500 block w-full rounded-lg sm:text-sm focus:ring-1" placeholder="Masukkan No.Handphone" />
            </label>
            <button class="mt-4 mr-1 bg-red-700 px-8 py-2 rounded-lg text-white font-semibold 
                font-inter block mx-auto hover:bg-red-600 active:bg-red-700">Simpan</button>
        </form>
        </div>
    </div>  
</body>
</html>