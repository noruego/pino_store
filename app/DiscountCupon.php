<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiscountCupon extends Model
{
    protected $table='discount_cupon';
    protected $fillable = ['name', 'description','start_date','end_date'];
    protected $guarded = ['id'];
    public $timestamps  = false;
}
