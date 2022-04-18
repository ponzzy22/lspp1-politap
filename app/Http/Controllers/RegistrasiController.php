<?php

namespace App\Http\Controllers;

use App\Models\Data_register;
use App\Models\Formulir;
use App\Models\Jurusan;
use App\Models\Semester;
use App\Models\Sex;
use App\Models\Skema;
use App\Models\Unikom;
use App\Models\User;
use Illuminate\Http\Request;

class RegistrasiController extends Controller
{

    public function index() {
        $skema = Skema::all();
        $unikom =Unikom::all();
        return view('asesi/registrasi/pilihan_skema')->with('skema', $skema, 'unikom', $unikom);
    }


    public function store(Request $request) {
        // dd($request->all());
        $request->validate([
            'kode' => ['required', 'unique:data_registers,kode'],
            'skema_id' => ['required', 'unique:data_registers,skema_id'],
            'sex_id' => ['required'],
            'nim' => ['required'],
            'tmpt_lahir' => ['required'],
            'no_hp' => ['required'],
            'semester_id' => ['required'],
            'provinsi' => ['required'],
            'kabupaten' => ['required'],
            'kecamatan' => ['required'],
            'kota' => ['required'],
            'tgl_lahir' => ['required'],
            'surel' => ['required'],
            'jurusan_id' => ['required'],
            'alamat' => ['required'],
            'kode_post' => ['required'],
            'negara' => ['required'],
            'image' => ['required']
        ]);
            $data_register = Data_register::create([
                'id' => $request->id,
                'kode' => $request->kode,
                'nim' => $request->nim,
                'skema_name' => $request->skema_name,
                'tuk_id' => $request->tuk_id,
                'asesor_id' => $request->asesor_id,
                'status' => $request->status,
                'skema_id' => $request->skema_id,
                'user_id' => $request->user_id,
                'user_name' => $request->user_name,
                'status' => $request->status,
                'email' => $request->email,
                'sex_id' => $request->sex_id,
                'tgl_lahir' => $request->tgl_lahir,
                'tmpt_lahir' => $request->tmpt_lahir,
                'negara' => $request->negara,
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp,
                'kode_post' => $request->kode_post,
                'surel' => $request->surel,
                'provinsi' => $request->provinsi,
                'kabupaten' => $request->kabupaten,
                'kecamatan' => $request->kecamatan,
                'kota' => $request->kota,
                'semester_id' => $request->semester_id,
                'jurusan_id' => $request->jurusan_id,
                'image' => $request->image
            ]);
        return back()->with('success', ' Data Anda Berhasil di Disimpan, Sekarang tekan tombol "SELANJUTNYA" dibawah');
    }


    public function edit($id){
        $user = User::all();
        $sex = Sex::all();
        $semester = Semester::all();
        $jurusan = Jurusan::all();
        $skema = Skema::findorfail($id);
        return view('asesi/registrasi/formulir_apl1', compact('semester', 'jurusan','sex', 'user', 'skema'));
    }
}
