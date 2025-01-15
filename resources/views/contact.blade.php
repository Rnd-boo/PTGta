<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="shortcut icon" href="img/logo.png" />
    <script src="public/index.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
   </script>
  <script type="text/javascript">
   (function(){
      emailjs.init("wOdiFjzCBa3EED9uq");
   })();
   </script>
    <title>PT.Gema Trimitra Andalan</title>
</head>
<body  class="flex flex-col min-h-screen">
    <x-navbar></x-navbar>
    <div class="mx-auto my-10 xl:max-w-screen-xl 2xl:max-w-screen-2xl grid grid-cols-1 lg:grid-cols-2 px-4">
    <div class="lg:mr-28 md:mx-auto">
      <h1 class="text-5xl font-semibold my-10 mt-5 md:mt-20">Connect with Us</h1>
      <p class="">We're on <a href="" class="hover:text-gray-400 cursor-pointer underline text-gray-700">WhatsApp</a> if you don't like forms. <br>And acceptin emails at <a href="" class="hover:text-gray-400 cursor-pointer underline text-gray-700">gematrimitraandalan@my.com</a></p>
    </div>
  <form id="contact-form" class="mx-auto max-w-md mt-10" method="" autocomplete="off">
  <div class="group relative z-0 mb-5 w-full">
    <input type="email" name="email" id="floating_email" class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent px-0 py-2.5 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0 " placeholder=" " required />
    <label for="floating_email" class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-blue-600 rtl:peer-focus:left-auto rtl:peer-focus:translate-x-1/4  peer-focus:dark:text-blue-500">Email address</label>
  </div>
  <div class="grid md:grid-cols-2 md:gap-6">
    <div class="group relative z-0 mb-5 w-full">
      <input type="text" name="name" id="floating_first_name" class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent px-0 py-2.5 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0 " placeholder=" " required />
      <label for="floating_first_name" class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-blue-600 rtl:peer-focus:translate-x-1/4 dark:text-gray-400 peer-focus:dark:text-blue-500">First name</label>
    </div>
    <div class="group relative z-0 mb-5 w-full">
      <input type="text" name="lastName" id="floating_last_name" class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent px-0 py-2.5 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" placeholder=" " />
      <label for="floating_last_name" class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-blue-600 rtl:peer-focus:translate-x-1/4 dark:text-gray-400 peer-focus:dark:text-blue-500">Last name</label>
    </div>
  </div>
  <div class="grid md:grid-cols-2 md:gap-6">
    <div class="group relative z-0 mb-5 w-full">
      <input type="tel" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}" name="phone" id="floating_phone" class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent px-0 py-2.5 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0 " placeholder=" " required />
      <label for="floating_phone" class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-blue-600 rtl:peer-focus:translate-x-1/4 dark:text-gray-400 peer-focus:dark:text-blue-500">Phone number (08xx-xxxx-7890)</label>
    </div>
    <div class="group relative z-0 mb-5 w-full">
      <input type="text" name="company" id="floating_company" class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent px-0 py-2.5 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0 " placeholder=" " />
      <label for="floating_company" class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-blue-600 rtl:peer-focus:translate-x-1/4 dark:text-gray-400 peer-focus:dark:text-blue-500">Company (Ex. Google)</label>
    </div>
  </div>
  <div class="group relative z-0 mb-5 w-full">
    <input type="text" name="subject" id="subject" class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent px-0 py-2.5 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0 " placeholder=" " required />
    <label for="subject" class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-blue-600 rtl:peer-focus:left-auto rtl:peer-focus:translate-x-1/4 dark:text-gray-400 peer-focus:dark:text-blue-500">Subject</label>
  </div>
  <textarea id="message" rows="4" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500" placeholder="Write your thoughts here..."></textarea>
  <div class="my-4 w-full">
    <input type="checkbox" name="agreement" id="agreement" required />
    <label for="agreement" class="text-center  text-xs">I agree that the information I provide and my browsing activity may be used to fulfill my request and improve my experience. Read our privacy policy.</label>
  </div>
  <button type="submit" class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 sm:w-auto dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="index.js"></script>

    <x-footer></x-footer>
</body>
</html>