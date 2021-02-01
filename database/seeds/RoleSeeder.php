<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role = new Role();

        $role->key = "admin";
        $role->name = "Administrador";
        $role->description = "Administrador de sitio con todos los permisos activados";

        $role->save();


        $role2 = new Role();

        $role2->key = "tecnico";
        $role2->name = "Tecnico prestador de servicio";
        $role2->description = "persona que deseea prestar su servicio a un tercero";

        $role2->save();


        $role3 = new Role();

        $role3->key = "cliente";
        $role3->name = "Cliente";
        $role3->description = "persona que deseea adquirir un servicio de terceros";

        $role3->save();
    }
}
