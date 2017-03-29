@extends('panel.layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Usuarios
	</h1>
</section>

<!-- Main content -->
<section class="content">
	<div class="box">
		<div class="box-header">
			<div class="box-title" style="display: block;"> &nbsp; Crear Usuario
				<a href="/panel/users" class="pull-left btn-xs btn btn-default"><i class="fa fa-arrow-left"></i></a>
			</div>
		</div>
		<div class="box-body">
			@if (session('status'))
				<div class="alert alert-danger">
					{{ session('status') }}
				</div>
			@endif
			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			<form action="/panel/users" method="POST" class="cleafix">
				{{csrf_field()}}
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Nombre*</label>
							<input type="text" autofocus 
							name="first_name"
							placeholder="Carlos"
							class="form-control">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label>Apellido*</label>
							<input type="text" name="last_name" placeholder="Lopez" class="form-control">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>DNI*</label>
							<input type="text" name="dni" placeholder="34123321" class="form-control">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label >CUIT</label>
							<input type="text"  name="cuit" placeholder="12-123123123-2" class="form-control">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label>Telefono*</label>
							<input type="text" name="phone" placeholder="15-1233-1234" class="form-control">
						</div>
					</div>

					<div class="col-md-4">
						<div class="form-group">
							<label>Dirección*</label>
							<input type="text" name="address" placeholder="Av. Mitre 1235, Congreso" class="form-control">
						</div>
					</div>

					<div class="col-md-4">
						<div class="form-group">
							<label>Email*</label>
							<input type="text" name="email" placeholder="carlos@lopez.com" class="form-control">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Contraseña*</label>
							<input type="password"  name="password" placeholder="Contraseña" class="form-control">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label>Rol*</label>
							<select name="type" class="form-control">
								<option value="">Seleccionar</option>
								<option value="admin">Administrador</option>
								<option value="user">Usuario</option>
							</select>
						</div>
					</div>


				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Agronomia*</label>
							<input type="text"  name="agronomy" placeholder="Agronomia" class="form-control">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="">Tipo Agronomia*</label>
							<select name="agronomy_type" class="form-control">
								<option value="">Seleccionar</option>
								<option value="casa">Casa Central</option>
								<option value="Sucursal">Sucursal</option>
							</select>
						</div>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label>Cumpleaños</label>
							<input type="date"
							name="birthday"
							placeholder="Cumpleaños" class="form-control">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="">Talle</label>
							<select name="size" class="form-control">
								<option value="">Seleccionar</option>
								<option value="xs">XS</option>
								<option value="s">S</option>
								<option value="m">M</option>
								<option value="l">L</option>
								<option value="xl">XL</option>
							</select>
						</div>
					</div>

					<div class="col-md-3">
						<div class="form-group">
							<label for="">Estado Civil</label>
							<select name="civil_status" class="form-control">
								<option value="">Seleccionar</option>
								<option value="soltero">Soltero/a</option>
								<option value="casado">Casado/a</option>
								<option value="viudo">Viudo/a</option>
							</select>
						</div>
					</div>

					<div class="col-md-3">
						<div class="form-group">
							<label for="">Aniversario</label>
							<input type="date" name="aniversario" class="form-control">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label for="">Hijos/as</label>
							<input type="number" name="childrens" class="form-control" placeholder="Ingrese cantidad">
						</div>
					</div>

					<div class="col-md-3">
						<div class="form-group">
							<label for="">Deporte</label>
							<input type="text" class="form-control" placeholder="Ingrese deporte" name="sports">
						</div>
					</div>

					<div class="col-md-3">
						<div class="form-group">
							<label for="">Hobby</label>
							<input type="text" name="hobby" class="form-control" placeholder="Ingrese su Hobby">
						</div>
					</div>

					<div class="col-md-3">
						<div class="form-group">
							<label for="">Equipo</label>
							<input type="text" name="team" class="form-control" placeholder="Ingrese su equipo">
						</div>
					</div>
				</div>

				<div class="form-group">
					<button class="btn btn-success pull-right" type="submit">Guardar</button>
				</div>
			</form>
		</div>
	</div>
</section>
<!-- /.content -->
@stop