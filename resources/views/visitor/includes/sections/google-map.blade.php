<section>
    <div>
            <div id="map" class="p-5" style="height: 800px;"></div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap" async defer></script>

    <script>
        function initMap() {
            var mapCanvas = document.getElementById('map');

            // Center maps
            var myLatlng = new google.maps.LatLng(-4.8302525,137.8090696,6);

            // Map Options
            var mapOptions = {
                zoom: 6,
                center: myLatlng
            };

            // Create the Map
            map = new google.maps.Map(mapCanvas, mapOptions);

            var infoWindow = new google.maps.InfoWindow;

            //request data from data-maps.php
            // $.getJSON("http://127.0.0.1:8000/json", function(data) {
            $.getJSON({!! json_encode(url('/json')) !!}, function(data) {

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
                                    <h5> <a href="/tribe/${item.slug}" target="_blank"> ${item.tribes} </a>   <h5>
                                </div> `;


                    text.textContent = string;


                    infowincontent.textContent  = string;
                    var url = `${item.icon_img}`
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
    </div>
</section>
