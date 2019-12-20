{{-- <div class="form-group">
	<form>
		<label for="name" >nombre del producto</label>
		<input type="text" name="name" class="form-control" value="{{ $product->name }}">
	</form>
</div>
 --}}
<div class="form-group">
	{{ form::label('name','Nombre del producto') }}
	{{ form::text('name',null,['class'=>'form-control']) }}
</div>
<div class="form-group">
	{{ form::label('description','descripcion del producto') }}
	{{ form::text('description',null,['class'=>'form-control']) }}
</div>
<div class="form-group">
	{{ form::submit('Guardar',['class'=>'btn btn-sm btn-primary']) }}
</div>