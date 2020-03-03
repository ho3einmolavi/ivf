<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\News;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(User::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => bcrypt(123456789), // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(News::class, function (Faker $faker) {
    return [
        'title' => $faker->slug ,
        'body' => $faker->text ,
        'image' => 'image.jpg' ,
        'user_id' => 1
    ];
});

$factory->define(\App\Blog::class, function (Faker $faker) {
    return [
        'title' => $faker->slug ,
        'body' => $faker->text ,
        'image' => 'image.jpg' ,
        'user_id' => 2
    ];
});

$factory->define(\App\Conference::class, function (Faker $faker) {
    return [
        'title' => $faker->slug ,
        'body' => $faker->text ,
        'image' => 'image.jpg' ,
        'website' => $faker->url ,
        'phone' => $faker->phoneNumber ,
        'manager' => $faker->title.' '.$faker->firstName ,
    ];
});

