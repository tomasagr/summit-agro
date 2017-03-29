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
			<div class="box-title" style="display: block;"> &nbsp; Editar Usuario
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
			<form action="/panel/users/{{$user->id}}" method="POST" class="cleafix">
				{{method_field('PUT')}}
				{{csrf_field()}}
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Nombre*</label>
							<input type="text"
								autofocus
								value="{{$user->first_name}}"
								name="first_name"
								placeholder="Carlos"
								class="form-control">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label>Apellido*</label>
							<input type="text" name="last_name" 
								value="{{$user->last_name}}" 
								placeholder="Lopez" class="form-control">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>DNI*</label>
							<input type="text" 
							value="{{$user->dni}}" 
							name="dni" placeholder="34123321" class="form-control">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label >CUIT</label>
							<input type="text"  name="cuit"
							value="{{$user->cuit}}" 
							 placeholder="12-123123123-2" class="form-control">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label>Telefono*</label>
							<input type="text" name="phone" 
								value="{{$user->phone}}"
								placeholder="15-1233-1234" class="form-control">
						</div>
					</div>

					<div class="col-md-4">
						<div class="form-group">
							<label>Dirección*</label>
							<input type="text" name="address" 
								value="{{$user->address}}" 
								placeholder="Av. Mitre 1235, Congreso" class="form-control">
						</div>
					</div>

					<div class="col-md-4">
						<div class="form-group">
							<label>Email*</label>
							<input type="text" name="email" 
								value="{{$user->email}}" 
								placeholder="carlos@lopez.com" class="form-control">
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
								<option value="admin" @if($user->type == 'admin'){{'selected'}}@endif>Administrador</option>
								<option value="user" @if($user->type == 'user'){{'selected'}}@endif>Usuario</option>
							</select>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Agronomia*</label>
							<input type="text"  name="agronomy"
							value="{{$user->agronomy}}"
							placeholder="Agronomia" class="form-control">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="">Tipo Agronomia*</label>
							<select name="agronomy_type" class="form-control">
								<option value="">Seleccionar</option>
								<option value="casa" @if($user->agronomy_type == 'casa'){{'selected'}}@endif>Casa Central</option>
								<option value="sucursal" @if($user->agronomy_type == 'sucursal'){{'selected'}}@endif>Sucursal</option>
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
							value="{{$user->birthday}}"
							placeholder="Cumpleaños" class="form-control">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="">Talle</label>
							<select name="size" class="form-control">
								<option value="">Seleccionar</option>
								<option value="xs" @if($user->size == 'xs'){{'selected'}}@endif>XS</option>
								<option value="s" @if($user->size == 's'){{'selected'}}@endif>S</option>
								<option value="m" @if($user->size == 'm'){{'selected'}}@endif>M</option>
								<option value="l" @if($user->size == 'l'){{'selected'}}@endif>L</option>
								<option value="xl" @if($user->size == 'xl'){{'selected'}}@endif>XL</option>
							</select>
						</div>
					</div>

					<div class="col-md-3">
						<div class="form-group">
							<label for="">Estado Civil</label>
							<select name="civil_status" class="form-control">
								<option value="" @if($user->civil_status == ''){{'selected'}}@endif>Seleccionar</option>
								<option value="soltero" @if($user->civil_status == 'soltero'){{'selected'}}@endif>Soltero/a</option>
								<option value="casado" @if($user->civil_status == 'casado'){{'selected'}}@endif>Casado/a</option>
								<option value="viudo" @if($user->civil_status == 'viudo'){{'selected'}}@endif>Viudo/a</option>
							</select>
						</div>
					</div>

					<div class="col-md-3">
						<div class="form-group">
							<label>Aniversario</label>
							<input type="date" name="aniversario" class="form-control" value="{{$user->aniversario}}">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label for="">Hijos/as</label>
							<input type="number" value="{{$user->childrens}}" name="childrens" class="form-control" placeholder="Ingrese cantidad">
						</div>
					</div>

					<div class="col-md-3">
						<div class="form-group">
							<label for="">Deporte</label>
							<input type="text" class="form-control" value="{{$user->sports}}" placeholder="Ingrese deporte" name="sports">
						</div>
					</div>

					<div class="col-md-3">
						<div class="form-group">
							<label for="">Hobby</label>
							<input type="text" name="hobby" class="form-control" value="{{$user->hobby}}"  placeholder="Ingrese su Hobby">
						</div>
					</div>

					<div class="col-md-3">
						<div class="form-group">
							<label for="">Equipo</label>
							<input type="text" name="team" class="form-control" value="{{$user->team}}" placeholder="Ingrese su equipo">
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