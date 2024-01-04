<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use App\Models\Notifikasi;
// use App\Http\Controllers\Str;
use Illuminate\Support\Str;
use Illuminate\Auth\Events\PasswordReset;


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
                return redirect()->route('Dashboardadmin')->with('success', 'Anda Berhasil Login');
            } elseif ($user->role === 'user') {
                return redirect()->route('HomePage')->with('success', 'Anda Berhasil Login');
            } elseif ($user->role === 'guru') {
                return redirect()->route('dashboardguru')->with('success', 'Anda Berhasil Login');
            } elseif ($user->role === 'gurunotapprove') {
                return redirect()->route('loginPage')->with('Warning', 'Akun Anda Sedang Di Proses');
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

        return redirect()->route('loginPage')->with('success', 'berhasil logout');
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
            'no_telepon' => 'required|numeric|digits_between:10,12',
            'tanggal_lahir' => 'required|date|before:today',
            'foto_user' => 'image|mimes:jpeg,png,jpg',
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
            'no_telepon.digits_between' => 'Nomor telepon antara 10 sampai 12 angka.',
            'tanggal_lahir.required' => 'Tanggal lahir harus diisi.',
            'tanggal_lahir.date' => 'Format tanggal lahir tidak valid.',
            'tanggal_lahir.before' => 'Tanggal lahir harus sebelum hari ini.',
            'password.required' => 'Password harus diisi.',
            'password.min' => 'Password minimal 6 karakter.',
            're-password.required' => 'Konfirmasi password harus diisi.',
            're-password.same' => 'Konfirmasi password tidak cocok dengan password.',
        ]);

        // $user  = $request->all();
        // $user['password'] = Hash::make($user['password']);
        $user = [
            'name' => $request->name,
            'email' => $request->email,
            'no_telepon' => $request->no_telepon,
            'asal_sekolah' => $request->asal_sekolah,
            'password' => Hash::make($request->password),
        ];
        // dd('sad');
        User::create($user);
        // return view('auth.guru');

        return redirect()->route('loginPage')->with('success', 'Anda Berhasil Registrasi');
    }



    public function registerguruPage()
    {
        return view('auth.guru');
    }

    public function createregisguru(Request $request)
    {
        //  dd($request->all());
        $request->validate([
            'name' => 'required|unique:users,name',
            'email' => 'required|email|unique:users,email',
            'no_telepon' => 'required|numeric|digits_between:10,12',
            'tanggal_lahir' => 'required|date|before:today',
            'foto_user' => 'required|image|mimes:jpeg,png,jpg,jfif',
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
            'no_telepon.digits_between' => 'Nomor telepon antara 10 sampai 12 angka.',
            'tanggal_lahir.required' => 'Tanggal lahir harus diisi.',
            'tanggal_lahir.date' => 'Format tanggal lahir tidak valid.',
            'tanggal_lahir.before' => 'Tanggal lahir harus sebelum hari ini.',
            'foto_user.required' => 'Foto harus diisi.',
            'foto_user.image' => 'File harus berupa gambar.',
            'foto_user.mimes' => 'Format file gambar tidak valid. Hanya diperbolehkan format jpeg, png, jpg, atau jfif.',
            'password.required' => 'Password harus diisi.',
            'password.min' => 'Password minimal 6 karakter.',
            're-password.required' => 'Konfirmasi password harus diisi.',
            're-password.same' => 'Konfirmasi password tidak cocok dengan password.',
        ]);


        $foto_user = $request->file('foto_user');
        $foto_userName = uniqid() . '.' . $foto_user->getClientOriginalExtension();
        // dd($foto_userName);
        $foto_user->storeAs('profile/',$foto_userName);
        // $user  = $request->all();
        // $user['password'] = Hash::make($user['password']);
        $user = User::create([
            'foto_user' => $foto_userName,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'gurunotapprove',
            'no_telepon'=> $request->no_telepon,

        ]);

        $user = User::where('email', $request->email)->first();

        if ($user){

            $user->Guru()->create([
                'user_id' => $user->id,
                'no_telepon' => $request->no_telepon,
                'tanggal_lahir' => $request->tanggal_lahir,
                'pendidikan' => $request->pendidikan,
                'alamat' => $request->alamat,
                // 'foto_sertifikat' => $foto_sertifikatName,
                // 'foto_ktp' => $foto_ktpName,
            ]);
            // Find admin user
            $admin = User::where('role', 'admin')->first();

            // Check if the admin user exists before creating a notification
            if ($admin) {
                Notifikasi::create([
                    'sender_id' => $user->id,
                    'user_id' => $admin->id,
                    'title' => $user->name,
                    'message' => $user->name . " Register sebagai guru",
                ]);
            }

            return redirect()->route('loginPage')->with('success', 'Tunggu proses konfirmasi akun anda');
        }

        // Handle the case where the user was not found
        return redirect()->route('loginPage')->with('error', 'Gagal membuat akun guru. Silakan coba lagi.');
    }

    public function forgotpassword()
    {
        return view('password.forgot-password');
    }

    public function forgotpassword_store(Request $request)
    {
        $request->validate([ 'email'=> 'required|email']);
        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
        ? back()->with(['status' => __($status)])
        : back()->withErrors(['email'=>__($status)]);
    }

    public function resetpassword_token(string $token)
    {
        return view('password.reset-password', ['token' => $token]);
    }
    public function resetpassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ],[
            'password.required' => 'password tidak boleh kosong',
            'password.min' => 'minimal password 8 '
        ]);

        $status = Password::reset(
            $request->only( 'email','password', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));
                $user->save();
                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
        ? redirect()->route('loginPage')->with('status',  __($status))
        : back()->withErrors(['email'=> __($status)]);
    }
}
