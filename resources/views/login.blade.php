<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<section class="bg-575757-50 dark:bg-575757-900">

<nav class="bg-gray-700 border-gray-200 dark:bg-gray-900">
<div>
    <h1 class="mt-3 text-amber-300 text-center text-4xl font-bold">LOGIN</h1>
</div>
<div>
    <img class="mx-4"  src="logo.png" alt="logo" width="150">
</div>
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
    <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
    </ul>
  </div>
  </div>
</nav>

<section>
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
      <div class="w-full bg-zinc-300 rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
              <form class="space-y-4 md:space-y-6" action="#">
                  <div>
                      <label for="username" class="block mb-2 text-smfont-medium text-gray-900 dark:text-white">Username</label>
                      <input type="username" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Username" required="">
                  </div>
                  <div>
                      <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                      <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                  </div>
                  <div class="flex items-center justify-between">
                      <div class="flex items-start">
                          <div class="flex items-center h-5">
                          </div>
                          <div class="ml-3 text-sm">
                          </div>
                      </div>
                  </div>
                  <button type="submit" class="w-full text- bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:focus:ring-yellow-900">Login</button>
                  <p class="text-sm text-center font-light text-black-500 dark:text-gray-400">
                      Belum punya akun?
                      <a href="#" class="font-medium text-primary-600 text-center\\\ hover:underline dark:text-primary-500">Daftar</a>
                  </p>
              </form>
          </div>
      </div>
  </div>
</section>