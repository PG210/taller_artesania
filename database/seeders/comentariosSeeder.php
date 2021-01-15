<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;//interacciones con las consultas

class comentariosSeeder extends Seeder
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
               'cedCli' => 1,
                'id_Prod'=>1001,
                'comentario' =>"Es un gran producto ya que es mundialmente demandado por su exquisita confección artesanal, siendo actualmente el producto representativo de las artesanías ecuatorianas",
                'fecha'=>"2020-11-12",
                
             
            ],
    
            [                
                'cedCli' => 2,
                'id_Prod'=>1002,
                'comentario' =>"Es muy lindo, su acabado, el color, el tamaño. Todo es como esperaba. Estoy satisfecho con mi sombrero.",
                'fecha'=>"2021-01-12",
            ],

            [   
                'cedCli' => 2,
                'id_Prod'=>1003,
                'comentario' =>"Excelente el producto, es exactamente lo que pedí",
                'fecha'=>"2021-01-05",
                
            ],
            
            [   
                'cedCli' => 1,
                'id_Prod'=>1100,
                'comentario' =>"Esta manta es muy bonita, el color y la textura de la tela me gustó.",
                'fecha'=>"2021-01-08",
            ] ,

            [   
                'cedCli' => 2,
                'id_Prod'=>1101,
                'comentario' =>"su color no es totalmente uniforme, tiene hebras más claras o más oscuras",
                'fecha'=>"2021-01-10",
            ],
            [  
                'cedCli' => 1,
                'id_Prod'=>1102,
                'comentario' =>"tiene buen color y la textura es muy buena un gran producto",
                'fecha'=>"2021-01-01",
            ],
            [   
                'cedCli' => 2,
                'id_Prod'=>1200,
                'comentario' =>"no me gusto el producto, no es como se lo mira en las fotos de la pagina",
                'fecha'=>"2021-01-14",
           ],
            [   
                'cedCli' => 1,
                'id_Prod'=>1201,
                'comentario' =>"buen producto la textura y el color son muy buenos, me gusto mucho el producto",
                'fecha'=>"2021-01-09",
           ], 
            [   
                'cedCli' => 2,
                'id_Prod'=>1202,
                'comentario' =>"Es precioso, el material de excelente calidad y muy cómodo, justo lo que esperaba. Recomendado 100%.",
                'fecha'=>"2021-01-20",
           ],
           [   
            'cedCli' => 1,
            'id_Prod'=>1300,
            'comentario' =>"no me gusto el producto la prte del tejido no es muy buena",
            'fecha'=>"2021-01-17",
           ],
           [   
            'cedCli' => 2,
            'id_Prod'=>1301,
            'comentario' =>"Muy buen producto, de muy buena calidad. Muy satisfecha.",
            'fecha'=>"2021-01-14",
           ],
           [   
            'cedCli' => 1,
            'id_Prod'=>1302,
            'comentario' =>"muy buen producto la textura el tejido y los colores son muy buenos",
            'fecha'=>"2021-01-11",
           ],
           [   
            'cedCli' => 1,
            'id_Prod'=>1400,
            'comentario' =>"tienen buenos colores y el diseño es muy bueno",
            'fecha'=>"2020-12-14",
           ],
          [     
            'cedCli' => 2,
            'id_Prod'=>1401,
            'comentario' =>"no me gusto el producto no es lo que esperaba los materiales no me gustaron",
            'fecha'=>"2020-12-10",
            ],
            [   
            'cedCli' => 1,
            'id_Prod'=>1402,
            'comentario' =>"me gusto mucho el diseño y los materiales utilizados",
            'fecha'=>"2020-12-08",
           ],
           [   'cedCli' => 2,
           'id_Prod'=>1403,
           'comentario' =>"un gran producto muy buenos colores y muy funcional",
           'fecha'=>"2020-12-01",
           ],

        ];
        DB::table('comentarios')->insert($datos);
    }
}