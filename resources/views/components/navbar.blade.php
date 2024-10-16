<nav class="bg-green-400 dark:bg-gray-800 antialiased">
    <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0 py-4">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-8">
                <div class="shrink-0">
                    <a href="/" title="">
                        <img class="block w-auto h-8 dark:hidden"
                            src="https://img.icons8.com/?size=100&id=baTWeZAqG8lF&format=png&color=000000" alt="">
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

            <!-- Login/User Name Section with Dropdown -->
            <div class="relative">
                @auth
                    <div class="flex items-center space-x-4 cursor-pointer" id="user-menu-button">
                        <img src="https://img.icons8.com/?size=100&id=98957&format=png&color=000000" alt="user-icon"
                            class="w-6 h-6">
                        <span class="text-sm font-medium text-gray-900 dark:text-white">
                            {{ Auth::user()->name }}
                        </span>
                        <svg class="w-4 h-4 ml-1 text-gray-900 dark:text-white" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>

                    <!-- Dropdown Menu -->
                    <div id="dropdown-menu"
                        class="absolute right-0 mt-2 w-48 bg-white dark:bg-gray-800 rounded-md shadow-lg hidden">
                        <a href="/dashboard"
                            class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-green-50 dark:hover:bg-gray-700">
                            Dashboard
                        </a>
                        <button onclick="document.getElementById('logout-form').submit();"
                            class="block w-full text-left px-4 py-2 text-sm text-red-600 dark:text-red-400 hover:bg-green-50 dark:hover:bg-gray-700">
                            Logout
                        </button>
                    </div>
                @else
                    <a href="{{ route('login') }}" title="Login"
                        class="text-sm font-medium text-gray-900 hover:text-green-700 dark:text-white dark:hover:text-green-500">
                        Login
                    </a>
                @endauth
            </div>

            <!-- Hamburger menu button -->
            <button id="menu-toggle"
                class="lg:hidden text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600"
                aria-label="toggle menu">
                <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                    <path fill-rule="evenodd"
                        d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2z">
                    </path>
                </svg>
            </button>
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
                        <a href="/dashboard" class="block hover:text-green-700 dark:hover:text-green-500">Dashboard</a>
                    </li>
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
    // Toggle mobile menu
    document.getElementById('menu-toggle').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });

    // Toggle dropdown menu
    document.getElementById('user-menu-button').addEventListener('click', function() {
        document.getElementById('dropdown-menu').classList.toggle('hidden');
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', function(event) {
        var isClickInside = document.getElementById('user-menu-button').contains(event.target) ||
            document.getElementById('dropdown-menu').contains(event.target);

        if (!isClickInside) {
            document.getElementById('dropdown-menu').classList.add('hidden');
        }
    });
</script>
