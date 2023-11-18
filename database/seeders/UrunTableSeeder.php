<?php

namespace Database\Seeders;

use App\Models\urun;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str; // Str sınıfını ekleyin
use Faker\Factory as Faker;

class UrunTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create(); // Faker kütüphanesi veritabanına fake veriler ekler.

        urun::truncate();

        for ($i = 0; $i < 30; ++$i) {
            $urun_adi = $faker->sentence();
            urun::create([
                'urun_adi' => $urun_adi,
                'slug' => Str::slug($urun_adi),
                'aciklama' => $faker->sentence(5),
                'fiyatı' => $faker->randomFloat(3, 1, 20),
            ]);
        }
    }
}
