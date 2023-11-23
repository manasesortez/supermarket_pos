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
    <h1>Administrar clientes</h1>
    <ol class="breadcrumb" 
 style="border: 1px solid transparent;">
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      <li class="active">Administrar clientes</li>
    </ol>
  </section>

  <section class="content">
  <div class="card p-4">
    <div class="box">
    <div class="box-header with-border mb-3">
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCliente">Agregar cliente</button>
      </div>
      <div class="box-body">
       <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
        <thead>
         <tr>
           <th style="width:10px">#</th>
           <th>Nombre</th>
           <th>Documento ID</th>
           <th>Email</th>
           <th>Teléfono</th>
           <th>Dirección</th>
           <th>Fecha nacimiento</th> 
           <th>Total compras</th>
           <th>Última compra</th>
           <th>Ingreso al sistema</th>
           <th>Acciones</th>
         </tr> 
        </thead>
        <tbody>
        <?php

          $item = null;
          $valor = null;

          $clientes = ControladorClientes::ctrMostrarClientes($item, $valor);

          foreach ($clientes as $key => $value) {
            echo '<tr>

                    <td>'.($key+1).'</td>

                    <td>'.$value["nombre"].'</td>

                    <td>'.$value["documento"].'</td>

                    <td>'.$value["email"].'</td>

                    <td>'.$value["telefono"].'</td>

                    <td>'.$value["direccion"].'</td>

                    <td>'.$value["fecha_nacimiento"].'</td>             

                    <td>'.$value["compras"].'</td>

                    <td>'.$value["ultima_compra"].'</td>

                    <td>'.$value["fecha"].'</td>

                    <td>

                    <div class="btn-group">   
                      <button class="btn btn-warning btnEditarCliente mr-3" style="border-radius: 05px;" data-toggle="modal" data-target="#modalEditarCliente" idCliente="'.$value["id"].'"><i class="fa fa-pencil"></i></button>';
                    if($_SESSION["perfil"] == "Administrador"){
                        echo '<button class="btn btn-danger btnEliminarCliente" style="border-radius: 05px;" idCliente="'.$value["id"].'"><i class="fa fa-times"></i></button>';
                    }
                    echo '</div>  
                  </td>
                  </tr>';
            }

        ?>
        </tbody>
       </table>
      </div>
    </div>
  </div>
  </section>
</div>

<div id="modalAgregarCliente" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <form role="form" method="post">
        <div class="modal-header" style="background: #4B49AC; color:white">
          <button type="button" class="close" data-dismiss="modal" style="margin-top: -23px; color: white !important;">&times;</button>
        </div>
        <div class="modal-body">
          <div class="box-body">            
            <div class="form-group">
              <div class="input-group"> 
                <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Ingresar nombre" required>
              </div>
            </div>            
            <div class="form-group">
              <div class="input-group">
                <input type="number" min="0" class="form-control input-lg" name="nuevoDocumentoId" placeholder="Ingresar documento" required>
              </div>
            </div>
            
            <div class="form-group">
              <div class="input-group">
                <input type="email" class="form-control input-lg" name="nuevoEmail" placeholder="Ingresar email" required>
              </div>
            </div>
            
            <div class="form-group">
              <div class="input-group">
                <input type="text" class="form-control input-lg" name="nuevoTelefono" placeholder="Ingresar teléfono" data-inputmask="'mask':'(999) 9999-9999'" data-mask required>
              </div>
            </div>
            
            <div class="form-group">
              <div class="input-group">     
                <input type="text" class="form-control input-lg" name="nuevaDireccion" placeholder="Ingresar dirección" required>
              </div>
            </div>

            <div class="form-group">
              <div class="input-group">
                <input type="text" class="form-control input-lg" name="nuevaFechaNacimiento" placeholder="Ingresar fecha nacimiento" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask required>
              </div>
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
          <button type="submit" class="btn btn-primary">Guardar cliente</button>
        </div>
      </form>
      
      <?php
        $crearCliente = new ControladorClientes();
        $crearCliente -> ctrCrearCliente();
      ?>

    </div>
  </div>
</div>

<div id="modalEditarCliente" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <form role="form" method="post">
        <div class="modal-header" style="background: #4B49AC; color:white">
          <button type="button" class="close" data-dismiss="modal" style="margin-top: -23px; color: white !important;">&times;</button>
        </div>
        <div class="modal-body">
          <div class="box-body">            
            <div class="form-group">
              <div class="input-group">
                <input type="text" class="form-control input-lg" name="editarCliente" id="editarCliente" required>
                <input type="hidden" id="idCliente" name="idCliente">
              </div>
            </div>
            
            <div class="form-group">
              <div class="input-group">
                <input type="number" min="0" class="form-control input-lg" name="editarDocumentoId" id="editarDocumentoId" required>
              </div>
            </div>
            
            <div class="form-group">
              <div class="input-group">
                <input type="email" class="form-control input-lg" name="editarEmail" id="editarEmail" required>
              </div>
            </div>
            
            <div class="form-group">
              <div class="input-group">
                <input type="text" class="form-control input-lg" name="editarTelefono" id="editarTelefono" data-inputmask="'mask':'(999) 999-9999'" data-mask required>
              </div>
            </div>
            
            <div class="form-group">
              <div class="input-group">
                <input type="text" class="form-control input-lg" name="editarDireccion" id="editarDireccion"  required>
              </div>
            </div>
            
            <div class="form-group">
              <div class="input-group">
                <input type="text" class="form-control input-lg" name="editarFechaNacimiento" id="editarFechaNacimiento"  data-inputmask="'alias': 'yyyy/mm/dd'" data-mask required>
              </div>
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
          <button type="submit" class="btn btn-primary">Guardar cambios</button>
        </div>
      </form>

      <?php
        $editarCliente = new ControladorClientes();
        $editarCliente -> ctrEditarCliente();
      ?>

    </div>
  </div>
</div>

<?php

$eliminarCliente = new ControladorClientes();
$eliminarCliente -> ctrEliminarCliente();

?>