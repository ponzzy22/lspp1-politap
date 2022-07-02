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
        $validasi = Data_register::where('status', "<h4 style='color: green'>Menunggu Validasi...</h4>")->get();
        return view('admin/register/index', compact('validasi'));
    }


    public function list_valid(){
        $validasi = Data_register::where('status', "<h4 style='color: rgb(34, 123, 138)'>Pendaftaran Divalidasi</h4>")->get();
        return view('admin/register/list_valid', compact('validasi'));
    }


    public function list_tolak(){
        $validasi = Data_register::where('status', "<h4 style='color: rgb(141, 7, 7)'>Pendaftaran Ditolak</h4>")->get();
        return view('admin/register/list_tolak', compact('validasi'));
    }


    public function list_sertifikat(){
        $validasi = Data_register::where('status', "<h4 style='color: rgb(0, 0, 0)'>Sertifikasi Selesai</h4>")->get();
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


    public function proses_show(Request $request, $id){
        $validasi = Data_register::findorfail($id);
        $xnxx = Xnxx::all();
        $identitas = Upload_file::all();
        $tuk = Tuk::all();
        $asesor = Asesor::all();
        return view('admin/register/proses_show', compact('validasi', 'tuk', 'asesor', 'identitas', 'xnxx'));
    }


    public function update(Request $request, $id){
        // dd($request->all());
        $request->validate([
            'date' => ['required'],
            'time' => ['required'],
            'asesor_id' => ['required'],
            'tuk_id' => ['required'],
        ],[
            'date.required' => 'Masukan tanggal sertifikasi',
            'time.required' => 'Masukan waktu sertifikasi',
            'asesor_id.required' => 'Pilih Penguji',
            'tuk_id.required' => 'Pilih Tempat Uji Kompetensi',
        ]);
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
            'id_skema' => $request->id_skema,
            'kode' => $request->kode,
            'time' => $request->time,
            'asesor_id' => $request->asesor_id,
            'tuk_id' => $request->tuk_id,
            'keterangan' => $request->keterangan
        ];
        Data_register::whereId($id)->update($validasi_data);
        return back()->with('success', 'Proses Update Data Registrasi Berhasil');
    }

    public function finishstore(Request $request)
    {
        // dd($request->all());
        $data = Data_register::create([
            'status' => $request->status,
            'date' => $request->date,
            'id_skema' => $request->id_skema,
            'kode' => $request->kode,
            'time' => $request->time,
            'asesor_id' => $request->asesor_id,
            'tuk_id' => $request->tuk_id,
            'keterangan' => $request->keterangan,
            'skema_id' => $request->skema_id,
            'id' => $request->id
        ]);
        return back()->with('success', 'Berhasil');
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


    public function koreksiformulir($id){
        $validasi = Data_register::findorfail($id);
        $xnxx = Xnxx::all();
        $identitas = Upload_file::all();
        $tuk = Tuk::all();
        $asesor = Asesor::all();
        return view('admin/register/koreksi', compact('validasi', 'tuk', 'asesor', 'identitas', 'xnxx'));
    }

    public function koreksiformulir_update(Request $request, $id)
    {
        // dd($request->all());
        $validasi_data = [
            'kode' => $request->kode,
            'koreksi' => $request->koreksi
        ];
        Upload_file::whereId($id)->update($validasi_data);
        return back()->with('success', 'Koreksi Data Formulir Berhasil');
    }


    public function koreksiformulirapl2_update(Request $request, $id)
    {
        // dd($request->all());
        $validasi_data = [
            'kode' => $request->kode,
            'koreksi' => $request->koreksi
        ];
        Xnxx::whereId($id)->update($validasi_data);
        return back()->with('success', 'Koreksi Data Formulir Berhasil');
    }
}
