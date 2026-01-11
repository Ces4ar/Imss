<?php

namespace App\Controllers;

use App\Models\ArticulosModel;

class Tables extends BaseController
{
    public function simple()
    {
        $model = new articulosModel();
        $data['Articulos'] = $model->findAll();

        return view('Tables/simple', $data);
    }
}
