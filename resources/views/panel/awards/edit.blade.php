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
			<form action="/panel/awards/{{$award->id}}" method="POST" class="cleafix" enctype="multipart/form-data">
				{{method_field('PUT')}}
				{{csrf_field()}}
				<div class="row">
					<div class="col-md-6">
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

					<div class="col-md-6">
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
							<input type="text" value="{{$award->stock}}" name="stock" placeholder="Ingrese cantidad" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Nivel*</label>
							<select name="level_id" class="form-control">
								<option value="">Seleccionar</option>
								@foreach($levels as $level)
									<option @if($award->level->id == $level->id) {{'selected'}} @endif value="{{$level->id}}">{{$level->name}}</option>
								@endforeach
							</select>
						</div>
					</div>
					@if ($award->image == '')
						<div class="col-md-6">
							<div class="form-group">
								<label>Foto*</label>
								<input type="file" name="image" class="form-control">
							</div>
						</div>
					@endif
				</div>
				@if ($award->image != '')
					<div class="row">
						<div class="col-md-6" style="display: flex;  align-items: flex-end;">
							<div class="col-md-3">
								<img src="{{ asset($award->image) }}" style="width: 100%;">
							</div>
							<div class="col-md-6">
								<div class="form-group" style="margin-bottom: 0">
										<button  data-delete="{{$award->id}}" class="btn btn-danger" type="button"><i class="fa fa-trash"></i> Eliminar</button>
								</div>
							</div>
						</div>
					</div>
				@endif
				<div class="form-group">
					<button class="btn btn-success pull-right" type="submit">Guardar</button>
				</div>
			</form>
		</div>
	</div>
</section>
<!-- /.content -->
@stop