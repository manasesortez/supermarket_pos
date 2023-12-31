<?php

if($_SESSION["perfil"] == "Vendedor"){
  echo '<script>
    window.location = "inicio";
  </script>';
  return;
}

?>

<div class="content-wrapper">
  <section class="content-header" >
    <h1>
      Administrar categorías
    </h1>
    <ol class="breadcrumb" 
 style="border: 1px solid transparent;">
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      <li class="active">Administrar categorías</li>
    </ol>
  </section>

  <section class="content">
  <div class="card p-4">

    <div class="box">
    <div class="box-header with-border mb-3">
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCategoria">
          Agregar categoría
        </button>
      </div>
      <div class="box-body">
       <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
        <thead>
         <tr>  
           <th style="width:500px">#</th>
           <th style="width:500px">Categoria</th>
           <th style="width:500px">Acciones</th>
         </tr> 
        </thead>
        <tbody>
        <?php

          $item = null;
          $valor = null;
          $categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);

          foreach ($categorias as $key => $value) {
            echo ' <tr>
                    <td>'.($key+1).'</td>
                    <td class="text-uppercase">'.$value["categoria"].'</td>
                    <td>
                      <div class="btn-group">
                        <button class="btn btn-warning btnEditarCategoria mr-3" style="border-radius: 05px;" idCategoria="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarCategoria"><i class="fa fa-pencil"></i></button>';
                        if($_SESSION["perfil"] == "Administrador"){
                          echo '<button class="btn btn-danger btnEliminarCategoria" style="border-radius: 05px;" idCategoria="'.$value["id"].'"><i class="fa fa-times"></i></button>';
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


<div id="modalAgregarCategoria" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <form role="form" method="post">
        <div class="modal-header" style="background: #4B49AC; color:white">
          <button type="button" class="close" data-dismiss="modal" style="margin-top: -23px; color: white !important;
">&times;</button>
        </div>

        <div class="modal-body">
          <div class="box-body">            
            <div class="form-group">
              <div class="input-group">
                <input type="text" class="form-control input-lg" name="nuevaCategoria" placeholder="Ingresar categoría" required>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
          <button type="submit" class="btn btn-primary">Guardar categoría</button>
        </div>
        <?php
          $crearCategoria = new ControladorCategorias();
          $crearCategoria -> ctrCrearCategoria();
        ?>
      </form>
    </div>
  </div>
</div>

<div id="modalEditarCategoria" class="modal fade" role="dialog">
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
                <input type="text" class="form-control input-lg" name="editarCategoria" id="editarCategoria" required>
                <input type="hidden"  name="idCategoria" id="idCategoria" required>
              </div>
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
          <button type="submit" class="btn btn-primary">Guardar cambios</button>
        </div>
      <?php
          $editarCategoria = new ControladorCategorias();
          $editarCategoria -> ctrEditarCategoria();
        ?> 
      </form>
    </div>
  </div>
</div>

<?php
  $borrarCategoria = new ControladorCategorias();
  $borrarCategoria -> ctrBorrarCategoria();
?>
