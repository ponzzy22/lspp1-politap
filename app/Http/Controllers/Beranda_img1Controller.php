<?php

namespace App\Http\Controllers;

use App\Models\Beranda_img1;
use Illuminate\Http\Request;

class Beranda_img1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beranda_img1 = Beranda_img1::all();
        return view('admin/beranda/index', compact('beranda_img1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required'
        ]);

        $image = $request->image;
        $new_image = time().$image->getClientOriginalName();

        $beranda_img1 = Beranda_img1::create([
            'image' => 'public/uploads/'.$new_image,
        ]);

        $image->move('public/uploads/', $new_image);
        return redirect()->route('sett-beranda.index')->with('success','Artikel anda berhasil di Posting');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function image()
    {
        $image = Beranda_img1::all();
        return view('beranda', compact('image') );
    }
}
