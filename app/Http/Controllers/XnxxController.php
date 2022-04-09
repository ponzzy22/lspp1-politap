<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Register;
use App\Models\Skema;
use App\Models\Token;
use App\Models\Xnxx;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class XnxxController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
    }



    public function create()
    {
        
    }



    public function store(Request $request )
    {
        // dd($request->all());
        $request->validate([
            'image' => ['required']
        ]);

        if ($request->has('image')) 
        {
            $image = $request->image;
            $new_image = time().$image->getClientOriginalName();
            $image->move('public/uploads/beranda_img2/', $new_image);
            $xnxx = Xnxx::create([
                'name' => $request->name,
                'user_id' => $request->user_id,
                'user_nama' => $request->user_nama,
                'status' => $request->status,
                'users_id' => Auth::id() ,
                'skema_id' => $request->skema_id,
                'skema_name' => $request->skema_name,
                'image' => 'public/uploads/beranda_img2/'.$new_image,
            ]);
        }


        else{
            $xnxx = Xnxx::create([
                'name' => $request->name,
                'user_id' => $request->user_id,
                'user_nama' => $request->user_nama,
                'status' => $request->status,
                'users_id' => Auth::id(),
                'skema_id' => $request->skema_id,
                'skema_name' => $request->skema_name,
            ]);
        }

        // $xnxx = Xnxx::create([
        //     'name' => $request->name,
        //     'image' => $request->image,
        //     'user_id' => $request->user_id,
        //     'user_nama' => $request->user_nama,
        //     'status' => $request->status,
        //     'users_id' => Auth::id() 
        // ]);
        return back();
    }

    public function store2(Request $request )
    {
        // dd($request->all());
        
        $request->validate([
            'name' => ['required', 'unique:xnxxes,name']
        ]);

        $xnxx = Xnxx::create([
            'name' => $request->name,
            'user_id' => $request->user_id,
            'user_nama' => $request->user_nama,
            'status' => $request->status,
            'users_id' => Auth::id() 
        ]);
        return back();
    }



    public function show($id)
    {
        // $post = Post::where('user_id', auth()->user()->id)->get();
        $xnxx = Xnxx::where('user_id', auth()->user()->id)->get();
        $skema = Skema::findorfail($id);
        return view('asesi/registrasi/formulir2', compact('skema', 'xnxx'));
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



    public function edit($id)
    {
        //
    }



    public function update(Request $request, $id)
    {
        //
    }



    public function destroy($id)
    {
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
        // $register = Register::all();
        $xnxx = Xnxx::all();
        return view('asesi/registrasi/rekap_register', compact('register', 'xnxx'));
    }

    public function destroy2($id){
        $register = Register::findorfail($id);
        $register->delete();
        return back();
    }
}
