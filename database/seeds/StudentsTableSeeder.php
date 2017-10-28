<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $class = ['VN-A','VN-B', 'KT11-01', 'KT22-01', 'KT31-01', 'KT21-01'];
        for($i = 0 ; $i < 50; $i++) {
            DB::table('students')->insert([
                    'name'          => $faker->name(),
                    'DOB'           => $faker->date('Y-m-d', 'now'),
                    'address'       => $faker->address(),
                    'class'         => $class[rand(0, count($class) - 1)],
                    'created_at'    => date('Y-m-d H:i:s'),
                    'updated_at'    => date('Y-m-d H:i:s')
            ]);
        }
    }
}
