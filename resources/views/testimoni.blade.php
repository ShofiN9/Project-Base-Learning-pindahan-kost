<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimoni</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white">
    <div class="container">
        <a href="/dashboard"><img class="ml-8 mt-5" src="/img/kembali.svg"></a>
        <div class="flex items-center justify-between"> 
            <h1 class="text-2xl text-red-600 font-bold pt-8 ml-12">Testimoni Pelanggan</h1>
            <div class="flex items-center"> 
                <img class="pt-8 mr-0" src="/img/logo2.svg" alt="Logo"> 
            </div>
        </div>
        <div class="border border-gray-700 w-full mt-4"></div>
        <form class="form-block" action="{{ route('testimoni.store') }}" method="post">
            @csrf
            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
            <div class="flex justify-center mt-10 mx-40">
                <textarea name="ulasan" class="mt-2 px-3 py-2 bg-white border shadow-sm border-gray-800 placeholder-slate-400 focus:outline-none focus:border-red-500 focus:ring-red-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Tulis Ulasan"></textarea>
                <button class="justify-end" type="submit">
                    <img class="w-8 mx-4 rounded-full" src="/img/plus.svg">
                </button>
            </div>
        </form>
        <h1 class="mt-5 ml-40 text-lg text-black font-semibold">Ulasan</h1>
        <ul class="list-item">
            @foreach ($testimonis as $testimoni)
        <div class="w-1/2 ml-40 mt-10">
            <div class="shadow rounded-xl overflow-hidden border-2 border-red-600">
                <div class="px-3 py-2 bg-red-600 text-white items-start text-xl font-semibold">{{ $testimoni->user->name }}</div>
                <div class="px-3 py-2 bg-white border-t  border-red-600 leading-relaxed text-medium text-gray-800">{{ $testimoni->ulasan }}</div>
            </div>
        </div>
            @endforeach
        </ul>
        
    </div> 
</body>
</html>
