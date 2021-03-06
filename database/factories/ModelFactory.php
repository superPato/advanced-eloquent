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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Book::class, function (Faker\Generator $faker)	{
	return [
		'title' => $faker->name,
		'description' => $faker->text,
        'status' => $faker->randomElement(['public', 'draft']),
        'category_id' => $faker->randomElement([1,2,3]),
        'user_id' => rand(1, 10),
	];
});

$factory->define(App\Exam::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->name,
    ];
});

$factory->define(App\Page::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'body' => $faker->text,
    ];
});

$factory->define(App\Post::class, function (Faker\Generator $faker)
{
    return [
        'title' => $faker->name,
        'body' => $faker->text,
    ];
});