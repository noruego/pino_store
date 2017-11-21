<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ship extends Model
{
    protected $table='ship';
    protected $fillable = ['name', 'id_state'];
    protected $guarded = ['id'];
    public $timestamps  = false;
}
