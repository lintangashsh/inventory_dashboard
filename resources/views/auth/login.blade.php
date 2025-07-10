<x-guest-layout>
    <form method="POST" action="{{ route('login.post') }}">
        @csrf

        <h2 class="text-2xl font-bold mb-4 text-center">Masuk ke Akun mu</h2>

        <input name="email" type="email" placeholder="Email" class="w-full mb-3 p-2 border rounded" required>
        <input name="password" type="password" placeholder="Password" class="w-full mb-3 p-2 border rounded" required>

        <button class="w-full bg-navy text-white p-2 rounded hover:bg-ocean transition-all">Masuk</button>

        <p class="text-center mt-4 text-sm">Belum punya akun? <a href="{{ route('register') }}"
                class="text-blue-500">Daftar akun di sini!</a></p>
        <p class="text-center mt-2 text-sm">&copy; {{ now()->year }} Inventory Dashboard</p>
        <p class="text-center mt-2 text-sm">
            Made by M Lintang A W-2424370158
        </p>
    </form>
</x-guest-layout>