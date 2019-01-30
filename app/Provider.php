<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $table='provider';
    protected $fillable = ['name','rfc','phone','email','id_city','id_state'];
    protected $guarded = ['id'];
    public $timestamps  = false;
}
