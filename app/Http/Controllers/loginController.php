<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    public function tampil_login()
    {
        return view('PublicViews/Login');
    }
    public function tampil_regis()
    {
        return view('PublicViews/Registrasi');
    }
    public function input_data_login(Request $request)
    {
        // Validasi input
        // $request->validate([
        //     'user_form' => 'required|string|max:255',
        //     'email_form' => 'required|string|email|max:255|unique:users,email',
        //     'pass_form' => 'required|string|min:8',
        // ]);

        // Simpan data user
        $newData = [
            'name' => $request->user_form,
            'email' => $request->email_form,
            'password' => Hash::make($request->pass_form)
        ];
        User::create($newData);

        // Redirect ke halaman registrasi dengan pesan sukses
        return redirect()->route('public-regis')->with('success', 'Data tersimpan');
    }

    public function proses_login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email_form' => 'required|email',
            'pass_form' => 'required'
        ]);

        // Ambil data user berdasarkan email
        $user = User::where('email', $request->email_form)->first();

        // Cek jika user ada dan password sesuai
        if ($user && Hash::check($request->pass_form, $user->password)) {
            // Login user
            Auth::login($user);

            // Redirect atau response success
            return redirect()->route('admin-pp');  // Redirect ke /pp
        } else {
            // Redirect jika login gagal
            return redirect()->route('public-login')->with('error', 'Invalid email or password');
        }
    }
}
