<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('direccion',300)
            ->nullable()
            ->after('email');
        });
        Schema::table('users', function (Blueprint $table) {
            $table->string('telefono',100)
            ->nullable()
            ->after('direccion');
        });
        Schema::table('users', function (Blueprint $table) {
            $table->string('ImageProfile',200)
            ->nullable()
            ->after('telefono');
        });
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('Estado')
            ->default(true)
            ->after('telefono');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
