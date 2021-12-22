<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Planificacion;

class Reporte extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable=[
        'documento',
        'observacion',
        
        'planificacion_id'
    ];
    public function planificacion(){
        return $this->belongsTo(Planificacion::class);
    }
}
