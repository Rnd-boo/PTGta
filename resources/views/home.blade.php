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
    <div>
        <div class="w-full h-svh bg-[url('/public/img/hero.png')] bg-no-repeat bg-cover bg-center lg:bg-center">
                <h1 class="lg:text-7xl text-4xl font-black text-white absolute bottom-0 px-24 py-14">Providing High Value<br>Construction Projects</h1>
                </div>    
        </div>
    </div>
    <div class="w-full mx-auto py-5 h-48 bg-red-900">
        <h1 class="text-white text-xl text-center font-bold font-noto appear-left mt-7 md:text-5xl"><i>FUTURE PLANS</i></h1>
        <p class="text-white text-center md:text-xl text-sm sm:mx-auto mx-10 font-noto appear-left mt-4">"Menjadi perusahaan kontraktor terkemuka yang dikenal akan <span class="font-semibold">kualitas</span>, <span class="font-semibold">inovasi</span>, dan <span class="font-semibold">keberlanjutan proyek."</span></p>
    </div>
    <div class="mx-auto max-w-screen-xl my-10">
        <h1 class="text-2xl lg:text-4xl font-medium text-red-900 appear-top p-2">Experience Work</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 appear-top gap-8 gap-y-12 my-6">
            <div class="col-span-1 lg:col-span-2 shadow-xl p-2 pb-5">
                <img src="img/filter-press.jpg" class="w-full h-96 object-cover rounded-sm shadow-md">
                <h2 class="text-california font-medium text-xl pt-4">Pembangunan Filter Press</h2>
            </div>
            <div class="shadow-xl p-2 pb-5 ">
                <img src="img/Cooling-tower.jpg" class="w-full h-96 object-cover rounded-sm">
                <h2 class="text-california font-medium text-xl p-2">Pembangunan Cooling Tower</h2>
            </div>
            <div class="shadow-xl p-2 pb-5 ">
                <img src="img/land-clearing-PToleo.jpg" class="w-full h-96 object-cover rounded-sm">
                <h2 class="text-california font-medium text-xl p-2">Land Clearing dan Pemadatan Jalan |<br>PT Energi Oleo Persada</h2>
            </div>
            <div class="shadow-xl p-2 pb-5 ">
                <img src="img/Install-pipecool-PToleo.jpg" class="w-full h-96 object-cover object-top rounded-sm">
                <h2 class="text-california font-medium text-xl p-2">Pemasangan Pipa Line Ensizmatic |<br>PT Energi Oleo Persada</h2>
            </div>
            <div class="shadow-xl p-2 pb-5 ">
                <img src="img/pipa-line-PToleo.jpg" class="w-full h-96 object-cover rounded-sm">
                <h2 class="text-california font-medium text-xl p-2">Instalasi Pipa Cooling Tower |<br> PT Energi Oleo Persada</h2>
            </div>
        </div>
        <div class="shadow-xl p-2 pb-5 mt-12">
        <div class="grid grid-cols-2 row-auto lg:grid-cols-4 lg:gap-y-0 lg:gap-x-4 gap-y-2 gap-x-2">
            <div class="">
                <img src="img/perbaikanoil1-ptoleo.jpg" class="w-full h-64 lg:h-96 object-cover rounded-sm">
            </div>
            <div class="">
                <img src="img/perbaikanoil2-ptoleo.jpg" class="w-full h-64 lg:h-96 object-cover rounded-sm">
            </div>
            <div class="">
                <img src="img/perbaikanoil3-ptoleo.jpg" class="w-full h-64 lg:h-96 object-cover rounded-sm">
            </div>
            <div class="">
                <img src="img/perbaikanoil4-ptoleo.jpg" class="w-full h-64 lg:h-96 object-cover rounded-sm">
            </div>
        </div>
        <h2 class="text-california font-medium col-span-4 text-center text-xl pt-2">Perbaikan Oil Theral Heater | PT Energi Oleo Persada</h2>
    </div>
    </div>

    {{-- Our Client section --}}
    <h1 class="mx-auto mt-24 mb-4 text-center text-2xl lg:text-5xl font-semibold">Our Client</h1>
    <div class="mx-auto w-full pb-5 my-4">
        <div class="overflow-hidden flex group">
          <ul class="flex text-black p-4 whitespace-nowrap text-md lg:text-lg font-medium animate-loop-scroll space-x-10 group-hover:paused">
            <li class="cursor-pointer transition-all h-2 hover:scale-105 hover:text-red-700">PT. ENERGI OLEO PERSADA</li>
            <li class="cursor-pointer transition-all h-2 hover:scale-105 hover:text-red-500">PT. SOCIMAS</li>
            <li class="cursor-pointer transition-all h-2 hover:scale-105 hover:text-red-600">PT. EXPRAVET NASUBA.</li>
            <li class="cursor-pointer transition-all h-2 hover:scale-105 hover:text-orange-500">PT. INTIMAS SAWIT SEJAHTERA.</li>
            <li class="cursor-pointer transition-all h-2 hover:scale-105 hover:text-green-700">PT. MUSIM MAS.</li>
            <li class="cursor-pointer transition-all h-2 hover:scale-105 hover:text-blue-400">PT. TRIMITRA PROTEIN INDONESIA.</li>
            <li class="cursor-pointer transition-all h-2 hover:scale-105 hover:text-red-600">PT. MABAR FEED INDONESIA.</li>
            <li class="cursor-pointer transition-all h-2 hover:scale-105 hover:text-green-600">PT. SAWIT RUPAT SEJAHTERA.</li>
            <li class="cursor-pointer transition-all h-2 hover:scale-105">PT. SERDANG JAYA PERDANA.</li>
            <li class="cursor-pointer transition-all h-2 hover:scale-105 hover:text-red-600">PT. SURYA TATA MANDIRI.</li>
            <li class="cursor-pointer transition-all h-2 hover:scale-105 hover:text-blue-600">PT. ENVI TECH</li>
          </ul>
          <ul class="flex text-black p-4 whitespace-nowrap text-lg font-medium animate-loop-scroll space-x-10 group-hover:paused" aria-hidden="true">
            <li class="cursor-pointer transition-all h-2 hover:scale-105 hover:text-red-700">PT. ENERGI OLEO PERSADA</li>
            <li class="cursor-pointer transition-all h-2 hover:scale-105 hover:text-red-500">PT. SOCIMAS</li>
            <li class="cursor-pointer transition-all h-2 hover:scale-105 hover:text-red-600">PT. EXPRAVET NASUBA.</li>
            <li class="cursor-pointer transition-all h-2 hover:scale-105 hover:text-orange-500">PT. INTIMAS SAWIT SEJAHTERA.</li>
            <li class="cursor-pointer transition-all h-2 hover:scale-105 hover:text-green-700">PT. MUSIM MAS.</li>
            <li class="cursor-pointer transition-all h-2 hover:scale-105 hover:text-blue-400">PT. TRIMITRA PROTEIN INDONESIA.</li>
            <li class="cursor-pointer transition-all h-2 hover:scale-105 hover:text-red-600">PT. MABAR FEED INDONESIA.</li>
            <li class="cursor-pointer transition-all h-2 hover:scale-105 hover:text-green-600">PT. SAWIT RUPAT SEJAHTERA.</li>
            <li class="cursor-pointer transition-all h-2 hover:scale-105">PT. SERDANG JAYA PERDANA.</li>
            <li class="cursor-pointer transition-all h-2 hover:scale-105 hover:text-red-600">PT. SURYA TATA MANDIRI.</li>
            <li class="cursor-pointer transition-all h-2 hover:scale-105 hover:text-blue-600">PT. ENVI TECH</li>
          </ul>
        </div>
    </div>
    {{-- End Our Client section --}}
   <x-footer></x-footer>
</body>
</html>