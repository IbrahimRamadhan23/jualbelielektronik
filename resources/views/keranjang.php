<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav class="bg-gray-700 border-gray-200 dark:bg-gray-900">
        <div class="flex flex-row">
         <div class="pl-5 sm:flex sm:items-center w-2/6 ">
        <img src="logo.png" class="h-12 my-5 mt-8" alt="Logo" />
        <p class=" text-amber-300 text-3xl ml-5">KERANJANG
        </p>
        </div>
    </nav>
    <div class=" mx-52 p-4 pt-6 md:p-6 lg:p-12">

        <div class=" mt-4 mx-4 pl-15">
            <div class="w-10/11">
                <div class="flex flex-row bg-gray-100 rounded p-4">
                    <img src="kulkas.png" alt="Product Image" class="h-32 object-cover rounded-t">
                    <div class="pl-5 flex flex-col w-96">
                        <h3 class="text-lg font-bold">Product Name 1</h3>
                        <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, reiciendis. Porro voluptate soluta nisiluptas expedita distinctio!</p>
                    </div>
                    <div class="pl-60 mt-11">
                        <p class="text-lg pl-3 font-bold">Rp. 100,000</p>
                        <div class="space-x-4 flex mb-5 pb-5 ">
                            <button type ="button" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 px-4 rounded">-</button>
                            <span class="text-lg font-bold">1</span>
                            <button class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 px-4 rounded">+</button>
                            <button type="button" class=" font-bold bg-yellow-400 hover:bg-gray-300 px-4 py-1 rounded text-white-800">X</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-4 mx-4">
            <div class="w-10/11">
                <div class="flex flex-row bg-gray-100 rounded p-4">
                    <img src="mesin cuci.png" alt="Product Image" class="h-32 object-cover rounded-t">
                    <div class="pl-5 flex flex-col w-96">
                        <h3 class="text-lg font-bold">Product Name 1</h3>
                        <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, reiciendis. Porro voluptate soluta nisiluptas expedita distinctio!</p>
                    </div>
                    <div class="pl-60 mt-11">
                        <p class="text-lg pl-3 font-bold">Rp. 100,000</p>
                        <div class="space-x-4 flex mb-5 pb-5 ">
                            <button type ="button" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 px-4 rounded">-</button>
                            <span class="text-lg font-bold">1</span>
                            <button class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 px-4 rounded">+</button>
                            <button type="button" class=" font-bold bg-yellow-400 hover:bg-gray-300 px-4 py-1 rounded text-white-800">X</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-4 mx-4">
            <div class="w-10/11">
                <div class="flex flex-row bg-gray-100 rounded p-4">
                    <img src="tv.png" alt="Product Image" class="h-32 object-cover rounded-t">
                    <div class="pl-5 flex flex-col w-96">
                        <h3 class="text-lg font-bold">Product Name 1</h3>
                        <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, reiciendis. Porro voluptate soluta nisiluptas expedita distinctio!</p>
                    </div>
                    <div class="pl-60 mt-11">
                        <p class="text-lg pl-3 font-bold">Rp. 100,000</p>
                        <div class="space-x-4 flex mb-5 pb-5 ">
                            <button type ="button" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 px-4 rounded">-</button>
                            <span class="text-lg font-bold">1</span>
                            <button class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 px-4 rounded">+</button>
                            <button type="button" class=" font-bold bg-yellow-400 hover:bg-gray-300 px-4 py-1 rounded text-white-800">X</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <div class="container mx-auto p-4 pt-6 md:p-6 ">
    <div class="bg-gray-100 pl-11 rounded p-4 mt-4">
            <h3 class="text-lg font-bold">Cart Summary</h3>
            <p class="text-gray-600">Subtotal: Rp. 600,000</p>
            <p class="text-gray-600">Tax (10%): Rp. 60,000</p>
            <p class="text-lg font-bold">Total: Rp. 660,000</p>
            <div class="relative">
                <button class="absolute bottom-0 right-0 mr-10 mb-7 bg-orange-500 flex hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">Checkout</button>
            </div>
    </div>
    </div>
</body>
</html>