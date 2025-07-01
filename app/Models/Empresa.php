<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Asesor;

class Empresa extends Model
{
    /** @use HasFactory<\Database\Factories\EmpresaFactory> */
    use HasFactory;

     protected $fillable = [
        'nombre',
        'direccion',
        'email',
        'telefono',
    ];

    public function asesores(){
        //Una empresa tiene muchas asesores
        return $this->hasMany(Asesor::class, 'empresa_id');
    }
}
