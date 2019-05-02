<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Licor extends Model
{
    protected $table = 'licores';
    protected $fillable = ['nombre','sabor','color','porcentaje_alcohol','precio','stock','pais_origen'];
    protected $guarded = ['id'];
}
