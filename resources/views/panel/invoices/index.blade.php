@extends('panel.layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Facturas Cargadas
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
						<th>Nº</th>
						<th>CUIT</th>
						<th>Cliente</th>
						<th>Puntos</th>
						<th>Estado</th>
						<th>Acciones</th>
					</tr>
				</thead>

				<tbody>
					@foreach($invoices as $invoice)
					<tbody>
						<tr>
							<th>{{$invoice->invoice_number}}</th>
							<th>{{$invoice->cuit}}</th>
							<th>{{$invoice->user->first_name}} {{$invoice->user->last_name}}</th>
							<th>{{$invoice->points}}</th>
							<th>
								<div class="btn-group">
                  <button type="button"
                  	class="btn btn-xs btn-@if(!$invoice->status){{'info'}}
                  				@elseif($invoice->status == 'Aceptada'){{'success'}}
                  				@elseif($invoice->status == 'Rechazada'){{'danger'}}
                  				@endif">
                  	@if (!$invoice->status)
                  		A revisar
                  	@else
                  		{{$invoice->status}}
                  	@endif
                  </button>
                  <button type="button"
                  				class="btn btn-@if(!$invoice->status){{'info'}}
                  				@elseif($invoice->status == 'Aceptada'){{'success'}}
                  				@elseif($invoice->status == 'Rechazada'){{'danger'}}
                  				@endif btn-xs dropdown-toggle"
                  				data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    @if($invoice->status != 'Rechazada')
                    	<li><a href="/panel/invoices/{{$invoice->id}}/status?q=Rechazada">Rechazar</a></li>
                    @endif
                    @if($invoice->status != 'Aceptada')
                    	<li><a href="/panel/invoices/{{$invoice->id}}/status?q=Aceptada">Aceptar</a></li>
                    @endif
                  </ul>
                </div>
							</th>
							<th><a href="/panel/invoices/{{$invoice->id}}" class="btn btn-xs btn-info"><i class="fa fa-eye"></i></a></th>
						</tr>
					</tbody>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	{{$invoices->render()}}
</section>
<!-- /.content -->
@stop