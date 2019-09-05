<?php

use Faker\Generator as Faker;

$factory->define(EventSpeaker::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'organization' => $faker->company,
        'profession' => $faker->title,
        'contact' => $faker->phoneNumber,
        'description' => $faker->paragraph, 
    ];
});
