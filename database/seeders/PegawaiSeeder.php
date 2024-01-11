<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $faker = Faker::create('id_ID');

      for($i=0; $i<= 50; $i++) {
        DB::table('mahasiswa')->insert([
            'nama' => $faker->name,
            'nim' => $faker->numberBetween($min = 1000, $max = 9000),
            'alamat' => $faker->address
        ]);
      }
    }
}