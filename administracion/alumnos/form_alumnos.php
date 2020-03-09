<form id="form_edicion" autocomplete="off" class="was-validated">
	<div id="modal_edicion" class="modal fade" role="dialog">
		<div class="modal-dialog ">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title text-center">Editar Alumno</h3>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<input id="id_alumnos" name="id_alumnos" hidden>
								<label for="matricula">Matrícula:</label>
								<input  type="text" class="form-control" name="matricula" id="matricula" >
							</div>
							<div class="form-group">
								<label for="nombre_alumno">Nombre :</label>
								<input  type="text" class="form-control" name="nombre_alumno" id="nombre_alumno" required>
							</div>
							<div class="form-group">
								<label for="ape_pat">Apellido Paterno:</label>
								<input  class="form-control" type="text" name="ape_pat" id="ape_pat" required>
							</div>
							<div class="form-group">
								<label for="ape_mat">Apellido Materno:</label>
								<input  class="form-control" type="text" name="ape_mat" id="ape_mat" required>
							</div>
							<div class="form-group">
								<label for="contrasena">Contraseña:</label>
								<input  class="form-control" type="password" name="contrasena" id="contrasena" required>
							</div>
							<div class="form-group">
								<label for="celular">Celular:</label>
									<input  class="form-control" type="tel" name="celular" id="celular" >
							</div>
							<div class="form-group">
								<label for="correo">Correo:</label>
									<input  class="form-control" type="email" name="correo" id="correo" >
							</div>
							<div class="form-group">
								<label for="sexo">Sexo:</label>
								<select class="form-control" id="sexo" name="sexo">
									<option value="">Elige</option>
									<option value="M">Masculino</option>
									<option value="F">Femenino</option>
								</select>
							</div>
							<div class="form-group">
								<label for="sexo">Grupo:</label>
								<select class="form-control" required id="id_grupos" name="id_grupos">
									<option value="">Elige</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
					<button type="submit" class="btn btn-success" id="btn_formAlta">
						<i class="fa fa-save"></i> Guardar
					</button>
				</div>
			</div>
		</div>
	</div>
</form>	