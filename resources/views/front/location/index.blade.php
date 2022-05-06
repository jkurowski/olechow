@extends('layouts.page')

@section('meta_title', $page->title)

@section('pageheader')
    @include('layouts.partials.page-header', ['page' => $page, 'header_file' => 'location.jpg'])
@stop

@section('content')
    <div id="location">
        <div class="container container-bg">
            <div class="row m-0">
                <div class="col-4 p-0">
                    <div class="map-nav">
                        <ul class="mb-0 list-unstyled">
                            <li><i class="las la-chalkboard-teacher"></i> Przedszkola i szkoły podstawowe</li>
                            <li><i class="las la-bus"></i> Transport publiczny</li>
                            <li><i class="las la-road"></i> Wylot na Autostradę A1</li>
                            <li><i class="las la-tree"></i> Tereny rekreacyjne, place zabaw, parki rowerowe</li>
                            <li><i class="las la-utensils"></i> Gastronomia</li>
                            <li><i class="las la-stethoscope"></i> Przychodnie publicznych i prywatne</li>
                            <li><i class="las la-star-of-life"></i> Apteki</li>
                            <li><i class="las la-church"></i> Kościoły</li>
                            <li><i class="las la-shopping-cart"></i>Markety, sklepy, drogerie</li>
                        </ul>
                    </div>
                </div>

                <div class="col-8 p-0">
                    <div id="map"></div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-10 pt-5 mt-4">
                    <p class="m-0">Bliski Olechów jest naprawdę bliski! Wszechobecna zieleń, wygodny dojazd do centrum oraz bliskość wszelkich przydatnych punktów handlowo-usługowych, edukacyjnych i ochrony zdrowia to zalety Widzewa. Nasza inwestycja Bliski Olechów jest świetnie zlokalizowana przy ulicy Odnowiciela, w bliskości drogi wylotowej na A1 oraz kilku przystanków komunikacji zarówno tramwajowej jak i autobusowej.</p>
                </div>

                <div class="col-12 mt-3">
                    <div class="location-img mt-5">
                        <div class="location-img-apla location-img-apla-right">
                            <h2>ZIELEŃ I WYPOCZYNEK</h2>
                            <p>Bliski Olechów znajduje się  przy Parku Źródła Olechówki oraz innych terenach zielonych wyposażonych w m.in. tężnię solankową, nowoczesne place zabaw dla dzieci oraz infrastrukturę sportowo-rekreacyjną.</p>
                        </div>
                        <img src="{{ asset('/gfx/park.jpg') }}" alt="">
                    </div>
                </div>

                <div class="col-12 pb-5 mb-5">
                    <div class="location-img">
                        <div class="location-img-apla location-img-apla-left">
                            <h2>NA WYCIĄGNIĘCIE RĘKI</h2>
                            <p>Bliskość przedszkoli i dobrych szkół, przychodni publicznych i prywatnych, szeroki wybór sklepów i aptek oraz świetne miejsca do sportu,  rekreacji i odpoczynku w otoczeniu zieleni to powód, dla którego naszą najnowszą inwestycję zdecydowaliśmy się zrealizować właśnie tutaj.</p>
                        </div>
                        <img src="{{ asset('/gfx/kids.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <link href="{{ asset('/css/leaflet.css') }}" rel="stylesheet">
    <script src="{{ asset('/js/leaflet.js') }}" charset="utf-8"></script>
    <script>
        const tileLayer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            'attribution': 'Map data © <a href="http://openstreetmap.org">OpenStreetMap</a> contributors'
        });

        const featureGroup = L.featureGroup([
            @foreach($markers as $i)
            L.marker([{{ $i->lat }}, {{ $i->lng }}]).bindPopup('<h4>{{ $i->name }}</h4><p>{{ $i->address }}</p>'),
            @endforeach
        ]);

        let map = new L.Map('map', {
            'center': [0, 0],
            'zoom': 0,
            'layers': [tileLayer, featureGroup]
        });

        map.fitBounds(featureGroup.getBounds());
        map.on('popupclose', function(e) {
            map.fitBounds(featureGroup.getBounds());
        });
    </script>
@endpush
