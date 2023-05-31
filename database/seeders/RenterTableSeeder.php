<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class RenterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

          // Thêm dữ liệu ngẫu nhiên vào bảng "renter"
          for ($i = 1; $i <= 2; $i++) {
            DB::table('renter')->insert([
                'renter_id' => $i,
                'renter_name' => $faker->name,
                'renter_email' => $faker->email,
                'renter_phone' => $faker->phoneNumber,
                'renter_address' => $faker->address,
                'renter_password' => bcrypt($faker->password)
            ]);
        }
    }
}
