<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proveedores extends Model
{
    use HasFactory;

    // Nombre de la tabla en la base de datos
    public $table = 'proveedores'; // Nombre de la tabla en minúscula

    // Definir el nombre de la clave primaria
    public $primaryKey = 'id'; // Clave primaria por defecto

    // Especificar que la clave primaria es auto-incremental
    public $incrementing = true; // Auto-incremental

    // Especificar el tipo de la clave primaria
    public $keyType = 'int'; // Tipo de dato de la clave primaria, 'int' por defecto

    // Campos que se pueden llenar masivamente
    public $fillable = [
        'nombre',
        'direccion',
        'telefono',
        'email',
    ];

    // Activar marcas de tiempo
    public $timestamps = false; // Esto crea 'created_at' y 'updated_at'
    // Definir la relación con el modelo Producto
    public function productos()
    {
        return $this->hasMany(Producto::class, 'proveedor_id', 'id');
    }
}
