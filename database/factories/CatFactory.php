<?php
use Pratice\Breed;
use Pratice\User;

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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Pratice\Cat::class, function (Faker\Generator $faker) {
	$breed_ids= Breed::pluck('id');
	$user_ids= User::pluck('id');
    return [
        'name' => $faker->name,
        'breed_id' => $faker->randomElement($breed_ids),
        'user_id' => $faker->randomElement($user_ids)
    ];
});
