@extends('panel.layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Niveles
	</h1>
</section>

<!-- Main content -->
<section class="content">
	<div class="box">
		<div class="box-header">
			<div class="box-title" style="display: block;">Configuración de niveles
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
						<th>Nivel</th>
						<th>Puntos</th>
						<th></th>
					</tr>
				</thead>

				<tbody>
					@foreach($levels as $level)
					<form action="/panel/levels/{{$level->id}}" name="form-{{$level->id}}" method="post">
					{{method_field('put')}}
					{{csrf_field()}}
						<tr>
							<td>{{$level->name}}</td>
							<td><input type="number" name="points" required value="{{$level->points}}" class="form-control"></td>
							<td><button class="btn btn-success" type="submit">Guardar</button></td>
						</tr>
					</form>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</section>
<!-- /.content -->
@stop