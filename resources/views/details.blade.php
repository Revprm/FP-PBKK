<x-layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <!-- Product Details -->
            <h2 class="mb-2 text-xl font-semibold leading-none text-gray-900 md:text-2xl dark:text-white">
                {{ $product->name }}</h2>
            <p class="mb-4 text-xl font-extrabold leading-none text-gray-900 md:text-2xl dark:text-white">
                ${{ $product->price }}</p>
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
                    <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Item weight</dt>
                    <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">{{ $product->weight }}Kg</dd>
                </div>
            </dl>
            <div class="py-5">
                <a href="/information" class="font-medium text-xm text-blue-500 hover:underline">&laquo; Back to
                    Information Page</a>
            </div>
        </div>
    </section>


</x-layout>
