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
<body class="bg-light">
    <img src="{{ asset('asset/sprinkle1.png') }}" alt="" class="w-full h-full absolute -z-10">
    <div class="container m-auto ">
        <div class="top-0 sticky z-20 flex justify-between items-center pt-12">
            <div class="">
                <p>Logo</p>
            </div>
            <div class="relative">
                <button id="bars-icon" class="fas fa-user-circle text-3xl focus:outline-none"></button>
                <div id="dropdown-menu" class="hidden absolute right-0 mt-2 w-48 bg-light rounded-lg shadow-lg z-10">
                    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Profile</a>
                    <a href="{{ route('changepass') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Settings</a>
                    <a href="{{ route('signout') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <h1 class="text-center text-5xl font-bold">
        Selamat Datang {{ $userName }} <br> ({{ $userEmail }})
    </h1>
    @vite('resources/js/dropdown.js')
</body>
</html>
