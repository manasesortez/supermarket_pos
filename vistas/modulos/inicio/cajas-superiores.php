<?php

$item = null;
$valor = null;
$orden = "id";

$ventas = ControladorVentas::ctrSumaTotalVentas();

$categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);
$totalCategorias = count($categorias);

$clientes = ControladorClientes::ctrMostrarClientes($item, $valor);
$totalClientes = count($clientes);

$productos = ControladorProductos::ctrMostrarProductos($item, $valor, $orden);
$totalProductos = count($productos);

?>

<div class="col-md-3 mb-4 stretch-card transparent">
  <div class="card card-tale">
    <div class="card-body">
      <h3 class="mb-4" style="margin-top: 0px;">Ventas</h3>
      <p class="fs-30 mb-2">$<?php echo number_format($ventas["total"],2); ?></p>
    </div>
  </div>
</div>
<div class="col-md-3 mb-4 stretch-card transparent">
  <div class="card card-dark-blue">
    <div class="card-body">
      <h3 class="mb-4" style="margin-top: 0px;">Categorías</h3>
      <p class="fs-30 mb-2"><?php echo number_format($totalCategorias); ?></p>
    </div>
  </div>
</div>
<div class="col-md-3 mb-4 stretch-card transparent">
  <div class="card card-light-blue">
    <div class="card-body">
      <h3 class="mb-4" style="margin-top: 0px;">Clientes</h3>
      <p class="fs-30 mb-2"><?php echo number_format($totalClientes); ?></p>
    </div>
  </div>
</div>
<div class="col-md-3 mb-4 stretch-card transparent">
  <div class="card card-light-danger">
    <div class="card-body">
      <h3 class="mb-4" style="margin-top: 0px;">Productos</h3>
      <p class="fs-30 mb-2"><?php echo number_format($totalProductos); ?></p>
    </div>
  </div>
</div>