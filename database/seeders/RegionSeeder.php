<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Region;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Region::create(['region_name' => "Toshkent"]);
        Region::create(['region_name' => "Qashqadaryo"]);
        Region::create(['region_name' => "Samarqand"]);
        Region::create(['region_name' => "Buxoro"]);
        Region::create(['region_name' => "Surxondaryo"]);
        Region::create(['region_name' => "Jizzax"]);
        Region::create(['region_name' => "Qoraqalpog'iston"]);
        Region::create(['region_name' => "Namangan"]);
        Region::create(['region_name' => "Farg'ona"]);
        Region::create(['region_name' => "Andijon"]);
        Region::create(['region_name' => "Xiva"]);
        Region::create(['region_name' => "Sirdaryo"]);
        Region::create(['region_name' => "Jahon"]);
        Region::create(['region_name' => "Iqtisodiyot"]);
        Region::create(['region_name' => "Jamiyat"]);
        Region::create(['region_name' => "Fan-texnika"]);
        Region::create(['region_name' => "Sport"]);
        Region::create(['region_name' => "Nuqtayi-nazar"]);
        Region::create(['region_name' => "Audio"]);
        Region::create(['region_name' => "Muharrir-tanlovi"]);
        Region::create(['region_name' => "Dolzarb-xabarlar"]);
        Region::create(['region_name' => "Hamas-Isroil urushi"]);
        Region::create(['region_name' => "Maqola"]);
    }
}
