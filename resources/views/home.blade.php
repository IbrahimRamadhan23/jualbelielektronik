<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav class="py-6  flex bg-gray-700 border-gray-200 dark:bg-gray-900 ">
         <div class="pl-8 pb-1 absolute">
            <img class="ps-15 relative"  src="logo.png" alt="logo" width="170">
        </div> 
        <div class="absolute top-5 right-7 h-50  w-50  ">
            <a href="/login">
                <button type="button" class="absolute right-7 h-12 w-12 text-sm bg-yellow-300 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"  id="user-menu-button" aria-expanded="true" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                        <p class="font-bold">LOGIN</p>
                </button>
            </a>
            <a href="/keranjang">
                <button type="button" class="absolute right-20 h-12 w-12 text-sm  rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                        <img class="w-12 h-12 rounded-full" src="cart.png" alt="user">
                </button>
            </a>
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


    <div class="flex justify-center space-x-4  ...">
        <button type="button" class="text-gray-900 bg-white  focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-3 me-3 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700 mt-4 ">
            <svg class="w-3 h-3" aria-hidden="true"  xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18" class="py-2">
                <img src="icon1.png"  alt="" class="w-7 h-7">
            </svg>
        </button>
        <button type="button" class="text-gray-900 bg-white focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-3 me-3 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700 mt-4 ">
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                <img src="icon2.png" alt="" class="w-7 h-7">
            </svg>
        </button>  
        <button type="button" class="text-gray-900 bg-white  focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-3  me-3 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700 mt-4 ">
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                <img src="icon3.png" alt=""class="w-10 h-10">
            </svg>
        </button>
    </div>
    <div class="px-8 py-8">
        <img src="banner2.png" alt="" class="mx-auto w-full h-full">
    </div>
    
    <div class="mx-5 grid grid-cols-3 place-items-center bg-zinc-300 rounded-lg ">   
    <div class="mx-4 px-8 mt-2 py-8   max-w-sm items-center justify-center bg-white border border-gray-200 rounded-lg ">
            <a class= "px-8 py-8" href="/detailproduk">
                <img class=" w-40 ml-10 items-center justify-censter" src="keyboard.png" alt="product image" />
            </a>
            <div class="p- space-y-4 md:space-y- sm:p-6">
                <a href="/detailproduk">
                    <h5 class="text-md font-semibold tracking-tight text-gray-900 dark:text-white">Apple Watch Series 7 GPS, Aluminium Case, Starlight Sport</h5>
                </a>
                <div class="flex items-center mt-2. mb-">
                    <div class="flex items-center space-x-1 rtl:space-x-reverse">
                        
                    </div>
                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2. py-0. rounded dark:bg-blue-200 dark:text-blue-800 ms-3">.0</span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-2xl pr-10 font-bold text-gray-900 dark:text-white">Rp.500.000</span>
                    <a href="/detailproduk" class="text-black bg-yellow-300 hover:bg-yellow-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-small rounded-lg text-sm px- py-10. font-bold text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <img src="cart.png " class="w-10 h-10 "alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="mx-4 px-8 mt-2 py-8   max-w-sm items-center justify-center bg-white border border-gray-200 rounded-lg ">
            <a class= "px-8 py-8" href="/detailproduk">
                <img class=" w-40 ml-10 items-center justify-censter" src="keyboard.png" alt="product image" />
            </a>
            <div class="p- space-y-4 md:space-y- sm:p-6">
                <a href="/detailproduk">
                    <h5 class="text-md font-semibold tracking-tight text-gray-900 dark:text-white">Apple Watch Series 7 GPS, Aluminium Case, Starlight Sport</h5>
                </a>
                <div class="flex items-center mt-2. mb-">
                    <div class="flex items-center space-x-1 rtl:space-x-reverse">
                        
                    </div>
                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2. py-0. rounded dark:bg-blue-200 dark:text-blue-800 ms-3">.0</span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-2xl pr-10 font-bold text-gray-900 dark:text-white">Rp.500.000</span>
                    <a href="/detailproduk" class="text-black bg-yellow-300 hover:bg-yellow-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-small rounded-lg text-sm px- py-10. font-bold text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <img src="cart.png " class="w-10 h-10 "alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="mx-4 px-8 mt-2 py-8   max-w-sm items-center justify-center bg-white border border-gray-200 rounded-lg ">
            <a class= "px-8 py-8" href="/detailproduk">
                <img class=" w-40 ml-10 items-center justify-censter" src="keyboard.png" alt="product image" />
            </a>
            <div class="p- space-y-4 md:space-y- sm:p-6">
                <a href="/detailproduk">
                    <h5 class="text-md font-semibold tracking-tight text-gray-900 dark:text-white">Apple Watch Series 7 GPS, Aluminium Case, Starlight Sport</h5>
                </a>
                <div class="flex items-center mt-2. mb-">
                    <div class="flex items-center space-x-1 rtl:space-x-reverse">
                        
                    </div>
                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2. py-0. rounded dark:bg-blue-200 dark:text-blue-800 ms-3">.0</span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-2xl pr-10 font-bold text-gray-900 dark:text-white">Rp.500.000</span>
                    <a href="/detailproduk" class="text-black bg-yellow-300 hover:bg-yellow-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-small rounded-lg text-sm px- py-10. font-bold text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <img src="cart.png " class="w-10 h-10 "alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="mx-4 px-8 mt-2 py-8   max-w-sm items-center justify-center bg-white border border-gray-200 rounded-lg ">
            <a class= "px-8 py-8" href="/detailproduk">
                <img class=" w-40 ml-10 items-center justify-censter" src="keyboard.png" alt="product image" />
            </a>
            <div class="p- space-y-4 md:space-y- sm:p-6">
                <a href="/detailproduk">
                    <h5 class="text-md font-semibold tracking-tight text-gray-900 dark:text-white">Apple Watch Series 7 GPS, Aluminium Case, Starlight Sport</h5>
                </a>
                <div class="flex items-center mt-2. mb-">
                    <div class="flex items-center space-x-1 rtl:space-x-reverse">
                        
                    </div>
                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2. py-0. rounded dark:bg-blue-200 dark:text-blue-800 ms-3">.0</span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-2xl pr-10 font-bold text-gray-900 dark:text-white">Rp.500.000</span>
                    <a href="/detailproduk" class="text-black bg-yellow-300 hover:bg-yellow-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-small rounded-lg text-sm px- py-10. font-bold text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <img src="cart.png " class="w-10 h-10 "alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="mx-4 px-8 mt-2 py-8   max-w-sm items-center justify-center bg-white border border-gray-200 rounded-lg ">
            <a class= "px-8 py-8" href="/detailproduk">
                <img class=" w-40 ml-10 items-center justify-censter" src="keyboard.png" alt="product image" />
            </a>
            <div class="p- space-y-4 md:space-y- sm:p-6">
                <a href="/detailproduk">
                    <h5 class="text-md font-semibold tracking-tight text-gray-900 dark:text-white">Apple Watch Series 7 GPS, Aluminium Case, Starlight Sport</h5>
                </a>
                <div class="flex items-center mt-2. mb-">
                    <div class="flex items-center space-x-1 rtl:space-x-reverse">
                        
                    </div>
                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2. py-0. rounded dark:bg-blue-200 dark:text-blue-800 ms-3">.0</span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-2xl pr-10 font-bold text-gray-900 dark:text-white">Rp.500.000</span>
                    <a href="/detailproduk" class="text-black bg-yellow-300 hover:bg-yellow-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-small rounded-lg text-sm px- py-10. font-bold text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <img src="cart.png " class="w-10 h-10 "alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="mx-4 px-8 mt-2 py-8   max-w-sm items-center justify-center bg-white border border-gray-200 rounded-lg ">
            <a class= "px-8 py-8" href="/detailproduk">
                <img class=" w-40 ml-10 items-center justify-censter" src="keyboard.png" alt="product image" />
            </a>
            <div class="p- space-y-4 md:space-y- sm:p-6">
                <a href="/detailproduk">
                    <h5 class="text-md font-semibold tracking-tight text-gray-900 dark:text-white">Apple Watch Series 7 GPS, Aluminium Case, Starlight Sport</h5>
                </a>
                <div class="flex items-center mt-2. mb-">
                    <div class="flex items-center space-x-1 rtl:space-x-reverse">
                        
                    </div>
                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2. py-0. rounded dark:bg-blue-200 dark:text-blue-800 ms-3">.0</span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-2xl pr-10 font-bold text-gray-900 dark:text-white">Rp.500.000</span>
                    <a href="/detailproduk" class="text-black bg-yellow-300 hover:bg-yellow-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-small rounded-lg text-sm px- py-10. font-bold text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <img src="cart.png " class="w-10 h-10 "alt="">
                    </a>
                </div>
            </div>
        </div>

    </div>
</body>


<footer class="mt-10">
    
<div class="flex flex-row bg-slate-500 ">
    <div class="pl-5 sm:flex sm:items-center w-2/6 ">
    <img src="logo.png" class="h-10 my-5 mt-8" alt="Logo" />
    <p class=" text-white text-sm ml-5">This website makes it easy for you to get the electronics you need, guaranteed to be original, and get lots of discounts</p>
    </div>

    <div class="flex space-x-8 ">
       <div class="flex ml-96">
        <img src="phone.png"class="h-5 my-5 mt-8 ml-80 " alt="">
        <p class="mt-8 text-white text-sm ml-5">+6282285473246</p>
        </div>
        <div class="flex flex-row">
        <img src="location.png"class="h-5 my-5 mt-8" alt="">
        <p class="mt-8 text-white text-sm ml-5">Jl. Ahmad Yani Batam Kota. Kota Batam. kepulauan Riau. Indonesia</p>
        </div>
        
    </div>
</div>
</footer>


