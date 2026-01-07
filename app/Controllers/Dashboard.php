<?php 
namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/plantilla');
        }

        $db = \Config\Database::connect();

        // 🔢 Total usuarios
        $totalUsuarios = $db->query(
            "SELECT COUNT(*) AS total FROM usuarios"
        )->getRow()->total;

        // 📦 Total salidas
        $totalSalidas = $db->query(
            "SELECT IFNULL(SUM(cantidad), 0) AS total 
             FROM movimientos 
             WHERE tipo_movimiento = 'salida'"
        )->getRow()->total;

        // 🔥 Productos más usados
        $productos = $db->query("
            SELECT a.Descripcion, SUM(m.cantidad) AS total
            FROM movimientos m
            JOIN articulos a ON a.id_articulo = m.id_articulo
            WHERE m.tipo_movimiento = 'salida'
            GROUP BY a.Descripcion
            ORDER BY total DESC
            LIMIT 7
        ")->getResultArray();

        return view('dashboard', [
            'totalUsuarios' => $totalUsuarios,
            'totalSalidas'  => $totalSalidas,
            'productos'     => $productos
        ]);
    }
}
