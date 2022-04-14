<?php

namespace App\Http\Controllers;

use App\Models\Asesor;
use App\Models\Data_register;
use App\Models\Register;
use App\Models\Sex;
use App\Models\Tuk;
use App\Models\Upload_file;
use App\Models\User;
use App\Models\Xnxx;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;

class ValidasiController extends Controller
{

    public function index(){
        $validasi = Data_register::all();
        return view('admin/register/index', compact('validasi'));
    }


    public function create(){
        //
    }


    public function store(Request $request){
        //
    }


    public function show(Request $request, $id){
        $validasi = Data_register::findorfail($id);
        $xnxx = Xnxx::all();
        $identitas = Upload_file::all();
        $tuk = Tuk::all();
        $asesor = Asesor::all();
        return view('admin/register/show', compact('validasi', 'tuk', 'asesor', 'identitas', 'xnxx'));
    }


    public function edit($id){
        //
    }


    public function update(Request $request, $id){
        // dd($request->all());
        // $request->validate([
        //     'id' => ['required', 'unique:data_registers,id']
        // ]);
            // $sex = Sex::findorfail($id);
        $validasi_data = [
            'status' => $request->status,
            'date' => $request->date,
            'time' => $request->time,
            'asesor_id' => $request->asesor_id,
            'tuk_id' => $request->tuk_id,
            'keterangan' => $request->keterangan
        ];
        Data_register::whereId($id)->update($validasi_data);

        return back()->with('success', 'Proses Update Data Anda Berhasil');
    }




    public function destroy($id){
        $validasi = Data_register::findorfail($id);
        $validasi->delete();
        return back()->with('success', 'Peserta Asesi Berhasil dihapus');
    }


    // public function validasi(Request $request){
    //     dd($request->all());
    //     $validasi = Data_register::findorfail($id);
    //     $validasi_data = [
    //         'status' =>$request->status
    //     ];
    //     $validasi->update($validasi_data);
    //     return back()->with('success', 'Peserta Asesi Berhasil dihapus');
    // }
}
