@extends('layout')

@section('content')
    <div class="min-h-screen bg-cloud p-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-navy">📦 Inventory Products</h1>
            @if (auth()->user()->role === 'admin')
                <a href="{{ route('admin.products.create') }}"
                    class="bg-ocean text-white px-4 py-2 rounded hover:bg-navy transition-all">
                    + Add New Product
                </a>
            @else
                <a href="{{ route('products.create') }}"
                    class="bg-ocean text-white px-4 py-2 rounded hover:bg-navy transition-all">
                    + Add Product
                </a>
            @endif
        </div>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto bg-white rounded shadow border border-pale">
            <table class="min-w-full divide-y divide-pale">
                <thead class="bg-ocean text-white">
                    <tr>
                        <th class="px-6 py-3 text-left">No</th>
                        <th class="px-6 py-3 text-left">Name</th>
                        <th class="px-6 py-3 text-left">Details</th>
                        <th class="px-6 py-3 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-pale">
                    @forelse ($products as $product)
                        <tr class="hover:bg-sky">
                            <td class="px-6 py-4">{{ ++$i }}</td>
                            <td class="px-6 py-4">{{ $product->name }}</td>
                            <td class="px-6 py-4">{{ $product->detail }}</td>
                            <td class="px-6 py-4 space-x-2">
                                <a href="{{ auth()->user()->role === 'admin' ? route('admin.products.show', $product) : route('products.show', $product) }}"
                                    class="text-navy hover:underline">👁️ Show</a>

                                @if(auth()->user()->role === 'admin')
                                    <a href="{{ route('admin.products.edit', $product) }}"
                                        class="text-yellow-600 hover:underline">✏️ Edit</a>
                                    <form class="inline" action="{{ route('admin.products.destroy', $product) }}" method="POST"
                                        onsubmit="return confirm('Are you sure?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:underline">🗑️ Delete</button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center py-4 text-muted">No products found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-4">{{ $products->links() }}</div>
    </div>
@endsection