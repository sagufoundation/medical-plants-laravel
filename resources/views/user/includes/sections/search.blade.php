<section class="py-9">
    <div class="container max-w-screen-xl mx-auto p-4">
        <form class="">
            <div class="mb-4 flex justify-between">
                <input
                    class="shadow appearance-none border border-gray-300 rounded-lg w-full px-6 py-6 text-gray-600 leading-tight focus:outline-none focus:shadow-outline focus:shadow-lg focus:border-none transition text-xl"
                    id="username" type="text" placeholder="Type your keywords here...">
                <button @click.prevent="page='dataTanaman'" type="submit"
                    class="inline-flex items-center justify-center px-6 py-3 font-medium text-center text-white rounded-lg bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900 cursor-pointer ml-3 text-xl focus:outline-none focus:shadow-outline focus:shadow-lg">
                    <i class="fa-solid fa-search mr-2"></i> Search
                </button>
            </div>

            <div class="lg:w-2/3">
                <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">Filter by</h3>
                <ul
                    class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white shadow-sm">
                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                        <div class="flex items-center pl-3">
                            <input id="horizontal-list-radio-license" type="radio" value="" name="list-radio"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500 cursor-pointer">
                            <label for="horizontal-list-radio-license"
                                class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300 cursor-pointer">Plant name</label>
                        </div>
                    </li>
                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                        <div class="flex items-center pl-3">
                            <input id="horizontal-list-radio-id" type="radio" value="" name="list-radio"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500 cursor-pointer">
                            <label for="horizontal-list-radio-id"
                                class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300 cursor-pointer">Tribe</label>
                        </div>
                    </li>
                    <li class="w-full dark:border-gray-600">
                        <div class="flex items-center pl-3">
                            <input id="horizontal-list-radio-passport" type="radio" value="" name="list-radio"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500 cursor-pointer">
                            <label for="horizontal-list-radio-passport"
                                class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300 cursor-pointer">Contributor name</label>
                        </div>
                    </li>
                </ul>

            </div>
        </form>
    </div>
</section>

{{-- <div class="container max-w-screen-xl mx-auto p-4" >

    <div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 gap-6" id="dataPlants">
        <!-- platn's data -->
        @foreach ($all as $data )
            <div>
                <a href="" class="cursor-pointer">
                    <img  src="{{url($data->cover_picture)}}"  class="mb-4 rounded transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 shadow-md" alt="{{$data->local_name}}">
                </a>
                <a href="#" class="dark:text-gray-500 hover:underline"><i class="fa-solid fa-map-marker"></i> <span> {{$data->tribes}}</span></a>

                <h3 class="text-4xl font-bold text-green-600 my-1"> {{$data->local_name}}</h3>
                <p class="dark:text-gray-300 mb-2"><span> {{$data->taxonomists}} </span></p>

                <div class="grid grid-cols-2 text-sm mb-4">
                    <p class="dark:text-gray-500"><i class="fa-solid fa-user"></i> <span> {{$data->full_name}}</span></p>
                    <p class="dark:text-gray-500"><i class="fa-solid fa-calendar-check"></i> <span > {{ date('d-m-Y', strtotime($data->updated_at)) }}</span></p>
                </div>
            </div>
        @endforeach

    </div>
</div> --}}
