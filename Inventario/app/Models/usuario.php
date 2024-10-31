<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    use HasFactory;

    // Nombre de la tabla en la base de datos
    protected $table = 'usuarios'; // Nombre de la tabla en minúscula

    // Definir el nombre de la clave primaria
    protected $primaryKey = 'usuario_id'; // Clave primaria personalizada

    // Especificar que la clave primaria es auto-incremental
    public $incrementing = true; // Auto-incremental

    // Especificar el tipo de la clave primaria
    protected $keyType = 'int'; // Tipo de dato de la clave primaria, 'int' por defecto

    // Campos que se pueden llenar masivamente
    protected $fillable = [
        'usuario_nombre',
        'usuario_apellido',
        'usuario_usuario',
        'usuario_clave',
        'rol',
    ];

    // Ocultar el campo clave cuando se devuelvan los resultados
    protected $hidden = [
        'usuario_clave',
    ];

    // Activar marcas de tiempo
    public $timestamps = true; // Esto crea 'created_at' y 'updated_at'
}


