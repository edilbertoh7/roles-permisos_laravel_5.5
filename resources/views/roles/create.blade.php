@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"> Role </div>

				<div class="panel-body">
					{!! form::open(['route'=>'roles.store']) !!}
					@include('roles.partials.form')
					{!! form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection