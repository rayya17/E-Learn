<?php

namespace App\Http\Controllers;

use App\Models\Komentar;
use App\Models\Materi;
use App\Models\Guru;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KomentarController extends Controller
{
    public function komentar(string $id){
        try  {

            $Auth = Auth::user();
            $guru = Guru::with('user')->get();
            $materi = Materi::where('id',$id)->first();
            $komentar = Komentar::where('materi_id',$materi->id)->orderby('created_at','desc')->paginate(25);

            if  ($Auth->role === 'user'){
                return view('users.kumpultugas',compact('materi','komentar','Auth','id','guru'));
            }

        }catch (Exception $e){
            return redirect()->route('HomePage')->with('error','terjadi kesalahan coba kembali');
        }
    }

    public function createKomentar(Request $request){

        $this->validate($request,[
            'komentar' => 'required'
        ],[
            'komentar.required' => 'komentar harus diisi'
        ]);


        $komentar = new  komentar([
            'user_id' => Auth::user()->id,
            'materi_id' => $request->materi_id,
            'tugas_id' => $request->tugas_id,
            'komentar' => $request->input('komentar'),
            'tanggal' => now()
        ]);

        $komentar->save();

        $materi = Materi::findOrFail($request->materi_id);
        return back()->with('success','berhasil menambahkan komentar');
    }

    public function reply(Request $request,string $id){
        try{

            $komentar = Komentar::find($id);
            // dd($request,$id,$komentar);

            komentar::create([
                'user_id'=> Auth::user()->id,
                'materi_id' => $komentar->materi_id,
                'tugas_id' => $komentar->tugas_id,
                'parent_id' => $id,
                'komentar' => $request->input('komentar'),
                'tanggal' => now()
            ]);
            return back()->with('success','berhasil menambahkan komentar');
        }catch(\Exception $e){
            return response()->json($e);
        }
    }

    public function destroy(komentar $komentar){
        $komentar->delete();
        return redirect()->back()->with('success','berhasil menghapus komentar.');
    }
}
