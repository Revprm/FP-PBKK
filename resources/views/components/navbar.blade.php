<nav class="bg-white dark:bg-gray-800 antialiased">
    <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0 py-4">
        <div class="flex items-center justify-between">
            
            <div class="flex items-center space-x-8">
                <div class="shrink-0">
                    <a href="#" title="">
                        <img class="block w-auto h-8 dark:hidden"
                            src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/logo-full.svg" alt="">
                        <img class="hidden w-auto h-8 dark:block"
                            src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/logo-full-dark.svg" alt="">
                    </a>
                </div>

                <ul class="hidden lg:flex items-center justify-start gap-6 md:gap-8 py-3 sm:justify-center">
                    <li>
                        <a href="/" title=""
                            class="flex text-sm font-medium text-gray-900 hover:text-green-700 dark:text-white dark:hover:text-green-500">
                            Home
                        </a>
                    </li>
                    <li class="shrink-0">
                        <a href="/information" title=""
                            class="flex text-sm font-medium text-gray-900 hover:text-green-700 dark:text-white dark:hover:text-green-500">
                            Products
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Login/User Name Section -->
            <div class="flex items-center space-x-4">
                @auth
                    <img src="https://img.icons8.com/?size=100&id=98957&format=png&color=000000" alt="user-icon" class="w-6 h-6">
                    <span class="text-sm font-medium text-gray-900 dark:text-white">
                        {{ Auth::user()->name }}
                    </span>
                    <a href="{{ route('logout') }}" class="text-sm text-red-600 hover:text-red-800 dark:text-red-400 dark:hover:text-red-600"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        @csrf
                    </form>
                @else
                    <!-- If the user is not logged in, show the Login button -->
                    <a href="{{ route('login') }}" title="Login"
                       class="text-sm font-medium text-gray-900 hover:text-green-700 dark:text-white dark:hover:text-green-500">
                        Login
                    </a>
                @endauth
            </div>
        </div>

        <div id="ecommerce-navbar-menu-1"
            class="bg-gray-50 dark:bg-gray-700 dark:border-gray-600 border border-gray-200 rounded-lg py-3 hidden px-4 mt-4">
            <ul class="text-gray-900 dark:text-white text-sm font-medium space-y-3">
                <li>
                    <a href="#" class="hover:text-green-700 dark:hover:text-green-500">Home</a>
                </li>
                <li>
                    <a href="#" class="hover:text-green-700 dark:hover:text-green-500">Best Sellers</a>
                </li>
                <li>
                    <a href="#" class="hover:text-green-700 dark:hover:text-green-500">Gift Ideas</a>
                </li>
                <li>
                    <a href="#" class="hover:text-green-700 dark:hover:text-green-500">Games</a>
                </li>
                <li>
                    <a href="#" class="hover:text-green-700 dark:hover:text-green-500">Electronics</a>
                </li>
                <li>
                    <a href="#" class="hover:text-green-700 dark:hover:text-green-500">Home & Garden</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
