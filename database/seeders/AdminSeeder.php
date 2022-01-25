<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userArray=[
            ['name' => 'admin',
             'email' => 'admin@example.com',
             "password" => bcrypt("123456789"),
             "role" => "admin"
            ],
            ['name' => 'suppliers',
             'email' => 'suppier@example.com',
             "password" => bcrypt("123456789"),
             "role" => "suppliers"
            ],
            ['name' => 'employees',
             'email' => 'employed@example.com',
             "password" => bcrypt("123456789"),
             "role" => "employees"
            ],
            ['name' => 'customers',
             'email' => 'customer@example.com',
             "password" => bcrypt("123456789"),
             "role" => "customers"
            ],
        ];
        foreach ($userArray as $user) {
            User::firstOrCreate(['name' => $user['name'], 'email' => $user['email'], 'password' => $user['password']]);
        }
    }
}
