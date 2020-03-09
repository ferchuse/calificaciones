<div class="sidebar d-print-none" data-color="blue">
	<div class="logo">
		<a href="cfac.com" class="simple-text logo-mini">
			<img src="../../assets/img/favicon.png" class="img-fluid">
		</a>
		<a href="https://centrocfac.com" class="simple-text logo-normal">
			CFAC
		</a>
	</div>
	<div class="sidebar-wrapper" id="sidebar-wrapper">
		<ul class="nav">
			<li class="<?= $page_title == "Alumnos" ? "active" : ""?>" >
				<a href="../alumnos">
					<i class="now-ui-icons users_single-02"></i>
					<p>Alumnos</p>
				</a>
			</li>
			
			<li class="nav-item dropdown <?= $link_activo == "Calificaciones" ? "active" : ""?> ">
				<a class="nav-link dropdown-toggle " href="#" id="navbardrop" data-toggle="dropdown">
					<i class="fas fa-chalkboard"></i> 	Calificaciones
				</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="../calificaciones/index.php">Por Materia</a>
					<a class="dropdown-item" href="../calificaciones/calif_alumno.php">Por Alumno</a>
				</div>
			</li>
			<li class=" " hidden>
				<a href="../grupos">
					<i class="fas fa-users"></i>
					<p>Grupos</p>
				</a>
			</li>
			<li class=" " hidden>
				<a href="../docentes">
					<i class="fas fa-chalkboard-teacher"></i>
					<p>Docentes</p>
				</a>
			</li>
			<li class=" " hidden >
				<a href="../materias">
					<i class="now-ui-icons design-2_ruler-pencil"></i>
					<p>Materias</p>
				</a>
			</li>
			
		</ul>
	</div>
</div>