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
    {{-- <div class="w-4/5 mx-auto mt-6 h-40 view()">
        <h1 class="text-red-900 text-5xl text-center font-semibold lihat pt-10"><i>FUTURE PLANS</i></h1>
        <p class="text-black text-center text-xl lihat py-10">Menjadi perusahaan kontraktor terkemuka yang dikenal akan kualitas, inovasi, dan keberlanjutan proyek.</p>
    </div> --}}
   <x-footer></x-footer>
</body>
</html>