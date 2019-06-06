<?php

use Illuminate\Database\Seeder;

class ListingsTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		factory(App\Listings::class, 15)->create();
	}
}
