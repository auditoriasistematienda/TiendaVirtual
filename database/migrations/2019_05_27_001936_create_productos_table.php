<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('prod_id');
            $table->string('prod_nombre', 100)->unique();
            $table->string('prod_slug', 255)->unique();
            $table->text('prod_descripcion');
            $table->string('prod_extract', 255);
            $table->decimal('prod_precio', 6, 2);
            $table->string('prod_imagen', 255);
            $table->boolean('prod_visible');
            $table->integer('prod_stock')->unsigned();
            $table->bigInteger('cat_id')->unsigned();
            $table->foreign('cat_id')
                   ->references('cat_id')
                   ->on('categorias')
                   ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
