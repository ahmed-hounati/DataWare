<?php
require 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <div class="min-h-full">
        <div class="pb-32">
            <nav class="bg-gray-800">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="border-b border-gray-700">
                        <div class="flex items-center justify-between h-16 px-4 sm:px-0">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img class="w-[100px]" src="./img/logo-removebg-preview.png" alt="logo">
                                </div>
                                <div class="hidden md:block">
                                    <div class="ml-10 flex items-baseline space-x-4">
                                        <!-- liens -->
                                        <a href="./dashboard.php" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Dashboard</a>

                                        <a href="./squads.php" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Teams</a>

                                        <a href="./projects.php" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Projects</a>

                                        <a href="./login.php" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Login</a>

                                        <a href="./signup.php" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Sign Up</a>
                                    </div>
                                </div>
                            </div>
                            <div class="-mr-2 flex md:hidden">
                                <!-- Mobile menu button -->
                                <button type="button" id="burger-menu" class="bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                                    <span class="sr-only">Open main menu</span>
                                    <!--
                    Heroicon name: outline/menu

                    Menu open: "hidden", Menu closed: "block"
                -->
                                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                    </svg>
                                    <!--
                    Heroicon name: outline/x

                    Menu open: "block", Menu closed: "hidden"
                -->
                                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mobile menu, show/hide based on menu state. -->
                <div class="border-b border-gray-700 md:hidden" id="nav-links">
                    <div class="px-2 py-3 space-y-1 sm:px-3 md:hidden">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="./dashboard.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Dashboard</a>

                        <a href="./squads.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Team</a>

                        <a href="./projects.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Projects</a>

                        <a href="./login.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Login</a>

                        <a href="./signup.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Sign Up</a>
                    </div>

                </div>
        </div>
        </nav>
        <header class="py-10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold text-black">Dashboard</h1>
            </div>
        </header>
    </div>

    <main class="">
        <div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:px-8">
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="bg-gray-900">
                <div class="mx-auto py-12 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-24">
                    <div class="space-y-12">
                        <div class="space-y-5 sm:space-y-4 md:max-w-xl lg:max-w-3xl xl:max-w-none">
                            <h2 class="text-3xl font-extrabold text-white tracking-tight sm:text-4xl">All teams</h2>
                            <p class="text-xl text-gray-300">This is our teams.</p>
                        </div>
                        <ul role="list" class="space-y-4 sm:grid sm:grid-cols-2 sm:gap-6 sm:space-y-0 lg:grid-cols-3 lg:gap-8">
                            <li class="py-10 px-6 bg-gray-800 text-center rounded-lg xl:px-10 xl:text-left">
                                <div class="space-y-6 xl:space-y-10">

                                    <div class="space-y-2 xl:flex xl:items-center xl:justify-between">
                                        <div class="font-medium text-lg leading-6 space-y-1">
                                            <h3 class="text-white">Squad1</h3>
                                            <p class="text-indigo-400">Designers</p>
                                        </div>

                                    </div>
                                </div>
                            </li>

                            <li class="py-10 px-6 bg-gray-800 text-center rounded-lg xl:px-10 xl:text-left">
                                <div class="space-y-6 xl:space-y-10">

                                    <div class="space-y-2 xl:flex xl:items-center xl:justify-between">
                                        <div class="font-medium text-lg leading-6 space-y-1">
                                            <h3 class="text-white">Squad2</h3>
                                            <p class="text-indigo-400">Developers</p>
                                        </div>


                                    </div>
                                </div>
                            </li>

                            <li class="py-10 px-6 bg-gray-800 text-center rounded-lg xl:px-10 xl:text-left">
                                <div class="space-y-6 xl:space-y-10">

                                    <div class="space-y-2 xl:flex xl:items-center xl:justify-between">
                                        <div class="font-medium text-lg leading-6 space-y-1">
                                            <h3 class="text-white">Squad3</h3>
                                            <p class="text-indigo-400">Analyses</p>
                                        </div>

                                    </div>
                                </div>
                            </li>

                            <!-- More people... -->
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /End replace -->
        </div>
    </main>
    </div>



    <script src="./js/script.js"></script>
</body>

</html>