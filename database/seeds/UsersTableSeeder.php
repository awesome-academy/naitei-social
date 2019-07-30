<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=0; $i <20; $i ++) {
            DB::table('users')->insert([
                'email' => $faker->unique()->safeEmail,
                'email_verified_at' => now(),
                'password' => Hash::make('builam'),
                'remember_token' => Str::random(10),
                'first_name' => $faker->firstName,
                'last_name' => $faker ->lastName,
                'birth_date' => $faker ->date($format = 'Y-m-d', $max = 'now'),
                'sex' => 'Male',
                'avatar' => 'myavatar.jpg',
                'phone' => $faker -> e164PhoneNumber,
                'status' => '1',
            ]);
        }

    }
}
