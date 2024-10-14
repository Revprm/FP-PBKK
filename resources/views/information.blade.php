<x-layout>
  <section class="bg-gray-50 py-8 antialiased dark:bg-gray-900 md:py-12">
      <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
          <div class="mb-4 items-end justify-between space-y-4 sm:flex sm:space-y-0 md:mb-8">
              <div>
                  <nav class="flex" aria-label="Breadcrumb">
                      <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                          <li class="inline-flex items-center">
                              <a href="/" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-primary-600 dark:text-gray-400 dark:hover:text-white">
                                  <svg class="me-2.5 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                      <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                                  </svg>
                                  Home
                              </a>
                          </li>
                      </ol>
                  </nav>
                  <h2 class="mt-3 text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">Electronics</h2>
              </div>
              <div class="flex items-start justify-between rounded-t md:p-5">
                  <button type="button" class="ml-auto inline-flex items-center rounded-lg bg-blue-700 p-2 text-sm text-white hover:bg-blue-600" data-modal-toggle="filterModal" onclick="window.location.href='information/add_page';">
                      + Add Product
                  </button>
              </div>
          </div>
          {{ $products->links() }}
          <!-- Loop through products -->
          <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-5"> <!-- The grid wrapper for all products -->
              @foreach ($products as $product)
                  <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                      <div class="h-56 w-full">
                          <a href="/information/details/{{ $product->slug }}">
                              <img class="mx-auto h-full dark:hidden" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front.svg" alt="" />
                              <img class="mx-auto hidden h-full dark:block" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front-dark.svg" alt="" />
                          </a>
                      </div>
                      <div class="pt-6">
                          <div class="mb-4 flex items-center justify-between gap-4">
                              <span class="me-2 rounded bg-primary-100 px-2.5 py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                                  15% Off
                              </span>
                              <div class="flex items-center justify-end gap-1">
                                  <button type="button" class="rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                      <span class="sr-only">Add to Favorites</span>
                                      <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6C6.5 1 1 8 5.8 13l6.2 7 6.2-7C23 8 17.5 1 12 6Z" />
                                      </svg>
                                  </button>
                              </div>
                          </div>

                          <a href="/information/details/{{ $product->slug }}" class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">{{ $product->name }}</a>
                          <div class="mt-4 flex items-center justify-between gap-4">
                              <p class="text-2xl font-extrabold leading-tight text-gray-900 dark:text-white">${{ $product->price }}</p>

                              <button type="button" class="inline-flex items-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                  Buy
                              </button>
                          </div>
                      </div>
                  </div>
              @endforeach
          </div>
      </div>
  </section>
</x-layout>
