<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <title>Selamat Datang</title>
</head>
<body class="bg-white font-montserrat">
    <div class="container mx-auto">
        <div class="header sticky z-20 top-0 flex justify-between items-center p-8 bg-slate-100 transition-all duration-300">
            <div>
                <p>Logo</p>
            </div>
            <div class="relative">
                <button id="bars-icon" class="fas fa-user-circle text-5xl focus:outline-none"></button>
                <div id="dropdown-menu" class="hidden absolute right-0 mt-2 w-48 bg-light rounded-lg shadow-lg z-10">
                    <a href="#" class="flex rounded-lg py-2 w-full justify-center font-bold text-purple hover:text-white hover:bg-purple">Profile</a>
                    <a href="{{ route('changepass') }}" class="flex rounded-lg py-2 w-full justify-center font-bold text-purple hover:text-white hover:bg-purple">Settings</a>
                    <a href="{{ route('signout') }}" class="flex rounded-lg py-2 w-full justify-center font-bold text-purple hover:text-white hover:bg-purple">Logout</a>
                </div>
            </div>
        </div>
        <div class="flex mt-3">
            <x-customizationBox class="flex-1"></x-customizationBox>
            <div class="ml-10">
                <x-previewBox></x-previewBox>
            </div>            
        </div>
    </div>
    <x-footer></x-footer>
    @vite('resources/js/dropdown.js')
</body>
</html>

