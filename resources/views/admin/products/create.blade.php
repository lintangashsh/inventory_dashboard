@extends('layout')

@section('content')
    <div class="min-h-screen bg-cloud p-8">
        <div class="flex justify-between items-center mb-6">
            <div class="text-3xl font-bold text-navy">➕ Add New Product</div>
            <a href="{{ route('admin.products.index') }}"
                class="bg-muted text-white px-4 py-2 rounded hover:bg-navy transition-all">
                ⬅️ Back to List
            </a>
        </div>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li class="text-sm">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.products.store') }}" method="POST"
            class="bg-white p-6 rounded shadow-md max-w-xl mx-auto">
            @csrf
            <div class="mb-4">
                <label class="block text-navy font-semibold mb-1">Product Name</label>
                <input type="text" name="name" value="{{ old('name') }}"
                    class="w-full px-4 py-2 border border-pale rounded focus:outline-none focus:ring focus:border-ocean"
                    placeholder="Enter product name">
            </div>

            <div class="mb-4">
                <label class="block text-navy font-semibold mb-1">Product Detail</label>
                <textarea name="detail" rows="4"
                    class="w-full px-4 py-2 border border-pale rounded focus:outline-none focus:ring focus:border-ocean"
                    placeholder="Enter product detail">{{ old('detail') }}</textarea>
            </div>

            <div class="text-right">
                <button type="submit" class="bg-ocean text-white px-6 py-2 rounded hover:bg-navy transition-all">
                    Save Product 💾
                </button>
            </div>
        </form>
    </div>
@endsection