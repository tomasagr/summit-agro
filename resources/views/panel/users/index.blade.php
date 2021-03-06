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
			<div class="box-title" style="display: block;">Listado de usuarios
				<a href="/panel/users/create" class="pull-right btn-xs btn btn-info"><i class="fa fa-plus-circle"></i> Agregar</a>
			</div>
		</div>
		<div class="box-body">
			@if (session('status'))
			<div class="alert alert-success">
				{{ session('status') }}
			</div>
			@endif
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Telefono</th>
						<th>Agronomia</th>
						<th>Puntos</th>
						<th>Estado</th>
						<th>Acciones</th>
					</tr>
				</thead>

				<tbody>
					@foreach($users as $user)
					<tr>
						<td>{{$user->first_name}} {{$user->last_name}}</td>
						<td>{{$user->phone}}</td>
						<td>{{$user->agronomy}}</td>
						<td>{{$user->points}}</td>
						<td><a href="/panel/users/{{$user->id}}/toggle" class="btn btn-xs btn-{{$user->status ? 'success' : 'danger'}}">{{$user->status ? 'Activado' : 'Desactivado'}}</a></td>
						<td>
							<div class="btn-group">
								<a href="/panel/users/{{$user->id}}/edit" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
								<form action="/panel/users/{{$user->id}}/delete" method="POST">
									{{csrf_field()}}
									<input name="_method" type="hidden" value="DELETE">
									<button class="btn btn-danger btn-xs" type="submit" onclick="return confirm('Esta Seguro?')">
										<i class="glyphicon glyphicon-trash"></i>
									</button>
								</form>
							</div>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</section>
<!-- /.content -->
@stop