
    {{-- SEARCH START --}}
    <section id="serarch mt-5">
        <div class="container">
          <div class="row">

            <div class="col-10">
              <div class="mb-3">
                <input type="text"
                  class="form-control p-3 rounded" name="" id=""  placeholder="Type your keyword in here ..">
              </div>
            </div>


    <div class="">
        <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">Filter by</h3>
        <ul
            class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white shadow-sm">

            <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                <div class="flex items-center pl-3">
                    <input checked id="local_name" type="radio" value="local_name" name="filter" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500 cursor-pointer">
                    <label for="local_name" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300 cursor-pointer">Local Name</label>
                </div>
            </li>

            <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                <div class="flex items-center pl-3">
                    <input @if(isset($_GET['filter'])  && $_GET['filter'] == 'indonesian_name') checked  @endif id="indonesian_name" type="radio" value="indonesian_name" name="filter" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500 cursor-pointer">
                    <label for="indonesian_name" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300 cursor-pointer">Indonesian Name</label>
                </div>
            </li>

            <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                <div class="flex items-center pl-3">
                    <input @if(isset($_GET['filter'])  && $_GET['filter'] == 'latin_name') checked  @endif id="latin_name" type="radio" value="latin_name" name="filter" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500 cursor-pointer">
                    <label for="latin_name" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300 cursor-pointer">Latin Name</label>
                </div>
            </li>

            <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                <div class="flex items-center pl-3">
                    <input @if(isset($_GET['filter'])  && $_GET['filter'] == 'taxonomists') checked  @endif id="taxonomists" type="radio" value="taxonomists" name="filter" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500 cursor-pointer">
                    <label for="taxonomists" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300 cursor-pointer">Taxonomists</label>
                </div>
            </li>

        </ul>

    </div>
</form>

@if(isset($_GET['s']) && isset($_GET['filter']))

<div class="mt-5">
    <a href="{{ url('/the-plants') }}" class="text-yellow-700 bg-yellow-100 px-3 py-2 rounded hover:shadow hover:bg-yellow-200 transition">Reset filter</a>
</div>

@endif

            <div class="col-2">
              <button class="btn btn-success  p-3"> Search <i class="fa-solid fa-search mr-2"></i></button>
            </div>
          </div>
        </div>
      </section>
      {{-- SEARCH END --}}

