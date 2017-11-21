<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Metodo_pago extends Model
{
    protected $table='metodo_pago';
    protected $fillable = ['nombre', 'descripcion'];
    protected $guarded = ['id'];
    public $timestamps  = false;
}
