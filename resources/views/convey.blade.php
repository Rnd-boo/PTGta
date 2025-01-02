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
    <div class="bg-red-900">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <div class="flex justify-evenly">
            <div>
              <img src="/img/convey-hero.jpg" alt="Convey pic" class="max-w-2xl p-2" />
              <h1 class="p-2 text-center text-2xl font-semibold text-white">CONVEYING SYSTEM</h1>
            </div>
            <div class="mx-2 h-72 w-96 content-center rounded-b-lg bg-orange-500 p-2 text-white">
              <h2 class="-mt-4 mb-4 text-xl font-medium">Product Description</h2>
              <p class="inline-block align-middle text-lg">Through the application of advanced dedicated technologies, it provides the best solutions for different packaging types to ensure the best transportation effect.</p>
            </div>
          </div>
          <div class="mx-auto text-white">
            <div class="flex">
              <svg aria-hidden="true" class="w-4 fill-orange-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-352a96 96 0 1 1 0 192 96 96 0 1 1 0-192z" /></svg>
              <h1 class="mx-1 text-xl">Bottle Conveying</h1>
            </div>
            <img src="img/bottle-convey.jpg" alt="" class="w-64" />
            <ul class="list-inside list-disc decoration-orange-500">
              <li>
                Technical Advantages
                <p>Buffer device: It can automatically adjust according to the size and shape of the bottle, effectively reducing collisions and damage.</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
      
</body>
</html>