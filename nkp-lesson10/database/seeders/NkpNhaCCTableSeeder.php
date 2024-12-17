<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class NkpNhaCCTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $faker = Faker::create();
       foreach(range(1,100) as $index){
            DB::table('nkpnhacc')->insert([
            'nkpMaNCC'=>$faker->uuid(),
            // 'MaNCC'=>$faker->word(15),
            'nkpTenNCC'=>$faker->sentence(5),
            'nkpDiachi'=>$faker->address(),
            'nkpDienthoai'=>$faker->phoneNumber(10),
            'nkpemail'=>$faker->email(),
            'nkpstatus'=>$faker->boolean() 
            ]);
       }
    }
}
