<?php

namespace App\Http\Controllers;

use App\Models\Asesor;
use App\Models\Data_register;
use App\Models\Tuk;
use App\Models\Upload_file;
use App\Models\Xnxx;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;

class ValidasiController extends Controller
{
    
    public function registrasi_baru(){
        $validasi = Data_register::where('status', 'Menunggu Validasi...')->get();
        return view('admin/register/index', compact('validasi'));
    }


    public function list_valid(){
        $validasi = Data_register::where('status', 'Pendaftaran Divalidasi')->get();
        return view('admin/register/list_valid', compact('validasi'));
    }


    public function list_tolak(){
        $validasi = Data_register::where('status', 'Pendaftaran Ditolak')->get();
        return view('admin/register/list_tolak', compact('validasi'));
    }


    public function list_sertifikat(){
        $validasi = Data_register::where('status', 'Sertifikasi Selesai')->get();
        return view('admin/register/list_sertifikat', compact('validasi'));
    }


    public function show(Request $request, $id){
        $validasi = Data_register::findorfail($id);
        $xnxx = Xnxx::all();
        $identitas = Upload_file::all();
        $tuk = Tuk::all();
        $asesor = Asesor::all();
        return view('admin/register/show', compact('validasi', 'tuk', 'asesor', 'identitas', 'xnxx'));
    }


    public function update(Request $request, $id){
        // dd($request->all());
        $validasi_data = [
            'status' => $request->status,
            'date' => $request->date,
            'time' => $request->time,
            'asesor_id' => $request->asesor_id,
            'tuk_id' => $request->tuk_id,
            'keterangan' => $request->keterangan
        ];
        Data_register::whereId($id)->update($validasi_data);
        return back()->with('success', 'Proses Update Data Registrasi Berhasil');
    }


    public function update2(Request $request, $id){
        // dd($request->all());
        $validasi_data = [
            'status' => $request->status,
            'date' => $request->date,
            'time' => $request->time,
            'asesor_id' => $request->asesor_id,
            'tuk_id' => $request->tuk_id,
            'keterangan' => $request->keterangan
        ];
        Data_register::whereId($id)->update($validasi_data);
        return back()->with('success', 'Proses Update Data Registrasi Berhasil');
    }


    public function update3(Request $request, $id)
    {
        // dd($request->all());
        $validasi_data = [
            'status' => $request->status,
            'date' => $request->date,
            'time' => $request->time,
            'asesor_id' => $request->asesor_id,
            'tuk_id' => $request->tuk_id,
            'keterangan' => $request->keterangan
        ];
        Data_register::whereId($id)->update($validasi_data);
        return back()->with('success', 'Proses Update Data Registrasi Berhasil');
    }


    public function destroy($id){
        $validasi = Data_register::findorfail($id);
        $validasi->delete();
        return back()->with('success', 'Peserta Asesi Berhasil dihapus');
    }
}
