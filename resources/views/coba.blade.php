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

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modal Example</title>
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">
    <!-- Layout with Login Button -->
    <div class="p-6 bg-white rounded shadow-lg">
        <button id="loginButton" class="px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-700">
            Hallo
        </button>
    </div>

    <!-- Sign In Modal -->
    <div id="signInModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
        <form class="p-16 shadow-xl rounded-3xl bg-customgradient2" action="{{ route('sign-in-proses') }}" method="post">                
            @csrf
            <h1 class="mb-5 text-5xl font-bold leading-6 text-center font-montserrat text-dark-purple">Login</h1>
            <p class="mb-5 text-2xl font-bold leading-6 text-center text-dark-purple">Login Your Account</p>   
            <div class="mb-2 sm:col-span-4">
                <label for="email" class="block text-lg font-bold leading-6 text-dark-purple">Email</label>
                <div class="mt-2">
                    <div class="flex shadow-sm">
                        <input type="email" name="email" id="email" autocomplete="email" class="flex-1 px-5 py-3 font-semibold rounded-full bg-light text-dark-purple placeholder:text-gray focus:outline-none sm:text-base sm:leading-6" placeholder="Masukkan email">
                    </div>
                </div>
                @error('email')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div class="sm:col-span-4">
                <label for="password" class="block text-base font-bold leading-6 text-dark-purple">Password</label>
                <div class="mt-2">
                    <div class="flex shadow-sm">
                        <input type="password" name="password" id="password" autocomplete="password" class="flex-1 px-5 py-3 font-semibold rounded-l-full bg-light text-dark-purple placeholder:text-gray focus:outline-none sm:text-base sm:leading-6" placeholder="Masukkan password">
                        <span class="px-5 py-3 rounded-r-full cursor-pointer icon-eye bg-light text-dark-purple" onclick="togglePasswordVisibility()">
                            <i class="fas fa-eye"></i>
                        </span>
                    </div>
                </div>
                @error('password')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div class="my-4 text-sm font-medium text-right text-dark hover:underline">
                <a href="#">Forget Password?</a>
            </div>
            <button class="w-full px-5 py-3 font-bold text-center rounded-full bg-light text-dark-purple hover:bg-dark-purple hover:text-light">Sign in</button>
            <button id="closeModal" class="w-full px-5 py-3 mt-4 font-bold text-center rounded-full bg-light text-dark-purple hover:bg-dark-purple hover:text-light">Close</button>
        </form>
    </div>

    <script>
        // Get elements
        const loginButton = document.getElementById('loginButton');
        const signInModal = document.getElementById('signInModal');
        const closeModal = document.getElementById('closeModal');

        // Show modal when login button is clicked
        loginButton.addEventListener('click', function() {
            signInModal.classList.remove('hidden');
        });

        // Hide modal when close button is clicked
        closeModal.addEventListener('click', function() {
            signInModal.classList.add('hidden');
        });

        // Hide modal when clicking outside of the modal content
        window.addEventListener('click', function(event) {
            if (event.target === signInModal) {
                signInModal.classList.add('hidden');
            }
        });
        
    </script>
</body> --}}
