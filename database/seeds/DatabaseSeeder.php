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
        echo "Creating 10 sellers...\n";
        /**
         * Creating 10 sellers
         */
        factory(App\Seller::class, 10)->create();

        echo "Creating 50 sales related to random sellers...\n";
        /**
         * Creating 50 sales related to
         * random sellers
         */
        factory(App\Sale::class, 50)->create();

        echo "Creating 25 customers related to random sales...\n";
        /**
         * Creating one customer for each sale
         */
        $salesId = App\Sale::all('id');
        foreach ($salesId as $id) {
            $customer = new App\Customer;
            $customer->name     = 'Customer #' . $id->id;
            $customer->email    = 'customer' . $id->id . '@sales.com';
            $customer->sale_id  = $id->id;

            $customer->save();
        }

        echo "Creating 5 sellers with no sales...\n";
        /**
         * Creating 5 sellers with no sales
         */
        factory(App\Seller::class, 5)->create();

        echo "Done!";
    }
}
