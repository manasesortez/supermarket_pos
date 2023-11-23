<nav class="sidebar sidebar-offcanvas" id="sidebar">
	<ul class="nav">

		<?php
			if($_SESSION["perfil"] == "Administrador"){
				echo '<li class="nav-item">
					<a class="nav-link" href="inicio">
						<i class="icon-bar-graph-2 menu-icon"></i>
						<span class="menu-title">Inicio</span>
					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="usuarios">
						<i class="icon-head menu-icon"></i>
						<span class="menu-title">Usuarios</span>
					</a>
				</li>';
			}

			if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Especial"){
				echo '<li class="nav-item">
					<a class="nav-link" href="categorias">
						<i class="icon-grid menu-icon"></i>
						<span class="menu-title">Categorias</span>
					</a>
				</li>
	
				<li class="nav-item">
					<a class="nav-link" href="productos">
						<i class="icon-paper menu-icon"></i>
						<span class="menu-title">Productos</span>
					</a>
				</li>';
	
			}

			if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Vendedor"){
				echo '<li class="nav-item">
						<a class="nav-link" href="clientes">
							<i class="icon-head menu-icon"></i>
							<span class="menu-title">Clientes</span>
						</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
							<i class="icon-layout menu-icon"></i>
							<span class="menu-title">Ventas</span>
							<i class="menu-arrow"></i>
						</a>
						<div class="collapse" id="ui-basic">
							<ul class="nav flex-column sub-menu">
							<li class="nav-item"> <a class="nav-link" href="ventas">Administrar ventas</a></li>
							<li class="nav-item"> <a class="nav-link" href="crear-venta">Crear venta</a></li>
							<li class="nav-item"> <a class="nav-link" href="reportes">Reporte de ventas</a></li>
							</ul>
						</div>
					</li>';
			}	
		?>
	</ul>
</nav>

<!-- <aside class="main-sidebar">
	 <section class="sidebar">
		<ul class="sidebar-menu">
		<?php

		if($_SESSION["perfil"] == "Administrador"){
			echo '<li class="active">
				<a href="inicio">
					<i class="fa fa-home"></i>
					<span>Inicio</span>
				</a>
			</li>

			<li>
				<a href="usuarios">
					<i class="fa fa-user"></i>
					<span>Usuarios</span>
				</a>
			</li>';

		}

		if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Especial"){
			echo '<li>
				<a href="categorias">
					<i class="fa fa-th"></i>
					<span>Categorías</span>
				</a>
			</li>

			<li>
				<a href="productos">
					<i class="fa fa-product-hunt"></i>
					<span>Productos</span>
				</a>
			</li>';

		}

		if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Vendedor"){
			echo '<li>
				<a href="clientes">
				<i class="fa fa-users"></i>
					<span>Clientes</span>
				</a>
			</li>
			
			<li class="treeview">
			<a href="#">
				<i class="fa fa-list-ul"></i>
				<span>Ventas</span>
				<span class="pull-right-container">
					<i class="fa fa-angle-left pull-right"></i>
				</span>
			</a>

			<ul class="treeview-menu">
				<li>
					<a href="ventas">		
						<i class="fa fa-circle-o"></i>
						<span>Administrar ventas</span>
					</a>
				</li>
				
				<li>
					<a href="crear-venta">	
						<i class="fa fa-circle-o"></i>
						<span>Crear venta</span>
					</a>
				</li>
				<li>
					<a href="reportes">
						<i class="fa fa-circle-o"></i>
						<span>Reporte de ventas</span>
					</a>
				</li>';
		}
		
		?>
		</ul>

	 </section>

</aside> -->