<?php

namespace App\Http\Controllers;

use App\Models\Kompetensi;
use App\Models\Nilai;
use App\Models\Kursus;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        # code...
    }

    public function create()
    {   
        $program = Kursus::where('id',$_POST['kursus_id'])->first();
        $kompetensi = $program->kompetensis;
        $all_kompetensi = [];
        foreach ($kompetensi as $value) {
            $all_kompetensi[] = $value->id;
        }
        $all_kompetensi = json_encode($all_kompetensi);
        return view('nilai/newnilai', compact('program','kompetensi','all_kompetensi'));
    }
}
