{{-- <div class="form-group">
	<form>
		<label for="name" >nombre del producto</label>
		<input type="text" name="name" class="form-control" value="{{ $product->name }}">
	</form>
</div>
 --}}
<div class="form-group">
	{{ form::label('name','Nombre') }}
	{{ form::text('name',null,['class'=>'form-control']) }}
</div>
<hr>
<h3>Listado de roles</h3>
<div class="form-group">
	<ul class="list-unstyled">
		@foreach ($roles as $role)
			<li>
				<label>
					{{ form::checkbox('roles[]',$role->id,null) }}
					{{ $role->name }}
					<em>({{ $role->description ?: 'sin descripción' }})</em>
				</label>
			</li>
		@endforeach
		
	</ul>
</div>

<div class="form-group">
	{{ form::submit('Guardar',['class'=>'btn btn-sm btn-primary']) }}
</div>