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
<body class="bg-light">
    <img src="{{ asset('asset/sprinkle1.png') }}" alt="" class="absolute w-full h-full -z-10">
    <div class="container m-auto ">
        <div class="sticky top-0 z-20 flex items-center justify-between pt-12 bg-transparent header">
            <div class="text-light">
                <p>Logo</p>
                {{-- <img src="{{ asset('asset/logo.svg') }}" alt=""> --}}
            </div>
            <div class="flex space-x-4">
                <a href="/sign-in"><button class="px-12 py-3 font-bold rounded-3xl bg-customgradient2 text-light ">Sign in</button></a>
                <a href="/sign-up"><button class="px-12 py-3 font-bold rounded-3xl bg-gray text-dark-purple hover:bg-customgradient2 hover:text-light">Sign up</button></a>
            </div>
        </div>
        @if (session('message'))
            <div class="alert alert-warning">
                {{ session('message') }}
            </div>
        @endif

        <div class="flex items-center justify-center h-screen">
            <form class="p-16 shadow-xl rounded-3xl bg-customgradient2" action="{{ route('sign-in-proses') }}" method="post">                
                @csrf
                <h1 class="mb-5 text-5xl font-bold leading-6 text-center font-montserrat text-dark-purple">Login</h1>
                <p class="mb-5 text-2xl font-bold leading-6 text-center text-dark-purple">Login Your Account</p>   
                <div class="mb-2 sm:col-span-4">
                    <label for="email" class="block text-lg font-bold leading-6 text-dark-purple">Email</label>
                    <div class="mt-2">
                        <div class="flex shadow-sm">
                            <input type="email" name="email" id="email" autocomplete="email" class="flex-1 px-5 py-3 font-semibold rounded-full bg-light text-dark-purple placeholder:text-gray focus:outline-none sm:text-base sm:leading-6"
                            @if (@isset($_COOKIE['email']))
                            value="{{ ($_COOKIE['email']) }}"                                
                            @endif
                            placeholder="Masukkan email">
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
                            <input type="password" name="password" id="password" autocomplete="password" class="flex-1 px-5 py-3 font-semibold rounded-l-full bg-light text-dark-purple placeholder:text-gray focus:outline-none sm:text-base sm:leading-6"
                            @if (@isset($_COOKIE['password']))
                            value="{{ ($_COOKIE['password']) }}"                                
                            @endif
                            placeholder="Masukkan password">
                            <span class="px-5 py-3 rounded-r-full cursor-pointer icon-eye bg-light text-dark-purple" onclick="togglePasswordVisibility()">
                                <i class="fas fa-eye"></i>
                            </span>
                        </div>
                    </div>
                    @error('password')
                        <small>{{ $message }}</small>
                    @enderror
                </div>
                <div class="">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Remember me</label>
                </div>
                <div class="my-4 text-sm font-medium text-dark hover:underline">
                    <a href="#">Forgot Password?</a>
                </div>
                <button class="w-full px-5 py-3 font-bold text-center rounded-full bg-light text-dark-purple hover:bg-dark-purple hover:text-light">Sign in</button>
            </form>
        </div>
    </div>
</body>
<script>
    function togglePasswordVisibility() {
        const passwordInput = document.getElementById('password');
        const icon = document.querySelector('.icon-eye i');

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

@if ($message = Session::get('failed'))
    <script>Swal.fire("{{ $message }}");</script>
@endif
</html>


