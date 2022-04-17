<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index(){
        $user = User::all();
        return view('admin/user/index', compact('user'));
    }


    public function show($id){
        $user = User::findorfail($id);
        return view('admin/user/show', compact('user'));
    }


    public function update(Request $request, $id) {
        $request->validate([
            'name' => ['min:1', 'max:100', 'required'],
            'email' => ['min:3','alpha_num', 'numeric', 'required'],
            // 'sex_id' => ['max:100', 'required'],
            // 'tgl_lahir' => ['min:3', 'max:100', 'required'],
            // 'tmpt_lahir' => ['min:3', 'max:100', 'required'],
            // 'negara' => ['min:3', 'max:100', 'required'],
            // 'alamat' => ['min:3', 'max:100', 'required'],
            // 'jurusan_id' => ['required'],
            // 'semester_id' => ['required'],
            'kode_post' => ['max:100000000000'],
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
            $user_data = [
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
            ];
        }
        else{
            $user_data = [
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
            ];
        }
        User::whereId($id)->update($user_data);
        return back()->with('success', ' Data Profil Pengguna Berhasil diUpdate');
    }


    public function destroy($id) {
        $user = User::findorfail($id);
        $user->delete();
        return redirect()->back()->with('success','Akun Pengguna Berhasil Dihapus');
    }
}
