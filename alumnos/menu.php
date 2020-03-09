<div class="sidebar" data-color="blue">
	<div class="logo">
		<a href="https://centrocfac.com" class="simple-text logo-mini">
			<img src="../assets/img/favicon.png" class="img-fluid">
		</a>
		<a href="https://centrocfac.com" class="simple-text logo-normal">
			CFAC
		</a>
	</div>
	<div class="sidebar-wrapper" id="sidebar-wrapper">
		<ul class="nav">
			<li class="<?= $menu_activo == "perfil" ? "active" : ""?>">
				<a href="./perfil.php">
					<i class="now-ui-icons users_single-02"></i>
					<p>Mi Perfil</p>
				</a>
			</li>
			<li class="<?= $menu_activo == "calificaciones" ? "active" : ""?>">
				<a href="./calificaciones.php">
					<i class="now-ui-icons design_bullet-list-67"></i>
					<p>Mis Calificaciones</p>
				</a>
			</li>
		</ul>
	</div>
</div>