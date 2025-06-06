<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Imagen extends Model
{
    use HasFactory;
    protected $table = "imagenes";
    protected $fillable = [
        'nombre',
        'url',
        'tarea_id',
    ];
    public function Tarea(): HasOne
    {
        return $this->hasOne(Tarea::class, 'id', 'tarea_id');
    }
}
