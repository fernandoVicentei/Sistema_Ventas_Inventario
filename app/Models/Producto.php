<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'id_categoria',
        'id_unidad',
        'id_archivo'
    ];
    public function archivo()
    {
        return $this->belongsTo('App\Models\Archivos');
    }
    public function unidad()
    {
        return $this->belongsTo('App\Models\Unidad');
    }
    public function categoria_pro()
    {
        return $this->belongsTo(Categoria::class);
    }
    public function detalle_ventas()
    {
        return $this->hasMnay('App\Models\DetalleVenta');
    }
    public function historico_registro()
    {
        return $this->belongsTo('App\Models\HistoricoVenta');
    }
    public function inventario_producto()
    {
        return $this->belongsTo('App\Models\InventarioProducto');
    }
    public function sucursal_productos()
    {
        return $this->hasMnay('App\Models\SucursalProducto');
    }

}

            