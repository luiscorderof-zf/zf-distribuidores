<?php function page_Login($swLogin) { ?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ingreso ZF-Socios</title>
  <link rel="shortcut icon" type="image/png" href="https://zfsocios.com/dashboard/assets/images/logo/icon_zf_white-100x100.png" />
  <link rel="icon" type="image/x-icon" href="https://zfsocios.com/dashboard/assets/images/logo/icon_zf.ico">  
  <link rel="icon" href="https://zfsocios.com/dashboard/assets/images/logo/icon_zf_white-100x100.png" sizes="32x32" />
  <link rel="icon" href="https://zfsocios.com/dashboard/assets/images/logo/icon_zf_white-300x300.png" sizes="192x192" />
  <link rel="apple-touch-icon" href="https://zfsocios.com/dashboard/assets/images/logo/icon_zf_white-300x300.png" />

  <link rel="stylesheet" href="https://zfsocios.com/dashboard/assets/css/styles.min.css" />
</head>
<body>
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="/" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="https://zapphirofragancias.com/wp-content/uploads/planes/img/icon_zf_white-100x100.png" width="100" alt="">
                </a>
                <p class="h4 text-center fw-bold mx-3 mb-3">Ingresar</p>
                <!-- <a href="../../../login" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Ingresar</a> -->
                <form action="./validar-datos/index.php" method="POST">
                  <div class="mb-3">
                    <label for="zf_email" class="form-label">Cuenta</label>
                    <input type="email" class="form-control" id="zf_email" name="zf_email" aria-describedby="emailHelp" placeholder="Indicar su correo" value="<?php echo $_SESSION["zf-cuenta"] ?>">
                  </div>
                  <div class="mb-4">
                    <label for="zf_password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="zf_password" name="zf_password">
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check">
                      <input class="form-check-input primary" type="checkbox" value="" id="zf-recordar" checked>
                      <label class="form-check-label text-dark" for="zf-recordar">Recuérdame</label>
                    </div>
                    <a class="text-primary fw-bold" href="./recupera-password">Olvidé mi password</a>
                  </div>
                  <div class="col-md-12 mb-3">
                    <button class="col-12 btn btn-primary" id="Guardar_btn" type="submit"> <!--  onclick="frm_Guardar()" -->
                      Aceptar <i class="bi bi-file-earmark-check"></i>
                    </button>
                  </div>
                  <!-- <a href="./validar-datos" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Aceptar</a> -->
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">Quiero ser distribuidor </p>
                    <a class="text-primary fw-bold ms-2" href="./registro">Registro</a>
                  </div>
                </form>
              </div>
            </div>
            <br/>
          </div>
        </div>
      </div>
    </div>
    <?php include './zf-web-footer.php'; ?>
  </div>
  <script src="https://zfsocios.com/dashboard/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="https://zfsocios.com/dashboard/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    $(document).ready(function () {
        <?php // var hora = new date(); ?>
        console.log("Login...");
        document.getElementById("zf_email").focus();
    });
  </script>
</body>
</html>
<?php } ?>
