<?php

namespace App\Http\Controllers;

use App\Models\Skema;
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

        $xnxx = Xnxx::create([
            'name' => $request->name,
            'image' => $request->image,
            'user_id' => $request->user_id,
            'user_nama' => $request->user_nama,
            'status' => $request->status,
            'users_id' => Auth::id() 
        ]);
        return back();

        // $name = $request->name;
        // $image = $request->image;

        // for ($i=0; $i < count($name); $i++) {
        //     $datasave = [
        //         'name' => $name[$i],
        //         'image' => $image[$i],
        //     ];
        //     DB::table('xnxxes')->insert('$datasave');
        //     }
        // return back();
    }



    public function show($id)
    {
        $xnxx = Xnxx::all();
        $skema = Skema::findorfail($id);
        return view('asesi/registrasi/formulir2', compact('skema', 'xnxx'));
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
        //
    }
}
