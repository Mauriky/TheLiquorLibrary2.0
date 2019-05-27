<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Archivo extends Model
{
    protected $guarded = ['id'];
    
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
