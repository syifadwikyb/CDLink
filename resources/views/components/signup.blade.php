<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @vite('resources/css/app.css')
</head>
<body class="bg-light">
    <img src="{{ asset('asset/sprinkle1.png') }}" alt="" class="w-full h-full absolute -z-10">
    <div class="container m-auto ">
        <div class="bg-transparent header top-0 sticky z-20 flex justify-between items-center pt-12">
            <div class="">
                <p>Logo</p>
            </div>
            <div class="flex space-x-4">
                <a href="/sign-in"><button class="rounded-3xl font-bold px-12 py-3 bg-gray text-dark-purple hover:bg-customgradient2 hover:text-light">Sign in</button></a>
                <a href="/sign-up"><button class="rounded-3xl font-bold px-12 py-3 bg-customgradient2 text-light">Sign up</button></a>
            </div>
        </div>
        <div class="flex items-center justify-center h-screen">
            <form class="p-16 bg-customgradient2 shadow-xl rounded-3xl" action="{{ route('sign-up-proses') }}" method="post">
                @csrf
                <h1 class="text-5xl font-bold leading-6 text-center text-dark-purple mb-8">Sign up</h1>
                <div class="sm:col-span-4 mb-2">
                    <label for="name" class="block text-base font-bold leading-6 text-dark-purple">Full Name</label>
                    <div class="mt-2">
                        <div class="flex shadow-sm">
                            <input type="text" name="name" id="name" value="{{ old('email') }}" autocomplete="name" class="rounded-full flex-1 bg-light py-3 px-5 text-dark-purple font-semibold placeholder:text-gray focus:outline-none sm:text-base sm:leading-6" placeholder="Masukkan username">
                        </div>
                    </div>
                    @error('email')
                        <small>{{ $message }}</small>
                    @enderror
                </div>
                <div class="sm:col-span-4 mb-2">
                    <label for="email" class="block text-base font-bold leading-6 text-dark-purple">Email</label>
                    <div class="mt-2">
                        <div class="flex shadow-sm">
                            <input type="email" name="email" id="email" autocomplete="email" value="{{ old('email') }}" class="rounded-full flex-1 bg-light py-3 px-5 text-dark-purple font-semibold placeholder:text-gray focus:outline-none sm:text-base sm:leading-6" placeholder="Masukkan email">
                        </div>
                    </div>
                    @error('email')
                        <small>{{ $message }}</small>
                    @enderror
                </div>
                <div class="sm:col-span-4 mb-2">
                    <label for="password" class="block text-base font-bold leading-6 text-dark-purple">Password</label>
                    <div class="mt-2">
                        <div class="flex shadow-sm">
                            <input type="password" name="password" id="password" autocomplete="password" class="rounded-l-full flex-1 bg-light py-3 px-5 text-dark-purple font-semibold placeholder:text-gray focus:outline-none sm:text-base sm:leading-6" placeholder="Masukkan password">
                            <span class="icon-eye cursor-pointer py-3 px-5 rounded-r-full bg-light text-dark-purple">
                                <i class="fas fa-eye"></i>
                            </span>
                        </div>
                        @error('password')
                            <small>{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <button class="bg-light font-bold text-center py-3 mt-8 px-5 rounded-full w-full text-dark-purple hover:bg-opacity-100">Sign in</button>
            </form>
        </div>
    </div>

    @vite('resources/js/eye_signup.js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if ($message = Session::get('failed'))
        <script>Swal.fire("{{ $message }}");</script>
    @endif

    @if ($message = Session::get('success'))
        <script>Swal.fire("{{ $message }}");</script>
    @endif
    </body>
</html>
