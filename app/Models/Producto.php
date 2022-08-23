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
        return $this->belongsTo('App\Archivos');
    }
    public function unidad()
    {
        return $this->belongsTo('App\Unidad');
    }
    public function categoria()
    {
        return $this->belongsTo('App\Categoria');
    }
    public function detalle_ventas()
    {
        return $this->hasMnay('App\DetalleVenta');
    }
    public function historico_registro()
    {
        return $this->belongsTo('App\HistoricoVenta');
    }
    public function inventario_producto()
    {
        return $this->belongsTo('App\InventarioProducto');
    }
    public function sucursal_productos()
    {
        return $this->hasMnay('App\SucursalProducto');
    }

}

            