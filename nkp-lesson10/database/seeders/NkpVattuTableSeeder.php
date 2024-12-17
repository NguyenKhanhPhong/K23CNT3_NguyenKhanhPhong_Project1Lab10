<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class NkpVattuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('nkpvattu')->insert([
        //     'nkpMaVTu'=>'DD01',
        //     'nkpTenVTu'=>'Đầu DVD Hitachi 1 cửa',
        //     'nkpDvTinh'=>'Bộ',
        //     'nkpPhanTram'=>40,
        //     ]);
        // DB::table('nkpvattu')->insert([
        //     'nkpMaVTu'=>'DD02',
        //     'nkpTenVTu'=>'Đầu DVD Hitachi 1 cửa',
        //     'nkpDvTinh'=>'Bộ',
        //     'nkpPhanTram'=>50,
        //     ]);
        $faker = Faker::create();
        foreach(range(1,50) as $index){
            DB::table('nkpvattu')->insert([
            'nkpMaVTu'=>$faker->word(4),
            // 'MaNCC'=>$faker->word(15),
            'nkpTenVTu'=>$faker->sentence(5),
            'nkpDienthoai'=>$faker->phoneNumber(10),
            'nkpDvTinh'=>$faker->word(3),
            'nkpPhanTram'=>$faker->randomFloat('2',0,100)
            ]);
       }
    }
}
