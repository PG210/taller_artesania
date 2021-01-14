<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;//interacciones con las consultas

class categoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $datos = [//array de datos 
            ['nombreCategoria' => 'Sombreros',
            'descripcion' => 'Los sombreros son representaciones de las regiones colombianas, que muestran las tradiciones artesanales',
            ],
            ['nombreCategoria' => 'Ruanas',
            'descripcion' => 'Ruanas 100% artesanal de tejido de lana. Tenñido natural con cochinilla.',
            ],
            ['nombreCategoria' => 'Sacos',
            'descripcion' => 'Sueter elaborado en una delicada mezcla de lana de oveja con lana sintetica y tejido trenzado, suave al tacto.',
            ],
            ['nombreCategoria' => 'Bolsos',
            'descripcion' => 'Los bolsos artesanales, se realizan con hilos de colores de algodón 100% natural en crochet o con ganchillo, y son tejidos a mano.',
            ],
            ['nombreCategoria' => 'Bisuteria',
            'descripcion' => 'La bisutería se fabrica con materiales muy diversos: la porcelana, alambre de latón, telas, pasta de papel, pasta de vidrio, el oro y la plata',
            ]
        ];
        DB::table('categorias')->insert($datos);//inserta los datos a la tabla categorias

    }
}
