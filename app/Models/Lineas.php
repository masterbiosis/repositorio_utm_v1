<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Documento;

class Lineas extends Model
{
    /** @use HasFactory<\Database\Factories\LineasFactory> */
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
    ];

     public function documentos(){
        //El DOCUMENTo pertence a muchas LINEAS de investigacion
        //return $this->belongsToMany(Documento::class)->withPivot('quatity');
        return $this->belongsToMany(Documento::class);

    }
}
