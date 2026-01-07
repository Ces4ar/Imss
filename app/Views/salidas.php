<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Movimientos de Productos</title>

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
    body {
        background-color: #1e1e2f;
        color: #ffffff;
    }

    /* Navbar */
    .navbar {
        border-bottom: 1px solid #333;
    }

    /* Card */
    .card {
        background-color: #2a2a3d;
        color: #ffffff;
        border: none;
    }

    .card-header {
        background-color: #32324a;
        border-bottom: 1px solid #444;
    }

    .card-header h5 {
        color: #ffffff;
    }

    /* Tabla */
    .table {
        color: #ffffff;
    }

    .table thead th {
        background-color: #3a3a55;
        color: #ffffff;
        border-color: #444;
    }

    .table tbody td {
        background-color: #2a2a3d;
        border-color: #444;
    }

    .table-striped tbody tr:nth-of-type(odd) td {
        background-color: #2f2f45;
    }

    .table-striped tbody tr:nth-of-type(even) td {
        background-color: #29293d;
    }

    .table tbody tr:hover td {
        background-color: #3a3a55;
    }

    /* Inputs */
    .form-control {
        background-color: #1e1e2f;
        color: #ffffff;
        border: 1px solid #444;
    }

    .form-control:focus {
        background-color: #1e1e2f;
        color: #ffffff;
        border-color: #0d6efd;
        box-shadow: none;
    }

    /* Botones */
    .btn-primary {
        background-color: #0d6efd;
        border: none;
    }

    /* DataTables */
    .dataTables_wrapper .dataTables_length,
    .dataTables_wrapper .dataTables_filter,
    .dataTables_wrapper .dataTables_info,
    .dataTables_wrapper .dataTables_paginate {
        color: #ffffff;
    }

    .dataTables_wrapper .dataTables_filter input {
        background-color: #1e1e2f;
        color: #ffffff;
        border: 1px solid #444;
    }

    .page-link {
        background-color: #2a2a3d;
        color: #ffffff;
        border: 1px solid #444;
    }

    .page-item.active .page-link {
        background-color: #0d6efd;
        border-color: #0d6efd;
    }

    .page-link:hover {
        background-color: #3a3a55;
        color: #ffffff;
    }
    </style>

</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand navbar-dark bg-dark">
   <div class="container-fluid">

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                    <i class="bi bi-list"></i>
                </a>
            </li>
            <li class="nav-item d-none d-md-block">
                <a href="<?= base_url('dashboard') ?>" class="nav-link">Home</a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    <img src="<?= base_url('assets/img/gato.jpg') ?>"
                        class="rounded-circle shadow img-fluid"
                        style="width:30px;height:30px;">
                    <span class="d-none d-md-inline">Cesar</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-item-text text-center">
                        <img src="<?= base_url('assets/img/gato.jpg') ?>"
                            class="rounded-circle mb-2"
                            style="width:60px;height:60px;">
                        <p class="mb-0">
                            <strong>Cesar</strong><br>
                            <small>Web Developer</small><br>
                            <small>Miembro desde Sep. 2025</small>
                        </p>
                    </div>

                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item" href="#">Profile</a>
                    <a class="dropdown-item text-danger" href="<?= base_url('logout') ?>">Sign out</a>
                </div>
            </li>
        </ul>


    </div>
</nav>

<div class="container-fluid mt-4">
    <div class="card shadow">
        <div class="card-header">
            <h5 class="text-primary">📦 Movimientos de Productos</h5>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="movimientosTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Descripción</th>
                            <th>Disponible</th>
                            <th>Tipo</th>
                            <th>Cantidad</th>
                            <th>Observaciones</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($Articulos as $articulo): ?>
                    <tr>
                    <form method="post" action="<?= base_url('salidas/registrar') ?>">
                        <td><?= $articulo['Id_articulo'] ?></td>
                        <td><?= $articulo['Descripcion'] ?></td>
                        <td><?= $articulo['inventario_dis_unidad'] ?></td>

                        <td>
                            <select name="tipo_movimiento" class="form-control" required>
                                <option value="salida">Salida</option>
                                <option value="entrada">Entrada</option>
                            </select>
                        </td>

                        <td>
                            <input type="number"
                                name="cantidad"
                                class="form-control"
                                min="1"
                                required>
                        </td>

                        <td>
                            <textarea name="observaciones"
                                    class="form-control"
                                    rows="1"
                                    placeholder="Opcional"></textarea>
                        </td>

                        <td>
                            <input type="hidden" name="id_articulo"
                                value="<?= $articulo['Id_articulo'] ?>">

                            <button class="btn btn-primary btn-sm">
                                <i class="bi bi-arrow-left-right"></i>
                                Registrar
                            </button>
                        </td>
                    </form>
                    </tr>
                    <?php endforeach; ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- JS -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

<script>
$(document).ready(function () {
    $('#movimientosTable').DataTable({
        language: {
            url: "//cdn.datatables.net/plug-ins/1.10.22/i18n/Spanish.json"
        }
    });
});
</script>

</body>
</html>
