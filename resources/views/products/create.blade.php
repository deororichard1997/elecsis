<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear producto') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
				<div class="container">
					<form method="POST" action="{{ route('products.store') }}" class="form-group">
						@csrf
						<div class="col-6">
							<label>Referencia:</label>
							<input type="number" class="form-control" name="referencia" required>
							<label>Producto:</label>
							<input type="text" class="form-control" name="producto" required>
							<label>Cantidad:</label>
							<input type="number" class="form-control" name="cantidad" required>
							<label>Precio Unitario:</label>
							<input type="number" class="form-control" name="precio_unitario" required>
							{{-- <label>Precio Total</label>
							<input type="number" class="form-control" name="precio_total" required> --}}
							<hr>
							<input value="Crear" type="submit" class="btn btn-primary" name="Agregar">
							<input type="button" class="btn btn-secondary" value="Volver" onClick="history.go(-1);">
						</div>
					</form>					
				</div>
			</div>
		</div>
	</div>
</x-app-layout>