@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"> Productos </div>

				<div class="panel-body">
					<p><strong>Nombre</strong>{{ $product->name }}</p>
					<p><strong>Descripción</strong>{{ $product->description }}</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection