<?php

namespace App\Http\Controllers;

use App\Models\Data_register;
use Illuminate\Http\Request;

class Dashboard_asesiController extends Controller
{

    public function index()
    {
        $datareg = Data_register::where('user_id', auth()->user()->id)->get();
        return view('asesion', compact('datareg'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
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
