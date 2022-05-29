<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KursusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $kursuses = Kursus::all();
        return view('kursus.newkursus',compact('kursuses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newKursus = new Kursus();
        $newKursus->nama = $_POST["nama"];
        $newKursus->save();

        Session::flash('message','Berhasil menambah '.ucwords($newKursus->nama))."!";
        Session::flash('kind','alert-success');

        return redirect()->route('kursus.buat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kursus  $kursus
     * @return \Illuminate\Http\Response
     */
    public function show(Kursus $kursus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kursus  $kursus
     * @return \Illuminate\Http\Response
     */
    public function edit(Kursus $kursus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kursus  $kursus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {   
        // dd($request);
        $kursus = Kursus::find($request->id);
        $kursus->nama = $request->nama;
        $kursus->save();
        
        Session::flash('message','Berhasil Mengubah '.ucwords($request->nama))."!";
        Session::flash('kind','alert-success');
        return redirect()->route('kursus.buat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kursus  $kursus
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kursus = Kursus::find($id);
        Session::flash('message','Berhasil Menghapus '.ucwords($kursus->nama))."!";
        Session::flash('kind','alert-danger');
        $kursus->delete();
        return redirect()->route('kursus.buat');
    }
}
