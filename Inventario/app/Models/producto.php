<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;

    // Nombre de la tabla en la base de datos
    protected $table = 'producto'; // Nombre de la tabla en minúscula

    // Definir el nombre de la clave primaria
    protected $primaryKey = 'producto_id'; // Clave primaria personalizada

    // Especificar que la clave primaria es auto-incremental
    public $incrementing = true; // Auto-incremental

    // Especificar el tipo de la clave primaria
    protected $keyType = 'int'; // Tipo de dato de la clave primaria, 'int' por defecto

    // Campos que se pueden llenar masivamente
    protected $fillable = [
        'producto_nombre',
        'descripcion',
        'producto_precio',
        'producto_stock',
        'categoria_id',
        'proveedor_id',
        'estante',
        'fecha_caduca',
    ];

    // Activar marcas de tiempo
    public $timestamps = true; // Esto crea 'created_at' y 'updated_at'

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }

    public function proveedor()
    {
        return $this->belongsTo(Proveedores::class, 'proveedor_id');
    }
}
