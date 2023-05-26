@extends('visitor.layouts.user-app')
    @section('title')
    The Plants - Traditional Medicinal Plants in Papua
    @endsection
@section('content')

<!-- heading start -->
<section class="bg-white dark:bg-gray-900">
    <div class="px-4 mx-auto max-w-screen-xl lg:pt-16 lg:px-6 ">
        <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
            <h2 class="mb-4 text-6xl tracking-tight font-extrabold text-gray-900 dark:text-green-600">The Plants {{$data->tribes}} </h2>
            <p class="font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-400">Discover the traditional medicinal plants recognized by Indigenous Papuans in Papua, Indonesia. Our comprehensive database includes information on their traditional uses, chemical properties, and potential health benefits.</p>
        </div>
    </div>
</section>
<!-- heading end -->

    <!-- SEARCH START -->
    <section class="py-9">
        <div class="container max-w-screen-xl mx-auto p-4">
            <form class="" method="" action="">
                @csrf
                <input type="hidden" name="location" id="location" value="{{$data->slug}}">
                <div class="mb-4 flex justify-between">
                    <input
                        class="shadow appearance-none border border-gray-300 rounded-lg w-full px-6 py-6 text-gray-600 leading-tight focus:outline-none focus:shadow-outline focus:shadow-lg focus:border-none transition text-xl"
                        id="keyword" type="text" name="keyword" required placeholder="Type your keywords here...">
                </div>

                <div class="lg:w-2/3">
                    <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">Filter by</h3>
                    <ul
                        class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white shadow-sm">
                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                            <div class="flex items-center pl-3">
                                <input id="choose" type="radio" value="plant" name="choose" required
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500 cursor-pointer">
                                <label for="choose"
                                    class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300 cursor-pointer">Plant name</label>
                            </div>
                        </li>
                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                            <div class="flex items-center pl-3">
                                <input id="choose" type="radio" value="tribe" name="choose" required
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500 cursor-pointer">
                                <label for="choose"
                                    class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300 cursor-pointer">Tribe</label>
                            </div>
                        </li>

                        <li class="w-full dark:border-gray-600">
                            <div class="flex items-center pl-3">
                                <input id="choose" type="radio" value="contributor" name="choose" required
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500 cursor-pointer">
                                <label for="choose"
                                    class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300 cursor-pointer">Contributor name</label>
                            </div>
                        </li>
                    </ul>

                </div>
                <div class="container max-w-screen-xl mx-auto p-4 bg-white dark:bg-gray-900 pb-16 pt-16" >

                    <div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 gap-6" id="dataPlants">
                        <!-- platn's data -->
                        {{-- @foreach ($all as $data )
                            <div>
                                <a href="#" class="cursor-pointer">
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
                        @endforeach --}}

                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- SEARCH END -->

{{-- <script src="./assets/js/dataPlants.js"> </script> --}}
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>
    $('#keyword').on('keyup', function(){
        keyword();
    });
    // $('input[name="choose"]').change(function() {
    //     keyword();
    // });
    keyword();
    function keyword(){
         var keyword = $('#keyword').val();
         var location = $('#location').val();
         var choose = $('input[name="choose"]:checked').val();
         $.post('{{ route("filter") }}',
          {
             _token: $('meta[name="csrf-token"]').attr('content'),
             keyword:keyword,
             choose:choose,
             location:location,
           },
           function(data){
            console.info(data);
              post_row(data);
           });
    }
        //row with ajax
    function post_row(res){
    let htmlView = '';
    for(let i = 0; i < res.length; i++){
        htmlView += `
        <div>
                                <a href="/detail-plant/`+res[i].slug_plant+`" class="cursor-pointer">
                                    <img  src=`+res[i].cover_picture+`  class="mb-4 rounded transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 shadow-md" alt="`+res[i].local_name+`">
                                </a>
                                <a href="#" class="dark:text-gray-500 hover:underline"><i class="fa-solid fa-map-marker"></i> <span> `+res[i].tribes+`</span></a>

                                <h3 class="text-4xl font-bold text-green-600 my-1"> `+res[i].local_name+`</h3>
                                <p class="dark:text-gray-300 mb-2"><span> `+res[i].taxonomists+` </span></p>

                                <div class="grid grid-cols-2 text-sm mb-4">
                                    <p class="dark:text-gray-500"><i class="fa-solid fa-user"></i> <span>`+res[i].full_name+`</span></p>
                                    <p class="dark:text-gray-500"><i class="fa-solid fa-calendar-check"></i> <span > `+res[i].updated_at+`</span></p>
                                </div>
                            </div>

            `;
        }
        $('#dataPlants').html(htmlView);

    }
        </script>


@stop
