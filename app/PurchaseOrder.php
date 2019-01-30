<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    protected $table='purchase_order';
    protected $fillable = ['id_product', 'id_product_order'];
    protected $guarded = ['id'];
    public $timestamps  = false;
}