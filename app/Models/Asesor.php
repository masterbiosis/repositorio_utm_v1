<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Empresa;

class Asesor extends Model
{
    /** @use HasFactory<\Database\Factories\AsesorFactory> */
    use HasFactory;

     protected $fillable = [
        'nombre',
        'app',
        'apm',
        'email',
        'telefono',
        'empresa_id'
    ];

    public function empresa(){
        //El asesor pertenece a una empresa
        return $this->belongsTo(Empresa::class, 'empresa_id');
    }
}
