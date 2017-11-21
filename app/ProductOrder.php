<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductOrder extends Model
{
    protected $table='product_order';
    protected $fillable = ['id_ship','order date','quantity','description','subtotal','total','id_discount_cupon','id_payment_method'];
    protected $guarded = ['id'];
    public $timestamps  = false;
}