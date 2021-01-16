<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class formaPagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = [
            [   
               
                'detalle' =>"pago pse",
                
                
             
            ],
    
            [                
                'detalle' =>"tarjeta",
                
            ],
        ];
        DB::table('forma_pago')->insert($datos);
    }
}
