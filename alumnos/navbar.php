<nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
	<div class="container-fluid">
		<div class="navbar-wrapper">
			<div class="navbar-toggle">
				<button type="button" class="navbar-toggler">
					<span class="navbar-toggler-bar bar1"></span>
					<span class="navbar-toggler-bar bar2"></span>
					<span class="navbar-toggler-bar bar3"></span>
				</button>
			</div>
			<a class="navbar-brand" href="#pablo"><?= $page_title?></a>
		</div>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-bar navbar-kebab"></span>
			<span class="navbar-toggler-bar navbar-kebab"></span>
			<span class="navbar-toggler-bar navbar-kebab"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="navigation">
			<form>
				<div class="input-group no-border d-sm-none">
					<input type="text" value="" class="form-control" placeholder="Search...">
					<div class="input-group-append">
						<div class="input-group-text">
							<i class="now-ui-icons ui-1_zoom-bold"></i>
						</div>
					</div>
				</div>
			</form>
			<ul class="navbar-nav">
				
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="now-ui-icons users_single-02"></i>
						<p>
							<span class=" d-md-block"><?= $_COOKIE["nombre_usuarios"]?></span>
						</p>
						<p>
							<span class="d-lg-none d-md-block">Opciones</span>
						</p>
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="../login/logout.php">Salir</a>
						
					</div>
				</li>
				<li class="nav-item" hidden>
					<a class="nav-link" href="#pablo">
						<i class="now-ui-icons users_single-02"></i>
						<p>
							<span class=" d-md-block">Admin</span>
						</p>
					</a>
				</li>
			</ul>
		</div>
	</div>
</nav>