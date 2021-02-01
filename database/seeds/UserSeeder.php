<?php

use App\User;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //creando usuario como admin
        $user = new User();

        $user->name = "Jose Onate";
        $user->email = "ingeniero.josec@gmail.com";
        $user->email_verified_at = null;
        $user->role_id = 1;
        $user->password = Hash::make('admin1234');

        $user->save();



        $user2 = new User();

        $user2->name = "Eduardo Baquero";
        $user2->email = "eduardo123@gmail.com";
        $user2->email_verified_at = null;
        $user2->role_id = 3;
        $user2->password = Hash::make('eduardo123');

        $user2->save();

        Factory(User::class,60)->create();
    }
}
