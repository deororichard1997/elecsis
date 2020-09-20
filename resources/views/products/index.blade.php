<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de productos') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
				<div class="container">
					<div class="card m-2">
						<table class="table">
							<thead>
								<tr>
									<th>Referencia</th>
									<th>Producto</th>
									<th>Cantidad</th>
									<th>Precio unitario</th>
									<th>Precio total</th>
									<th>Acciones</th>
								</tr>
							</thead>
							<tbody>
								@foreach($products as $product)
									<tr>
										<td>{{ $product->referencia }}</td>
										<td>{{ $product->producto }}</td>
										<td>{{ $product->cantidad }}</td>
										<td>{{ number_format($product->precio_unitario) }}</td>
										<td>{{ number_format($product->precio_total) }}</td>
										<td>
											<div class="row">
											<form method="POST" action="{{ route('products.destroy', $product->id) }}">
												@csrf
												@method('DELETE')
												<button class="btn btn-danger btn-sm mr-2" onclick="return confirm('¿Seguro que deseas eliminar este usuario?')">Eliminar</button>
											</form>
											<a href="{{ route('products.edit', $product->id)}}" class="btn btn-sm btn-primary">
												 Editar
											</a>
											</div>
										</td>
									</tr>
								@endforeach
								<tr>
									<td colspan="4"><strong>Total</strong></td>
									<td><strong>$ {{ number_format($suma) }}</strong></td>
									<td></td>
								</tr>
							</tbody>
						</table>
					<a href="{{ route('products.create') }}" class="btn btn-success btn-sm m-2">Crear producto</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</x-app-layout>