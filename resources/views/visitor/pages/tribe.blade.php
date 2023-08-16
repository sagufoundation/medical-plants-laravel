@extends('visitor.layouts.user-app')
    @section('title')
    The Plants - Traditional Medicinal Plants in Papua
    @endsection
@section('content')


    $('#keyword').on('keyup', function(){
        keyword();
    });
    $('input[name="choose"]').change(function() {
        keyword();
    });
    keyword();
    function keyword(){
         var keyword = $('#keyword').val();
         var location = $('#location').val();
         var choose = $('input[name="choose"]:checked').val();
         $.post('{{ route("location") }}',
          {
             _token: $('meta[name="csrf-token"]').attr('content'),
             keyword:keyword,
             choose:choose,
             location:location,
           },
           function(data){
              post_row(data);
           });
    }
        //row with ajax
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
