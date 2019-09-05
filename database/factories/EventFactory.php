<?php

use App\Speaker;
use App\EventType;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


$factory->define(App\Event::class, function (Faker $faker) {

    $title = $faker->word;    

    return [

        //'image' =>$faker->image,
        'title' => $title,
        'slug' => Str::slug($title),
        'type_id' => random_int(1, EventType::count()),
        'date' => $faker->date,
        'start_time' => $faker->time,
        'end_time' => $faker->time,
        'expected_no' => random_int(10, 50),
        'actual_no' => random_int(10, 50),
        'speaker_id' => random_int(1, Speaker::count()),
        'eventbudget' => random_int(1000, 5000),
        'status' => 'upcoming',
        'reg_fee' => random_int(100, 500),
        'no_of_days' => random_int(1, 10),
        'description' => $faker->paragraph,
    ];
});