<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoriesArray=[
            ['name' => 'Perfumeria',
             'description' => 'Cosmeticos y perfumes para en cuidado e higiene personal'
            ],
            ['name' => 'Viveres',
             'description' => 'Alimentos no perecederos actos para el consumo humano'
            ],
            ['name' => 'Articulos de Limpieza',
             'description' => 'Detergentes, la platos, y demás articulos para la limpieza del hogar'
            ],
            ['name' => 'Mascotas y animales de corral',
             'description' => 'Lo necesario para el cuidado de tu fieles amigos y los animales de corral, como vacunas, alimentos, forraje, assesorios y más'
            ],
            ['name' => 'Charcuteria',
              'description' => 'Alimentos procesados actos para el consumo humano como lo son: los queso, los embutidos, lactios y muchas cosas más'
            ],
            ['name' => 'Carniceria',
             'description' => 'Alimentos origen animal beneficiados para el consumo'
            ],
            ['name' => 'Pescaderia',
             'description' => 'Todo conserniente a los alimentos traidos del mar'
            ],
            ['name' => 'Verduras y hortalizas',
             'description' => 'Todo lo venido del campo en frutos, legumbres y hortalizas para el disfrute de las familias'
            ],
        ];
        foreach ($categoriesArray as $categories) {
            Category::firstOrCreate(['name' => $categories['name'], 'description' => $categories['description'] ]);
        }
    }
}
