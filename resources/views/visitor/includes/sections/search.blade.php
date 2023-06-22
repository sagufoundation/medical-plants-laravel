<form class="" method="get" action="{{ route('visitor.thePlants') }}">
    <div class="mb-4 flex justify-between">
        <input class="shadow appearance-none border border-gray-300 rounded-lg w-full px-6 py-6 text-gray-600 leading-tight focus:outline-none focus:shadow-outline focus:shadow-lg focus:border-none transition text-xl" id="s" name="s" type="text"  placeholder="Type your keywords here...">
            <button type="submit" class="bg-gray-700 hover:bg-gray-800 transition text-gray-100 rounded px-9 ml-5">Search</button>
    </div>

    <div class="lg:w-2/3">
        <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">Filter by</h3>
        <ul
            class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white shadow-sm">
            <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                <div class="flex items-center pl-3">
                    <input @if(isset($_GET['filter'])  && $_GET['filter'] == 'local_name') checked  @endif id="local_name" type="radio" value="local_name" name="filter" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500 cursor-pointer">
                    <label for="local_name" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300 cursor-pointer">Local Name</label>
                </div>
            </li>
            <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                <div class="flex items-center pl-3">
                    <input @if(isset($_GET['filter'])  && $_GET['filter'] == 'taxonomists') checked  @endif id="taxonomists" type="radio" value="taxonomists" name="filter" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500 cursor-pointer">
                    <label for="taxonomists" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300 cursor-pointer">Taxonomists</label>
                </div>
            </li>

            <li class="w-full dark:border-gray-600">
                <div class="flex items-center pl-3">
                    <input @if(isset($_GET['filter'])  && $_GET['filter'] == 'contributor') checked  @endif  id="contributor" type="radio" value="contributor" name="filter" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500 cursor-pointer">
                    <label for="contributor" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300 cursor-pointer">Contributor Name</label>
                </div>
            </li>
        </ul>

    </div>
</form>