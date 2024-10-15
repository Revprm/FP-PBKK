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
                    <div class="hidden lg:flex items-center space-x-4">
                        <img src="https://img.icons8.com/?size=100&id=98957&format=png&color=000000" alt="user-icon"
                            class="w-6 h-6">
                        <a href="/dashboard">
                            <span class="text-sm font-medium text-gray-900 dark:text-white">
                                {{ Auth::user()->name }}
                            </span>
                        </a>
                        <button onclick="document.getElementById('logout-form').submit();"
                            class="text-sm text-red-600 hover:text-red-800 dark:text-red-400 dark:hover:text-red-600">
                            Logout
                        </button>
                    </div>
                    <div class="flex lg:hidden items-center space-x-4">
                        <img src="https://img.icons8.com/?size=100&id=98957&format=png&color=000000" alt="user-icon"
                            class="w-6 h-6">
                        <a href="/dashboard">
                            <span class="text-sm font-medium text-gray-900 dark:text-white">
                                {{ Auth::user()->name }}
                            </span>
                        </a>
                    </div>
                @else
                    <a href="{{ route('login') }}" title="Login"
                        class="text-sm font-medium text-gray-900 hover:text-green-700 dark:text-white dark:hover:text-green-500">
                        Login
                    </a>
                @endauth
                <!-- Hamburger menu button -->
                <button id="menu-toggle"
                    class="lg:hidden text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600"
                    aria-label="toggle menu">
                    <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                        <path fill-rule="evenodd"
                            d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                        </path>
                    </svg>
                </button>
            </div>
        </div>
        <!-- Mobile menu -->
        <div id="mobile-menu" class="hidden lg:hidden mt-4">
            <ul class="text-gray-900 dark:text-white text-sm font-medium space-y-3">
                <li>
                    <a href="/" class="block hover:text-green-700 dark:hover:text-green-500">Home</a>
                </li>
                <li>
                    <a href="/information" class="block hover:text-green-700 dark:hover:text-green-500">Products</a>
                </li>
                @auth
                    <li>
                        <button onclick="document.getElementById('logout-form').submit();"
                            class="block text-red-600 hover:text-red-800 dark:text-red-400 dark:hover:text-red-600">
                            Logout
                        </button>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
    @csrf
</form>

<script>
    document.getElementById('menu-toggle').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>
