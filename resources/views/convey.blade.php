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
<body class="bg-red-900">
    <x-navbar></x-navbar>
    <div>
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex justify-evenly">
          <div class="max-w-xl pt-2">
            <img src="img/convey-hero.jpg" alt="Convey pic" class="w-full" />
          </div>
          <div class="mx-2 h-80 w-96 content-center rounded-b-xl bg-orange-500 p-2 text-white">
            <h1 class="-mt-6 mb-8 text-3xl font-semibold text-white">CONVEYING SYSTEM</h1>
            <h2 class="-mt-2 mb-2 text-xl font-medium">Product Description</h2>
            <p class="inline-block align-middle text-lg">Through the application of advanced dedicated technologies, it provides the best solutions for different packaging types to ensure the best transportation effect.</p>
          </div>
        </div>
        <div class="mx-auto mt-12 mb-6 text-white">
          <div class="flex my-1">
            <svg aria-hidden="true" class="w-4 fill-orange-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-352a96 96 0 1 1 0 192 96 96 0 1 1 0-192z" /></svg>
            <h1 class="mx-1 text-xl font-semibold">BOTTLE CONVEYING</h1>
          </div>
          <img src="img/bottle-convey.jpg" alt="" class="w-80 mb-2" />
          <ul class="mx-1 flex list-inside list-disc justify-evenly marker:text-orange-500">
            <li class="text-xl">
              <span class="font-medium"> Technical Advantages</span>
              <ul>
                <li class="mx-4 text-base">Buffer Device : It cane automatically adjust according to the size and shape of the bottle, effectively reducing collisions and damage.</li>
                <li class="mx-4 py-2 text-base">Pressure-free Conveyor : It avoids external force squeezing, maintaining the integrity and stability of the bottle.</li>
                <li class="mx-4 text-base">Bottle Lane Divide : Flexible allocation to different conveyor channels to meet the requirements of multi-directional transportation.</li>
              </ul>
            </li>
            <li>
              <span class="font-medium">APPLICATION</span>
              <div class="flex">
                <div>
                  <div class="aspect-square w-32 rounded-lg border-4 border-orange-600">
                    <img src="/img/glass-bottle.png" alt="Glass Bottle">
                  </div>
                  <h2 class="text-sm text-center text-yellow-100">GLASS BOTTLE</h2>
                </div>
                <div>
                  <div class="mx-2 aspect-square w-32 rounded-lg border-4 border-orange-600">
                    <img src="/img/pet-bottle.png" alt="Pet Bottle" class="mt-2">
                  </div>
                  <h2 class="text-sm text-center text-yellow-100">PET BOTTLE</h2>
                </div>
                <div>
                  <div class="aspect-square w-32 rounded-lg border-4 border-orange-600">
                    <img src="/img/aluminium-can.png" alt="Aluminium Can" class="mt-2">
                  </div>
                  <h2 class="text-sm text-center text-yellow-100">ALUMINIUM CAN</h2>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="mx-auto mt-12 mb-6 text-white">
          <div class="flex my-1">
            <svg aria-hidden="true" class="w-4 fill-orange-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-352a96 96 0 1 1 0 192 96 96 0 1 1 0-192z" /></svg>
            <h1 class="mx-1 text-xl font-semibold">BAG CONVEYING</h1>
          </div>
          <img src="img/bag-convey.jpg" alt="" class="w-80 mb-2" />
          <ul class="mx-1 flex list-inside list-disc justify-evenly marker:text-orange-500">
            <li class="text-xl">
              <span class="font-medium"> Technical Advantages</span>
              <ul>
                <li class="mx-4 text-base">Speed Buffering : It automatically adjusts according to the speed to ensure stable conveying of bagged items.</li>
                <li class="mx-4 py-2 text-base">Dividing and Merging function : The conveying channel can be flexibly designed for splitting and merging, meeting various production needs.</li>
                <li class="mx-4 text-base">Anti-Deviation : The unique design effectively prevents bags from deviating, ensuring the quality of conveying.</li>
              </ul>
            </li>
            <li>
              <span class="font-medium">APPLICATION</span>
              <div class="flex">
                <div>
                  <div class="aspect-square w-32 rounded-lg border-4 border-orange-600"></div>
                  <h2 class="text-sm text-center text-yellow-100">POUCH FOOD</h2>
                </div>
                <div>
                  <div class="mx-2 aspect-square w-32 rounded-lg border-4 border-orange-600"></div>
                  <h2 class="text-sm text-center text-yellow-100">HOUSEHOLD CHEMICALS</h2>
                </div>
                <div>
                  <div class="aspect-square w-32 rounded-lg border-4 border-orange-600"></div>
                  <h2 class="text-sm text-center text-yellow-100">AGRICULTURAL PRODUCTS</h2>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="mx-auto mt-12 text-white">
          <div class="flex my-1">
            <svg aria-hidden="true" class="w-4 fill-orange-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-352a96 96 0 1 1 0 192 96 96 0 1 1 0-192z" /></svg>
            <h1 class="mx-1 text-xl font-semibold">MODULE CONVEYING</h1>
          </div>
          <img src="img/module-convey.jpg" alt="" class="w-80 mb-2" />
          <ul class="mx-1 flex list-inside list-disc justify-evenly marker:text-orange-500">
            <li class="text-xl">
              <span class="font-medium">Technical Advantages</span>
              <ul>
                <li class="mx-4 text-base">Precision Control : Advanced technology is used to ensure the precision of modules during conveying.</li>
                <li class="mx-4 py-2 text-base">Accurate Positioning : Automated positioning of modules reduces errors and improves production efficiency.</li>
                <li class="mx-4 text-base">Avoiding Cumulative Errors : Unique design effectively prevents cumulative errors during conveying.</li>
              </ul>
            </li>
            <li>
              <span class="font-medium">APPLICATION</span>
              <div class="flex">
                <div>
                  <div class="aspect-square w-32 rounded-lg border-4 border-orange-600"></div>
                  <h2 class="text-sm text-center text-yellow-100">METAL PARTS</h2>
                </div>
                <div>
                  <div class="mx-2 aspect-square w-32 rounded-lg border-4 border-orange-600"></div>
                  <h2 class="text-sm text-center text-yellow-100">BAGGED PRODUCT</h2>
                </div>
                <div>
                  <div class="aspect-square w-32 rounded-lg border-4 border-orange-600"></div>
                  <h2 class="text-sm text-center text-yellow-100">MEDICAL CARE</h2>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div>
        <p class="text-blue-400 mx-auto mt-10 my-5"><a href="/" class="hover:underline">&lt;Back</a></p>
      </div>
      </div>
    </div>
</body>
</html>