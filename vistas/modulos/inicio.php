<div class="row">
  <div class="col-md-12 grid-margin">
    <div class="row">

      <?php
        if($_SESSION["perfil"] =="Especial" || $_SESSION["perfil"] =="Vendedor" || $_SESSION["perfil"] =="Administrador"){
            echo '<div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold">Bienvenido '; echo $_SESSION["nombre"]; echo '</h3>
            <h6 class="font-weight-normal mb-0">¡Descubre todo lo que Supermarket puede hacer!</h6>
          </div>
          <div class="col-12 col-xl-4">
          </div>';
        }
      ?>
      
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12 grid-margin transparent">
    <div class="row">
      <?php
      if($_SESSION["perfil"] =="Administrador"){
        include "inicio/cajas-superiores.php";
      }
      ?>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <?php
          if($_SESSION["perfil"] =="Administrador"){
           include "reportes/grafico-ventas.php";
          }
        ?>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <?php
          if($_SESSION["perfil"] =="Administrador"){
           include "reportes/productos-mas-vendidos.php";
         }
          ?>
      </div>
    </div>
  </div>
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <?php
          if($_SESSION["perfil"] =="Administrador"){
          include "inicio/productos-recientes.php";
         }
         ?>
      </div>
    </div>
  </div>
</div>
