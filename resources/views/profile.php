<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav class="py-6  flex bg-gray-700 border-gray-200 dark:bg-gray-900 ">
         <div class="pl-8 pb-1 absolute">
            <img class="ps-15 relative"  src="logo.png" alt="logo" width="170">
        </div> 
        <div class="absolute top-5 right-7 h-50  w-50  ">
            <button type="button" class="absolute right-7 h-12 w-12 text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="true" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                    <span class="sr-only"></span>
                    <img class="w-12 h-12 rounded-full" src="user.png" alt="user">
            </button>
            <button type="button" class="absolute right-20 h-12 w-12 text-sm  rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                <span class="sr-only"></span>
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

 <!-- content  -->
    <div class="bg-white">
        <div class="justify justify-center max-w-4xl h-50 mt-14 mx-auto bg-gray-200 p-5 rounded-lg flex flex-row bg-gray-200 ">

            <div class="w-64 mt-16 mx-10 mr-28"> 
                <img src="user.png"></img>
                <button class="mt-3 ml-20 text-md text-gray-500 hover:text-blue-500 ">Unggah Foto</button>
                <input type="file" style="display: none;">
            </div>
        
            <form method="POST" action="" class="max-w-sm mx-15 mb-3">

                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900">Username</label>
                    <input type="text" id="username" class="w-96 shadow-sm bg-white border border-gray-100 text-gray-900 text-sm rounded-lg block p-2.5" placeholder="Ubah Username" value="" />
                </div>
                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                    <input type="text" id="nama_pembeli" class="w-96 shadow-sm bg-white border border-gray-100 text-gray-900 text-sm rounded-lg block p-2.5" placeholder="Ubah Nama" value="" />
                </div>

                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900">Alamat</label>
                    <input type="text" id="alamat" class="w-96 shadow-sm bg-white border border-gray-100 text-gray-900 text-sm rounded-lg block p-2.5" placeholder="Ubah Alamat" value="" />
                </div>
            
                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900">No HP</label>
                    <input type="text" id="nomor_hp" class="w-96 shadow-sm bg-white border border-gray-100 text-gray-900 text-sm rounded-lg  block p-2.5" placeholder="Ubah No.Hp" value="" />
                </div>

                <div class="flex flex-row mt-16">
                    <a href="/ubahprofil" class="mr-9 text-black bg-yellow-400  font-medium  text-sm px-16 py-2.5 rounded-lg text-center">Simpan Perubahan</a>
                    <button type="submit" class="text-black bg-yellow-400  font-medium text-sm px-16 py-2.5 rounded-lg text-center">Batal</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
