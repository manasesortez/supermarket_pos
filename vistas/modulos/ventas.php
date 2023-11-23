<?php
if($_SESSION["perfil"] == "Especial"){
  echo '<script>
    window.location = "inicio";
  </script>';
  return;
}

?>
<div class="content-wrapper">
  <section class="content-header">
    <h1>Administrar ventas</h1>

    <ol class="breadcrumb" 
 style="border: 1px solid transparent;"> 
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li> 
      <li class="active">Administrar ventas</li>
    </ol>
  </section>

  <section class="content">
  <div class="card p-4">
    <div class="box">
      <div class="box-header with-border mb-3">
        <a href="crear-venta">
          <button class="btn btn-primary">Agregar venta</button>
        </a>
         <button type="button" class="btn btn-default pull-right" id="daterange-btn"> 
            <span>
              <i class="fa fa-calendar"></i> Rango de fecha
            </span>
            <i class="fa fa-caret-down"></i>
         </button>
      </div>
      <div class="box-body">
       <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
        <thead>
         <tr>
           <th style="width:10px">#</th>
           <th>Código factura</th>
           <th>Cliente</th>
           <th>Vendedor</th>
           <th>Forma de pago</th>
           <th>Neto</th>
           <th>Total</th> 
           <th>Fecha</th>
           <th style="width:100px">Acciones</th>
         </tr> 
        </thead>
        <tbody>
        <?php
          if(isset($_GET["fechaInicial"])){
            $fechaInicial = $_GET["fechaInicial"];
            $fechaFinal = $_GET["fechaFinal"];
          }else{
            $fechaInicial = null;
            $fechaFinal = null;
          }

          $respuesta = ControladorVentas::ctrRangoFechasVentas($fechaInicial, $fechaFinal);
          foreach ($respuesta as $key => $value) {
           
           echo '<tr>
                  <td>'.($key+1).'</td>
                  <td>'.$value["codigo"].'</td>';

                  $itemCliente = "id";
                  $valorCliente = $value["id_cliente"];

                  $respuestaCliente = ControladorClientes::ctrMostrarClientes($itemCliente, $valorCliente);

                  echo '<td>'.$respuestaCliente["nombre"].'</td>';

                  $itemUsuario = "id";
                  $valorUsuario = $value["id_vendedor"];

                  $respuestaUsuario = ControladorUsuarios::ctrMostrarUsuarios($itemUsuario, $valorUsuario);

                  echo '<td>'.$respuestaUsuario["nombre"].'</td>

                  <td>'.$value["metodo_pago"].'</td>
                  <td>$ '.number_format($value["neto"],2).'</td>
                  <td>$ '.number_format($value["total"],2).'</td>
                  <td>'.$value["fecha"].'</td>
                  <td>
                    <div class="btn-group">
                      <button class="btn btn-info btnImprimirFactura mr-3" style="border-radius: 05px;"  codigoVenta="'.$value["codigo"].'">
                        <i class="fa fa-print"></i>
                      </button>';

                      if($_SESSION["perfil"] == "Administrador"){
                        echo '<button class="btn btn-warning btnEditarVenta mr-3" style="border-radius: 05px;" idVenta="'.$value["id"].'"><i class="fa fa-pencil"></i></button>
                        <button class="btn btn-danger btnEliminarVenta" style="border-radius: 05px;" idVenta="'.$value["id"].'"><i class="fa fa-times"></i></button>';
                      }
                    echo '</div>  
                  </td>
                </tr>';
            }
        ?>
        </tbody>
       </table>
       <?php

      $eliminarVenta = new ControladorVentas();
      $eliminarVenta -> ctrEliminarVenta();

      ?>
      </div>
    </div>
  </div>
  </section>
</div>




