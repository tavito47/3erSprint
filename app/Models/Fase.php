<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Fase
 *
 * @property $id
 * @property $nombre
 * @property $representante
 * @property $semestre
 * @property $documento
 * @property $documento2
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Fase extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','representante','semestre','documento','documento2'];



}
