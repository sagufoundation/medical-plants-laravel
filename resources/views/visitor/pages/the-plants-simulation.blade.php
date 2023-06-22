@extends('visitor.layouts.user-app')
    @section('title')
    The Plants - Traditional Medicinal Plants in Papua
    @endsection
@section('content')

<!-- heading start -->
<section class="bg-white dark:bg-gray-900">
    <div class="px-4 mx-auto max-w-screen-xl lg:pt-16 lg:px-6 ">
        <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
            <h2 class="mb-4 text-6xl tracking-tight font-extrabold text-gray-900 dark:text-green-600">The Plants</h2>
            <p class="font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-400">Discover the traditional medicinal plants recognized by Indigenous Papuans in Papua, Indonesia. Our comprehensive database includes information on their traditional uses, chemical properties, and potential health benefits.</p>
        </div>
    </div>
</section>
<!-- heading end -->

    <!-- SEARCH START -->
    <section class="py-9">
        <div class="container max-w-screen-xl mx-auto p-4">
            <form class="" method="get" action="{{ route('visitor.the-plants-simulation') }}">
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
                @if($datas->isEmpty())
                <div class="my-9">
                    <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded " role="alert">
                        <strong class="font-bold">Oops!</strong>
                        <span class="block sm:inline">Data not found. Please try again!</span>
                        </div>
                </div>
                @else

                <div class="container max-w-screen-xl mx-auto p-4 bg-white dark:bg-gray-900 pb-16 pt-16" >
                    
                    

                    <div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 gap-6">
                        <!-- platn's data -->
                        
                            
                        
                        
                            @foreach ($datas as $data )
                                <div>
                                    <a href="#" class="cursor-pointer">
                                        <img  src="{{url($data->cover_picture)}}"  class="mb-4 rounded transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 shadow-md" alt="{{$data->local_name}}">
                                    </a>
                                    <a href="#" class="dark:text-gray-500 hover:underline"><i class="fa-solid fa-map-marker"></i> <span> {{$data->tribes}}</span></a>

                                    <h3 class="text-4xl font-bold text-green-600 my-1"> {{$data->local_name}}</h3>
                                    <p class="dark:text-gray-300 mb-2"><span> {{$data->taxonomists}} </span></p>

                                    <div class="grid grid-cols-2 text-sm mb-4">
                                        <p class="dark:text-gray-500"><i class="fa-solid fa-user"></i> <span> {{$data->contributor->full_name}}</span></p>
                                        <p class="dark:text-gray-500"><i class="fa-solid fa-calendar-check"></i> <span > {{ date('d-m-Y', strtotime($data->updated_at)) }}</span></p>
                                    </div>
                                </div>
                            @endforeach

                       

                        

                    </div>
                    
                    
                    <div id="halaman"></div>
                </div>

                @endif

            </form>
        </div>
    </section>
    <!-- SEARCH END -->

{{-- <script src="./assets/js/dataPlants.js"> </script> --}}
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>
    var count = $('#count').val();
    function halaman(noAwal) {
        keyword(noAwal);
    }

    $('#keyword').on('keyup', function(){
        keyword();
    });

    $('input[name="choose"]').change(function() {
        keyword();
    });

    keyword();
    function keyword(noAwal = null){
         var keyword = $('#keyword').val();

         var choose = $('input[name="choose"]:checked').val();
         $.post('{{ route("filter") }}',
          {
             _token: $('meta[name="csrf-token"]').attr('content'),
             keyword:keyword,
             choose:choose,
             noAwal:noAwal
           },
           function(data){
              post_row(data);
           });
    }
        //row with ajax
    function post_row(res){
    let htmlView = '';
    for(let i = 0; i < res.data.length; i++){
        htmlView += `
        <div>
                                <a href="/detail-plant/`+res.data[i].slug_plant+`" class="cursor-pointer">
                                    <img  src=`+res.data[i].cover_picture+`  class="mb-4 rounded transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 shadow-md" alt="`+res.data[i].local_name+`">
                                </a>
                                <a href="#" class="dark:text-gray-500 hover:underline"><i class="fa-solid fa-map-marker"></i> <span> `+res.data[i].tribes+`</span></a>

                                <h3 class="text-4xl font-bold text-green-600 my-1"> `+res.data[i].local_name+`</h3>
                                <p class="dark:text-gray-300 mb-2"><span> `+res.data[i].taxonomists+` </span></p>

                                <div class="grid grid-cols-2 text-sm mb-4">
                                    <p class="dark:text-gray-500"><i class="fa-solid fa-user"></i> <span>`+res.data[i].full_name+`</span></p>
                                    <p class="dark:text-gray-500"><i class="fa-solid fa-calendar-check"></i> <span > `+res.data[i].updated_at+`</span></p>
                                </div>
                            </div>

            `;
        }

        var jumlahData = res.count;
        var jumlahHalaman = Math.ceil(jumlahData/8);
        var htmlHalaman = `
        {{-- resources/views/vendor/pagination/default.blade.php --}}
                <nav role="navigation"
                aria-label="Pagination Navigation"
                class="flex items-center justify-between p-4 border-t select-none border-secondary-200 dark:border-secondary-600 sm:px-6">


                <div class="flex-col hidden lg:flex-row sm:flex-1 sm:flex sm:items-center sm:justify-between">
                    <div>
                    <p class="text-sm leading-5 dark:text-gray-300">
                    </p>
                    </div>

                    <div>
                    <span class="mt-2 shadow-sm lg:mt-0">
                        {{-- Previous Page Link Disable --}}
                        {{-- <span aria-disabled="true"
                        aria-label="">
                        <span
                            class=" items-center px-2 py-2 text-sm font-medium leading-5 text-gray-400 bg-white border border-gray-300 rounded-l dark:text-gray-400 dark:border-secondary-600 dark:bg-secondary-700"
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


                        {{-- "Three Dots" Separator --}}
                        <span aria-disabled="true">

                        </span>

                        {{-- Array Of Links Disable --}}
                        {{-- <span aria-current="page">
                        <span
                            class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium leading-5 text-gray-400 bg-white border border-gray-300 dark:text-gray-400 dark:border-secondary-600 dark:bg-secondary-700"></span>
                        </span> --}}
                        `;
                        for(let i = 1; i < jumlahHalaman; i++){
                            htmlHalaman +=`
                            {{-- Array Of Links Enable --}}
                        <a onclick="halaman(`+i+`)"
                        class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium leading-5 transition bg-white border border-gray-300 hover:text-gray-400 dark:hover:text-gray-300 focus:z-10 focus:outline-none focus:border-primary-300 focus:ring focus:ring-primary-300 focus:ring-opacity-30 dark:focus:ring-primary-500 dark:focus:ring-opacity-30 dark:text-gray-200 dark:border-secondary-600 dark:bg-secondary-700"
                        aria-label="">
                         `+i+`

                        </a>

                        `;
                        }


                        htmlHalaman +=`

                        {{-- Next Page Link Disable --}}

                    </span>
                    </div>
                </div>
                </nav>
        `;



        $('#dataPlants').html(htmlView);
        $('#halaman').html(htmlHalaman);

    }


        </script>


@stop
