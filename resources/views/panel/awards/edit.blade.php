@extends('panel.layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Premios
	</h1>
</section>

<!-- Main content -->
<section class="content">
	<div class="box">
		<div class="box-header">
			<div class="box-title" style="display: block;"> &nbsp; Editar Premio
				<a href="/panel/awards" class="pull-left btn-xs btn btn-default"><i class="fa fa-arrow-left"></i></a>
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
			<form action="/panel/awards/{{$award->id}}" method="POST" class="cleafix">
				{{method_field('PUT')}}
				{{csrf_field()}}
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label>Nombre*</label>
							<input type="text"
							autofocus
							value="{{$award->name}}"
							name="name"
							placeholder="Ingrese nombre"
							class="form-control">
						</div>
					</div>

					<div class="col-md-4">
						<div class="form-group">
							<label>Puntos*</label>
							<input type="text" value="{{$award->points}}" name="points" placeholder="Ingrese cantidad" class="form-control">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Stock*</label>
							<input type="file" name="image" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Stock*</label>
							<input type="text" value="{{$award->stock}}" name="stock" placeholder="Ingrese cantidad" class="form-control">
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