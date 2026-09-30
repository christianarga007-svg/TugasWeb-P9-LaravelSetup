<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Tugas 9</title>
    <!-- Bonus: Styling menggunakan Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 min-h-screen flex items-center justify-center font-sans">
    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md text-center">
        <!-- Syarat 5: Menampilkan data dinamis dari Route -->
        <h1 class="text-3xl font-extrabold text-slate-800 mb-4">Halo, {{ $nama }}! 👋</h1>
        <p class="text-slate-600 mb-6">Selamat datang di aplikasi Laravel pertamamu. Berikut adalah rekam jejak belajarmu:</p>

        <div class="bg-indigo-50 rounded-lg p-4 mb-6">
            <h3 class="font-bold text-indigo-800 text-left mb-2">Materi yang Dikuasai:</h3>
            <ul class="list-disc list-inside text-left text-indigo-700">
                <!-- Syarat 5: Looping data array menggunakan Blade directive -->
                @foreach ($courses as $c)
                    <li>{{ $c }}</li>
                @endforeach
            </ul>
        </div>

        <!-- Navigasi ke route lain -->
        <div class="flex justify-center space-x-6 border-t pt-4">
            <a href="/about" class="text-indigo-600 font-semibold hover:text-indigo-800 transition">Tentang Saya</a>
            <a href="/contact" class="text-indigo-600 font-semibold hover:text-indigo-800 transition">Kontak</a>
        </div>
    </div>
</body>
</html>