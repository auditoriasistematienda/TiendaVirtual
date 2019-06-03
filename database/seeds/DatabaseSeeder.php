<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(ClientesTablaSeeder::class);
        $this->call(CategoriasTablaSeeder::class);
        $this->call(ProductosTablaSeeder::class);

        Model::reguard();
    }
}
