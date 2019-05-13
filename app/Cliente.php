<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    use SoftDeletes;
    protected $fillable = ['nombre','apellido','rfc','direccion','email'];
    protected $guarded = ['id'];

    //Convierte el atributo rfc en mayuscula
    //public function getRfcMayusculaAttribute(){
    //    return strtoupper($this->rfc);
    //}

    public function setRfcAttribute($rfc){
        $this->attributes['rfc'] = strtoupper($rfc);
    }

}
