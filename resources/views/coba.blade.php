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
                <button id="profile-icon" class="fas fa-user-circle text-3xl focus:outline-none"></button>
                <div id="dropdown-menu" class="hidden absolute right-0 mt-2 w-48 bg-light rounded-lg shadow-lg z-10">
                    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Profile</a>
                    <a href="{{ route('changepass') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Settings</a>
                    <a href="{{ route('signout') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <h1 class="text-center text-5xl font-bold p-96">
        Selamat Datang {{ $userName }} <br> ({{ $userEmail }})
    </h1>
</body>
<script>
    document.getElementById('profile-icon').addEventListener('click', function(event) {
        event.stopPropagation();
        var dropdown = document.getElementById('dropdown-menu');
        dropdown.classList.toggle('hidden');
    });

    document.addEventListener('click', function(event) {
        var dropdown = document.getElementById('dropdown-menu');
        if (!dropdown.classList.contains('hidden') && !event.target.closest('#dropdown-menu')) {
            dropdown.classList.add('hidden');
        }
    });
</script>


{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modal Example</title>
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <!-- Layout with Login Button -->
    <div class="p-6 bg-white rounded shadow-lg">
        <button id="loginButton" class="text-white bg-blue-500 hover:bg-blue-700 px-4 py-2 rounded">
            Hallo
        </button>
    </div>

    <!-- Sign In Modal -->
    <div id="signInModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
        <form class="p-16 shadow-xl rounded-3xl bg-customgradient2" action="{{ route('sign-in-proses') }}" method="post">                
            @csrf
            <h1 class="text-5xl font-bold font-montserrat leading-6 text-center text-dark-purple mb-5">Login</h1>
            <p class="text-2xl font-bold leading-6 text-center text-dark-purple mb-5">Login Your Account</p>   
            <div class="sm:col-span-4 mb-2">
                <label for="email" class="block text-lg font-bold leading-6 text-dark-purple">Email</label>
                <div class="mt-2">
                    <div class="flex shadow-sm">
                        <input type="email" name="email" id="email" autocomplete="email" class="rounded-full flex-1 bg-light py-3 px-5 text-dark-purple font-semibold placeholder:text-gray focus:outline-none sm:text-base sm:leading-6" placeholder="Masukkan email">
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
                        <input type="password" name="password" id="password" autocomplete="password" class="rounded-l-full flex-1 bg-light py-3 px-5 text-dark-purple font-semibold placeholder:text-gray focus:outline-none sm:text-base sm:leading-6" placeholder="Masukkan password">
                        <span class="icon-eye cursor-pointer py-3 px-5 rounded-r-full bg-light text-dark-purple" onclick="togglePasswordVisibility()">
                            <i class="fas fa-eye"></i>
                        </span>
                    </div>
                </div>
                @error('password')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div class="text-sm text-dark font-medium text-right my-4 hover:underline">
                <a href="#">Forget Password?</a>
            </div>
            <button class="bg-light font-bold text-center py-3 px-5 rounded-full w-full text-dark-purple hover:bg-dark-purple hover:text-light">Sign in</button>
            <button id="closeModal" class="mt-4 bg-light font-bold text-center py-3 px-5 rounded-full w-full text-dark-purple hover:bg-dark-purple hover:text-light">Close</button>
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
