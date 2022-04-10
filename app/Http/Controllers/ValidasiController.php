<?php

namespace App\Http\Controllers;

use App\Models\Data_register;
use App\Models\Register;
use App\Models\User;
use App\Models\Xnxx;
use Illuminate\Http\Request;

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


    public function show($id){
        $validasi = Data_register::findorfail($id);
        $xnxx = Xnxx::all();
        return view('admin/register/show', compact('validasi', 'xnxx'));
    }


    public function edit($id){
        //
    }


    public function update(Request $request, $id){
        //
    }


    public function destroy($id){
        $validasi = Register::findorfail($id);
        $validasi->delete();
        return back()->with('success', 'Peserta Asesi Berhasil dihapus');
    }
}
