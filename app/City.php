<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table='city';
    protected $fillable = ['name', 'id_state'];
    protected $guarded = ['id'];
    public $timestamps  = false;
}
