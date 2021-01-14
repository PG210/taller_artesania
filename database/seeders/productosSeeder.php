<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;//interacciones con las consultas


class productosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = [
            [   'referencia'=>1001,
                'nombreProducto'=> 'Sombrero paja toquilla',
                'cantidadProducto' => 45,
                'precioProducto' =>50000,
                'categoria' =>1,//categoria 1 sombreros
                'fotoProducto'=> 's1.jpg',//foto sombreros 
            ],
    
            [
                'referencia'=>1002,
                'nombreProducto'=> 'Sombrero de pava',
                'cantidadProducto' => 50,
                'precioProducto' => 70000,
                'categoria' => 1,
                'fotoProducto'=> 's2.jpg',
            ],

            [   'referencia'=>1003,
                'nombreProducto'=> 'Sombrero Super Fino',
                'cantidadProducto' => 100,
                'precioProducto' => 80000,
                'categoria' => 1,
                'fotoProducto'=> 's3.jpg',
            ],
            
            [   'referencia'=>1100,
                'nombreProducto'=> 'Ruana Sintetica',
                'cantidadProducto' => 50,
                'precioProducto' => 42000,
                'categoria' => 2,
                'fotoProducto'=> 'r4.jpg',
            ] ,

            [   
                'referencia'=>1101,
                'nombreProducto'=> 'Ruana de lana de oveja',
                'cantidadProducto' => 40,
                'precioProducto' => 120000,
                'categoria' => 2,
                'fotoProducto'=> 'r5.jpg',
            ],
            [   'referencia'=>1102,
                'nombreProducto'=> 'Ruena de lana de vicuña',
                'cantidadProducto' => 20,
                'precioProducto' => 180000,
                'categoria' => 2,
                'fotoProducto'=> 'r6.jpg',
            ],
            [   'referencia'=>1200,
                'nombreProducto'=> 'Saco tejido crochet',
                'cantidadProducto' => 20,
                'precioProducto' => 40000,
                'categoria' => 3,
                'fotoProducto'=> 'saco1.jpg',
           ],
            [   'referencia'=>1201,
                'nombreProducto'=> 'Saco tejido multicolor',
                'cantidadProducto' => 30,
                'precioProducto' => 45000,
                'categoria' => 3,
                'fotoProducto'=> 'saco2.jpg',
           ], 
            [   'referencia'=>1202,
                'nombreProducto'=> 'Saco tejido cuello tortuga',
                'cantidadProducto' => 10,
                'precioProducto' => 30000,
                'categoria' => 3,
                'fotoProducto'=> 'saco3.jpg',
           ],
           [   'referencia'=>1300,
                'nombreProducto'=> 'Mochila caracol',
                'cantidadProducto' => 15,
                'precioProducto' =>25000,
                'categoria' => 4,
                'fotoProducto'=> 'm1.jpg',
           ],
           [   'referencia'=>1301,
                'nombreProducto'=> 'Mochila wayuu',
                'cantidadProducto' => 5,
                'precioProducto' =>20000,
                'categoria' => 4,
                'fotoProducto'=> 'm2.jpg',
           ],
           [   'referencia'=>1302,
                'nombreProducto'=> 'Mochila pai colores',
                'cantidadProducto' =>10,
                'precioProducto' =>25000,
                'categoria' => 4,
                'fotoProducto'=> 'm3.jpg',
           ],
           [   'referencia'=>1400,
                'nombreProducto'=> 'Pulsera de colores',
                'cantidadProducto' =>200,
                'precioProducto' =>5000,
                'categoria' => 5,
                'fotoProducto'=> 'v1.jpg',
           ],
          [     'referencia'=>1401,
                'nombreProducto'=> 'Juego Collar',
                'cantidadProducto' =>30,
                'precioProducto' =>20000,
                'categoria' => 5,
                'fotoProducto'=> 'v2.jpg',
            ],
            [   'referencia'=>1402,
                'nombreProducto'=> 'Argollas de iraca',
                'cantidadProducto' =>100,
                'precioProducto' =>5000,
                'categoria' => 5,
                'fotoProducto'=> 'v3.jpg',
           ],
           [   'referencia'=>1403,
                'nombreProducto'=> 'Agenda de iraca',
                'cantidadProducto' =>100,
                'precioProducto' =>25000,
                'categoria' => 5,
                'fotoProducto'=> 'v4.jpg',
           ],

        ];
        DB::table('productos')->insert($datos);
    }
}
