<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\user;
use App\Models\guru;
use App\Models\Notifikasi;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Notifikasi = Notifikasi::where('user_id', Auth::user()->id)->whereNotIn('title', [Auth::user()->name])->orderBy('created_at', 'desc')->get();
        $unreadNotificationsCount = Notifikasi::where('user_id', Auth::user()->id)->whereNotIn('title', [Auth::user()->name])->where('markRead', false)->count();
        $user_id  = Auth::id();
        $profileuser = User::findOrFail($user_id);
        $user = User::find($user_id);
        $riwayat = $user->Order()->where('status', 'paid')->with('materi')->get();
        // dd($user_id);
        return view('users.profile', compact('profileuser', 'user_id', 'Notifikasi', 'unreadNotificationsCount', 'riwayat'));
    }

    // public function edit($id)
    // {
    //     // dd($id);
    //     $user = User::findOrFail($id);
    //     return view('users.profile', compact('user'));
    // }

    public function updateProfile(Request $request, $id)
    {
        // dd($request->all());
        $user = User::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'tanggal_lahir' => 'required|date',
            'no_telepon' => 'required|numeric|regex:/^\d*$/|digits_between:10,12',
        ],[
            'name.required'=>'nama harus diisi',
            'tanggal_lahir.required'=> 'tanggal lahir harus diisi',
            'no_telepon.required'=> 'no telepon harus diisi',
            'no_telepon.numeric'=> 'nomor telepon harus berupa angka',
            'no_telepon.regex'=> 'nomor telepon tidak sesuai format',
            'no_telepon.digits_between'=> 'nomor telepon antara 10 sampai 12 angka',

        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if ($request->hasFile('foto_user')) {
            if ($user->foto_user) {
                unlink(storage_path('app/public/' . $user->foto_user));
            }
            $filePath = $request->file('foto_user')->store('fotouser', 'public');
            $user->foto_user = $filePath;
        }


        $user->name = $request->input('name');
        $user->tanggal_lahir = $request->input('tanggal_lahir');
        $user->no_telepon= $request->input('no_telepon');
        $user->save();
        return redirect()->route('Profile')->with('success', 'Profile berhasil diperbarui');

    }


    public function profileGuru (){
        $Notifikasi = Notifikasi::where('user_id', Auth::user()->id)->whereNotIn('title', [Auth::user()->name])->orderBy('created_at', 'desc')->get();
        $unreadNotificationsCount = Notifikasi::where('user_id', Auth::user()->id)->whereNotIn('title', [Auth::user()->name])->where('markRead', false)->count();
        $user_id = Auth::id();
        $profileguru = Guru::where('user_id', $user_id)->get();
        return view ('guru.profileuser', compact('profileguru', 'user_id', 'Notifikasi', 'unreadNotificationsCount'));
    }

    public function profileguruUp(Request $request, $id)
    {
        $user = Guru::findOrFail($id);
        $users = User::find($user->user_id);

        if (!$users) {
            return redirect()->back()->with('error', 'User not found');
        }

        $validator = Validator::make($request->all(), [
            'name' => 'string|max:255',
            'alamat' => 'min:10|max:255',
            'no_telepon' => 'numeric|regex:/^\d*$/|digits_between:10,12',
            // 'pendidikan' => 'required',
            'foto_user' => 'image|mimes:jpeg,png,jpg',
        ], [
            // 'name.required' => 'nama harus diisi',
            // 'alamat.required' => 'alamat harus diisi',
            'alamat.min' => 'alamat diisi minimal 10 huruf',
            'alamat.max' => 'alamat diisi maksimal 255 huruf',
            // 'no_telepon.required' => 'no telepon harus diisi',
            'no_telepon.numeric' => 'nomor telepon harus berupa angka',
            'no_telepon.regex' => 'nomor telepon tidak sesuai format',
            'no_telepon.digits_between' => 'nomor telepon antara 10 sampai 12 angka',
            // 'pendidikan.required' => 'harus diisi',
            'foto_user.image' => 'Foto harus berupa file gambar (jpeg, png, jpg)',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // dd($request->all());
        // Update the user data
        $users->name = $request->name;
        $users->no_telepon = $request->no_telepon;
        $users->save();


        // Update the guru data
        $user->alamat = $request->alamat;
        $user->pendidikan = $request->pendidikan;
        $user->save();


        if ($request->hasFile('foto_user')) {
            // Delete the old file

                // Storage::disk('public')->delete($user->foto_user);
            Storage::delete('profile/'.$users->foto_user);

            $fileName = $request->file('foto_user')->hashName();

            // Upload and save the new file
            $filePath = $request->file('foto_user')->storeAs('profile', $fileName);
            $filePathFinal = Str::substr($filePath, 8);

            $sue = User::findOrFail(Auth::user()->id)->update([
                'foto_user' => $fileName,
            ]);

        }

        $user->save();

        return redirect()->back()->with('success', 'Profile Berhasil diperbarui');
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
