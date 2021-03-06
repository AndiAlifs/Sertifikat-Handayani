<?php

namespace App\Http\Controllers;

use App\Models\Kompetensi;
use App\Models\Kursus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KompetensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $listKompetensi = Kursus::find($id)->kompetensis;
        return response()->json([
            json_encode($listKompetensi)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $program = Kursus::get();
        return view('kompetensi/newkompetensi', compact('program'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newKompetensi = new Kompetensi();
        $newKompetensi->nama = $_POST["nama"];
        $newKompetensi->kursus_id = $_POST["kursus_id"];
        $newKompetensi->save();
        Session::flash('last_option',$newKompetensi->kursus_id);
        Session::flash('message','Berhasil menambah '.ucwords($newKompetensi->nama))."!";
        Session::flash('kind','alert-success');
        return redirect()->route('kompetensi.buat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kompetensi  $kompetensi
     * @return \Illuminate\Http\Response
     */
    public function show(Kompetensi $kompetensi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kompetensi  $kompetensi
     * @return \Illuminate\Http\Response
     */
    public function edit(Kompetensi $kompetensi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kompetensi  $kompetensi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kompetensi $kompetensi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kompetensi  $kompetensi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = Kompetensi::find($id);
        Session::flash('last_option',$deleted->kursus_id);
        Session::flash('message','Berhasil Menghapus '.ucwords($deleted->nama))."!";
        Session::flash('kind','alert-danger');
        $deleted->delete();
        
        return redirect()->route('kompetensi.buat');
    }
}
