<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Clientes;

class ClientesTablaSeeder extends Seeder
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
                'cli_dni'=>'70345671',
                'cli_nombres'=>'Alejandro',
                'cli_apellidos'=>'Rodriguez',
                'cli_email'=>'alex98rodriguezromero@hotmail.com',
                'cli_user'=> 'redjohn',
                'cli_password'=>\Hash::make('70345671'),
                'cli_activo'=>1,                
                'cli_direccion'=>'Psje. Copacabana Lt. 29, 200 Millas, Callao',   
            ],
            [
                'cli_dni'=>'12345678',
                'cli_nombres'=>'Pedro',
                'cli_apellidos'=>'Picapiedra',
                'cli_email'=>'pedropicapiedra@hotmail.com',
                'cli_user'=> 'pedropica',
                'cli_password'=>\Hash::make('12345678'),
                'cli_activo'=>1,                
                'cli_direccion'=>'Psje. Dinosaurio Lt. 50, 2000 Millas',   
            ]
        );
        Clientes::insert($data);

    }
}
