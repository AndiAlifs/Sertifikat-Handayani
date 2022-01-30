<?php

namespace Database\Seeders;

use App\Models\Kursus;
use Illuminate\Database\Seeder;

class KursusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $nama_kursus = ["Mengemudi Mobil", "Bahasa Inggris", "Menjahit"];
        foreach ($nama_kursus as $value) {
            $kursus = new Kursus(); 
            $kursus->nama = $value;
            $kursus->save();
        }
    }
}
