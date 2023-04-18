<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;
    //nombre de la tabla:
    protected $table = 'profesores';
    //identificador:
    protected $primaryKey = 'id';
    //campos de la tabla a llentar:
    protected $fillable = ['nombre_apellido', 'profesion', 'grado_academico', 'telefono'];
    protected $hidden = ['id'];

    public function cursos(){
        return $this->hasMany(Curso::class);
    }

}
