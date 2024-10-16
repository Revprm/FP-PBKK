<x-layout>
    <section class="bg-gray-50 py-8 antialiased dark:bg-gray-900 md:py-12">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <div class="mb-4 items-end justify-between space-y-4 sm:flex sm:space-y-0 md:mb-8">
                <div>
                    <nav class="flex" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                            <li class="inline-flex items-center">
                                <a href="/"
                                    class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-green-600 dark:text-gray-400 dark:hover:text-white">
                                    <svg class="me-2.5 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                                    </svg>
                                    Home
                                </a>
                            </li>
                        </ol>
                    </nav>
                    <h2 class="mt-3 text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">Electronics</h2>
                </div>
            </div>
            {{ $products->links() }}
            <!-- Loop through products -->
            <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-5 py-4">
                <!-- The grid wrapper for all products -->
                @foreach ($products as $product)
                    <div
                        class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                        <div class="h-56 w-full">
                            <a href="/information/details/{{ $product->slug }}">
                                @if ($product->category_id == 1)
                                    <!-- Assuming 1 is the ID for TV/Monitors -->
                                    <img class="mx-auto h-full dark:hidden"
                                        src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front.svg"
                                        alt="TV/Monitors" />
                                    <img class="mx-auto hidden h-full dark:block"
                                        src="/images/categories/tv-monitors-dark.jpg" alt="TV/Monitors" />
                                @elseif ($product->category_id == 2)
                                    <!-- Assuming 2 is the ID for PC -->
                                    <img class="mx-auto h-full dark:hidden"
                                        src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/macbook-pro-light.svg"
                                        alt="PC" />
                                    <img class="mx-auto hidden h-full dark:block" src="/images/categories/pc-dark.jpg"
                                        alt="PC" />
                                @elseif ($product->category_id == 3)
                                    <!-- Assuming 3 is the ID for Gaming/Console -->
                                    <img class="mx-auto h-full dark:hidden"
                                        src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/ps5-light.svg"
                                        alt="Gaming/Console" />
                                    <img class="mx-auto hidden h-full dark:block"
                                        src="/images/categories/gaming-console-dark.jpg" alt="Gaming/Console" />
                                @elseif ($product->category_id == 4)
                                    <!-- Assuming 4 is the ID for Phones -->
                                    <img class="mx-auto h-full dark:hidden"
                                        src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/iphone-light.svg"
                                        alt="Phones" />
                                    <img class="mx-auto hidden h-full dark:block"
                                        src="/images/categories/phones-dark.jpg" alt="Phones" />
                                @else
                                    <img class="mx-auto h-full dark:hidden" src="/images/categories/default.jpg"
                                        alt="Default" />
                                    <img class="mx-auto hidden h-full dark:block"
                                        src="/images/categories/default-dark.jpg" alt="Default" />
                                @endif
                            </a>
                        </div>
                        <div class="pt-6">
                            <div class="mb-4 flex items-center justify-between gap-4">
                                <span
                                    class="me-2 rounded bg-primary-100 px-2.5 py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                                    {{ $product->category->name }} </span>
                            </div>
                            <a href="/information/details/{{ $product->slug }}"
                                class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">{{ $product->name }}</a>
                            <div class="mt-2">
                                <p class="text-sm text-gray-700 dark:text-gray-300">
                                    {{ Str::words($product->description, 10) }}
                                </p>
                            </div>
                            <ul class="mt-2 flex items-center gap-4">
                                <li class="flex items-center gap-2">
                                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Made by
                                        {{ $product->user->name }}</p>
                                </li>
                            </ul>
                            <div class="mt-4 flex items-center justify-between gap-4">
                                <p class="text-2xl font-extrabold leading-tight text-gray-900 dark:text-white">
                                    ${{ $product->price }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>
