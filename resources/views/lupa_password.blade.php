<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Lupa Password</title>
</head>
<body class="flex justify-center items-center w-full min-h-screen  bg-gradient-to-tl from-red-950 to-red-600">
    <div class="container mt-30 max-w-sm bg-white m-auto p-10 rounded-md shadow-lg">
        <img class="w-11 mx-auto rounded-full" src="/img/logo.png" />
        <h1 class="text-2xl font-bold text-center text-red-600">Lupa Password</h1>
    <form>
        <label class="block">
            <span class="my-5 block text-sm font-medium mb-1 text-slate-700">
              Email
            </span>
            <input type="email" name="email" class="mt-2 px-3 py-2 bg-white border shadow-sm border-slate-300
             placeholder-slate-400 focus:outline-none focus:border-red-500 focus:ring-red-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Masukkan Email yang terdaftar" />
        </label>
        
            <button class="my-5 bg-red-700 px-8 py-2 rounded-full text-white font-semibold 
            font-inter block mx-auto hover:bg-red-600 active:bg-red-700">Reset Password</button>
            
    </form>
      </div>
</body>
</html>