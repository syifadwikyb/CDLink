<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @vite('resources/css/app.css')
</head>
<body class="bg-white dark:bg-slate-900 font-montserrat">
    <div class="container m-auto ">
        <div class="flex items-center justify-center h-screen">
            <form class="lg:p-16 md:p-10 p-8 shadow-xl rounded-3xl bg-customgradient2 dark:bg-customgradient1" action="{{ route('changepass-proses') }}" method="post">
                @csrf
                <h1 class="lg:text-5xl md:text-3xl text-2xl font-bold font-montserrat leading-6 text-center text-white mb-5">Change Password</h1>
                <div class="sm:col-span-4 mb-2">
                    <label for="oldpassword" class="block text-sm lg:text-base font-bold leading-6 text-white">Old Password</label>
                    <div class="mt-2">
                        <div class="flex shadow-sm">
                            <input type="password" name="oldpassword" id="oldpassword" autocomplete="oldpassword" class="rounded-l-xl flex-1 bg-light py-3 px-5 text-purple dark:text-black font-semibold placeholder:text-abu focus:outline-none lg:text-base text-sm sm:leading-6" placeholder="Masukkan password">                            
                            <span class="icon-eye cursor-pointer py-3 px-5 rounded-r-xl bg-light text-purple dark:text-black" onclick="togglePasswordVisibility('oldpassword')">
                                <i class="fas fa-eye"></i>
                            </span>
                        </div>
                        @error('oldpassword')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="sm:col-span-4 mb-2">
                    <label for="newpassword" class="block text-sm lg:text-base font-bold leading-6 text-white">New Password</label>
                    <div class="mt-2">
                        <div class="flex shadow-sm">
                            <input type="password" name="newpassword" id="newpassword" autocomplete="newpassword" class="rounded-l-xl flex-1 bg-light py-3 px-5 text-purple dark:text-black font-semibold placeholder:text-abu focus:outline-none lg:text-base text-sm sm:leading-6" placeholder="Masukkan password">                            
                            <span class="icon-eye cursor-pointer py-3 px-5 rounded-r-xl bg-light text-purple dark:text-black" onclick="togglePasswordVisibility('newpassword')">
                                <i class="fas fa-eye"></i>
                            </span>
                        </div>
                        @error('newpassword')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="sm:col-span-4 mb-2">
                    <label for="confirmpassword" class="block text-sm lg:text-base font-bold leading-6 text-white">Confirm Password</label>
                    <div class="mt-2">
                        <div class="flex shadow-sm">
                            <input type="password" name="confirmpassword" id="confirmpassword" autocomplete="confirmpassword" class="rounded-l-xl flex-1 bg-light py-3 px-5 text-purple dark:text-black font-semibold placeholder:text-abu focus:outline-none lg:text-base text-sm sm:leading-6" placeholder="Masukkan password">
                            <span class="icon-eye cursor-pointer py-3 px-5 rounded-r-xl bg-light text-purple dark:text-black" onclick="togglePasswordVisibility('confirmpassword')">
                                <i class="fas fa-eye"></i>
                            </span>                            
                        </div>
                        @error('confirmpassword')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <button class="bg-light font-bold text-center py-3 mt-3 rounded-xl w-full text-purple dark:text-black hover:bg-white lg:text-base text-sm dark:hover:bg-orange-500">Change Password</button>
                <div class="text-left mt-3"><button class="font-bold lg:text-base text-sm text-black py-2 px-5 rounded-xl bg-white dark:hover:bg-orange-500"><a href="{{ route('coba') }}">Kembali</a></button></div>
            </form>
        </div>
    </div>
</body>
<script>
    function togglePasswordVisibility(inputId) {
        const passwordInput = document.getElementById(inputId);
        const icon = passwordInput.nextElementSibling.querySelector('i');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<x-darkmode></x-darkmode>
@if ($message = Session::get('failed'))
    <script>Swal.fire("{{ $message }}");</script>
@endif
@if ($message = Session::get('success'))
    <script>Swal.fire("{{ $message }}");</script>
@endif
</html>
