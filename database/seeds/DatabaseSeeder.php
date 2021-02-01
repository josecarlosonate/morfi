<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // llamo seeder de usuario
        $this->call(UserSeeder::class);
        // llamo seeder de rol
        $this->call(RoleSeeder::class);
        
        
    }
}
