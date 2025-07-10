@extends('layout')

@section('content')
    <div class="max-w-7xl mx-auto">
        <div class="bg-white shadow-md rounded p-6">
            <h2 class="text-2xl font-bold text-navy mb-4">📊 Admin Dashboard</h2>
            <p class="text-muted mb-6">
                Selamat datang kembali, <strong>{{ Auth::user()->name }}</strong>! 🎉
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-ocean text-white rounded-lg shadow p-4">
                    <h3 class="text-lg font-semibold">Total Produk</h3>
                    <p class="text-3xl mt-2"> {{$totalProducts}} </p>
                </div>

                <div class="bg-ocean text-white rounded-lg shadow p-4">
                    <h3 class="text-lg font-semibold">User Terdaftar</h3>
                    <p class="text-3xl mt-2"> {{$totalUsers}} </p>
                </div>
            </div>

            <div class="mt-8">
                <a href="{{ route('admin.products.index') }}"
                    class="bg-green-600 hover:bg-green-800 text-white px-4 py-2 rounded shadow transition inline-block duration-300">
                    ➕ Kelola Produk
                </a>
            </div>
        </div>
    </div>
@endsection