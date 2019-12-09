<!DOCTYPE html>
<html lang="en">
	
	<head>
		<meta charset="utf-8" />
		<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
		<link rel="icon" type="image/png" href="../assets/img/favicon.png">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title>
			Now UI Dashboard by Creative Tim
		</title>
		<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
		<!--     Fonts and icons     -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<!-- CSS Files -->
		<link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="../assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
		<!-- CSS Just for demo purpose, don't include it in your project -->
		<link href="../assets/demo/demo.css" rel="stylesheet" />
	</head>
	
	<body class="user-profile">
		<div class="wrapper ">
			<div class="sidebar" data-color="blue">
				<!--
					Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
				-->
				<div class="logo">
					<a href="cfac.com" class="simple-text logo-mini">
						CFAC
					</a>
					<a href="http://www.creative-tim.com" class="simple-text logo-normal">
						CFAC
					</a>
				</div>
				<div class="sidebar-wrapper" id="sidebar-wrapper">
					<ul class="nav">
						
						
					
						<li class="active ">
							<a href="./perfil.php">
								<i class="now-ui-icons users_single-02"></i>
								<p>Mi Perfil</p>
							</a>
						</li>
						<li>
							<a href="./calificaciones.php">
								<i class="now-ui-icons design_bullet-list-67"></i>
								<p>Mis Calificaciones</p>
							</a>
						</li>
					
					</ul>
				</div>
			</div>
			<div class="main-panel" id="main-panel">
				<!-- Navbar -->
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
							<a class="navbar-brand" href="#pablo">Mis Datos</a>
						</div>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-bar navbar-kebab"></span>
							<span class="navbar-toggler-bar navbar-kebab"></span>
							<span class="navbar-toggler-bar navbar-kebab"></span>
						</button>
						<div class="collapse navbar-collapse justify-content-end" id="navigation">
							
							<ul class="navbar-nav">
								<li class="nav-item">
							
								
										<p>
											<span class="d-lg-none d-md-block">Stats</span>
										</p>
									</a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="now-ui-icons location_world"></i>
										<p>
											<span class="d-lg-none d-md-block">Some Actions</span>
										</p>
									</a>
									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
									</div>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#pablo">
										<i class="now-ui-icons users_single-02"></i>
										<p>
											<span class="d-lg-none d-md-block">Account</span>
										</p>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
				<!-- End Navbar -->
				<div class="panel-header panel-header-sm">
				</div>
				<div class="content">
					<div class="row">
						<div class="col-md-4">
							<div class="card card-user">
								<div class="image">
									<img src="../assets/img/fondo_perfil.jpg" alt="...">
								</div>
								<div class="card-body">
									<div class="author">
										<a href="#">
											<img class="avatar border-gray" src="../assets/img/default-avatar.png" alt="...">
											<h5 class="title">Juan Pérez</h5>
										</a>
										<p class="description">
											3er Trimestre
										</p>
									</div>
									<p class="description text-center">
										
									</p>
								</div>
								<hr>
								<div class="button-container d-none">
									<button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
										<i class="fab fa-facebook-f"></i>
									</button>
									<button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
										<i class="fab fa-twitter"></i>
									</button>
									<button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
										<i class="fab fa-google-plus-g"></i>
									</button>
								</div>
							</div>
						</div>
						
						<div class="col-md-8">
							<div class="card">
								<div class="card-header">
									<h5 class="title"> PERFIL </h5>
								</div>
								<div class="card-body">
									<form>
										<div class="row">
											<div class="col-md-5 pr-1">
												<div class="form-group">
													<label> Matricula </label>
													<input type="text" class="form-control" placeholder="Matricula">
												</div>
											</div>
											<div class="col-md-3 px-1">
												<div class="form-group">
													<label> Nombre </label>
													<input type="text" class="form-control" placeholder="Nombre">
												</div>
											</div>
											<div class="col-md-3 px-1">
												<div class="form-group">
													<label> Apellidos </label>
													<input type="text" class="form-control" placeholder="Apellidos">
												</div>
											</div>
											<div class="col-md-3 px-1">
												<div class="form-group">
													<label> Sexo </label>
												<select name="select1" id="select1" class="form-control">
                                    <option value="1"> M </option>
                                    <option value="2"> F </option>
                                </select>
												</div>
											</div>
											<div class="col-md-3 px-1">
												<div class="form-group">
													<label> Fecha De Nacimiento </label>
													<input type="date" class="form-control" placeholder="Fecha De Nacimiento">
												</div>
											</div>
											<div class="col-md-3 px-1">
												<div class="form-group">
													<label> Telefono </label>
													<input type="tel" class="form-control" placeholder="Telefono">
												</div>
											</div>
											

											<div class="col-md-4 pl-1">
												<div class="form-group">
													<label for="exampleInputEmail1">Correo</label>
													<input type="email" class="form-control" placeholder="Email">
												</div>
											</div>
										</div>
										
										
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<footer class="footer">
					<div class="container-fluid">
						<nav>
							<ul>
								<li>
									<a href="https://www.creative-tim.com">
										Creative Tim
									</a>
								</li>
								<li>
									<a href="http://presentation.creative-tim.com">
										About Us
									</a>
								</li>
								<li>
									<a href="http://blog.creative-tim.com">
										Blog
									</a>
								</li>
							</ul>
						</nav>
						<div class="copyright" id="copyright">
							&copy;
							<script>
								document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
							</script>, Designed by
							<a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by
							<a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
						</div>
					</div>
				</footer>
			</div>
		</div>
		<!--   Core JS Files   -->
		<script src="../assets/js/core/jquery.min.js"></script>
		<script src="../assets/js/core/popper.min.js"></script>
		<script src="../assets/js/core/bootstrap.min.js"></script>
		<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
		<!--  Google Maps Plugin    -->
		<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
		<!-- Chart JS -->
		<script src="../assets/js/plugins/chartjs.min.js"></script>
		<!--  Notifications Plugin    -->
		<script src="../assets/js/plugins/bootstrap-notify.js"></script>
		<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
		<script src="../assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
		<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
		<script src="../assets/demo/demo.js"></script>
	</body>
	
</html>