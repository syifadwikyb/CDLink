<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @vite('resources/css/app.css')
    <title>Selamat Datang</title>
</head>
<body class="bg-white">
    {{-- <img src="{{ asset('asset/sprinkle1.png') }}" alt="" class="w-full h-full absolute -z-10"> --}}
    <div class="container m-auto ">
        <div class="flex bg-green-200 mb-2 justify-between items-center pt-12">
            <div class="">
                <p>Logo</p>
            </div>
            <div class="relative">
                <button id="bars-icon" class="fas fa-user-circle text-3xl focus:outline-none"></button>
                <div id="dropdown-menu" class="hidden absolute right-0 mt-2 w-48 bg-light rounded-lg shadow-lg z-10">
                    <a href="#" class="flex rounded-lg py-2 w-full justify-center font-bold text-purple hover:text-white hover:bg-purple">Profile</a>
                    <a href="{{ route('changepass') }}" class="flex rounded-lg py-2 w-full justify-center font-bold text-purple hover:text-white hover:bg-purple">Settings</a>
                    <a href="{{ route('signout') }}" class="flex rounded-lg py-2 w-full justify-center font-bold text-purple hover:text-white hover:bg-purple">Logout</a>
                </div>
            </div>
        </div>
        <div class="flex">
            <x-customizationBox></x-customizationBox>
            <div class="sticky">
                <x-previewBox></x-previewBox>
            </div>
        </div>
    </div>
    {{-- <h1 class="text-center text-5xl font-bold">
        Selamat Datang {{ $userName }} <br> ({{ $userEmail }})
    </h1> --}}
    @vite('resources/js/dropdown.js')
</body>
</html>
