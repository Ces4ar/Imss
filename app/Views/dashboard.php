<!doctype html>
<html lang="en">
  <!--begin::Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Pagina Principal</title>
    <!--begin::Accessibility Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <meta name="color-scheme" content="light dark" />
    <meta name="theme-color" content="#e5ec1cff" media="(prefers-color-scheme: light)" />
    <meta name="theme-color" content="#d1e921ff" media="(prefers-color-scheme: dark)" />
    <!--end::Accessibility Meta Tags-->
    <!--begin::Primary Meta Tags-->
    <meta name="title" content="AdminLTE v4 | Dashboard" />
    <meta name="author" content="ColorlibHQ" />
    <meta
      name="description"
      content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS. Fully accessible with WCAG 2.1 AA compliance."
    />
    <meta
      name="keywords"
      content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard, accessible admin panel, WCAG compliant"
    />
    <!--end::Primary Meta Tags-->
    <!--begin::Accessibility Features-->
    <!-- Skip links will be dynamically added by accessibility.js -->
    <meta name="supported-color-schemes" content="light dark" />
    <!--end::Accessibility Features-->
    <!--begin::Fonts-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
      integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q="
      crossorigin="anonymous"
      media="print"
      onload="this.media='all'"
    />
    <!--end::Fonts-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css"
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(OverlayScrollbars)-->
    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(Bootstrap Icons)-->
    <!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="<?= base_url('css/adminlte.css') ?>">

    <!--end::Required Plugin(AdminLTE)-->
    <!-- apexcharts -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css"
      integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0="
      crossorigin="anonymous"
    />
    <!-- jsvectormap -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css"
      integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4="
      crossorigin="anonymous"
    />
    <style>
      body {
        background-color: #1e1e2f;
      }

      .app-main {
        background-color: #1e1e2f;
      }

      .card {
        background-color: #2a2a3d;
        color: #fff;
      }
    </style>
    <style>
      /* Card */
      .card {
        background-color: #2a2a3d !important;
        color: #ffffff;
        border: none;
      }

      .card-header {
        background-color: #32324a !important;
        color: #ffffff;
        border-bottom: 1px solid #444;
      }

      /* Contenedor */
      .table-responsive {
        background-color: transparent !important;
      }

      /* Tabla */
      .table {
        background-color: transparent !important;
        color: #ffffff !important;
      }

      /* CABECERA */
      .table thead th {
        background-color: #3a3a55 !important;
        color: #ffffff !important;
        border-color: #444 !important;
      }

      /* 🔥 AQUÍ ESTÁ LA CLAVE 🔥 */
      .table tbody td {
        background-color: #2a2a3d !important;
        color: #ffffff !important;
      }

      /* Rayado */
      .table-striped > tbody > tr:nth-of-type(odd) td {
        background-color: #2f2f45 !important;
      }

      .table-striped > tbody > tr:nth-of-type(even) td {
        background-color: #29293d !important;
      }

      /* Hover */
      .table tbody tr:hover td {
        background-color: #3a3a55 !important;
      }

      /* Bordes */
      .table-bordered td,
      .table-bordered th {
        border-color: #444 !important;
      }
    </style>



  </head>
  <!--end::Head-->
  <!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg sidebar-open bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      <!--begin::Header-->
      <nav class="app-header navbar navbar-expand navbar-dark bg-dark">
        <!--begin::Container-->
        <div class="container-fluid">
          <!--begin::Start Navbar Links-->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                <i class="bi bi-list"></i>
              </a>
            </li>
            <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Home</a></li>
          </ul>
          <!--end::Start Navbar Links-->
          <!--begin::End Navbar Links-->
          <ul class="navbar-nav ms-auto">
            <!--begin::User Menu Dropdown-->
            <li class="nav-item dropdown user-menu">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <img src="<?= base_url('assets/img/admin.jpg') ?>"
                  class="user-image rounded-circle shadow img-fluid"
                  style="width:30px;height:30px;"  >
                <span class="d-none d-md-inline">
                  <?= esc(session()->get('usuario')) ?>
                </span>
              </a>
              <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                <!--begin::User Image-->
                <li class="user-header text-bg-primary">
                <img src="<?= base_url('assets/img/admin.jpg') ?>"
                  class="user-image rounded-circle shadow img-fluid"
                  style="width:60px;height:60px;"
                >
                  <p>
                    <?= esc(session()->get('usuario')) ?> - Web Developer
                    <small>Miembro desde Sep. 2025</small>
                  </p>
                </li>
                <!--end::User Image-->
                <!--end::Menu Body-->
                <!--begin::Menu Footer-->
                <li class="user-footer">
                    <a href="<?= base_url('perfil') ?>" class="btn btn-default btn-flat">
                      Profile
                    </a>

                    <a href="<?= base_url('logout') ?>" class="btn btn-default btn-default btn-flat float-end">
                      Sign out
                    </a>
                </li>

                <!--end::Menu Footer-->
              </ul>
            </li>
            <!--end::User Menu Dropdown-->
          </ul>
          <!--end::End Navbar Links-->
        </div>
        <!--end::Container-->
      </nav>



      
      <!--end::Header-->
      <!--begin::Sidebar-->
      <aside class="app-sidebar bg-dark shadow" data-bs-theme="dark">

        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          
            <!--begin::Brand Image-->
           <img src="<?= base_url('assets/img/admin.jpg') ?>"
             class="user-image rounded-circle shadow img-fluid"
              style="width:30px;height:30px;"
            >


            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">IMSS</span>
            <!--end::Brand Text-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="navigation"
              aria-label="Main navigation"
              data-accordion="false"
              id="navigation"
             >
             <
              <li class="nav-item menu-open">
                 <a href="#" class="nav-link active" data-lte-toggle="treeview" data-accordion="false">
                  <i class="nav-icon bi bi-table"></i>
                  <p>
                    Tables
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?= base_url('Tables/simple') ?>" class="nav-link active">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Simple Tables</p>
                    </a>
                  </li>
               </ul>
             </li>
            </ul>
            <!--end::Sidebar Menu-->
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>
      <!--end::Sidebar-->
      <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <!--begin::Col-->
              <div class="col-lg-3 col-6">
                <!--begin::Small Box Widget 1-->
                <div class="small-box text-bg-primary">
                  <div class="inner">
                    <h3><?= $totalSalidas ?></h3>
                    <p>Salida de Productos</p>
                  </div>
                  <svg
                    class="small-box-icon"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true"
                  >
                    <path
                      d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z"
                    ></path>
                  </svg>
                  <a href="<?= base_url('salidas') ?>" class="small-box-footer link-light">
                     Productos <i class="bi bi-link-45deg"></i>
                  </a>

                </div>
                <!--end::Small Box Widget 1-->
              </div>
              <!--end::Col-->
              
              <div class="col-lg-3 col-6">
                <!--begin::Small Box Widget 3-->
                  <div class="small-box text-bg-warning">
                    <div class="inner">
                      <h3><?= $totalUsuarios ?></h3>
                      <p>Usuarios Registrados</p>
                    </div>
                    <svg
                      class="small-box-icon"
                      fill="currentColor"
                      viewBox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg"
                      aria-hidden="true"
                    >
                      <path
                        d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z"
                      ></path>
                    </svg>
                    <a
                      href="<?= base_url('usuarios') ?>"
                      class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover"
                    >
                      Registro de Usuarios <i class="bi bi-link-45deg"></i>
                    </a>
                  </div>
                <!--end::Small Box Widget 3-->
              </div>
              <!--begin::Row-->
              <div class="row mt-4">

                <!-- TABLA DE PRODUCTOS -->
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Productos con Salidas</h3>
                    </div>
                    <div class="card-body table-responsive">
                      <table class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th>Producto</th>
                            <th>Total Salidas</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php if (!empty($productos)): ?>
                            <?php foreach ($productos as $p): ?>
                              <tr>
                                <td><?= esc($p['Descripcion']) ?></td>
                                <td><?= esc($p['total']) ?></td>
                              </tr>
                            <?php endforeach; ?>
                          <?php else: ?>
                            <tr>
                              <td colspan="2" class="text-center">No hay datos</td>
                            </tr>
                          <?php endif; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

                <!-- GRÁFICA -->
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Gráfica de Salidas</h3>
                    </div>
                    <div class="card-body">
                      <div id="revenue-chart"></div>
                    </div>
                  </div>
                </div>

              </div>
              <!--end::Row-->
                            
                            <!--end::Col-->
                            
                          </div>
                          <!--end::Row-->
                          <!--begin::Row-->
                          <?php
              $labels = [];
              $series = [];

              if (!empty($productos)) {
                  foreach ($productos as $p) {
                      $labels[] = $p['Descripcion'];
                      $series[] = (int)$p['total'];
                  }
              }
              ?>

            <!-- /.row (main row) -->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>
      <!--end::App Main-->
      <!--begin::Footer-->
      <footer class="app-footer bg-dark text-light">
        <!--begin::To the end-->
        <div class="float-end d-none d-sm-inline">Todo lo que buscas aqui</div>
        <!--end::To the end-->
        <!--begin::Copyright-->
        <strong>
          Copyright &copy; 2014-2025&nbsp;
          <a href="https://www.youtube.com/watch?v=m9Fo8u85IuM" class="text-decoration-none">Cesar</a>.
        </strong>
        Todos los derechos reservados.
        <!--end::Copyright-->
      </footer>
      <!--end::Footer-->
    </div>
    <!--end::App Wrapper-->
    <!--begin::Script-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script
      src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js"
      crossorigin="anonymous"
    ></script>
    <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
      crossorigin="anonymous"
    ></script>
    <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="<?= base_url('js/adminlte.js') ?>"></script>

    <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
    <script>
      const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
      const Default = {
        scrollbarTheme: 'os-theme-light',
        scrollbarAutoHide: 'leave',
        scrollbarClickScroll: true,
      };
      document.addEventListener('DOMContentLoaded', function () {
        const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
        if (sidebarWrapper && OverlayScrollbarsGlobal?.OverlayScrollbars !== undefined) {
          OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
            scrollbars: {
              theme: Default.scrollbarTheme,
              autoHide: Default.scrollbarAutoHide,
              clickScroll: Default.scrollbarClickScroll,
            },
          });
        }
      });
    </script>
    <!--end::OverlayScrollbars Configure-->
    <!-- OPTIONAL SCRIPTS -->
    <!-- sortablejs -->
    <script
      src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"
      crossorigin="anonymous"
    ></script>
    <!-- sortablejs -->
    <script>
      new Sortable(document.querySelector('.connectedSortable'), {
        group: 'shared',
        handle: '.card-header',
      });

      const cardHeaders = document.querySelectorAll('.connectedSortable .card-header');
      cardHeaders.forEach((cardHeader) => {
        cardHeader.style.cursor = 'move';
      });
    </script>
    <!-- apexcharts -->
    <script
      src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js"
      integrity="sha256-+vh8GkaU7C9/wbSLIcwq82tQ2wTf44aOHA8HlBMwRI8="
      crossorigin="anonymous"
    ></script>
    <!-- ChartJS -->
     <script>
  document.addEventListener("DOMContentLoaded", function () {
        const options = {
      series: [{
        name: 'Cantidad usada',
        data: <?= json_encode($series) ?>
      }],
      chart: {
        type: 'bar',
        height: 300,
        toolbar: { show: false }
      },
      plotOptions: {
        bar: {
          borderRadius: 4,
          horizontal: false
        }
      },
      dataLabels: {
        enabled: false
      },
      xaxis: {
        categories: <?= json_encode($labels) ?>,
        labels: {
          style: {
            colors: '#ffffff'
          }
        }
      },
      yaxis: {
        labels: {
          style: {
            colors: '#ffffff'
          }
        }
      },
      tooltip: {
        theme: 'dark',
        style: {
          fontSize: '12px'
        }
      }

    };


    const chart = new ApexCharts(
      document.querySelector("#revenue-chart"),
      options
    );
    chart.render();
  });
</script>

    
    <!-- jsvectormap -->
    <script
      src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/js/jsvectormap.min.js"
      integrity="sha256-/t1nN2956BT869E6H4V1dnt0X5pAQHPytli+1nTZm2Y="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/maps/world.js"
      integrity="sha256-XPpPaZlU8S/HWf7FZLAncLg2SAkP8ScUTII89x9D3lY="
      crossorigin="anonymous"
    ></script>
    <!-- jsvectormap -->
  </body>
  <!--end::Body-->
</html>
