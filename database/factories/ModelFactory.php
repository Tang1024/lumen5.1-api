<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
 */
$faker = Faker\Factory::create('zh_CN');
$factory->define(App\Models\User::class, function ($faker) use ($faker) {
    return [
        'name'       => $faker->name,
        'email'      => $faker->email,
        'mobile'     => $faker->phoneNumber,
        'password'   => bcrypt(str_random(10)),
        'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
    ];
});
