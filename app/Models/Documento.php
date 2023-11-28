<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    use HasFactory;
    protected $table = 'documento';
    protected $fillable = [
        'nombre',
        'descripcion',
        'fecha_creacion',
        'version',
        'ubicacion_almacenamiento',
    ];
}
