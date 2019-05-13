<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    protected $guarded = ['id'];
    protected $fillable=['formato_pago','fecha','estado'];
    //Establece una relación hacía un cliente
    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }

    //Establece relación hacía muchos licores
    public function licores(){
        return $this->belongsTo(Licor::class);
    }

}
