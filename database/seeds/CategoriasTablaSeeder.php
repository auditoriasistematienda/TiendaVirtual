<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Categorias;

class CategoriasTablaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array (
            [
                'cat_nombre'=>'Abarrotes',
                'cat_slug'=>'abarrotes',
                'cat_descripcion'=>'Productos para el hogar',
                'cat_color'=>'#440022'
            ],
            [
                'cat_nombre'=>'Golosinas',
                'cat_slug'=>'golosinas',
                'cat_descripcion'=>'Productos dulces',
                'cat_color'=>'#445500'
            ]
        );
        Categorias::insert($data);

    }
}
