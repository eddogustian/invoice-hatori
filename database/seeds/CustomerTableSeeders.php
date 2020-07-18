<?php

use Illuminate\Database\Seeder;
use App\Customer;

class CustomerTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create([
            'name' => 'Eddo Gustian',
            'phone' => '081111222444',
            'address' => 'Depok, jawa Barat',
            'email' => 'Testing@gmail.com'
        ]);

        Customer::create([
            'name' => 'Eddo Ganteng',
            'phone' => '081111234567',
            'address' => 'Margonda, jawa Barat',
            'email' => 'Testing2@gmail.com'
        ]);
    }
}
