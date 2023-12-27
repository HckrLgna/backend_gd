<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'producto';

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function controlesCalidad(){
        return $this->hasMany(ControlCalidad::class);
    }
}
