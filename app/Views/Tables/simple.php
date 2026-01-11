<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inventario de Artículos</title>

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- DataTables Bootstrap 4 -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        .table-responsive {
            overflow-x: auto;
        }
    </style>
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
        .table-responsive {
            background-color: transparent !important;
        }

        .table {
            color: #ffffff !important;
            background-color: transparent !important;
        }

        .table thead th {
            background-color: #3a3a55 !important;
            color: #ffffff !important;
            border-color: #444 !important;
        }

        .table tbody td {
            background-color: #2a2a3d !important;
            border-color: #444 !important;
        }

        .table-striped tbody tr:nth-of-type(odd) td {
            background-color: #2f2f45 !important;
        }

        .table-striped tbody tr:nth-of-type(even) td {
            background-color: #29293d !important;
        }

        .table tbody tr:hover td {
            background-color: #3a3a55 !important;
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

        <!-- Left -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="bi bi-list"></i>
                </a>
            </li>
            <li class="nav-item d-none d-md-block">
                <a href="<?= base_url('dashboard') ?>" class="nav-link">Home</a>
            </li>
        </ul>

        <!-- Right -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    <img src="<?= base_url('assets/img/admin.jpg') ?>"
                       class="user-image rounded-circle shadow img-fluid"
                       style="width:30px;height:30px;"
                    >
                    <span class="d-none d-md-inline">
                  <?= esc(session()->get('usuario')) ?>
                </span>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-item-text text-center">
                        <img src="<?= base_url('assets/img/admin.jpg') ?>"
                            class="user-image rounded-circle shadow img-fluid"
                            style="width:30px;height:30px;"
                        >
                        <p class="mb-0">
                            <?= esc(session()->get('usuario')) ?> 
                            <small> Developer</small><br>
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
<!-- /NAVBAR -->

<div class="container-fluid mt-4">
    <div class="card shadow mb-4">
        <div class="card-header">
            <h5 class="m-0 text-primary">📦 Inventario de Artículos</h5>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="articulosTable">
                    <thead>
                        <tr>
                            <th>ID Artículo</th>
                            <th>Grupo</th>
                            <th>Cód. 14</th>
                            <th>Descripción</th>
                            <th>Inv. Disponible</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if (!empty($Articulos)) : ?>
                        <?php foreach ($Articulos as $articulo) : ?>
                            <tr>
                                <td><?= esc($articulo['Id_articulo']) ?></td>
                                <td><?= esc($articulo['desc_gpo']) ?></td>
                                <td><?= esc($articulo['Codigo_14']) ?></td>
                                <td><?= esc($articulo['Descripcion']) ?></td>
                                <td><?= esc($articulo['inventario_dis_unidad']) ?></td>
                                <td><?= esc($articulo['total']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="6" class="text-center">No hay artículos disponibles</td>
                        </tr>
                    <?php endif; ?>
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
    $('#articulosTable').DataTable({
        language: {
            url: "//cdn.datatables.net/plug-ins/1.10.22/i18n/Spanish.json"
        }
    });
});
</script>

</body>
</html>
