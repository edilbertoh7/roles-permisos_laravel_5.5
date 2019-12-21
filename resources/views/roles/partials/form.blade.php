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
<div class="form-group">
	{{ form::label('slug','URL Amigable') }}
	{{ form::text('slug',null,['class'=>'form-control']) }}
</div>
<div class="form-group">
	{{ form::label('description','descripcion') }}
	{{ form::textarea('description',null,['class'=>'form-control']) }}
</div>
<hr>
<h3>Permiso especial</h3>
<div>
	<label>{{ form::radio('special','all-access') }} Acceso Total</label>
	<label>{{ form::radio('special','all-access') }} Ningun Acceso</label>
</div>
<hr>

<h3>Listado de permisos</h3>
<div class="form-group">
	<ul class="list-unstyled">
		@foreach ($permissions as $permission)
			<li>
				<label>
					{{ form::checkbox('permissions[]',$permission->id,null) }}
					{{ $permission->name }}
					<em>({{ $permission->description ?: 'sin descripción' }})</em>
				</label>
			</li>
		@endforeach
		
	</ul>
</div>

<div class="form-group">
	{{ form::submit('Guardar',['class'=>'btn btn-sm btn-primary']) }}
</div>