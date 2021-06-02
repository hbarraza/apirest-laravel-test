<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    //
    //public $timestamps = false; //para no llamar los tiempos de creacion y modificacion
    protected $fillable = ['id', 'cat_nombre', 'cat_descripcion'];

}
