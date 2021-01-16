<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class facturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = [
            [   'numfac'=>3001,
                'fecha' => "2021-01-16",
                'idprod'=> 1001,
                'cedula' => 1,
                'cantidad' => 1,
                'pago' => 1,
                'iva'=> '9500',
                'subtotal' => '40500',
                'total' => '50000',
            ],
        
            [   'numfac'=>3002,
                'fecha' => "2021-01-15",
                'idprod'=> 1002,
                'cedula' => 2,
                'cantidad' => 2,
                'pago' => 1,
                'iva'=> '13300',
                'subtotal' => '56700',
                'total' => '70000',
            ],

            [   'numfac'=>3003,
                'fecha' => "2021-01-14",
                'idprod'=> 1003,
                'cedula' => 1,
                'cantidad' => 1,
                'pago' => 1,
                'iva'=> '15200',
                'subtotal' => '64800',
                'total' => '80000',
            ],
        ];
        DB::table('facturas')->insert($datos);
    }
}
