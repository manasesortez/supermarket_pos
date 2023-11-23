<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Supermarket</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="vistas/dist/css/AdminLTE.css">
  <link rel="stylesheet" href="vistas/bower_components/font-awesome/css/font-awesome.min.css">
  
  <link rel="stylesheet" href="vistas/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="vistas/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <link rel="stylesheet" href="vistas/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="vistas/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">
  <link rel="stylesheet" href="vistas/plugins/iCheck/all.css">
  <link rel="stylesheet" href="vistas/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="vistas/bower_components/morris.js/morris.css">

  <script src="vistas/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="vistas/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="vistas/bower_components/fastclick/lib/fastclick.js"></script>
  <script src="vistas/dist/js/adminlte.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/regular.min.css" integrity="sha512-rOTVxSYNb4+/vo9pLIcNAv9yQVpC8DNcFDWPoc+gTv9SLu5H8W0Dn7QA4ffLHKA0wysdo6C5iqc+2LEO1miAow==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/solid.min.css" integrity="sha512-P9pgMgcSNlLb4Z2WAB2sH5KBKGnBfyJnq+bhcfLCFusrRc4XdXrhfDluBl/usq75NF5gTDIMcwI1GaG5gju+Mw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="vistas/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/responsive.bootstrap.min.js"></script>
  
  <script src="vistas/plugins/sweetalert2/sweetalert2.all.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <script src="vistas/plugins/iCheck/icheck.min.js"></script>
  <script src="vistas/plugins/input-mask/jquery.inputmask.js"></script>

  <script src="vistas/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
  <script src="vistas/plugins/input-mask/jquery.inputmask.extensions.js"></script>
  <script src="vistas/plugins/jqueryNumber/jquerynumber.min.js"></script>
  <script src="vistas/bower_components/moment/min/moment.min.js"></script>
  
  <script src="vistas/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script src="vistas/bower_components/raphael/raphael.min.js"></script>
  <script src="vistas/bower_components/morris.js/morris.min.js"></script>
  <script src="vistas/bower_components/Chart.js/Chart.js"></script>

  <link rel="stylesheet" href="vistas/dist/vendors/feather/feather.css">
  <link rel="stylesheet" href="vistas/dist/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vistas/dist/vendors/css/vendor.bundle.base.css">

  <link rel="stylesheet" href="vistas/dist/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vistas/dist/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="vistas/dist/js/select.dataTables.min.css">

  <link rel="stylesheet" href="vistas/dist/css/vertical-layout-light/style.css">

  <script src="vistas/dist/vendors/chart.js/Chart.min.js"></script>

  <link rel="stylesheet" href="vistas/dist/vendors/feather/feather.css">
  <link rel="stylesheet" href="vistas/dist/vendors/ti-icons/css/themify-icons.css">

  <script src="vistas/dist/js/off-canvas.js"></script>
  <script src="vistas/dist/js/hoverable-collapse.js"></script>
  <script src="vistas/dist/js/template.js"></script>
  <script src="vistas/dist/js/settings.js"></script>
  <script src="vistas/dist/js/dashboard.js"></script>
  <script src="vistas/dist/js/Chart.roundedBarCharts.js"></script>
  
  <link rel="stylesheet" href="vistas/dist/css/index.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Latest compiled and minified CSS -->

</head>

<body style="font-family: Nunito, sans-serif !important;">

  <?php

  if(isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok"){
  echo '<div class="container-scroller">';
    include "modulos/cabezote.php";
    echo '<div class="container-fluid page-body-wrapper">';

    include "modulos/menu.php";
        if(isset($_GET["ruta"])){
          echo '<div class="main-panel">';
            echo '<div class="content-wrapper" style="padding: 1.375rem 1.375rem !important; margin-top: -15px;">';
              if($_GET["ruta"] == "inicio" ||
                $_GET["ruta"] == "usuarios" ||
                $_GET["ruta"] == "categorias" ||
                $_GET["ruta"] == "productos" ||
                $_GET["ruta"] == "clientes" ||
                $_GET["ruta"] == "crear-venta" ||
                $_GET["ruta"] == "ventas" ||
                $_GET["ruta"] == "editar-venta" ||
                $_GET["ruta"] == "reportes" ||
                $_GET["ruta"] == "salir"){

                include "modulos/".$_GET["ruta"].".php";
              }else{
                include "modulos/404.php";
              }
            echo '</div>';
          echo '</div>';
        }else{
          include "modulos/inicio.php";
        }
      echo '</div>';
      include "modulos/footer.php";
    echo '</div>';
  }else{
    include "modulos/login.php";
  }
  ?>

<script src="vistas/js/plantilla.js"></script>
<script src="vistas/js/usuarios.js"></script>
<script src="vistas/js/categorias.js"></script>
<script src="vistas/js/productos.js"></script>
<script src="vistas/js/clientes.js"></script>
<script src="vistas/js/ventas.js"></script>
<script src="vistas/js/reportes.js"></script>

</body>
</html>
