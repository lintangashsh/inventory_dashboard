@extends('layout')

@section('content')
    <div class="max-w-2xl mx-auto py-10 px-6 bg-white rounded shadow mt-10">
        <h2 class="text-2xl font-bold mb-6 text-navy">👁️ Product Detail</h2>

        <div class="mb-4">
            <h3 class="text-lg font-semibold text-navy">Name:</h3>
            <p class="text-gray-800">{{ $product->name }}</p>
        </div>

        <div class="mb-4">
            <h3 class="text-lg font-semibold text-navy">Detail:</h3>
            <p class="text-gray-800">{{ $product->detail }}</p>
        </div>

        <a href="{{ url()->previous() }}"
            class="bg-cloud text-navy px-4 py-2 rounded hover:bg-sky transition-all inline-block">
            ← Back
        </a>
    </div>
@endsection