
@extends('admin.layouts.admin-app')
    @section('title')
    Location {{$judul}} - Admin Traditional Medicinal Plants in Papua
    @endsection
@section('content')

<section>
    <div class="py-8 px-4 ml-64 lg:py-16 lg:px-6">
        <div class="text-gray-500 sm:text-lg dark:text-gray-400">
            <h2 class="mb-4 text-4xl tracking-tight font-bold text-gray-700">Data Location {{$judul}}</h2>
            {{-- <p class="mb-4 font-light">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident pariatur fugit, dolorem possimus vel eius totam ad aut dolores atque!</p> --}}
        </div>

        <a href="{{route('admin.location.create')}}" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900 mb-5 hover:shadow-lg transition"> Add Data <div class="fa-solid fa-plus ms-2"></div>  </a>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Icon
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tribes
                        </th>
                        <th scope="col" class="px-6 py-3">
                           Desc
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Long
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Lat
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Option
                        </th>
                    </tr>
                </thead>
                <tbody >
                    <tbody>
                        @foreach ($all as $data )
                        <tr>
                            <td scope="col" class="px-6 py-3">
                                @if ($data->icon_img == null)
                                    <img class="w-8 h-8 " src="/assets/img/pin.png" alt="{{$data->icon_name}}">
                                @else
                                    <img class="w-8 h-8 " src="{{url($data->icon_img)}}">
                                @endif
                            </td>

                            <td scope="col" class="px-6 py-3">
                                {{$data->tribes}}
                            </td>
                            <td scope="col" class="px-6 py-3">
                                {{$data->desc}}
                            </td>
                            <td scope="col" class="px-6 py-3">
                                {{$data->long}}
                            </td>
                            <td scope="col" class="px-6 py-3">
                                {{$data->lat}}
                            </td>
                            <td scope="col" class="px-6 py-3">
                                <a href="{{ route('admin.location.show',$data->slug)}}" class="bg-green-700 hover:bg-green-800 text-gray-200 px-3 py-2 rounded transition"><i class="fa-solid fa-eye"></i> Preview</a>

                                <a href="{{ route('admin.location.edit', $data->slug)}}" class="bg-green-700 hover:bg-green-800 text-gray-200 px-3 py-2 rounded transition"><i class="fa-solid fa-pencil"></i></a>

                                <form action="{{ route('admin.location.destroy', $data->slug) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-green-700 hover:bg-green-800 text-gray-200 px-3 py-2 rounded transition"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>

                </tbody>
            </table>

        </div>

        <div class="container shadow mt-8">
            <div id="map" class="p-5" style="height: 800px;"></div>
        </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap" async defer></script>

    <script>
        function initMap() {

            var mapCanvas = document.getElementById('map');

            // Center maps
            var myLatlng = new google.maps.LatLng(-4.8591005, 133.311057);

            // Map Options
            var mapOptions = {
                zoom: 6,
                center: myLatlng
            };

            // Create the Map
            map = new google.maps.Map(mapCanvas, mapOptions);

            var infoWindow = new google.maps.InfoWindow;

            //request data from data-maps.php
            $.getJSON("http://127.0.0.1:8000/admin/location/json", function(data) {

                //parsing data json
                $.each(data, function(i, item) {
                    console.info(item.lat);
                    console.info(item.long);
                    //set point marker
                    var point = new google.maps.LatLng(
                        parseFloat(item.lat),
                        parseFloat(item.long));
                    //create pop up info header
                    var infowincontent = document.createElement('div');
                    var strong = document.createElement('strong');
                    strong.textContent = item.tribes;

                    infowincontent.appendChild(document.createElement('br'));

                    // //create pop up info content
                    var text = document.createElement('text');
                    var string = `<div class="p-3">

                    <h5> <a href="detail.php?nama-tempat=${item.tribes}" target="_blank"> ${item.tribes} </a>   <h5>
                    </div>
                    `;


                    text.textContent = string;


                    infowincontent.textContent  = string;
                    var url = `/${item.icon_img}`
                console.info(url);

                    //marker option
                    var marker = new google.maps.Marker({
                        map: map,
                        position: point,
                        icon: url
                    });

                    //popup info
                    marker.addListener('click', function() {
                        infoWindow.setContent(string);
                        infoWindow.open(map, marker);
                    });

                });

            });
        }
    </script>
</section>

@stop
