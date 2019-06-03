<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('cli_id');
            $table->string('cli_dni', 8);
            $table->string('cli_nombres',100);
            $table->string('cli_apellidos',100);
            $table->string('cli_email',100)->unique();
            $table->string('cli_user',20)->unique();
            $table->string('cli_password',255);
            $table->boolean('cli_activo');
            $table->text('cli_direccion');
            $table->rememberToken()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
