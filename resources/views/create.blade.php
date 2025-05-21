<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a]">
    <div class="max-w-md mx-auto mt-10 bg-white p-6 rounded shadow">
        <h2 class="text-xl font-bold mb-6">Tambah Barang</h2>
        <form action="{{ route('harga.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block mb-1" for="nama">Nama</label>
                <input type="text" name="nama" id="nama" value="{{ old('nama') }}"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-400" required>
                @error('nama')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block mb-1" for="kode">Kode</label>
                <input type="text" name="kode" id="kode" value="{{ old('kode') }}"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-400" required>
                @error('kode')
                    <div class="text-red-500 text-sm mt-1">{{ "Kode ini telah digunakan, mohon gunakan kode lain" }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block mb-1" for="harga">Harga</label>
                <input type="text" name="harga" id="harga" value="{{ old('harga') }}"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-400" required>
                @error('harga')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block mb-1" for="deskripsi">Deskripsi</label>
                <input type="text" name="deskripsi" id="deskripsi" value="{{ old('deskripsi') }}"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-400" required>
                @error('deskripsi')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="flex space-x-2">
                <button type="submit"
                    class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Simpan</button>
                <a href="{{ route('harga.index') }}"
                    class="bg-gray-300 text-gray-700 px-4 py-2 rounded hover:bg-gray-400 transition">Kembali</a>
            </div>
        </form>
    </div>
</body>
</html>
