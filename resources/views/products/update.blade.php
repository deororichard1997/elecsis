<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(' Actualizar producto') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
				<div class="container">
					<form method="POST" action="{{ route('products.update', $product->id) }}" class="form-group" >
						@method('PATCH')
						@csrf
						<div class="col-6">
							<label>Referencia:</label>
							<input required type="number" class="form-control" value="{{ $product->referencia }}" name="referencia">
							<label>Producto:</label>
							<input required type="text" class="form-control" value="{{ $product->producto}}" name="producto">
							<label>Cantidad:</label>
							<input required type="number" class="form-control" value="{{ $product->cantidad }}" name="cantidad">
							<label>Precio Unitario:</label>
							<input required type="number" class="form-control" value="{{ $product->precio_unitario }}" name="precio_unitario">
							<label>Precio Total</label>
							<input required type="number" class="form-control" value="{{ $product->precio_total }}" name="precio_total">
							<hr>
							<input type="submit" class="btn btn-primary" name="Agregar" value="Actualizar">
							<input type="button" class="btn btn-secondary" value="Volver" onClick="history.go(-1);">
						</div>
					</form>					
				</div>
			</div>
		</div>
	</div>
</x-app-layout>