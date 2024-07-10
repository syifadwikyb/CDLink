<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Validation\ValidatesRequests;

class LoginController extends Controller
{
    // Menampilkan halaman login
    public function index()
    {
        return view("components/signin");
    }

    // Proses login
    public function signin_proses(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Mengambil kredensial dari request
        $credentials = $request->only('email', 'password');

        // Mencoba untuk login
        if (Auth::attempt($credentials)) {
            if(!empty($_POST['remember'])){
                setcookie("email",$_POST['email'],time()+3600);
                setcookie("password",$_POST['password'],time()+3600);
            }else{
                setcookie("email","");
                setcookie("password","");
            }


            return redirect()->route('coba');  // Masuk ke dashboard ketika berhasil login
        } else {
            return redirect()->route('sign-in')->with('failed', 'Email atau Password Salah');
        }
    }

    // Menampilkan halaman signup
    public function signup()
    {
        return view('components/signup');
    }

    // Proses signup
    public function signup_proses(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ]);

        // Menyiapkan data untuk dimasukkan ke database
        $data['name']       = $request->name;
        $data['email']      = $request->email;
        $data['password']   = Hash::make($request->password);

        // Membuat user baru
        User::create($data);

        // Kredensial untuk login
        $credentials = [
            'email'     => $request->email,
            'password'  => $request->password
        ];

        // Mencoba untuk login setelah signup
        if (Auth::attempt($credentials)) {
            return redirect()->route('coba');  // Masuk ke dashboard ketika berhasil login
        } else {
            return redirect()->route('sign-in')->with('failed', 'Email atau Password Salah');
        }
    }

    public function signout(){
        Auth::logout();
        return redirect()->route('sign-in')->with('success', 'Kamu berhasil logout');
    }

    public function coba()
    {
        $user = auth()->user();
        $userName = $user->name; // Mendapatkan nama pengguna yang sedang masuk
        $userEmail = $user->email;
        return view('coba', compact('userName','userEmail')); // Mengirimkan email ke view
    }


    public function changepass()
{
    return view('changepass');
}

    public function changepass_proses(Request $request)
    {
        $request->validate([
            'oldpassword' => 'required',
            'newpassword' => 'required|min:8',
            'confirmpassword' => 'required|same:newpassword|min:8',
        ]);

        $oldpassword = $request->oldpassword;
        $newpassword = $request->newpassword;

        $id = Auth::id(); // Mengambil ID pengguna yang sedang login
        $user = User::findOrFail($id);

        if (Hash::check($oldpassword, $user->password)) {
            $user->password = bcrypt($newpassword);

            try {
                $user->save();
                return redirect()->route('changepass')->with('success', 'Selamat anda berhasil ubah password');
            } catch (\Exception $e) {
                return redirect()->route('changepass')->with('failed', 'Anda gagal mengubah password');
            }
        } else {
            return redirect()->route('changepass')->with('failed', 'Anda salah memasukkan password lama');
        }
    }
}
