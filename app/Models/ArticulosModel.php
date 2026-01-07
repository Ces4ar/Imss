<?php

namespace App\Models;

use CodeIgniter\Model;

class ArticulosModel extends Model
{
    protected $table = 'Articulos';
    protected $primaryKey = 'Id_articulo';
    protected $returnType = 'array';

    protected $allowedFields = [
        'Id_articulo','desc_gpo','Codigo_14','Descripcion','inventario_dis_unidad','total'
    ];
}
