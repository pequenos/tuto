<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MethodPayment;

class MethodPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $methodsArray=[
            ['name' => 'Efectivo'],
            ['name' => 'Tarjeta'],
            ['name' => 'Transferencias Electrónicas'],
        ];
        foreach ($methodsArray as $method) {
            MethodPayment::firstOrCreate(['name' => $method['name']]);
        }
    }
}
