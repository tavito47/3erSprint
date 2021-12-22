<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Convocatoria extends Model
{
    use HasFactory;
    protected $fillable=[
        'titulo',
        'fecha',
        'codigo',
        'semestre',
        'documento'
    ];

    //mutator 
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
