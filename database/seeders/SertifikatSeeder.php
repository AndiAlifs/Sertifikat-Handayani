<?php

namespace Database\Seeders;

use App\Models\Sertifikat;
use Illuminate\Database\Seeder;

class SertifikatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sertif = new Sertifikat();
        $sertif->nama_lengkap = "Lorem Ipsum";
        $sertif->nomor_sertif = "1928/Kendari/Mengemudi/2022/12";
        $sertif->tempat_lahir = "Kendari";
        $sertif->tanggal_lahir = "1998/09/20";
        $sertif->kursus_id = 1;
        $sertif->save();
    }
}
