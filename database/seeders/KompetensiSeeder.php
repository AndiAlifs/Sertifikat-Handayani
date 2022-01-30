<?php

namespace Database\Seeders;

use App\Models\Kompetensi;
use Illuminate\Database\Seeder;

class KompetensiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kompetensi = [
            "Kopling Dalam" => "1",
            "Etika Berkendara" => "1",
            "Alphabet" => "2",
            "Basic Conversation" => "2",
        ];
        foreach ($kompetensi as $key => $value) {
            $kompetensi = new Kompetensi();
            $kompetensi->nama = $key;
            $kompetensi->kursus_id = $value;
            $kompetensi->save();
        }
    }
}
