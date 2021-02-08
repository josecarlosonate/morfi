<?php

use Illuminate\Database\Seeder;

class ServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('servicios')->insert(
            [
                'key' => "100001",
                'name' => "Mantenimiento de Aires Acondicionados",
                'description' =>  "Tecnico capaz de ofrecer mantenimiento preventivo y correctivo a
                maquinas de diferentes marcas"
            ]
        );
        DB::table('servicios')->insert(
            [
                'key' => "100002",
                'name' => "Mantenimiento de Neveras",
                'description' =>  "Tecnico capaz de ofrecer mantenimiento preventivo y correctivo a
                neveras de diferentes marcas"
            ]
        );
        DB::table('servicios')->insert(
            [
                'key' => "100003",
                'name' => "Instalación Electrica",
                'description' =>  "Tecnico capaz de ofrecer mantenimiento preventivo y correctivo y de
                realizar la instalación segun la norma de el cablado electrico"
            ]
        );


    }
}
