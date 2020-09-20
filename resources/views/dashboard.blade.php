<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
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
                                    <td>{{ $product->precio_unitario }}</td>
                                    <td>{{ $product->precio_total }}</td>
                                    <td>
                                        <a href="#" class="btn btn-danger">Eliminar</a>
                                        <a href="#" class="btn btn-primary">Editar</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</x-app-layout>
