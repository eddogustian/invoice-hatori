<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(ProductTableSeeders::class); //Load seeder class yang telah dibuat
        $this->call(CustomerTableSeeders::class); //Load seeder class yang telah dibuat
    }
}
