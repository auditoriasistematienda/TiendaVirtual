<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    protected $table = 'ventas';
    protected $primaryKey = 'ven_id';
    public $timestamps = false;
    protected $fillable = [
        'ven_idcliente',
        'ven_fecha',
        'ven_envio',
        'ven_total',
        'ven_idusuario'
    ];
    protected $guarded = [];
}
