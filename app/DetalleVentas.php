<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleVentas extends Model
{
    protected $table = 'detalleventas';
    // protected $primaryKey = 'dv_idventa';
    public $timestamps = false;
    protected $fillable = [
        'dv_idventa',
        'dv_idproducto',
        'dv_cantidad',
        'dv_total',
    ];
    protected $guarded = [];
}
