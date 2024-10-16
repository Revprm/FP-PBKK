<x-layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <!-- Product Details -->
            <h2 class="mb-2 text-xl font-semibold leading-none text-gray-900 md:text-2xl dark:text-white">
                {{ $product->name }}</h2>
            <p class="mb-4 text-xl font-extrabold leading-none text-gray-900 md:text-2xl dark:text-white">
                ${{ $product->price }}</p>
                @if ($product->category_id == 1)
                <!-- Assuming 1 is the ID for TV/Monitors -->
                <img class="mx-auto h-64 dark:hidden"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxVYjerxdhlhlOHCyKbbbcfO2LiQoeqqi2wQ&s"
                    alt="TV/Monitors" />
                <img class="mx-auto hidden h-full dark:block"
                    src="/images/categories/tv-monitors-dark.jpg" alt="TV/Monitors" />
            @elseif ($product->category_id == 2)
                <img class="mx-auto h-64 dark:hidden"
                    src="https://www.asus.com/media/Odin/Websites/global/Series/9.png"
                    alt="PC" />
                <img class="mx-auto hidden h-full dark:block" src="/images/categories/pc-dark.jpg"
                    alt="PC" />
            @elseif ($product->category_id == 3)
                <img class="mx-auto h-64 dark:hidden"
                    src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full/catalog-image/MTA-152715728/sony_ps5_console_slim_model_-_playstation5_slim_1_tb_console_disc_-_digital_full01_dqth0ohs.jpg"
                    alt="Gaming/Console" />
                <img class="mx-auto hidden h-full dark:block"
                    src="/images/categories/gaming-console-dark.jpg" alt="Gaming/Console" />
            @elseif ($product->category_id == 4)
                <img class="mx-auto h-64 dark:hidden"
                    src="https://cdn.mos.cms.futurecdn.net/hf2CQvHr9KNtKuUSDkeQVH-320-80.jpg"
                    alt="Phones" />
                <img class="mx-auto hidden h-full dark:block"
                    src="/images/categories/phones-dark.jpg" alt="Phones" />
            @else
                <img class="mx-auto h-full dark:hidden" src="/images/categories/default.jpg"
                    alt="Default" />
                <img class="mx-auto hidden h-full dark:block"
                    src="/images/categories/default-dark.jpg" alt="Default" />
            @endif
            <dl>
                <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Details</dt>
                <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">{{ $product->description }}</dd>
            </dl>
            <dl class="flex items-center space-x-6">
                <div>
                    <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Category</dt>
                    <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">{{ $product->category->name }}
                    </dd>
                </div>
                <div>
                    <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Rating</dt>
                    <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">{{ $product->rate }}/10</dd>
                </div>
            </dl>
            <div class="py-5">
                <a href="/information" class="font-medium text-xm text-blue-500 hover:underline">&laquo; Back to
                    Information Page</a>
            </div>
        </div>
    </section>


</x-layout>
