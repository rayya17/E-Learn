<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{


    public function loginPage()
    {
        return view('auth.login');
    }

    public function loginproses(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required'
        ], [
            'email.required' => 'email tidak boleh kosong',
            'email.exists' => 'email tidak terdaftar',
            'email.email' => 'silahkan masukan email yang valid',
            'password' => 'Password yang anda masukan salah',
        ]);

        $infologin = $request->only('email', 'password');
        if (Auth::attempt($infologin)) {
            $user = Auth::user();
            // dd($user);
            if ($user->role === 'admin') {
                return redirect()->route('')->with('success', 'Anda Berhasil Login');
            } elseif ($user->role === 'user') {
                return redirect()->route('HomePage')->with('success', 'Anda Berhasil Login');
            } elseif ($user->role === 'guru') {
                return redirect()->route('')->with('success', 'Anda Berhasil Login');
            }
        } else {
            return redirect()->back()->with('error', 'Akun Tidak Ditemukan');
        }
        return redirect()->route('loginPage')->with('error', 'Email Atau Kata Sandi Yang Anda Masukan Salah');
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();
        return redirect()->route('loginPage')->with('success', 'Anda Berhasil Logout.');
    }

    public function registerPage()
    {
        return view('auth.register');
    }

    public function createregis(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|unique:users,name',
            'email' => 'required|email|unique:users,email',
            'no_telepon' => 'required|numeric',
            'asal_sekolah' => 'required',
            'password' => 'required|min:6',
            're-password' => 'required|same:password',

        ], [
            'name.required' => 'Nama tidak boleh kosong.',
            'name.unique' => 'Nama sudah digunakan.',
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah terdaftar.',
            'no_telepon.required' => 'Nomor telepon harus diisi.',
            'no_telepon.numeric' => 'Nomor telepon harus berupa angka.',
            'asal_sekolah.required' => 'Asal sekolah harus diisi.',
            'password.required' => 'Password harus diisi.',
            'password.min' => 'Password minimal 6 karakter.',
            're-password.required' => 'Konfirmasi password harus diisi.',
            're-password.same' => 'Konfirmasi password tidak cocok dengan password.',
        ]);

        // $user  = $request->all();
        // $user['password'] = Hash::make($user['password']);
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'no_telepon' => $request->no_telepon,
            'asal_sekolah' => $request->asal_sekolah,
            'password' => Hash::make($request->password),
        ];

        User::create($data);

        return redirect()->route('loginPage')->with('success', 'Anda Berhasil Registrasi');
    }

    
    public function registerguruPage()
    {
        return view('auth.guru');
    }

    public function createregisguru(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|unique:users,name',
            'email' => 'required|email|unique:users,email',
            'notelp' => 'required|numeric',
            'password' => 'required|min:6',
            're-password' => 'required|same:password',
        ], [
            'name.required' => 'Nama tidak boleh kosong.',
            'name.unique' => 'Nama sudah digunakan.',
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah terdaftar.',
            'notelp.required' => 'Nomor telepon harus diisi.',
            'notelp.numeric' => 'Nomor telepon harus berupa angka.',
            'password.required' => 'Password harus diisi.',
            'password.min' => 'Password minimal 6 karakter.',
            're-password.required' => 'Konfirmasi password harus diisi.',
            're-password.same' => 'Konfirmasi password tidak cocok dengan password.',
        ]);

        // $user  = $request->all();
        // $user['password'] = Hash::make($user['password']);
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'notelp' => $request->notelp,
            'password' => Hash::make($request->password),
        ];

        User::create($data);

        return redirect()->route('loginPage')->with('success', 'Anda Berhasil Registrasi');
    }
    
}
