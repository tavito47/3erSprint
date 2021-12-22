<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Reporte;
class Sobre extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'sobreA',
        'sobreB',
        'fecha'
    ];
    // public function reportes(){
    //     return $this->hasMany(Reporte::class);
    // }
}
