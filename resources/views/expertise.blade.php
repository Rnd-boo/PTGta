<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="shortcut icon" href="img/logo.png" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>PT.Gema Trimitra Andalan</title>
</head>
<body>
    <x-navbar></x-navbar>
    <section class="bg-white">
        <div>
          <div class="relative h-[36rem] w-full bg-[url('/public/img/Our-expertise.jpg')] bg-cover bg-no-repeat lg:bg-center">
            <h1 class="absolute bottom-0 px-24 py-14 text-3xl font-black text-white lg:text-6xl">OUR EXPERTISE</h1>
          </div>
        </div>
        <div class="mx-auto mt-10 xl:max-w-screen-xl 2xl:max-w-screen-2xl grid grid-cols-1 lg:grid-cols-2">
            <img src="img/filter-press.jpg" alt="Build-Filter-press" class="h-100 w-full object-cover object-center" />
            <h1 class="content-center bg-red-900 p-8 text-6xl text-white">Build - Installation</h1>
            <h1 class="content-center p-8 text-6xl text-orange-400">Modification - Renovation</h1>
            <img src="img/renovation.png" alt="" class="h-100 w-full object-cover object-center" />
            <img src="img/repair.png" alt="" class="h-100 w-full object-cover object-center" />
            <h1 class="content-center bg-red-900 p-8 text-6xl text-white">Repair - Restoration</h1>
        </div>
        <div class="my-20">
            <h1 class="text-center text-lg">Don't Hestitate to <a href="" class="focus:ring-primary-300 inline-flex items-center rounded-lg bg-orange-600 px-2.5 pb-1 text-white hover:bg-orange-800 focus:ring-4">Contact Us</a> for further information</h1>
          </div>
      </section>
      <x-footer></x-footer>
</body>
</html>