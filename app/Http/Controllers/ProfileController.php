<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\user;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id  = Auth::id();
        $profileuser = User::findOrFail($user_id);
        // dd($user_id);
        return view('users.profile', compact('profileuser', 'user_id'));
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
