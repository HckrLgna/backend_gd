<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    use HasFactory;
    protected $table = 'contrato';
    protected $fillable = [
        'nombre',
        'descripcion',
        'fecha_creacion',
        'version',
        'ubicacion_almacenamiento',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
