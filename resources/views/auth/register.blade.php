<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="bg-white dark:bg-slate-900 font-montserrat h-screen">
    <div class="header sticky h-auto top-0 z-50 w-auto bg-white transition-all duration-300">
        <div class="container mx-auto flex justify-between items-center p-8">
            <div class="text-dark dark:text-white">
                <p>Logo</p>
            </div>
            <div class="relative">
                <div class="hidden md:flex space-x-4">
                    <a href="/login"><button
                            class="rounded-3xl font-bold px-12 py-3 text-purple dark:text-white hover:bg-customgradient3 hover:shadow-xl hover:text-light">Login</button></a>
                    <a href="/register"><button
                            class="rounded-3xl font-bold px-12 py-3 bg-customgradient3 text-light shadow-xl">Register</button></a>
                </div>
                <div class="flex md:hidden md:space-x-4">
                    <button id="bars-icon" class="fas fa-solid fa-bars text-2xl text-purple dark:text-white"></button>
                    <div id="dropdown-menu" class="hidden absolute right-0 mt-10 w-48 bg-slate-100 dark:bg-slate-700 rounded-lg shadow-lg">
                        <a href="/login"><button
                                class="flex rounded-lg py-2 w-full justify-center font-bold text-purple hover:text-white hover:bg-purple dark:hover:bg-orange-500 dark:hover:text-white dark:text-white">Login</button></a>
                        <a href="/register"><button
                                class="flex rounded-lg py-2 w-full justify-center font-bold text-purple hover:text-white hover:bg-purple dark:hover:bg-orange-500 dark:hover:text-white dark:text-white">Register</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-aos="flip-left" data-aos-duration="1000" class="container mx-auto w-full">
        <div class="flex items-center justify-center my-auto">
            <form class="lg:p-16 md:p-10 sm:p-10 p-5 bg-customgradient3 dark:bg-customgradient1 shadow-2xl rounded-xl"
                action="{{ route('register-proses') }}" method="post">
                @csrf
                <h1 class="lg:text-5xl text-4xl font-bold leading-6 text-center text-white mb-8 dark:text-white">Register</h1>
                <div class="sm:col-span-4 mb-2">
                    <label for="name" class="block text-base font-bold leading-6 text-white dark:text-white">Full Name</label>
                    <div class="mt-2">
                        <div class="flex shadow-sm">
                            <input type="text" name="name" id="name" value="{{ old('email') }}"
                                autocomplete="name"
                                class="rounded-xl flex-1 bg-light py-3 px-5 text-dark font-semibold placeholder:text-abu focus:outline-none sm:text-base sm:leading-6 dark:bg-white dark:text-dark"
                                placeholder="Masukkan username">
                        </div>
                    </div>
                    @error('email')
                        <small class="text-rose-500">{{ $message }}</small>
                    @enderror
                </div>
                <div class="sm:col-span-4 mb-2">
                    <label for="email"
                        class="block lg:text-lg text-base font-bold leading-6 text-white dark:text-white">Email</label>
                    <div class="mt-2">
                        <div class="flex shadow-sm">
                            <input type="email" name="email" id="email" autocomplete="email"
                                value="{{ old('email') }}"
                                class="rounded-xl flex-1 bg-light py-3 px-5 text-dark font-semibold placeholder:text-abu focus:outline-none sm:text-base sm:leading-6 dark:bg-white dark:text-dark"
                                placeholder="Masukkan email">
                        </div>
                    </div>
                    @error('email')
                        <small class="text-rose-500">{{ $message }}</small>
                    @enderror
                </div>
                <div class="sm:col-span-4 mb-2">
                    <label for="password"
                        class="block lg:text-lg text-base font-bold leading-6 text-white dark:text-white">Password</label>
                    <div class="mt-2">
                        <div class="flex shadow-sm">
                            <input type="password" name="password" id="password" autocomplete="password"
                                class="rounded-l-xl flex-1 bg-light py-3 px-5 text-dark font-semibold placeholder:text-abu focus:outline-none sm:text-base sm:leading-6 dark:bg-white dark:text-dark"
                                placeholder="Masukkan password">
                            <span class="icon-eye cursor-pointer py-3 px-5 rounded-r-xl bg-light text-purple dark:text-dark dark:bg-white">
                                <i class="fas fa-eye"></i>
                            </span>
                        </div>
                        @error('password')
                            <small class="text-rose-500">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <button
                    class="bg-light font-bold text-center py-3 mt-8 px-5 rounded-xl w-full text-purple dark:text-dark">Register</button>
            </form>
        </div>
    </div>
</body>
<x-darkmode></x-darkmode>
@vite('resources/js/dropdown.js')
@vite('resources/js/eye.js')
@vite('resources/js/header.js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

@if ($message = Session::get('failed'))
    <script>
        Swal.fire("{{ $message }}");
    </script>
@endif

@if ($message = Session::get('success'))
    <script>
        Swal.fire("{{ $message }}");
    </script>
@endif

</html>
