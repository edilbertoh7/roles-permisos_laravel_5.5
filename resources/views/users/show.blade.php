@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"> Usuarios </div>

				<div class="panel-body">
					<p><strong>Nombre   </strong>{{ $user->name }}</p>
					<p><strong>email   </strong>{{ $user->email }}</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection