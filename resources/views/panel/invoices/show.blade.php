@extends('panel.layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Factura #{{$invoice->invoice_number}}
	</h1>
</section>

<!-- Main content -->
<section class="content">
	<div class="box">
		<div class="box-header">
			<div class="box-title" style="display: block;">Listado de facturas
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
						<th>CUIT</th>
						<th>Cliente</th>
						<th>Puntos</th>
						<th>Fecha</th>
						<th>Imagen</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td>{{$invoice->cuit}}</td>
						<td>{{$invoice->user->first_name}}{{$invoice->user->last_name}}</td>
						<td>{{$invoice->user->points}}</td>
						<td>{{Carbon\Carbon::parse($invoice->date)->setTimezone('America/Argentina/Buenos_Aires')->format('d-m-Y h:m:i')}}</td>
						<td>
							@if($invoice->invoice_image)
								<a href="{{asset($invoice->invoice_image)}}" target="_blank" class="btn btn-xs btn-info"><i class="fa fa-file-o"></i></a>
							@endif
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

	<div class="box">
		<div class="box-header">
			<div class="box-title" style="display: block;">Productos
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
						<th>Cantidad</th>
						<th>Nombre</th>
						<th>Unidad</th>
						<th>Points</th>
					</tr>
				</thead>

				<tbody>
					@foreach($invoice->products as $product)
						<tr>
							<td>{{$product->pivot->quanty}}</td>
							<td>{{$product->name}}</td>
							<td>{{$product->unit}}</td>
							<td>{{$product->points}}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</section>
<!-- /.content -->
@stop