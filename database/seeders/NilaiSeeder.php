<?php

namespace Database\Seeders;

use App\Models\Nilai;
use Illuminate\Database\Seeder;

class NilaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 2; $i++) { 
            for ($j=1; $j < 3; $j++) { 
                $nilai = new Nilai();
                $nilai->sertifikat_id = $i;
                $nilai->kompetensi_id = $j;
                $nilai->nilai = rand(80,90);
                $nilai->save();
            }
        }
    }
}
