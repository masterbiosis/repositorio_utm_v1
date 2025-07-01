<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Lineas;

class Documento extends Model
{
    /** @use HasFactory<\Database\Factories\DocumentoFactory> */
    use HasFactory;

    protected $fillable = [
        'titulo',
        'fecha_presentacion',
    ];


    public function lineas(){
        //El DOCUMENTo pertence a muchas LINEAS de investigacion
        //return $this->belongsToMany(Lineas::class)->withPivot('quatity');
        return $this->belongsToMany(Lineas::class);

    }
}
