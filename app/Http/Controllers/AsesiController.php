<?php

namespace App\Http\Controllers;

use App\Models\Asesi;
use App\Models\Data_register;
use App\Models\Jurusan;
use App\Models\Semester;
use App\Models\Sex;
use App\Models\Skema;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AsesiController extends Controller
{


    public function index(){
        $semester = Semester::all();
        $jurusan = Jurusan::all();
        $asesi = Asesi::all();
        return view('asesi/index', compact('asesi', 'semester', 'jurusan'));
    }


    public function edit(){
        $user = User::all();
        $sex = Sex::all();
        $semester = Semester::all();
        $jurusan = Jurusan::all();
        return view('asesi/edit', compact('semester', 'jurusan','sex', 'user'));
    }


    public function update(Request $request)
    {
        // dd($request->all());
        $request->validate([
            // 'name' => ['min:3', 'max:100', 'required', 'unique:users,name,'. auth()->id()],
            // 'email' => ['min:3','alpha_num', 'numeric', 'required', 'unique:users,email,'. auth()->id()],
            'sex_id' => ['max:100', 'required'],
            'tgl_lahir' => ['min:3', 'max:100', 'required'],
            'tmpt_lahir' => ['min:3', 'max:100', 'required'],
            'negara' => ['min:3', 'max:100', 'required'],
            'alamat' => ['min:3', 'max:100', 'required'],
            'jurusan_id' => ['required'],
            'semester_id' => ['required'],
            // 'kode_post' => ['min:3', 'max:10000000', 'numeric', 'required'],
            // 'no_hp' => ['required', 'unique:users,no_hp,'.auth()->id()],
            'surel' => ['email','min:3', 'max:100', 'required', 'unique:users,surel,'.auth()->id()],
            // 'image' => ['required'],
            // 'ktm' => ['required'],
        ]);
        if ($request->has('image')) 
        {
            $image = $request->image;
            $new_image = time().$image->getClientOriginalName();
            $image->move('public/uploads/beranda_img2/', $new_image);
            auth()->user()->update([
                'name' => $request->name,
                'email' => $request->email,
                'sex_id' => $request->sex_id,
                'tgl_lahir' => $request->tgl_lahir,
                'negara' => $request->negara,
                'alamat' => $request->alamat,
                'tmpt_lahir' => $request->tmpt_lahir,
                'no_hp' => $request->no_hp,
                'kode_post' => $request->kode_post,
                'surel' => $request->surel,
                'semester_id' => $request->semester_id,
                'jurusan_id' => $request->jurusan_id,
                'image' => 'public/uploads/beranda_img2/'.$new_image,
            ]);
        }
        else{
            auth()->user()->update([
            'name' => $request->name,
            'email' => $request->email,
            'sex_id' => $request->sex_id,
            'tgl_lahir' => $request->tgl_lahir,
            'negara' => $request->negara,
            'alamat' => $request->alamat,
            'tmpt_lahir' => $request->tmpt_lahir,
            'no_hp' => $request->no_hp,
            'kode_post' => $request->kode_post,
            'surel' => $request->surel,
            'semester_id' => $request->semester_id,
            'jurusan_id' => $request->jurusan_id,
            ]);
        }
        return back()->with('success', ' Data Profil Anda Berhasil di Update');
    }


    public function info_skema(){
        $skema = Skema::all();
        return view('asesi/info_skema', compact('skema'));
    }


    public function info_skema_show($id){
        $skema = Skema::findorfail($id);
        return view('asesi/info_skema_show', compact('skema'));
    }


    public function koleksi_sertifikat(){
        $datareg = Data_register::where('user_id', auth()->user()->id)->get();
        return view('asesi/sertifikasi', compact('datareg'));
    }


    public function instruksi_registrasi(){
        return view('asesi/instruksi');
    }
}
