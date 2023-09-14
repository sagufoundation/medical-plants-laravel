<section class="py-9">
    <div class="container max-w-screen-xl mx-auto p-4">
        <form class="" method="get" action="{{route('visitor.thePlants')}}">
            <div class="mb-4 flex justify-between">
                <input class="shadow appearance-none border border-gray-300 rounded-lg w-full px-6 py-6 text-gray-600 leading-tight focus:outline-none focus:shadow-outline focus:shadow-lg focus:border-none transition text-xl" id="" name="keyword" type="text" placeholder="Type your keywords here...">
                <button  type="submit" class="inline-flex items-center justify-center px-6 py-3 font-medium text-center text-white rounded-lg bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900 cursor-pointer ml-3 text-xl focus:outline-none focus:shadow-outline focus:shadow-lg">
                    <i class="fa-solid fa-search mr-2"></i> Search
                </button>
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
