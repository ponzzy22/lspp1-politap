<?php

namespace App\Http\Controllers;

use App\Models\Register;
use App\Models\Skema;
use App\Models\Token;
use App\Models\Upload_file;
use App\Models\Xnxx;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class XnxxController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }


    public function store(Request $request ) {
        // dd($request->all());

        $request->validate([
            'image' => ['required'],
            'kode' => ['required', 'unique:xnxxes,kode']
        ]);

        if ($request->has('image'))
        {
            $image = $request->image;
            $new_image = time().$image->getClientOriginalName();
            $image->move('public/uploads/data_register_apl2/', $new_image);
            $xnxx = Xnxx::create([
                'unikom_name' => $request->unikom_name,
                'unikom_id' => $request->unikom_id,
                'data_register_id' => $request->data_register_id,
                'user_id' => $request->user_id,
                'status' => $request->status,
                'kode' => $request->kode,
                'users_id' => Auth::id() ,
                'skema_id' => $request->skema_id,
                'skema_name' => $request->skema_name,
                'image' => 'public/uploads/data_register_apl2/'.$new_image,
            ]);
        }
        else{
            $xnxx = Xnxx::create([
                'unikom_name' => $request->unikom_name,
                'unikom_id' => $request->unikom_id,
                'data_register_id' => $request->data_register_id,
                'user_id' => $request->user_id,
                'status' => $request->status,
                'kode' => $request->kode,
                'users_id' => Auth::id() ,
                'skema_id' => $request->skema_id,
                'skema_name' => $request->skema_name,
            ]);
        }
        return back()->with('success', 'Data Berhasil Disimpan');
    }


    public function store2(Request $request ){
        // dd($request->all());

        $request->validate([
            'kode' => ['required', 'unique:xnxxes,kode']
        ]);
        
        $xnxx = Xnxx::create([
            'unikom_name' => $request->unikom_name,
            'unikom_id' => $request->unikom_id,
            'data_register_id' => $request->data_register_id,
            'user_id' => $request->user_id,
            'status' => $request->status,
            'kode' => $request->kode,
            'users_id' => Auth::id() ,
            'skema_id' => $request->skema_id,
            'skema_name' => $request->skema_name,
        ]);
        return back()->with('success', 'Data Berhasil Disimpan');
    }


    public function upload_identitas_store(Request $request ){
        // dd($request->all());
        $request->validate([
            'kode' => ['required', 'unique:upload_files,kode'],
            'image' => ['required'],
            'name' =>['required']
        ]);

        $image = $request->image;
            $new_image = time().$image->getClientOriginalName();
            $image->move('public/uploads/data_register_apl2/', $new_image);
        $xnxx = Upload_file::create([
            'data_register_id' => $request->data_register_id,
            'name' => $request->name,
            'user_id' => $request->user_id,
            'status' => $request->status,
            'kode' => $request->kode,
            'image' => 'public/uploads/data_register_apl2/'.$new_image,
        ]);
        return back()->with('success', 'Data Berhasil Disimpan');
    }


    public function upload_identitas_store2(Request $request ){
        // dd($request->all());
        $request->validate([
            'kode' => ['required', 'unique:upload_files,kode'],
            'name' =>['required']
        ]);

        $xnxx = Upload_file::create([
            'data_register_id' => $request->data_register_id,
            'name' => $request->name,
            'user_id' => $request->user_id,
            'kode' => $request->kode,
            'status' => $request->status,
        ]);
        return back()->with('success', 'Data Berhasil Disimpan');
    }


    public function destroy3($id){
        $identitas = Upload_file::findorfail($id);
        $identitas->delete();
        return back();
    }


    public function show($id){
        $xnxx = Xnxx::where('user_id', auth()->user()->id)->get();
        $identitas = Upload_file::where('user_id', auth()->user()->id)->get();
        $skema = Skema::findorfail($id);
        return view('asesi/registrasi/formulir2', compact('skema','identitas', 'xnxx'));
    }


    public function token_store(Request $request){
        // dd($request->all());
        $request->validate([
            'token' => ['required', 'unique:tokens,token'],
            'user_id' => ['required']
        ]);

        $xnxx = Token::create([
            'token' => $request->token,
            'user_id' => $request->user_id
        ]);
        return redirect()->route('register.last');
    }


    public function destroy($id){
        $xnxx = Xnxx::findorfail($id);
        $xnxx->delete();
        return redirect()->back()->with('success','Data Berhasil Dihapus');
    }


    public function rekap_register(){
        return view('asesi/registrasi/rekap_register');
    }


    public function token2_store(Request $request){
        $request->validate([
            'kode_register' => ['required', 'unique:registers,kode_register']
        ]);

        $xnxx = Register::create([
            'kode_register' => $request->kode_register,
            'skema_id' => $request->skema_id,
            'user_id' => $request->user_id,
            'user_name' => $request->user_name,
            'skema_name' => $request->skema_name,
            'status' => $request->status
        ]);
        return redirect()->route('rekap.registrasi');
    }


    public function rekap_registrasi(){
        $register = Register::where('user_id', auth()->user()->id)->get();
        $xnxx = Xnxx::all();
        return view('asesi/registrasi/rekap_register', compact('register', 'xnxx'));
    }


    public function destroy2($id){
        $register = Register::findorfail($id);
        $register->delete();
        return back();
    }
}
