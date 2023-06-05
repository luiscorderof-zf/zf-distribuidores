<?php function CerrarSesion($swLogin) { ?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cerrando sesión</title>
  <link rel="shortcut icon" type="image/png" href="https://zfsocios.com/dashboard/assets/images/logo/icon_zf_white-100x100.png" />
  <link rel="icon" type="image/x-icon" href="https://zfsocios.com/dashboard/assets/images/logo/icon_zf.ico">  
  <link rel="icon" href="https://zfsocios.com/dashboard/assets/images/logo/icon_zf_white-100x100.png" sizes="32x32" />
  <link rel="icon" href="https://zfsocios.com/dashboard/assets/images/logo/icon_zf_white-300x300.png" sizes="192x192" />
  <link rel="apple-touch-icon" href="https://zfsocios.com/dashboard/assets/images/logo/icon_zf_white-300x300.png" />

  <link rel="stylesheet" href="https://zfsocios.com/dashboard/assets/css/styles.min.css" />
</head>
<body>
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="/" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="https://zapphirofragancias.com/wp-content/uploads/planes/img/icon_zf_white-100x100.png" width="100" alt="Logo-ZapphiroFragancias">
                </a>
                <p class="h4 text-center fw-bold mx-3 mb-3">Cerrando la Sesión...</p>
                <p class="h5 text-center mb-3">Regresando a la pantalla de LOGIN</p>
              </div>
            </div>
            <br/>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->
    <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
        <div class="text-white mb-3 mb-md-0">Copyright © 2023. Todos los derechos reservados, ZF-Sistemas.</div>
        <div>
            <a href="#!" class="text-white me-4">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#!" class="text-white me-4">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#!" class="text-white me-4">
                <i class="fab fa-google"></i>
            </a>
            <a href="#!" class="text-white">
                <i class="fab fa-linkedin-in"></i>
            </a>
        </div>
    </div>
  </div>
  <script src="https://zfsocios.com/dashboard/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="https://zfsocios.com/dashboard/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    console.log("Cerrando SESION y regresando al LOGIN.")
    function direccion_URL() {
        window.location.replace("/distribuidor/login");
    }
    
    setTimeout(direccion_URL, 2500);
  </script>
</body>
</html>
<?php } ?>