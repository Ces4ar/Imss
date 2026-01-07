<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Usuario</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
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

        /* Formularios */
        .form-label {
            color: #cccccc;
        }

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

        /* Botón */
        .btn-primary {
            background-color: #0d6efd;
            border: none;
        }
</style>

</head>
<body>

<!-- NAVBAR -->
<nav class="app-header navbar navbar-expand navbar-dark bg-dark">
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

        <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <img src="<?= base_url('assets/img/gato.jpg') ?>"
                         class="rounded-circle shadow img-fluid"
                         style="width:30px;height:30px;">
                    <span class="d-none d-md-inline">Cesar</span>
                </a>

                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <li class="user-header text-bg-primary text-center p-3">
                        <img src="<?= base_url('assets/img/gato.jpg') ?>"
                             class="rounded-circle shadow img-fluid mb-2"
                             style="width:60px;height:60px;">
                        <p class="mb-0">
                            Cesar - Web Developer<br>
                            <small>Miembro desde Sep. 2025</small>
                        </p>
                    </li>

                    <li class="user-footer d-flex justify-content-between p-2">
                        <a href="#" class="btn btn-default btn-sm">Profile</a>
                        <a href="<?= base_url('logout') ?>" class="btn btn-default btn-sm">
                            Sign out
                        </a>
                    </li>
                </ul>
            </li>
        </ul>

    </div>
</nav>

<!-- CONTENIDO -->
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header">
            <h5 class="text-primary">➕ Crear Usuario</h5>
        </div>

        <div class="card-body">
            <form method="post" action="<?= base_url('usuarios/guardar') ?>">

                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Contraseña</label>
                    <input type="password" name="password" class="form-control" required>
                </div>

                <button class="btn btn-primary">
                    Guardar Usuario
                </button>

            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
