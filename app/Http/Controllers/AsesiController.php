<?php

namespace App\Http\Controllers;

use App\Models\Asesi;
use App\Models\Data_register;
use App\Models\Info;
use App\Models\Jurusan;
use App\Models\Semester;
use App\Models\Sex;
use App\Models\Skema;
use App\Models\Unikom;
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
        return view('asesi/profil_edit', compact('semester', 'jurusan','sex', 'user'));
    }


    public function update(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'sex_id' => ['max:100', 'required'],
            'tgl_lahir' => ['min:3', 'max:100', 'required'],
            'tmpt_lahir' => ['min:3', 'max:100', 'required'],
            'negara' => ['min:3', 'max:100', 'required'],
            'alamat' => ['min:3', 'max:100', 'required'],
            'jurusan_id' => ['required'],
            'semester_id' => ['required'],
            'surel' => ['required'],
            // 'kode_post' => ['min:3', 'max:10000000', 'numeric', 'required'],
            // 'no_hp' => ['required', 'unique:users,no_hp,'.auth()->id()],
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
                'surel' => $request->surel,
                'sex_id' => $request->sex_id,
                'tgl_lahir' => $request->tgl_lahir,
                'negara' => $request->negara,
                'alamat' => $request->alamat,
                'tmpt_lahir' => $request->tmpt_lahir,
                'no_hp' => $request->no_hp,
                'kode_post' => $request->kode_post,
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
            'surel' => $request->surel,
            'kode_post' => $request->kode_post,
            'semester_id' => $request->semester_id,
            'jurusan_id' => $request->jurusan_id,
            ]);
        }
        return back()->with('success', ' Data Profil Anda Berhasil di Update');
    }
    public function formulirapl2_edit(){
        $user = User::all();
        $sex = Sex::all();
        $semester = Semester::all();
        $jurusan = Jurusan::all();
        return view('asesi/registrasi/forapl1', compact('semester', 'jurusan','sex', 'user'));
    }


    public function formulirapl2_update(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => ['min:3', 'max:100', 'required'],
            'email' => ['min:3','alpha_num', 'numeric', 'required', 'unique:users,email,'. auth()->id()],
            'sex_id' => ['max:100', 'required'],
            'tgl_lahir' => ['required'],
            'tempat_lahir' => ['min:3', 'max:100', 'required'],
            'negara' => ['min:3', 'max:100', 'required'],
            'alamat' => ['min:3', 'max:100', 'required'],
            'jurusan_id' => ['required'],
            'semester_id' => ['required'],
            // 'kode_post' => ['min:3', 'max:10000000', 'numeric', 'required'],
            // 'no_hp' => ['required', 'unique:users,no_hp,'.auth()->id()],
            // 'surel' => ['email','min:3', 'max:100', 'required', 'unique:users,surel,'.auth()->id()],
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
                'email2' => $request->email2,
                'semester_id' => $request->semester_id,
                'jurusan_id' => $request->jurusan_id,
                'tempat_lahir' => $request->tempat_lahir,
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
            'email2' => $request->email2,
            'semester_id' => $request->semester_id,
            'jurusan_id' => $request->jurusan_id,
            'tempat_lahir' => $request->tempat_lahir,
            ]);
        }
        return back()->with('success', ' Data Formulir APL-01 Anda Berhasil Disimpan');
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
        $datareg = Data_register::where('user_id', auth()->user()->id)
            ->where('status', "<h4 style='color: rgb(0, 0, 0)'>Sertifikasi Selesai</h4>")
            ->get();
        return view('asesi/koleksi', compact('datareg'));
    }


    public function sertifikat_show($id){
        $validasi = Data_register::findorfail($id);
        return view('asesi/sertifikat_show', compact('validasi'));
    }


    public function instruksi_registrasi(){
        $info = Info::all();
        return view('asesi/instruksi', compact('info'));
    }
}
