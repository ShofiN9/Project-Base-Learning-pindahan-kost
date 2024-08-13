<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Login</title>
</head>
<body class="flex justify-center items-center w-full min-h-screen  bg-gradient-to-tl from-red-950 to-red-600">
    <div class="container mt-30 max-w-sm bg-white m-auto p-10 rounded-md shadow-lg">
        <img class="w-11 mx-auto rounded-full" src="/img/logo.png" />
        <h1 class="text-2xl font-bold text-center text-red-600"> LOGIN</h1>
        @if (session('status'))
        <div class="bg-red-500 p-3 rounded-md shadow-sm mt-3">
            {{ session('status') }}
        </div>
        @endif
    <form action="{{ route('login.action') }}" method="POST" class="space-y-4">
      @csrf
        <label class="block">
            <span class="my-5 block text-sm font-medium mb-1 text-slate-700">
              Email
            </span>
            <input type="email" name="email" class="mt-2 px-3 py-2 bg-white border shadow-sm border-slate-300
             placeholder-slate-400 focus:outline-none focus:border-red-500 focus:ring-red-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Masukkan Email" />
             @error('email')
             <span class="text-red-600">{{ $message }}</span> 
             @enderror
        </label>
        <label class="block">
            <span class="mt-4 block text-sm font-medium text-slate-700">
              Password
            </span>
            <input type="password" name="password" class="mt-2 px-3 py-2 bg-white border shadow-sm border-slate-300
             placeholder-slate-400 focus:outline-none focus:border-red-500 focus:ring-red-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Masukkan Password" />
             @error('password')
             <span class="text-red-600">{{ $message }}</span> 
             @enderror
        </label>
        <div class="flex items-start">
          <div class="flex items-center h-5">
            <input name="remember" id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded">
          </div>
          <div class="ml-3 text-sm">
            <label for="remember" class="text-gray-500 dark:text-gray-300">Remember me</label>
          </div>
        </div>
            <div dir="rtl">
            <button type="submit" class="my-5 bg-red-700 px-8 py-2 rounded-full text-white font-semibold 
            font-inter block mx-auto hover:bg-red-600 active:bg-red-700">Login</button>
            <p class="font-medium text-sm text-slate-900 text-center"> Belum memiliki akun?<a href="{{ route('register') }}">Register</a></p>
    </form>
      </div>
</body>
</html>