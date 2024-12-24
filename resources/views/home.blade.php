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
        <div class="w-full h-128 bg-[url('/public/img/hero.png')] bg-no-repeat bg-cover relative bg-center lg:bg-left">
                <h1 class="lg:text-7xl text-4xl font-black text-white absolute bottom-0 p-20">Providing High Value<br>Construction Projects</h1>
                </div>    
        </div>
    </div>
    <div class="w-full mx-auto py-5 h-48 bg-red-900">
        <h1 class="text-white text-5xl text-center font-semibold appear-left mt-7"><i>FUTURE PLANS</i></h1>
        <p class="text-white text-center text-xl appear-left mt-4">Menjadi perusahaan kontraktor terkemuka yang dikenal akan kualitas, inovasi, dan keberlanjutan proyek.</p>
    </div>

    <div class="mx-auto max-w-screen-xl my-10">
        <h1 class="text-4xl font-medium text-red-900 appear-top">Experience Work</h1>
        <div class="grid grid-cols-3 gap-8 gap-y-12 my-6">
            <div class="col-span-2">
                <img src="img/filter-press.jpg" class="w-full h-96 object-cover rounded-sm">
                <h2 class="text-california font-medium text-xl p-2">Pembangunan Filter Press</h2>
            </div>
            <div class="">
                <img src="img/Cooling-tower.jpg" class="w-full h-96 object-cover rounded-sm">
                <h2 class="text-california font-medium text-xl p-2">Pembangunan Cooling Tower</h2>
            </div>
            <div>
                <img src="img/land-clearing-PToleo.jpg" class="w-full h-96 object-cover rounded-sm">
                <h2 class="text-california font-medium text-xl p-2">Land Clearing dan Pemadatan Jalan |<br>PT Energi Oleo Persada</h2>
            </div>
            <div>
                <img src="img/Install-pipecool-PToleo.jpg" class="w-full h-96 object-cover rounded-sm">
                <h2 class="text-california font-medium text-xl p-2">Pemasangan Pipa Line Ensizmatic |<br>PT Energi Oleo Persada</h2>
            </div>
            <div>
                <img src="img/pipa-line-PToleo.jpg" class="w-full h-96 object-cover rounded-sm">
                <h2 class="text-california font-medium text-xl p-2">Instalasi Pipa Cooling Tower |<br> PT Energi Oleo Persada</h2>
            </div>
        </div>
        <div class="grid grid-cols-4 gap-x-4 my-12">
            <div class="">
                <img src="img/perbaikanoil1-ptoleo.jpg" class="w-full h-96 object-cover rounded-sm">
            </div>
            <div class="">
                <img src="img/perbaikanoil2-ptoleo.jpg" class="w-full h-96 object-cover rounded-sm">
            </div>
            <div class="">
                <img src="img/perbaikanoil3-ptoleo.jpg" class="w-full h-96 object-cover rounded-sm">
            </div>
            <div class="">
                <img src="img/perbaikanoil4-ptoleo.jpg" class="w-full h-96 object-cover rounded-sm">
            </div>
            <h2 class="text-california font-medium col-span-4 text-center text-xl pt-2">Perbaikan Oil Theral Heater | PT Energi Oleo Persada</h2>
        </div>
    </div>

   <x-footer></x-footer>
</body>
</html>