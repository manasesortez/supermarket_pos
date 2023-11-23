<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="vistas/img/plantilla/Supermart.svg" alt="logo">
              </div>
              <h4 style="font-size: 20px;">¡Hola! Empecemos</h4>
              <h6 class="font-weight-light" style="font-size: unset; font-weight: 400 !important;">Inicia sesión para continuar.</h6>
              <form method="post" class="pt-3">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" style="font-size: 13px !important; font-weight: 600;" name="ingUsuario" placeholder="Usuario">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" style="font-size: 13px !important; font-weight: 600;" placeholder="Contraseña" name="ingPassword">
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" style="font-size: 15px;">Iniciar Sesión</button>
                </div>

                <?php
                  $login = new ControladorUsuarios();
                  $login -> ctrIngresoUsuario();
                ?>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
