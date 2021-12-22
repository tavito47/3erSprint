<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pliego extends Model
{
    use HasFactory;

    protected $fillable=[
        'docente',
        'titulo',
        'materia',
        'sismat',
        'fecha',
        'semestre',
        'documento'
    ];
    public function getPathFileAttribute(){
        if ($this->documento) {
            if (substr($this->documento, 0, 4) === "http")
                return $this->documento;
            return asset('Archivos').'/' . $this->documento;
        }
        // $path = null;
        // if(isset($this->documento)){
        //     $path = public_path('Archivos').'/'.($this->documento);
        // }return $path;
    }
}
