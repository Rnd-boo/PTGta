<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('https://rsms.me/inter/inter.css') }}">
    <link rel="shortcut icon" href="img/logo.png" />
    <script defer src="{{ asset('https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js') }}"></script>
    <title>PT.Gema Trimitra Andalan</title>
</head>
<body class="flex flex-col min-h-screen">
    <x-navbar></x-navbar>
    {{ $slot }}
    <x-footer></x-footer>
</body>
</html>