@include('header')

<div class="page">
    <div class="container">
        <div class="flex flex-col items-center py-5">
            {{-- <div class="w-full">
                <div class="w-3/4 m-auto">
                    <img src="{{ Voyager::image(setting('about.about_banner')) }}" alt="">
                </div>
            </div> --}}
            <div class="w-full">
                <h1 class="text-[45px] md:text-[65px] text-center text-theme1 gadugi-bold mb-12"><span class="block text-theme2">Agents List</span></h1>
                <p class="open-sans text-[24px] text-black">
                </p>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4">
        <div class="row" style="height: 80vh;">
            <!-- Map Section -->
            <div class="col-8">
                <div id="map" class="w-100 h-100"></div>
            </div>

            <!-- Agents List Section -->
            <div class="col-4 bg-light border-start">
                <div class="p-3" style="height: 100%; overflow-y: auto;">
                    {{-- <h2 class="fs-1 fw-bold mb-4 text-lg">Agents List</h2> --}}
                    @foreach($locations as $index => $location)
                        <div class="card mb-3 shadow-sm agent-card" data-index="{{ $index }}">
                            <div class="card-body">
                                <h5 class="card-title text-primary">{{ $location->business_name }}</h5>
                                <p class="card-text text-muted">{{ $location->business_phone }}</p>
                                <p class="card-text text-muted">{{ $location->business_email }}</p>
                                <p class="card-text text-muted">{{ $location->business_address }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>      
        </div>
    </div>
</div>



<script async
    src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&callback=initMap&v={{ time() }}">
</script>
<script>
    window.initMap = function() {
        const locations = @json($locations);

        const map = new google.maps.Map(document.getElementById("map"), {
            center: { lat: parseFloat(locations[0].latitude), lng: parseFloat(locations[0].longitude) },
            zoom: 5,
        });

        const infoWindow = new google.maps.InfoWindow();
        const markers = [];

        locations.forEach((location, index) => {
            const marker = new google.maps.Marker({
                position: { lat: parseFloat(location.latitude), lng: parseFloat(location.longitude) },
                map,
                title: location.business_name,
            });

            marker.addListener('click', () => {
                infoWindow.setContent(`
                    <div>
                        <strong>${location.business_name}</strong><br>
                        ${location.business_phone}<br>
                        ${location.business_email}<br>
                        ${location.business_address}
                    </div>
                `);
                infoWindow.open(map, marker);
            });

            markers.push(marker);
        });

        $('.agent-card').on('click', function() {
            const index = $(this).data('index');
            const marker = markers[index];
            const location = locations[index];

            map.panTo(marker.getPosition());

            infoWindow.setContent(`
                <div>
                    <strong>${location.business_name}</strong><br>
                    ${location.business_phone}<br>
                    ${location.business_email}<br>
                    ${location.business_address}
                </div>
            `);
            infoWindow.open(map, marker);
        });
    };
</script>

@include('footer')
