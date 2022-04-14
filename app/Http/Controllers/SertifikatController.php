<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use App\Models\Nilai;
use App\Models\Sertifikat;
use Illuminate\Http\Request;

class SertifikatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $allSertif = Sertifikat::get();
        return view('sertifikat/index', compact('allSertif'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $program = Kursus::get();
        return view('sertifikat/newsertif', compact('program'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $new_sertif = new Sertifikat();
        $new_sertif->nama_lengkap = $_POST['nama_lengkap'];
        $new_sertif->nomor_sertif = $_POST['nomor_sertif'];
        $new_sertif->tempat_lahir = $_POST['tempat_lahir'];
        $new_sertif->tanggal_lahir = $_POST['tanggal_lahir'];
        $new_sertif->kursus_id = $_POST['kursus_id'];
        $new_sertif->save();

        $all_kompetensi = json_decode($_POST['all_kompetensi']);
        foreach ($all_kompetensi as $nilai) {
            $new_nilai = new Nilai();
            $new_nilai->sertifikat_id = $new_sertif->id;
            $new_nilai->kompetensi_id = $nilai;
            $new_nilai->nilai = $_POST[$nilai];
            $new_nilai->save();
        }
        
        return redirect()->route('sertif.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sertifikat  $sertifikat
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sertif = Sertifikat::find($id);
        $kompetensi = $sertif->nilais;
        return view('sertifikat/detail', compact('sertif','kompetensi'));
    }

    public function delete($id)
    {
        $sertif = Sertifikat::find($id)->delete();
        return redirect()->route('sertif.index');   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sertifikat  $sertifikat
     * @return \Illuminate\Http\Response
     */
    public function edit(Sertifikat $sertifikat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sertifikat  $sertifikat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sertifikat $sertifikat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sertifikat  $sertifikat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sertifikat $sertifikat)
    {
        //
    }
}
