<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>  
</head>
<nav class="py-6  flex bg-gray-700 border-gray-200 dark:bg-gray-900 ">
        <div class="pl-8 pb-1 absolute">
            <img class="ps-15 relative"  src="logo.png" alt="logo" width="170">
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
        <form class="flex items-center w-full max-w-lg mx-auto">   
            <div class="relative w-full">
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos, Design Templates..." required />
            </div>
            <button type="submit" class="inline-flex items-center py-2.5 px-3 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>Search
            </button>
        </form>  
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between">
             <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
                <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                </ul>
            </div>
        </div>
    </nav>

<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="md:flex">
                <div class=" p-4">
                    <img src="laptop.png" alt="Produk Image" class="w-30 h-30 ">
                </div>
                <div class="md:w-1/2 p-4">
                    <h2 class="mt-10 text-3xl font-bold text-gray-800">Asus Rog Strix G15 G513RM Ryzen 7 6800 Rtx 3060 6Gb Ram 16Gb 1tb ssd - NON PAKET</h2>
                    <p class="mt-4 text-gray-600">Graphics: NVIDIA GeForce RTX 3060 6GB GDDR6 - ROG Boost up to 1752MHz at 140W (115W + 25W with Dynamic Boost)Processor: AMD Ryzen 7   </p>
                    <div class="mt-4">
                        <span class="text-xl font-bold text-gray-900">Rp 150.000</span>
                    </div>
                    <div class="mt-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="quantity">Jumlah:</label>
                        <input id="quantity" type="number" min="1" value="1" class="w-16 p-2 border border-gray-300 rounded-md">
                    </div>
                    <button class="mt-14 w-48 bg-yellow-400 hover:bg-yellow-300 text-black font-bold py-2 px-4 rounded-full">
                         Keranjang
                    </button>
                    <button class="mt-14 w-48 bg-yellow-400 hover:bg-yellow-300 text-black font-bold py-2 px-4 rounded-full">
                        Beli Sekarang   
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
