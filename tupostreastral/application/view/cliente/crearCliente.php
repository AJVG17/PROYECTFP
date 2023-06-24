    <!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12">
							<div class="x_panel">
								<div class="x_title">
									<h2>Registrar Cliente</h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
											<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
												<a class="dropdown-item" href="#">Settings 1</a>
												<a class="dropdown-item" href="#">Settings 2</a>
											</div>
										</li>
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form class="form-label-left input_mask" method="post">

										<div class="col-md-6 col-sm-6  form-group has-feedback">
											<select name="selTiposDocumentos" id="selTiposDocumentos" class="form-control">
												<option selected="selected">Tipo Documento</option>
												<?php foreach($tiposDocumentos as $value):?>
													<option value="<?php echo $value['idTipoDocumento'];?>"><?php echo $value['doc'];?></option>
												<?php endforeach; ?>
											</select>
										</div>

										<div class="col-md-6 col-sm-6  form-group has-feedback">
											<input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Documento" name="txtDocumento">
											<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
										</div>							
									
										<div class="col-md-6 col-sm-6  form-group has-feedback">
											<input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Nombres" name="txtNombres">
											<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
										</div>

										<div class="col-md-6 col-sm-6  form-group has-feedback">
											<input type="text" class="form-control" id="inputSuccess3" placeholder="Apellidos" name="txtApellidos">
											<span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
										</div>

										<div class="col-md-6 col-sm-6  form-group has-feedback">
											<input type="email" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Email" name="txtEmail">
											<span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
										</div>

										<div class="col-md-6 col-sm-6  form-group has-feedback">
											<input type="tel" class="form-control" id="inputSuccess5" placeholder="Telefono" name="txtTelefono">
											<span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
										</div>

										<div class="form-group row">
											<label class="col-form-label col-md-3 col-sm-3 ">Dirección</label>
											<div class="col-md-9 col-sm-9 ">
												<input type="text" class="form-control" placeholder="Dirección" name="txtDireccion">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-md-3 col-sm-3 ">Genero</label>
											<div class="col-md-9 col-sm-9 ">
												<input type="text" class="form-control" placeholder="Genero" name="txtGenero">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-md-3 col-sm-3 ">Fecha Nacimiento<span class="required">*</span>
											</label>
											<div class="col-md-9 col-sm-9 ">
												<input class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)" id="txtFechaNacimiento" name="txtFechaNacimiento">
												<script>
													function timeFunctionLong(input) {
														setTimeout(function() {
															input.type = 'text';
														}, 60000);
													}
												</script>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-md-3 col-sm-3 ">Tipo Cliente</label>
											<div class="col-md-9 col-sm-9 ">
												<select name="selTiposClientes" id="selTiposClientes" class="form-control">
													<option selected="selected">Seleccione tipo cliente</option>
													<?php foreach($listarTiposClientes as $value):?>
														<option value="<?php echo $value['idTC'];?>"><?php echo $value['Descripcion'];?></option>
													<?php endforeach; ?>
												</select>
											</div>
										</div>
										<div class="ln_solid"></div>
										<div class="form-group row">
											<div class="col-md-9 col-sm-9  offset-md-3">

												<a type="button" class="btn btn-danger" href="<?php echo URL; ?>clienteController/principal">Cancelar</a>

												<button class="btn btn-warning" type="reset" href="<?php echo URL;?>clienteController/registrarCliente">Limpiar</button>

												<button type="submit" class="btn btn-success" name="btnGuardarC">Guardar</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>		
			</div>
			<!-- /page content -->
