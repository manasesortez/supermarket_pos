<?php
if($_SESSION["perfil"] == "Especial" || $_SESSION["perfil"] == "Vendedor"){
  echo '<script>
    window.location = "inicio";
  </script>';
  return;
}

?>
<div class="content-wrapper">
  <section class="content-header">
    <h1>Administrar usuarios</h1>

    <ol class="breadcrumb" 
 style="border: 1px solid transparent;"> 
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li> 
      <li class="active">Administrar usuarios</li>
    </ol>
  </section>

  <section class="content">
  <div class="card p-4">
    <div class="box">
    <div class="box-header with-border mb-3">
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">  
          Agregar usuario
        </button>
      </div>
      <div class="box-body">
       <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
          <thead>
              <tr>
                <th style="width:10px">#</th>
                <th style="width:100px">Nombre</th>
                <th style="width:100px">Usuario</th>
                <th>Foto</th>
                <th style="width:90px">Perfil</th>
                <th style="width:90px">Estado</th>
                <th style="width:120px">Último login</th>
                <th style="width:100px">Acciones</th>
              </tr>
          </thead>
        <tbody>
        <?php

        $item = null;
        $valor = null;
        $usuarios = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);

       foreach ($usuarios as $key => $value){

          echo ' <tr>
                  <td>'.($key+1).'</td>
                  <td>'.$value["nombre"].'</td>
                  <td>'.$value["usuario"].'</td>';

                  if($value["foto"] != ""){
                    echo '<td><img src="'.$value["foto"].'" class="img-thumbnail" width="40px"></td>';
                  }else{
                    echo '<td><img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="40px"></td>';
                  }

                  echo '<td>'.$value["perfil"].'</td>';

                  if($value["estado"] != 0){
                    echo '<td><button class="btn btn-success btn-xs btnActivar" idUsuario="'.$value["id"].'" estadoUsuario="0">Activado</button></td>';
                  }else{
                    echo '<td><button class="btn btn-danger btn-xs btnActivar" idUsuario="'.$value["id"].'" estadoUsuario="1">Desactivado</button></td>';
                  }  

                  echo '<td>'.$value["ultimo_login"].'</td>

                  <td>
                  <div class="btn-group">
                    <button class="btn btn-warning btnEditarUsuario mr-3" style="border-radius: 05px;" idUsuario="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarUsuario"><i class="fa fa-pencil"></i></button>
                    <button class="btn btn-danger btnEliminarUsuario" style="border-radius: 05px;" idUsuario="'.$value["id"].'" fotoUsuario="'.$value["foto"].'" usuario="'.$value["usuario"].'"><i class="fa fa-times"></i></button>
                  </div>
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
<div id="modalAgregarUsuario" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <form role="form" method="post" enctype="multipart/form-data">
        
        <div class="modal-header" style="background: #4B49AC; color:white">
          <button type="button" class="close" data-dismiss="modal" style="margin-top: -23px; color: white !important;">&times;</button>
        </div>

        <div class="modal-body">
          <div class="box-body">            
            
            <div class="form-group">
              <div class="input-group">
                <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Ingresar nombre" required>
              </div>
            </div>

            <div class="form-group"> 
              <div class="input-group"> 
                <input type="text" class="form-control input-lg" name="nuevoUsuario" placeholder="Ingresar usuario" id="nuevoUsuario" required>
              </div>
            </div>

             <div class="form-group">
              <div class="input-group">
                <input type="password" class="form-control input-lg" name="nuevoPassword" placeholder="Ingresar contraseña" required>
              </div>
            </div>

            <div class="form-group">
              <div class="input-group">
                <select class="form-control input-lg" name="nuevoPerfil">
                  <option value="">Selecionar perfil</option>
                  <option value="Administrador">Administrador</option>
                  <option value="Especial">Especial</option>
                  <option value="Vendedor">Vendedor</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <div class="panel">SUBIR FOTO</div>
              <input type="file" class="nuevaFoto" name="nuevaFoto">
              <p class="help-block">Peso máximo de la foto 2MB</p>
              <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail previsualizar" width="100px">
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
          <button type="submit" class="btn btn-primary">Guardar usuario</button>
        </div>
        
        <?php
          $crearUsuario = new ControladorUsuarios();
          $crearUsuario -> ctrCrearUsuario();
        ?>
      </form>
    </div>
  </div>
</div>

<div id="modalEditarUsuario" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <form role="form" method="post" enctype="multipart/form-data">

        <div class="modal-header" style="background: #4B49AC; color:white">
          <button type="button" class="close" data-dismiss="modal" style="margin-top: -23px; color: white !important;">&times;</button>
        </div>

        <div class="modal-body">
          <div class="box-body">            
            
            <div class="form-group">
              <div class="input-group">
              <input type="text" class="form-control input-lg" id="editarNombre" name="editarNombre" value="" required>
              </div>
            </div>

            <div class="form-group"> 
              <div class="input-group"> 
                <input type="text" class="form-control input-lg" id="editarUsuario" name="editarUsuario" value="" readonly>
              </div>
            </div>

            <div class="form-group">
              <div class="input-group">
                <input type="password" class="form-control input-lg" name="editarPassword" placeholder="Escriba la nueva contraseña">
                <input type="hidden" id="passwordActual" name="passwordActual">
              </div>
            </div>

            <div class="form-group">
              <div class="input-group">
                <select class="form-control input-lg" name="editarPerfil"> 
                  <option value="" id="editarPerfil"></option>
                  <option value="Administrador">Administrador</option>
                  <option value="Especial">Especial</option>
                  <option value="Vendedor">Vendedor</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <div class="panel">SUBIR FOTO</div>
              <input type="file" class="nuevaFoto" name="editarFoto">
              <p class="help-block">Peso máximo de la foto 2MB</p>
              <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail previsualizarEditar" width="100px">
              <input type="hidden" name="fotoActual" id="fotoActual">
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
          <button type="submit" class="btn btn-primary">Modificar usuario</button>
        </div>

     <?php
          $editarUsuario = new ControladorUsuarios();
          $editarUsuario -> ctrEditarUsuario();
        ?> 
      </form>
    </div>
  </div>
</div>

<?php
  $borrarUsuario = new ControladorUsuarios();
  $borrarUsuario -> ctrBorrarUsuario();
?> 