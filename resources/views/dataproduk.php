<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>  
</head>
<body>
    <nav class="bg-gray-700 border-gray-200 dark:bg-gray-900">
        <div class="flex flex-row">
            <div class="pl-5 sm:flex sm:items-center w-2/6 ">
              <img src="logo.png" class="h-12 my-5 mt-8" alt="Logo" />
              <p class=" text-amber-300 text-3xl ml-5">PESANAN</p>
            <div class="absolute top-5 right-7 h-50  w-50  ">
            <button type="button" class="absolute right-7 h-12 w-12 text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300     dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="true" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
              <span class="sr-only">Open user menu</span>
              <img class="w-12 h-12 rounded-full" src="user.png" alt="user">
            </button>
        </div>
    </nav>
    <!-- Main Content -->
    <div class="flex-1 p-6">
        <!-- Header -->
        <header class="mb-6">
            <h1 class="text-3xl font-bold">Manajemen Produk</h1>
        </header>

        <!-- Product Table -->
        <section class="bg-white p-6 rounded shadow-md">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-2xl font-bold">Daftar Produk</h2>
                <button class="bg-yellow-400 text-black px-4 py-2 rounded hover:bg-blue-700">Tambah Produk</button>
            </div>
            <table class="w-full table-auto">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="p-2">Nama Produk</th>
                        <th class="p-2">Kategori</th>
                        <th class="p-2">Harga</th>
                        <th class="p-2">Stok</th>
                        <th class="p-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border p-2">Produk 1</td>
                        <td class="border p-2">Kategori 1</td>
                        <td class="border p-2">Rp100.000</td>
                        <td class="border p-2">50</td>
                        <td class="border p-2">
                            <button class="bg-green-600 text-white px-2 py-1 rounded hover:bg-green-700">Edit</button>
                            <button class="bg-red-600 text-white px-2 py-1 rounded hover:bg-red-700">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="border p-2">Produk 2</td>
                        <td class="border p-2">Kategori 2</td>
                        <td class="border p-2">Rp200.000</td>
                        <td class="border p-2">30</td>
                        <td class="border p-2">
                            <button class="bg-green-600 text-white px-2 py-1 rounded hover:bg-green-700">Edit</button>
                            <button class="bg-red-600 text-white px-2 py-1 rounded hover:bg-red-700">Hapus</button>
                        </td>
                    </tr>
                    <!-- Tambahkan lebih banyak produk di sini -->
                </tbody>
            </table>
        </section>
    </div>

</body>
</html>
