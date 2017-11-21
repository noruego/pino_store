<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cupon extends Model
{
    protected $table='cupon_descuento';
    protected $fillable = ['nombre', 'porcentaje'];
    protected $guarded = ['id'];
    public $timestamps  = false;
}
