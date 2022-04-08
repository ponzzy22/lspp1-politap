<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(){
        $user = User::all();
        return view('admin/user/index', compact('user'));
    }


    public function create() {
        //
    }


    public function store(Request $request){
        //
    }


    public function show($id){
        $user = User::findorfail($id);
        return view('admin/user/show', compact('user'));
    }


    public function edit($id) {
        //
    }


    public function update(Request $request, $id) {
        //
    }


    public function destroy($id) {
        $user = User::findorfail($id);
        $user->delete();
        return redirect()->back()->with('success','User Berhasil Dihapus');
    }
}
