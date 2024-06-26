<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan</title>
    <script src="https://cdn.tailwindcss.com"></script>  
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Pesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

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
    <main class="p-6">
        <!-- Order Items -->
        <a href="">
            <section class="bg-white p-6 my-10 rounded shadow-md">
                <div>
                <p class="text-gray-700 pb-4"><strong>Tanggal Pesanan:</strong> 27 Juni 2024</p>
                </div>
                <table class="w-full table-fixed">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="p-2">Produk</th>
                            <th class="p-2">Jumlah</th>
                            <th class="p-2">Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border p-2">
                                <div class="flex flex-row  rounded p-4">
                                    <img src="kulkas.png" alt="Product Image" class="h-32 object-cover rounded-t">
                                    <div class="pl-5 flex flex-col w-96">
                                    <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, reiciendis. Porro voluptate soluta nisiluptas expedita distinctio!</p>
                                    </div>
                                </div>
                            </td>
                            <td class="border p-2">2</td>
                            <td class="border p-2">Rp300.000</td>
                        </tr>
                        <tr>
                            <td class="border p-2">
                                <div class="flex flex-row  rounded p-4">
                                    <img src="laptop.png" alt="Product Image" class="h-32 object-cover rounded-t">
                                    <div class="pl-5 flex flex-col w-96">
                                    <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, reiciendis. Porro voluptate soluta nisiluptas expedita distinctio!</p>
                                    </div>
                                </div>
                            </td>
                            <td class="border p-2">1</td>
                            <td class="border p-2">Rp600.000</td>
                        </tr>
                    </tbody>
                </table>
                <div class="grid grid-cols-4 md:grid-cols-2 gap-4 ">
                    <div>
                        <p class="text-gray-700 pt-4"><strong>Nomor Pesanan:</strong> #123456</p>
                    </div>
                    <div>
                        <p class="text-gray-700 pt-4 right-1"><strong>Total:</strong> Rp1.200.000</p>
                    </div>
                </div>
            </section>
        </a>
        <a href="">
            <section class="bg-white  my-10 p-6 rounded shadow-md">
                <div>
                <p class="text-gray-700 pb-4"><strong>Tanggal Pesanan:</strong> 27 Juni 2024</p>
                </div>
                <table class="w-full table-fixed">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="p-2">Produk</th>
                            <th class="p-2">Jumlah</th>
                            <th class="p-2">Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border p-2">
                                <div class="flex flex-row  rounded p-4">
                                    <img src="kulkas.png" alt="Product Image" class="h-32 object-cover rounded-t">
                                    <div class="pl-5 flex flex-col w-96">
                                    <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, reiciendis. Porro voluptate soluta nisiluptas expedita distinctio!</p>
                                    </div>
                                </div>
                            </td>
                            <td class="border p-2">2</td>
                            <td class="border p-2">Rp300.000</td>
                        </tr>
                        <tr>
                            <td class="border p-2">
                                <div class="flex flex-row  rounded p-4">
                                    <img src="laptop.png" alt="Product Image" class="h-32 object-cover rounded-t">
                                    <div class="pl-5 flex flex-col w-96">
                                    <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, reiciendis. Porro voluptate soluta nisiluptas expedita distinctio!</p>
                                    </div>
                                </div>
                            </td>
                            <td class="border p-2">1</td>
                            <td class="border p-2">Rp600.000</td>
                        </tr>
                    </tbody>
                </table>
                <div class="grid grid-cols-4 md:grid-cols-2 gap-4 ">
                    <div>
                        <p class="text-gray-700 pt-4"><strong>Nomor Pesanan:</strong> #123456</p>
                    </div>
                    <div>
                        <p class="text-gray-700 pt-4 right-1"><strong>Total:</strong> Rp1.200.000</p>
                    </div>
                </div>
            </section>
        </a>
    </main>
</body>
</html>
