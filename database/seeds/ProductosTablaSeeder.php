<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Productos;

class ProductosTablaSeeder extends Seeder
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
                'prod_nombre'=>'Atun Florida',
                'prod_slug'=>'atun florida',
                'prod_descripcion'=>'Producto de la marca Florida',
                'prod_extract'=>'Producto florida',
                'prod_precio'=> 7.00,
                'prod_imagen'=>'https://plazavea.vteximg.com.br/arquivos/ids/175436-450-450/24082.jpg?v=635808891639800000',
                'prod_visible'=>1,                
                'prod_stock'=>40,
                'cat_id'=>1,
                'created_at'=>new DateTime,
                'updated_at'=>new DateTIme         
            ],
            [
                'prod_nombre'=>'Chupetin Globopop',
                'prod_slug'=>'globopop',
                'prod_descripcion'=>'Producto globopop',
                'prod_extract'=>'Dulce',
                'prod_precio'=> 1.50,
                'prod_imagen'=>'https://plazavea.vteximg.com.br/arquivos/ids/178770-450-450/20047093.jpg?v=635909119345530000',
                'prod_visible'=>1,                
                'prod_stock'=>100,
                'cat_id'=>2,
                'created_at'=>new DateTime,
                'updated_at'=>new DateTIme  
            ],
            [
                'prod_nombre'=>'Caramelo de limon',
                'prod_slug'=>'caramelo',
                'prod_descripcion'=>'Producto caramelo de limon',
                'prod_extract'=>'dulce',
                'prod_precio'=> 0.20,
                'prod_imagen'=>'http://www.sweetcentre.net/tienda/caramelos/caramelos-granel/artesanos-o-tacos/caramelo-artesano-miel-y-limon-taco-1kg/image_1_large',
                'prod_visible'=>1,                
                'prod_stock'=>100,
                'cat_id'=>2,
                'created_at'=>new DateTime,
                'updated_at'=>new DateTIme  
            ],
            [
                'prod_nombre'=>'Toffee de chocolate',
                'prod_slug'=>'toffee',
                'prod_descripcion'=>'Producto toffee de chocolate',
                'prod_extract'=>'dulce',
                'prod_precio'=> 0.30,
                'prod_imagen'=>'https://u5j4h3u7.stackpathcdn.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/h/s/hssfrb_group.jpg',
                'prod_visible'=>1,                
                'prod_stock'=>100,
                'cat_id'=>2,
                'created_at'=>new DateTime,
                'updated_at'=>new DateTIme  
            ],
            [
                'prod_nombre'=>'Fideos cabello de angel',
                'prod_slug'=>'fideo',
                'prod_descripcion'=>'Producto de la marca don vittorio',
                'prod_extract'=>'Producto don vittorio',
                'prod_precio'=> 2.60,
                'prod_imagen'=>'https://www.ksifree.com/uploads/product/460/main.jpg',
                'prod_visible'=>1,                
                'prod_stock'=>40,
                'cat_id'=>1,
                'created_at'=>new DateTime,
                'updated_at'=>new DateTIme         
            ]
        );
        Productos::insert($data);

    }
}
