<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Model\Student::class, function (Faker $faker) {
    $class = ['VN-A', 'VN-B', 'KT11-01', 'KT22-01', 'KT31-01', 'KT21-01'];

    return [
            'name' => $faker->name(),
            'birthday' => $faker->date('Y-m-d', 'now'),
            'address' => $faker->address(),
            'class' => $class[rand(0, count($class) - 1)],
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
    ];
});
