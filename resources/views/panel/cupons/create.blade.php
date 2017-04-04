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
			<div class="box-title" style="display: block;"> &nbsp; Crear Cupon
				<a href="/panel/cupons" class="pull-left btn-xs btn btn-default"><i class="fa fa-arrow-left"></i></a>
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
			<form action="/panel/cupons" method="POST" class="cleafix">
				{{csrf_field()}}
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Codigo*</label>
							<input type="text"
							autofocus
							name="code"
							style="text-transform:uppercase"
							placeholder="Ingrese codigo"
							class="form-control">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label>Puntos*</label>
							<input type="text" name="points" placeholder="Ingrese cantidad" class="form-control">
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