<!DOCTYPE html>
<html lang="en">
	
	<head>
    <title> CATÁLOGOS </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
		integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		
	</head>
	
	<body>
		
    <div class="container">
			
			<ul class="nav nav-tabs">
				
				<li class="active"><a data-toggle="tab" href="#Alumnos" >Alumnos</a></li>
				<li><a data-toggle="tab" href="#Materias">Materias</a></li>
				<li><a data-toggle="tab" href="#Trimestres">Trimestres</a></li>
				<li><a data-toggle="tab" href="#Periodos">Periodos</a></li>
				<li><a data-toggle="tab" href="#CatalogoDeDocentes">Catalogo De Docentes</a></li>
			</ul>
			
			<div class="tab-content">
				
				
				<div id="Alumnos" class="tab-pane fade in active ">
					
					<form>
						
						<div class="row border">
							
							<div class="col-6">
								
								<h4 class="mt-3"> Lista de Alumnos</h4>
								
								
								<table id="tabla_alumnos" border="1" class="table table-striped">
									<thead>
										<tr >
											<th>Matricula</th>
											<th>Nombre Completo</th>
											<th>Trimestre</th>
											<th>Estatus</th>
											<th>Acciones</th>
										</tr>
										<thead>
											<tr>
												
												<td><b>1</b></td>
												<td></td>
												<td></td>
												<td></td>
												
												
												<td>
													<button class="btn btn-danger" title="Dar de Baja">
													<i class="fa fa-arrow-down" ></i>
													</button>
													<button class="btn btn-warning" title="Editar">
														<i class="fa fa-pencil"></i> 
													</button>
													
												</td>
												
											</tr>
											
											
										</table>
										
										
									</div>
									
								</div>
							</form>
						</div>
						
						<div id="Materias" class="tab-pane fade">
							
							<form>
								
								<div class="row border">
									
									<div class="col-6"> MATERIA <input type="text" name="Nombre" size="40">
										
										
										<button type="reset" class="btn btn-danger"><i class="fa fa-trash"
										aria-hidden="true"></i></button>
										<button type="submit" class="btn btn-success"><i class="fa fa-floppy-o"
											aria-hidden="true"></i>
										</button>
										<table border="1" class="table table-striped">
											
											<tr class="bg-warning">
												
												<th><mark> ID </mark></th>
												<th><mark> NOMBRE </mark></th>
												
												<th>
													
												</th>
												
												
											</tr>
											
											<tr class="bg-success">
												
												<td><b>1</b></td>
												<td><b></b></td>
												
												
												<td>
													<button class="btn btn-danger">
													<i class="fa fa-trash" aria-hidden="true"></i></button>
													<button class="btn btn-warning">
													<i class="fa fa-pencil" aria-hidden="true"></i> </button>
													
												</td>
												
											</tr>
											<tr class="bg-success">
												
												<td><b>2</b></td>
												<td><b></b></td>
												
												<td>
													<button class="btn btn-danger">
													<i class="fa fa-trash" aria-hidden="true"></i></button>
													<button class="btn btn-warning">
													<i class="fa fa-pencil" aria-hidden="true"></i> </button>
													
												</td>
												
											</tr>
											<tr class="bg-success">
												
												<td><b>3</b></td>
												<td><b></b></td>
												
												<td>
													<button class="btn btn-danger">
													<i class="fa fa-trash" aria-hidden="true"></i></button>
													<button class="btn btn-warning">
													<i class="fa fa-pencil" aria-hidden="true"></i> </button>
													
												</td>
												
											</tr>
											
										</table>
										
										
									</div>
									
								</div>
							</form>
						</div>
						
						
						<div id="Trimestres" class="tab-pane fade">
							
							<form action="ejemplo.php" method="get">
								
								<div class="row border">
									
									<div class="col-6"> TRIMESTRE <input type="text" name="Nombre" size="40">
										
										
										<button type="reset" class="btn btn-danger"><i class="fa fa-trash"
										aria-hidden="true"></i></button>
										<button type="submit" class="btn btn-success"><i class="fa fa-floppy-o"
											aria-hidden="true"></i>
										</button>
										<table border="1" class="table table-striped">
											
											<tr class="bg-warning">
												
												
												<th><mark> ID </mark></th>
												<th><mark> NOMBRE </mark></th>
												
												<th>
													
												</th>
												
												
											</tr>
											
											<tr class="bg-success">
												
												<td><b>1</b></td>
												<td><b> </b></td>
												
												<td>
													<button class="btn btn-danger">
													<i class="fa fa-trash" aria-hidden="true"></i></button>
													<button class="btn btn-warning">
													<i class="fa fa-pencil" aria-hidden="true"></i> </button>
													
												</td>
												
											</tr>
											<tr class="bg-success">
												
												<td><b>2</b></td>
												<td><b></b></td>
												
												
												<td>
													<button class="btn btn-danger">
													<i class="fa fa-trash" aria-hidden="true"></i></button>
													<button class="btn btn-warning">
													<i class="fa fa-pencil" aria-hidden="true"></i> </button>
													
												</td>
												
											</tr>
											<tr class="bg-success">
												
												<td><b>3</b></td>
												<td><b></b></td>
												
												
												<td>
													<button class="btn btn-danger">
													<i class="fa fa-trash" aria-hidden="true"></i></button>
													<button class="btn btn-warning">
													<i class="fa fa-pencil" aria-hidden="true"></i> </button>
													
												</td>
												
											</tr>
											
										</table>
										
										
									</div>
									
								</div>
							</form>
							
							
						</div>
						
						
						<div id="Periodos" class="tab-pane fade">
							
							<form action="ejemplo.php" method="get">
								
								<div class="row border">
									
									<div class="col-6"> PERIODO <input type="text" name="Nombre" size="40">
										
										
										<button type="reset" class="btn btn-danger"><i class="fa fa-trash"
										aria-hidden="true"></i></button>
										<button type="submit" class="btn btn-success"><i class="fa fa-floppy-o"
											aria-hidden="true"></i>
										</button>
										<table border="1" class="table table-striped">
											
											<tr class="bg-warning">
												
												
												<th><mark> ID </mark></th>
												<th><mark> NOMBRE </mark></th>
												
												<th>
													
												</th>
												
												
											</tr>
											
											<tr class="bg-success">
												
												<td><b>1</b></td>
												<td><b> </b></td>
												
												<td>
													<button class="btn btn-danger">
													<i class="fa fa-trash" aria-hidden="true"></i></button>
													<button class="btn btn-warning">
													<i class="fa fa-pencil" aria-hidden="true"></i> </button>
													
												</td>
												
											</tr>
											<tr class="bg-success">
												
												<td><b>2</b></td>
												<td><b></b></td>
												
												
												<td>
													<button class="btn btn-danger">
													<i class="fa fa-trash" aria-hidden="true"></i></button>
													<button class="btn btn-warning">
													<i class="fa fa-pencil" aria-hidden="true"></i> </button>
													
												</td>
												
											</tr>
											<tr class="bg-success">
												
												<td><b>3</b></td>
												<td><b></b></td>
												
												
												<td>
													<button class="btn btn-danger">
													<i class="fa fa-trash" aria-hidden="true"></i></button>
													<button class="btn btn-warning">
													<i class="fa fa-pencil" aria-hidden="true"></i> </button>
													
												</td>
												
											</tr>
											
										</table>
										
										
									</div>
									
								</div>
							</form>
							
						</div>
						
						<div id="CatalogoDeDocentes" class="tab-pane fade">
							
							<form action="ejemplo.php" method="get">
								
								<div class="row border">
									
									<div class="col-6"> Catalogo De Docentes <input type="text" name="Nombre" size="40">
										
										
										<button type="reset" class="btn btn-danger"><i class="fa fa-trash"
										aria-hidden="true"></i></button>
										<button type="submit" class="btn btn-success"><i class="fa fa-floppy-o"
											aria-hidden="true"></i>
										</button>
										<table border="1" class="table table-striped">
											
											<tr class="bg-warning">
												
												
												<th><mark> ID </mark></th>
												<th><mark> NOMBRE </mark></th>
												
												<th>
													
												</th>
												
												
											</tr>
											
											<tr class="bg-success">
												
												<td><b>1</b></td>
												<td><b> </b></td>
												
												<td>
													<button class="btn btn-danger">
													<i class="fa fa-trash" aria-hidden="true"></i></button>
													<button class="btn btn-warning">
													<i class="fa fa-pencil" aria-hidden="true"></i> </button>
													
												</td>
												
											</tr>
											<tr class="bg-success">
												
												<td><b>2</b></td>
												<td><b></b></td>
												
												
												<td>
													<button class="btn btn-danger">
													<i class="fa fa-trash" aria-hidden="true"></i></button>
													<button class="btn btn-warning">
													<i class="fa fa-pencil" aria-hidden="true"></i> </button>
													
												</td>
												
											</tr>
											<tr class="bg-success">
												
												<td><b>3</b></td>
												<td><b></b></td>
												
												
												<td>
													<button class="btn btn-danger">
													<i class="fa fa-trash" aria-hidden="true"></i></button>
													<button class="btn btn-warning">
													<i class="fa fa-pencil" aria-hidden="true"></i> </button>
													
												</td>
												
											</tr>
											
										</table>
									</div>
									
									
								</div>
							</form>
						</div>
						
					</div>
				</div>
				
				<script src="catalogos.js?124"><script>
					
				</body>
				
				</html>				