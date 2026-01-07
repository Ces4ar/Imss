<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Perfil</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
    body {
        background-color: #1e1e2f;
        color: #eaeaf0;
    }

    /* Navbar */
    .navbar {
        border-bottom: 1px solid #333;
    }

    /* Card */
    .card {
        background-color: #2a2a3d;
        border: none;
        color: #eaeaf0;
    }

    .card-header {
        background-color: #32324a;
        border-bottom: 1px solid #444;
        color: #ffffff;
    }

    /* Labels */
    .form-label {
        color: #dcdcf0;
        font-weight: 500;
    }

    /* Inputs */
    .form-control {
        background-color: #1e1e2f;
        color: #ffffff;
        border: 1px solid #555;
    }

    .form-control::placeholder {
        color: #9aa0b5;
    }

    .form-control:focus {
        background-color: #1e1e2f;
        color: #ffffff;
        border-color: #0d6efd;
        box-shadow: none;
    }

    /* HR */
    hr {
        border-color: #555;
    }
    </style>

</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand navbar-dark bg-dark">
  <div class="container-fluid">
    <a href="<?= base_url('dashboard') ?>" class="navbar-brand">Dashboard</a>

    <ul class="navbar-nav ms-auto">
      <li class="nav-item">
        <a href="<?= base_url('logout') ?>" class="nav-link text-danger">
          <i class="bi bi-box-arrow-right"></i> Salir
        </a>
      </li>
    </ul>
  </div>
</nav>

<!-- CONTENIDO -->
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">

      <div class="card shadow">
        <div class="card-header text-center">
          <h5 class="mb-0">👤 Mi Perfil</h5>
        </div>

        <div class="card-body">
          <form method="post" action="<?= base_url('perfil/actualizar') ?>">

            <div class="mb-3">
              <label class="form-label">Nombre</label>
              <input type="text"
                     name="nombre"
                     class="form-control"
                     value="<?= esc($usuario['nombre']) ?>"
                     required>
            </div>

            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email"
                     name="email"
                     class="form-control"
                     value="<?= esc($usuario['email']) ?>"
                     required>
            </div>

            <hr class="text-secondary">

            <div class="mb-3">
              <label class="form-label">Nueva contraseña</label>
              <input type="password"
                     name="password"
                     class="form-control"
                     placeholder="Déjala vacía si no quieres cambiarla">
            </div>

            <div class="d-flex justify-content-end">
              <button class="btn btn-primary">
                <i class="bi bi-save"></i> Guardar cambios
              </button>
            </div>

          </form>
        </div>
      </div>

    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
