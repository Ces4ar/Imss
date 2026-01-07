<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Salidas extends BaseController
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    /**
     * Vista de movimientos
     */
    public function index()
    {
        if (!session()->get('usuario')) {
            return redirect()->to('/plantilla');
        }

        $query = $this->db->query("SELECT * FROM articulos");
        $data['Articulos'] = $query->getResultArray();

        return view('salidas', $data);
    }

    /**
     * Registrar ENTRADA o SALIDA + guardar en movimientos
     */
    public function registrar()
{
    $idArticulo = (int) $this->request->getPost('id_articulo');
    $cantidad   = (int) $this->request->getPost('cantidad');
    $tipo       = $this->request->getPost('tipo_movimiento');
    $observaciones = $this->request->getPost('observaciones');

    $idUsuario = session()->get('id_usuario');

    if ($idArticulo <= 0 || $cantidad <= 0 || !in_array($tipo, ['entrada', 'salida'])) {
        return redirect()->back()->with('error', 'Datos inválidos');
    }

    $articulo = $this->db->query(
        "SELECT inventario_dis_unidad FROM articulos WHERE Id_articulo = ?",
        [$idArticulo]
    )->getRowArray();

    if (!$articulo) {
        return redirect()->back()->with('error', 'Artículo no encontrado');
    }

    $stockActual = (int)$articulo['inventario_dis_unidad'];

    if ($tipo === 'salida') {
        if ($cantidad > $stockActual) {
            return redirect()->back()->with('error', 'Stock insuficiente');
        }
        $nuevoStock = $stockActual - $cantidad;
    } else {
        $nuevoStock = $stockActual + $cantidad;
    }

    $this->db->transStart();

    $this->db->query(
        "UPDATE articulos SET inventario_dis_unidad = ? WHERE Id_articulo = ?",
        [$nuevoStock, $idArticulo]
    );

    $this->db->query(
        "INSERT INTO movimientos 
        (id_articulo, id_usuario, tipo_movimiento, cantidad, fecha, observaciones)
        VALUES (?, ?, ?, ?, NOW(), ?)",
        [$idArticulo, $idUsuario, $tipo, $cantidad, $observaciones]
    );

    $this->db->transComplete();

    return redirect()->back()->with('success', 'Movimiento registrado correctamente');
}

}
