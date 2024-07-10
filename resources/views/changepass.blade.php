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
    <img src="{{ asset('asset/sprinkle1.png') }}" alt="" class="w-full h-full absolute -z-10">
    <div class="container m-auto ">
        <div class="flex items-center justify-center h-screen">
            <form class="p-16 shadow-xl rounded-3xl bg-customgradient2" action="{{ route('changepass-proses') }}" method="post">
                @csrf
                <h1 class="text-5xl font-bold font-montserrat leading-6 text-center text-dark-purple mb-5">Change Password</h1>
                <div class="sm:col-span-4 mb-2">
                    <label for="oldpassword" class="block text-base font-bold leading-6 text-dark-purple">Old Password</label>
                    <div class="mt-2">
                        <div class="flex shadow-sm">
                            <input type="password" name="oldpassword" id="oldpassword" autocomplete="oldpassword" class="rounded-l-full flex-1 bg-light py-3 px-5 text-dark-purple font-semibold placeholder:text-gray focus:outline-none sm:text-base sm:leading-6" placeholder="Masukkan password">
                            @error('oldpassword')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                            <span class="icon-eye cursor-pointer py-3 px-5 rounded-r-full bg-light text-dark-purple" onclick="togglePasswordVisibility('oldpassword')">
                                <i class="fas fa-eye"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="sm:col-span-4 mb-2">
                    <label for="newpassword" class="block text-base font-bold leading-6 text-dark-purple">New Password</label>
                    <div class="mt-2">
                        <div class="flex shadow-sm">
                            <input type="password" name="newpassword" id="newpassword" autocomplete="newpassword" class="rounded-l-full flex-1 bg-light py-3 px-5 text-dark-purple font-semibold placeholder:text-gray focus:outline-none sm:text-base sm:leading-6" placeholder="Masukkan password">
                            @error('newpassword')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                            <span class="icon-eye cursor-pointer py-3 px-5 rounded-r-full bg-light text-dark-purple" onclick="togglePasswordVisibility('newpassword')">
                                <i class="fas fa-eye"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="sm:col-span-4 mb-2">
                    <label for="confirmpassword" class="block text-base font-bold leading-6 text-dark-purple">Confirm Password</label>
                    <div class="mt-2">
                        <div class="flex shadow-sm">
                            <input type="password" name="confirmpassword" id="confirmpassword" autocomplete="confirmpassword" class="rounded-l-full flex-1 bg-light py-3 px-5 text-dark-purple font-semibold placeholder:text-gray focus:outline-none sm:text-base sm:leading-6" placeholder="Masukkan password">
                            @error('confirmpassword')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                            <span class="icon-eye cursor-pointer py-3 px-5 rounded-r-full bg-light text-dark-purple" onclick="togglePasswordVisibility('confirmpassword')">
                                <i class="fas fa-eye"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <button class="bg-light font-bold text-center py-3 mt-5 rounded-full w-full text-dark-purple hover:bg-dark-purple hover:text-light">Change Password</button>
                <a href="{{ route('coba') }}" class="font-bold text-center text-dark-purple">Kembali</a>
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

@if ($message = Session::get('failed'))
    <script>Swal.fire("{{ $message }}");</script>
@endif
</html>
