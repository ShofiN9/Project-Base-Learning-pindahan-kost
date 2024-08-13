<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Dashboard Admin</title>
</head>
<body class="w-full min-h-screen bg-gradient-to-tl from-red-950 to-red-600">
        <header class="top-0 left-0 w-full flex items-center">
            <div class="container">
                <div class="flex items-center justify-center">
                    <div class="px-10 flex flex-row">
                        <img class="w-8 mx-3 my-6 mr-2 rounded-full" src="/img/logo.png" />
                        <a href="#home" class="ml-2 my-7 font-bold text-base text-white block"> PICKOST</a>
                        <nav class="flex ps-80 items-center justify-end">
                            <ul class="flex">
                                <li class="group">
                                    <a href="/admin/dashboard_admin" class="text-sm text-white py-5 px-8 flex group-hover:text-red-500">HOME</a>
                                </li>
                                <li class="group">
                                    <a href="/admin/pemesanan_admin" class="text-sm text-white py-5 px-8 flex group-hover:text-red-500">PEMESANAN</a>
                                </li>
                                <li class="group">
                                    <a href="" class="text-sm text-white font-semibold py-5 px-6 flex group-hover:text-red-500">TESTIMONI</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="flex space-x-5 pl-56">
                        <button class="my-6 bg-white px-5 py-0 rounded-md text-red-600 font-semibold 
                        font-inter block shadow-2xl  hover:bg-red-200 active:bg-red-400"><a href="{{ route('logout') }}">Logout</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="container bg-white m-auto p-10">
            <div class="flex justify-between items-center">
                <h1 class="mt-0 ml-5 font-semibold text-2xl text-red-600">Data Testimoni</h1>
            </div>  
            <div class="rounded-lg border border-gray-200 mt-4">
                <div class="overflow-x-auto rounded-t-lg">
                    <table class="min-w-full text-sm table-fixed">
                    <thead class="bg-white border-b-2 border-gray-300">                        
                        <tr>
                        <th class="px-4 py-2 font-semibold text-gray-900 tracking-wide text-left">No</th>
                        <th class="px-4 py-2 font-semibold text-gray-900 tracking-wide text-left">Nama</th>
                        <th class="px-4 py-2 font-semibold text-gray-900 tracking-wide text-left">Ulasan</th>
                        <th class="px-4 py-2 font-semibold text-gray-900 tracking-wide text-left">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach ($testimonis as $testimoni)
                    <tr class="bg-white">
                        <td class="px-4 py-2 font-medium text-gray-900">{{ $loop->iteration }}</td>
                        <td class="px-4 py-2 text-gray-700">{{ $testimoni->user->name }}</td>
                        <td class="px-4 py-2 text-gray-700">{{ $testimoni->ulasan }}</td>
                        <td class="py-2 px-4">
                            <form action="{{ route('destroy.testimoni', $testimoni->id) }}" method="POST" onsubmit="return confirm('Apakah anda yakin ingin menghapus testimoni ini?')">
                                @csrf
                                @method('DELETE')
                            <button class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">Delete</button>
                            </form>
                        </td>
                    </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
        </div>         
</body>
</html>