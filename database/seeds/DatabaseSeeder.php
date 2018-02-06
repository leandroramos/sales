<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Creating 10 sellers
         */
        factory(App\Seller::class, 10)->create();

        /**
         * Creating 50 sales related to
         * random sellers
         */
        factory(App\Sale::class, 50)->create();
    }
}
