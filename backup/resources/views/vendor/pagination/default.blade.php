{{-- resources/views/vendor/pagination/default.blade.php --}}
<nav role="navigation"
  aria-label="Pagination Navigation"
  class="flex items-center justify-between p-4 border-t select-none border-secondary-200 dark:border-secondary-600 sm:px-6">
  <div class="flex justify-between flex-1 sm:hidden">
    {{-- previous disable --}}
    <span
      class="relative inline-flex items-center px-4 py-2 text-sm font-medium leading-5 text-gray-400 bg-white border border-gray-300 rounded dark:text-gray-400 dark:bg-secondary-700 dark:border-secondary-600">

    </span>
    {{-- previous enable --}}
    <a href=""
      class="relative inline-flex items-center px-4 py-2 text-sm font-medium leading-5 transition bg-white border border-gray-300 rounded dark:text-gray-200 dark:border-secondary-600 hover:text-gray-400 dark:hover:text-gray-300 focus:outline-none focus:border-primary-300 focus:ring focus:ring-primary-300 focus:ring-opacity-30 dark:bg-secondary-700 dark:focus:ring-primary-500 dark:focus:ring-opacity-30">

    </a>
    {{-- next enable --}}

    <a href=""
      class="relative inline-flex items-center px-4 py-2 text-sm font-medium leading-5 transition bg-white border border-gray-300 rounded dark:text-gray-200 dark:border-secondary-600 hover:text-gray-400 dark:hover:text-gray-300 focus:outline-none focus:border-primary-300 focus:ring focus:ring-primary-300 focus:ring-opacity-30 dark:bg-secondary-700 dark:focus:ring-primary-500 dark:focus:ring-opacity-30">

    </a>
    {{-- next disable --}}
    <span
      class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium leading-5 text-gray-400 bg-white border border-gray-300 rounded dark:text-gray-400 dark:bg-secondary-700 dark:border-secondary-600">

    </span>
  </div>

  <div class="flex-col hidden lg:flex-row sm:flex-1 sm:flex sm:items-center sm:justify-between">
    <div>
      <p class="text-sm leading-5 dark:text-gray-300">
      </p>
    </div>

    <div>
      <span class="relative z-0 inline-flex mt-2 shadow-sm lg:mt-0">
        {{-- Previous Page Link Disable --}}
        {{-- <span aria-disabled="true"
          aria-label="">
          <span
            class="relative inline-flex items-center px-2 py-2 text-sm font-medium leading-5 text-gray-400 bg-white border border-gray-300 rounded-l dark:text-gray-400 dark:border-secondary-600 dark:bg-secondary-700"
            aria-hidden="true">
            <svg class="w-5 h-5"
              fill="currentColor"
              viewBox="0 0 20 20">
              <path fill-rule="evenodd"
                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                clip-rule="evenodd" />
            </svg>
          </span>
        </span> --}}
        {{-- Previous Page Link Enable --}}
        <a href=""
          rel="prev"
          class="relative inline-flex items-center px-2 py-2 text-sm font-medium leading-5 transition bg-white border border-gray-300 rounded-l hover:text-gray-400 focus:z-10 focus:outline-none focus:border-primary-300 focus:ring focus:ring-primary-300 focus:ring-opacity-30 dark:focus:ring-primary-500 dark:focus:ring-opacity-30 dark:text-gray-300 dark:border-secondary-600 dark:bg-secondary-700"
          aria-label="">
          <svg class="w-5 h-5"
            fill="currentColor"
            viewBox="0 0 20 20">
            <path fill-rule="evenodd"
              d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
              clip-rule="evenodd" />
          </svg>
        </a>

        {{-- "Three Dots" Separator --}}
        <span aria-disabled="true">

        </span>

        {{-- Array Of Links Disable --}}
        {{-- <span aria-current="page">
          <span
            class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium leading-5 text-gray-400 bg-white border border-gray-300 dark:text-gray-400 dark:border-secondary-600 dark:bg-secondary-700"></span>
        </span> --}}
        {{-- Array Of Links Enable --}}
        <a href=""
          class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium leading-5 transition bg-white border border-gray-300 hover:text-gray-400 dark:hover:text-gray-300 focus:z-10 focus:outline-none focus:border-primary-300 focus:ring focus:ring-primary-300 focus:ring-opacity-30 dark:focus:ring-primary-500 dark:focus:ring-opacity-30 dark:text-gray-200 dark:border-secondary-600 dark:bg-secondary-700"
          aria-label="">
            1
        </a>

        <a href=""
        class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium leading-5 transition bg-white border border-gray-300 hover:text-gray-400 dark:hover:text-gray-300 focus:z-10 focus:outline-none focus:border-primary-300 focus:ring focus:ring-primary-300 focus:ring-opacity-30 dark:focus:ring-primary-500 dark:focus:ring-opacity-30 dark:text-gray-200 dark:border-secondary-600 dark:bg-secondary-700"
        aria-label="">
        2
      </a>


        {{-- Next Page Link Disable --}}
        <span aria-disabled="true"
          aria-label="">
          <span
            class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium leading-5 text-gray-400 bg-white border border-gray-300 rounded-r dark:text-gray-400 dark:border-secondary-600 dark:bg-secondary-700"
            aria-hidden="true">
            <svg class="w-5 h-5"
              fill="currentColor"
              viewBox="0 0 20 20">
              <path fill-rule="evenodd"
                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                clip-rule="evenodd" />
            </svg>
          </span>
        </span>
      </span>
    </div>
  </div>
</nav>
