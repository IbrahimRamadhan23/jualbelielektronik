<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav class="bg-gray-700 border-gray-200 dark:bg-gray-900">
        <div class="flex flex-row">
             <div class="pl-5 sm:flex sm:items-center w-2/6 ">
                <img src="logo.png" class="h-12 my-5 mt-8" alt="Logo" />
                <p class=" text-amber-300 text-3xl ml-5">UBAH PRODUK</p>
            </div>
        </div>
        <div class="absolute top-5 right-7   h-50  w-50  ">
            <button type="button" class="absolute right-7 h-12 w-12 text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="true" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                <span class="sr-only">Open user menu</span>
                <img class="w-12 h-12 rounded-full" src="user.png" alt="user">
            </button>
            <button type="button" class="absolute right-20 h-12 w-12 text-sm  rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                <span class="sr-only">Open user menu</span>
                <img class="w-12 h-12 rounded-full" src="cart.png" alt="user">
            </button>
       </div>
    </nav>
    <div class="max-w-4xl mt-14 mx-auto bg-gray-200 p-8 rounded-lg ">
        <h2 class=" text-2xl font-bold mb-6">Tambah Produk</h2>
        <form class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="flex flex-col">
                <label for="product-name" class="mb-2 font-medium text-gray-700">Nama Produk</label>
                <input type="text" id="product-name" class="p-2 border border-gray-300 rounded-md" placeholder="Masukkan nama produk">
            </div>
            <div class="flex flex-col">
                <label for="product-price" class="mb-2 font-medium text-gray-700">Harga Produk</label>
                <input type="text" id="product-price" class="p-2 border border-gray-300 rounded-md" placeholder="Masukkan harga produk">
            </div>
            <div class="flex flex-col">
                <label for="product-category" class="mb-2 font-medium text-gray-700">Kategori Produk</label>
                <select id="product-category" class="p-2 border border-gray-300 rounded-md">
                    <option value="">Pilih kategori</option>
                    <option value="kategori1">Kategori 1</option>
                    <option value="kategori2">Kategori 2</option>
                    <option value="kategori3">Kategori 3</option>
                </select>
            </div>
            <div class="flex flex-col">
                <label for="product-stock" class="mb-2 font-medium text-gray-700">Gambar Produk</label>
                <input type="file" id="product-stock" class="p-2 border bg-white border-white rounded-md" placeholder="Pilih gambar produk">
            </div>
            <div class="flex flex-col md:col-span-2">
                <label for="product-description" class="mb-2 font-medium text-gray-700">Deskripsi Produk</label>
                <textarea id="product-description" class="p-2 border border-gray-300 rounded-md" rows="4" placeholder="Masukkan deskripsi produk"></textarea>
            </div>
            <div class="md:col-span-2">
                <button type="submit" class="w-full bg-yellow-400 text-black font-bold p-2 rounded-md hover:bg-yellow-300 transition duration-200">SIMPAN</button>
            </div>
        </form>
    </div>
</body>