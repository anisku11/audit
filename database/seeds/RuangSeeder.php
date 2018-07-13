<?php

use Illuminate\Database\Seeder;

class RuangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('id_ID');

        $limit = 100;
        //$faker->randomElement(['seller', 'buyer']),

        for ($i = 0; $i < $limit; $i++) {
            DB::table('ruangs')->insert([
                'nm_ruang' => $faker->randomElement(['D1.01', 'D1.02', 'D1.03', 'D1.04', 'D1.05', 'D1.06', 'D2.01', 'D2.02', 'D2.03', 'D2.04', 'D2.05', 'D2.06', 'D2.07', 'D2.08', 'D2.09', 'D3.01', 'D3.02', 'D3.03', 'D3.04', 'D3.05', 'D3.06', 'D3.07', 'D3.08']),
                'luas_ruang' => $faker->randomElement(['300', '500', '600']),
                'tot_dayapenerangan' => $faker->numberBetween($min = 240, $max = 1000),
                'tot_dayaac' => $faker->numberBetween($min = 240, $max = 1000),
                'tot_dayalain' => $faker->numberBetween($min = 240, $max = 1000),
                'tot_dayamesin' => $faker->numberBetween($min = 500, $max = 2000),
            'nilai_IKE' => $faker->randomElement(['12.5', '13.5', '13.2', '14,7', '13,3', '14,6', '13,7', '12,8', '13']),
                //'wktu_pengukuran' => $faker->dateTimeInInterval($startDate = '-30 days', $interval = '+ 1 days', $timezone = 'Asia/Jakarta')
                //'wktu_pengukuran' => $faker->dateTimeBetween('-30 days', '+2 days'), //Asia / Jakarta
            ]);
        }
    }
}
