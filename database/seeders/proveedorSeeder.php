<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class proveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = [
            [   'idprov'=>4001,
                'nomProv' => "Arturo Calle",
                'dirProv'=> "Bogota",
                'telProv' => "3211234555",
                'idProd' => 1001,
                'preCompra' => 30000,
            ],
        
            [   'idprov'=> 4002,
                'nomProv' => "Pedro Cuasquer",
                'dirProv'=> "Pupiales",
                'telProv' => "3212321242",
                'idProd' => 1002,
                'preCompra' => 40000,
            ],

            [   'idprov'=>4003,
                'nomProv' => "Yanira Benavides",
                'dirProv'=> "Santander de Quilichao",
                'telProv' => "3211223211",
                'idProd' => 1003,
                'preCompra' => 45000,
                ],
        ];
        DB::table('proveedores')->insert($datos);
    }
}
