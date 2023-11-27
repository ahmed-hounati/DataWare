
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
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
                    <div class="px-2 py-3 space-y-1 sm:px-3">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="./dashboard.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Dashboard</a>

                        <a href="./squads.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Team</a>

                        <a href="./projects.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Projects</a>

                        <a href="./login.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Login</a>

                        <a href="./signup.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Sign Up</a>
                    </div>

                    <!-- <div class="flex items-center px-5">
                            <div class="flex-shrink-0">
                                <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                            </div> -->
                    <!-- <div class="ml-3">
                                <div class="text-base font-medium leading-none text-white">Tom Cook</div>
                                <div class="text-sm font-medium leading-none text-gray-400">tom@example.com</div>
                            </div> -->
                    <!-- <button type="button" class="ml-auto bg-gray-800 flex-shrink-0 p-1 text-gray-400 rounded-full hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                                <span class="sr-only">View notifications</span>
                                Heroicon name: outline/bell
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                </svg>
                            </button>
                        </div> -->
                    <!-- <div class="mt-3 px-2 space-y-1">
                            <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">Your Profile</a>

                            <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">Settings</a>

                            <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">Sign out</a>
                        </div> -->
                </div>
        </div>
        </nav>
    </div>

    <main class="-mt-32">
        <div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:px-8">
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="bg-white pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
                <div class="relative max-w-lg mx-auto divide-y-2 divide-gray-200 lg:max-w-7xl">
                    <div>
                        <h2 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl">Projects</h2>
                        <p class="mt-3 text-xl text- sm:mt-4">Nullam risus blandit ac aliquam justo ipsum. Quam mauris volutpat massa dictumst amet. Sapien tortor lacus arcu.</p>
                    </div>
                    <div class="mt-12 grid gap-16 pt-12 lg:grid-cols-3 lg:gap-x-5 lg:gap-y-12">
                        <div class="bg-gray-900 p-8 rounded-2xl">
                            <div>
                                <a href="#" class="inline-block">
                                </a>
                            </div>
                            <a href="#" class="block mt-4">
                                <p class="text-xl font-semibold text-white">Project1</p>
                                <p class="mt-3 text-base text-gray-500">Nullam risus blandit ac aliquam justo ipsum. Quam mauris volutpat massa dictumst amet. Sapien tortor lacus arcu.</p>
                            </a>
                            <div class="mt-6 flex items-center">
                                <div class="flex-shrink-0">
                                    <a href="./squads.php">
                                    </a>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-900">
                                        <a href="#" class="text-white">Team 1
                                        </a>
                                    </p>
                                    <div class="flex space-x-1 text-sm text-gray-500">
                                        <time datetime="2020-03-16"> Mar 16, 2020 </time>

                                        <span> 6 min read </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-gray-900 p-8 rounded-2xl">
                            <div>
                                <a href="#" class="inline-block">
                                </a>
                            </div>
                            <a href="#" class="block mt-4">
                                <p class="text-xl font-semibold text-white">Project 2</p>
                                <p class="mt-3 text-base text-gray-500">Nullam risus blandit ac aliquam justo ipsum. Quam mauris volutpat massa dictumst amet. Sapien tortor lacus arcu.</p>
                            </a>
                            <div class="mt-6 flex items-center">
                                <div class="flex-shrink-0">
                                    <a href="#">

                                    </a>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-900">
                                        <a href="#" class="text-white"> Team 2 </a>
                                    </p>
                                    <div class="flex space-x-1 text-sm text-gray-500">
                                        <time datetime="2020-03-10"> Mar 10, 2020 </time>
                                        <span> 4 min read </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-gray-900 p-8 rounded-2xl">
                            <div>
                                <a href="#" class="inline-block">
                                </a>
                            </div>
                            <a href="#" class="block mt-4">
                                <p class="text-xl font-semibold text-white">Project 3</p>
                                <p class="mt-3 text-base text-gray-500">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab iure iusto fugiat commodi sequi.</p>
                            </a>
                            <div class="mt-6 flex items-center">
                                <div class="flex-shrink-0">
                                    <a href="#">
                                        <span class="sr-only"></span>

                                    </a>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-900">
                                        <a href="#" class="text-white"> Team 3</a>
                                    </p>
                                    <div class="flex space-x-1 text-sm text-gray-500">
                                        <time datetime="2020-02-12"> Feb 12, 2020 </time>

                                        <span> 11 min read </span>
                                    </div>
                                </div>
                            </div>
                        </div>
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