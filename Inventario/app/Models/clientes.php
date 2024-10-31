<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    use HasFactory;

    // Nombre de la tabla en la base de datos
    protected $table = 'clientes'; // Nombre de la tabla en minúscula

    // Definir el nombre de la clave primaria
    protected $primaryKey = 'id'; // Clave primaria en la tabla

    // Especificar que la clave primaria es auto-incremental
    public $incrementing = true; // Auto-incremental

    // Especificar el tipo de la clave primaria
    protected $keyType = 'int'; // Tipo de dato de la clave primaria, 'int' por defecto

    // Campos que se pueden llenar masivamente
    protected $fillable = [
        'nombre',
        'direccion',
        'telefono',
        'email',
    ];

    // Activar marcas de tiempo
    public $timestamps = false; // Esto crea 'created_at' y 'updated_at'
}

