<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Listings;
use Faker\Generator as Faker;

$factory->define(Listings::class, function (Faker $faker) {
	return [
		'title' => substr($faker->sentence(2), 0, -1),
		'country' => $faker->country,
		'type' => 'Villa',
		'stars' => $faker->biasedNumberBetween(0, 6),
		'description' => $faker->paragraph,
		'img1' => $faker->imageUrl(300, 200, 'city'),
		'img2' => $faker->imageUrl(300, 200, 'city'),
		'img3' => $faker->imageUrl(300, 200, 'city'),
	];
});
