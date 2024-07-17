<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- penting --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- penting --}}
    <title>Selamat Datang</title>
</head>
<body class="bg-light">
    <img src="{{ asset('asset/sprinkle1.png') }}" alt="" class="absolute w-full h-full -z-10">
    <div class="container m-auto ">
        <div class="sticky top-0 z-20 flex items-center justify-between pt-12">
            <div class="">
                <p>Logo</p>
            </div>
            <div class="relative">
                <button id="profile-icon" class="text-3xl fas fa-user-circle focus:outline-none"></button>
                <div id="dropdown-menu" class="absolute right-0 z-10 hidden w-48 mt-2 rounded-lg shadow-lg bg-light">
                    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Profile</a>
                    <a href="{{ route('changepass') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Settings</a>
                    <a href="{{ route('signout') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <h1 class="mx-auto text-5xl font-bold text-center">
        Selamat Datang {{ $userName }} <br> ({{ $userEmail }})
    </h1>
    {{-- copy --}}
    <div class="mx-auto bg-gray-100 shadow-xl xl:flex">
        <div class="w-full xl:w-2/3">  <x-customization-box></x-customization-box></div>
        <div class="w-full p-6 xl:w-1/3 xl:sticky xl:top-0 xl:h-screen preview"><x-preview-box></x-preview-box></div>
    </div>
    {{-- copy --}}
</body>
{{-- copy --}}

{{-- copy --}}

</html>
