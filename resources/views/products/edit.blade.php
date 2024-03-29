@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"> Productos </div>

				<div class="panel-body">
					{!! form::model($product,['route'=>['products.update',$product->id],
					'method'=>'PUT']) !!}
					@include('products.partials.form')
					{!! form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection