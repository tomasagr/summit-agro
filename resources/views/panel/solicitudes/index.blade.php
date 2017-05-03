@extends('panel.layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Solicitudes de premios
	</h1>
</section>

<!-- Main content -->
<section class="content">
	<div class="box">
		<div class="box-header">
			<div class="box-title" style="display: block;">Listado de solicitudes
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
						<th>Cliente</th>
						<th>Premio</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($solicitudes as $solicitude)
						@if (isset($solicitude->user))
							<tr>
							<td>
								<a href="/panel/users/{{$solicitude->user->id}}/edit">{{$solicitude->user->first_name}} {{$solicitude->user->last_name}}</a>
							</td>
							<td>
								<a href="/panel/awards/{{$solicitude->award->id}}/edit">{{$solicitude->award->name}}</a>
							</td>
							<td>
								@if ($solicitude->status)
									<a href="/panel/award-solicitudes/{{$solicitude->id}}/toggle"
										 class="btn btn-danger btn-xs">Rechazar</a>
								@else
									<a href="/panel/award-solicitudes/{{$solicitude->id}}/toggle"
									   class="btn btn-success btn-xs">Aceptar</a>
								@endif
							</td>
						</tr>
						@endif 
					@endforeach
				</tbody>
			</table>
		</div>
		{{$solicitudes->render()}}
	</div>
</section>
<!-- /.content -->
@stop