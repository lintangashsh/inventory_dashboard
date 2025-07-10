@extends('layout')

@section('content')
    <div class="min-h-screen bg-cloud p-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-navy">📦 Inventory Product (Admin)</h1>
            <a href="{{ route('admin.dashboard') }}"
                class="bg-muted text-white px-4 py-2 rounded hover:bg-navy transition-all">
                🏠 Kembali ke Dashboard
            </a>
        </div>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="mb-6 text-right">
            <a href="{{ route('admin.products.create') }}"
                class="bg-ocean text-white px-5 py-2 rounded hover:bg-navy transition-all">
                + Tambah Produk
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-pale rounded shadow">
                <thead class="bg-ocean text-white">
                    <tr>
                        <th class="px-4 py-2">No</th>
                        <th class="px-4 py-2">Nama Produk</th>
                        <th class="px-4 py-2">Detail Produk</th>
                        <th class="px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $product)
                        <tr class="border-t border-pale hover:bg-sky">
                            <td class="px-4 py-2">{{ ++$i }}</td>
                            <td class="px-4 py-2">{{ $product->name }}</td>
                            <td class="px-4 py-2">{{ $product->detail }}</td>
                            <td class="px-4 py-2 flex gap-2 flex-wrap">
                                <a href="{{ route('admin.products.show', $product->id) }}"
                                    class="bg-cloud text-navy px-3 py-1 rounded hover:bg-pale transition-all text-sm">
                                    👁️ Show
                                </a>
                                <a href="{{ route('admin.products.edit', $product->id) }}"
                                    class="bg-navy text-white px-3 py-1 rounded hover:bg-ocean transition-all text-sm">
                                    ✏️ Edit
                                </a>
                                <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this product?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 transition-all text-sm">
                                        🗑️ Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted py-4">No products found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-6">
            {!! $products->links() !!}
        </div>
    </div>
@endsection