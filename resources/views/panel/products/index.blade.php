@extends('panel.layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Productos
	</h1>
</section>

<!-- Main content -->
<section class="content">
	<div class="box">
		<div class="box-header">
			<div class="box-title" style="display: block;">Listado de productos
				<a href="/panel/products/create" class="pull-right btn-xs btn btn-info"><i class="fa fa-plus-circle"></i> Agregar</a>
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
						<th>Puntos</th>
					</tr>
				</thead>

				<tbody>
					@foreach($products as $product)
					<tr>
						<td>{{$product->name}}</td>
						<td>{{$product->points}}</td>
						<td>
							<div class="btn-group">
								<a href="/panel/products/{{$product->id}}/edit" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
								<a href="/panel/products/{{$product->id}}/delete" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
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