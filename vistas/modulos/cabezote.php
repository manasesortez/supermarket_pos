<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row" style="margin-bottom: 0px !important;">
	<div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
	<a class="navbar-brand brand-logo mr-5 mt-2" ><img src="vistas/img/plantilla/Supermart.svg" class="mr-2 mt-2" alt="logo"/></a>
	<a class="navbar-brand brand-logo-mini" ><img src="vistas/img/plantilla/Supermart.svg" alt="logo"/></a>
	</div>
	<div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
	<button class="navbar-toggler navbar-toggler align-self-center position_btn" type="button" data-toggle="minimize">
		<span class="icon-menu" style="font-size: large !important;"></span>
	</button>
	<ul class="navbar-nav navbar-nav-right">
		<li class="nav-item nav-profile dropdown">
			<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
				<?php
					if($_SESSION["foto"] != ""){
						echo '<img src="./'.$_SESSION["foto"].'" class="user-image">';
					}else{
						echo '<img src="vistas/img/usuarios/default/anonymous.png" class="user-image">';
					}
				?>	
				<span class="hidden-xs" style="font-size: large !important;"><?php  echo $_SESSION["nombre"]; ?></span>
			</a>
			<div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
				<a class="dropdown-item" href="salir">
					<i class="ti-power-off text-primary"></i>
					Salir
				</a>
			</div>
		</li>
	</ul>
	<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
		<span class="icon-menu"></span>
	</button>
	</div>
</nav>