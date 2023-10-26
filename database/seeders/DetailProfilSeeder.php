<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DetailProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('detail_profile')->insert([
            'address'   => 'Banyuwangi',
            'nomor_tlp' => '082141998637',
            'ttl'       => '2000-01-11',
            'foto'      => 'pictures.png'
        ]);
    }
}
