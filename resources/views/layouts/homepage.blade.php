<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {!! settings()->get("scripts_head") !!}

    <title>{{ settings()->get("page_title") }}</title>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ settings()->get("page_description") }}">
    <meta name="robots" content="{{ settings()->get("page_robots") }}">
    <meta name="author" content="{{ settings()->get("page_author") }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="DNS-prefetch" href="//fonts.googleapis.com"/>

    <!-- Styles -->
    <link rel="preload" as="image" href="{{ asset('/uploads/header_600.jpg') }}" type="image/jpeg">

    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">

    @stack('style')
</head>
<body class="{{ !empty($body_class) ? $body_class : '' }}">
{!! settings()->get("scripts_afterbody") !!}

@include('layouts.partials.header')

<main>
    <div id="slider">
        <div class="slider-carousel">
            <div class="slider-apla">
                <h1>Bliski Olechów <br>Nowe Mieszkania Widzew</h1>
                <div id="homesearch">
                    <div class="form-container">
                        <form method="get" action="{{ route('front.investment.show') }}#filtr" class="row no-gutters">
                            <div class="col-4 form-input">
                                <div class="fake-select">
                                    <select name="rooms">
                                        <option value="">Pokoje</option>
                                        <option value="1">1 pokój</option>
                                        <option value="2">2 pokoje</option>
                                        <option value="3">3 pokoje</option>
                                        <option value="4">4 pokoje</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4 form-input">
                                <div class="fake-select">
                                    <select name="area">
                                        <option value="">Metraż</option>
                                        <option value="">Wszystkie</option>
                                        <option value="25-35">25-35 m²</option>
                                        <option value="35-45">35-45 m²</option>
                                        <option value="45-55">45-55 m²</option>
                                        <option value="55-65">55-65 m²</option>
                                        <option value="65-75">65-75 m²</option>
                                        <option value="75-85">75-85 m²</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4 form-input">
                                <input type="hidden" name="a" value="szukaj">
                                <button type="submit" class="bttn">Szukaj <i class="la la-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="maininvestment">
        <div class="container-fluid green-bg">
            <div class="row">
                <div class="col-12 col-lg-7 p-0">
                    <div class="ratio ratio-16x9">
                        <video width="320" height="240" muted id="video">
                            <source src="{{ asset('/uploads/movie.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
                <div class="col-12 col-lg-5 d-flex align-items-center" data-aos="fade-up" data-aos-offset="600">
                    <div class="maininvestment-text">
                        <h2>Nowe Mieszkania Widzew – odwiedź nas i przekonaj się, że komfortowe życie jest na wyciągnięcie ręki</h2>
                        <p>Bliski Olechów to nowoczesne budownictwo otoczone zielenią, świetnie skomunikowane zarówno samochodem jak i transportem miejskim. Istotnym elementem jest realizowanie  naszej inwestycji z zastosowaniem sprawdzonych materiałów i technologii.</p>
                        <a href="#mainwhy" class="bttn scroll-link" data-offset="20">DLACZEGO WARTO</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-flex justify-content-center" data-aos="fade-up" data-aos-offset="400">
                    <div class="maininvest-cta text-center">
                        <h2>Kup komfortowe mieszkanie <br><span>już od 25 m<sup>2</sup></span></h2>
                    </div>
                </div>
            </div>

            @if($properties->count() > 0)
            <div id="propertiesCarousel">
                <div class="container-fluid">
                    <div id="roomsList" class="row d-flex justify-content-center p-0 border-0">
                        @foreach($properties as $room)
                            <div class="col-3">
                                <div class="mainroom">
                                    <div class="row">
                                        @if($room->price)
                                            <span class="ribbon1"><span>Oferta specjalna</span></span>
                                        @endif
                                        <div class="col-12">
                                            <a href="{{route('front.investment.property.index', ['floor' => $room->floor_id, 'property' => $room->id])}}">
                                                <h2>{{$room->name_list}}<br><span>{{$room->number}}</span></h2>
                                            </a>
                                        </div>
                                        <div class="col-12">
                                            @if($room->file)
                                                <a href="{{route('front.investment.property.index', ['floor' => $room->floor_id, 'property' => $room->id])}}">
                                                <picture>
                                                    <source type="image/webp" srcset="/investment/property/list/webp/{{$room->file_webp}}">
                                                    <source type="image/jpeg" srcset="/investment/property/list/{{$room->file}}">
                                                    <img src="/investment/property/list/{{$room->file}}" alt="{{$room->name}}">
                                                </picture>
                                                </a>
                                            @endif
                                        </div>
                                        <div class="col-12">
                                            <div class="row mt-2 mt-sm-4">
                                                @if($room->price)
                                                    <div class="col-12 ">
                                                        <div class="mainroom-price">
                                                            cena: <b>@money($room->price)</b>
                                                        </div>
                                                    </div>
                                                @endif
                                                <div class="col-12 col-xl-6">pokoje: <b>{{$room->rooms}}</b></div>
                                                <div class="col-12 col-xl-6">pow.: <b>{{$room->area}} m<sup>2</sup></b></div>
                                            </div>
                                        </div>
                                        <div class="col-12 justify-content-center">
                                            <span class="badge room-list-status-{{ $room->status }}">{{ roomStatus($room->status) }}</span>
                                        </div>
                                        <div class="col-12 justify-content-end col-list-btn">
                                            <a href="{{route('front.investment.property.index', ['floor' => $room->floor_id, 'property' => $room->id])}}" class="bttn">ZOBACZ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endif

            <div class="row">
                <div class="col-12 d-flex justify-content-center pb-5" data-aos="fade-up" data-aos-offset="100">
                    <a href="{{ route('front.investment.show') }}" class="bttn">DOSTĘPNE MIESZKANIA</a>
                </div>
            </div>

            <div class="row">
                <div class="col-12 d-flex justify-content-center" data-aos="fade-up" data-aos-offset="300">
                    <div class="maininvest-cta text-center pt-3">
                        <h2>Istnieje możliwość zakupu 2 miejsc postojowych</h2>
                        <h2><b>Szczegóły w biurze sprzedaży</b></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="mainwhy">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center" data-aos="zoom-in" data-aos-offset="300">
                    <h2 class="why-title mt-0">DLACZEGO WARTO KUPIĆ NOWE MIESZKANIE?</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-xl-5 position-relative">
                    <div class="why-carousel-left">
                        <div class="why-carousel-item">
                            <picture>
                                <source type="image/webp" media="(min-width: 560px)" srcset="{{ asset('/uploads/lokalizacja.webp') }}">
                                <source type="image/webp" media="(max-width: 561px)" srcset="{{ asset('/uploads/lokalizacja_560.webp') }}">
                                <source type="image/jpeg" srcset="{{ asset('/uploads/lokalizacja.jpg') }}">
                                <img src="{{ asset('/uploads/lokalizacja.jpg') }}" alt="Budynek inwestycji Bliski Olechów" width="907" height="878">
                            </picture>

                            <div class="why-carousel-apla">
                                <h2>LOKALIZACJA</h2>
                                <p>Zlokalizowany w zielonym sercu Widzewa Bliski Olechów jest świetnie skomunikowany z centrum Łodzi zarówno komunikacją miejską jak i samochodem.</p>
                            </div>
                        </div>
                        <div class="why-carousel-item">
                             <picture>
                                <source type="image/webp" media="(min-width: 560px)" srcset="{{ asset('/uploads/architektura.webp') }}">
                                <source type="image/webp" media="(max-width: 561px)" srcset="{{ asset('/uploads/architektura_560.webp') }}">
                                <source type="image/jpeg" srcset="{{ asset('/uploads/architektura.jpg') }}">
                                 <img src="{{ asset('/uploads/architektura.jpg') }}" alt="Przykładowa aranżacja mieszkania" width="907" height="878">
                            </picture>

                            <div class="why-carousel-apla">
                                <h2>ARCHITEKTURA</h2>
                                <p>Wiemy, że lepiej żyje się w pięknym otoczeniu, dlatego Bliski Olechów został zaprojektowany w ponadczasowym stylu, a słoneczne i rozkładowe mieszkania wyposażone w przestronne balkony lub loggie staną się miejscem komfortowego życia.</p>
                            </div>
                        </div>
                        <div class="why-carousel-item">

                            <picture>
                                <source type="image/webp" media="(min-width: 560px)" srcset="{{ asset('/uploads/bezpieczenstwo.webp') }}">
                                <source type="image/webp" media="(max-width: 561px)" srcset="{{ asset('/uploads/bezpieczenstwo_560.webp') }}">
                                <source type="image/jpeg" srcset="{{ asset('/uploads/bezpieczenstwo.jpg') }}">
                                <img src="{{ asset('/uploads/bezpieczenstwo.jpg') }}" alt="Kamera monitoringu na osiedlu Bliski Olechów" width="907" height="878">
                            </picture>

                            <div class="why-carousel-apla">
                                <h2>BEZPIECZEŃSTWO</h2>
                                <p>Osiedle jest monitorowane, drzwi wejściowe do lokali o podwyższonej odporności na włamania.</p>
                            </div>
                        </div>
                    </div>
                    <div class="why-carousel-nav">
                        <button id="why-carousel-btn-left"><i class="las la-angle-left"></i></button>
                        <button id="why-carousel-btn-right"><i class="las la-angle-right"></i></button>
                    </div>
                </div>
                <div class="col-12 col-xl-7">
                    <div class="why-carousel-right">
                        <div class="why-carousel-item">

                            <picture>
                                <source type="image/webp" media="(min-width: 600px)" srcset="{{ asset('/uploads/zielen-i-wypoczynek.webp') }}">
                                <source type="image/webp" media="(max-width: 601px)" srcset="{{ asset('/uploads/zielen-i-wypoczynek_600.webp') }}">
                                <source type="image/jpeg" srcset="{{ asset('/uploads/zielen-i-wypoczynek.jpg') }}">
                                <img src="{{ asset('/uploads/zielen-i-wypoczynek.jpg') }}" alt="Rodzina na spacerze w okolicy osiedla Bliski Olechów" width="1306" height="880">
                            </picture>

                            <div class="why-carousel-apla">
                                <h2>ZIELEŃ I WYPOCZYNEK</h2>
                                <p>Bliski Olechów znajduje się  przy Parku Źródła Olechówki oraz innych terenach zielonych wyposażonych w m.in. tężnię solankową, nowoczesne place zabaw dla dzieci oraz infrastrukturę sportowo-rekreacyjną.</p>
                            </div>
                        </div>
                        <div class="why-carousel-item">

                            <picture>
                                <source type="image/webp" media="(min-width: 600px)" srcset="{{ asset('/uploads/na-wyciagniecie-reki.webp') }}">
                                <source type="image/webp" media="(max-width: 601px)" srcset="{{ asset('/uploads/na-wyciagniecie-reki_600.webp') }}">
                                <source type="image/jpeg" srcset="{{ asset('/uploads/na-wyciagniecie-reki.jpg') }}">
                                <img src="{{ asset('/uploads/na-wyciagniecie-reki.jpg') }}" alt="Dzieci idące do przedszkola w pobliżu osiedla Bliski Olechów" width="1306" height="880">
                            </picture>

                            <div class="why-carousel-apla">
                                <h2>NA WYCIĄGNIĘCIE RĘKI</h2>
                                <p>Bliskość przedszkoli i dobrych szkół, przychodni publicznych i prywatnych, szeroki wybór sklepów i aptek oraz świetne miejsca do sportu,  rekreacji i odpoczynku w otoczeniu zieleni to powód, dla którego naszą najnowszą inwestycję zdecydowaliśmy się zrealizować właśnie tutaj.</p>
                            </div>
                        </div>
                        <div class="why-carousel-item">

                            <picture>
                                <source type="image/webp" media="(min-width: 600px)" srcset="{{ asset('/uploads/jakosc-za-rozsadna-cene.webp') }}">
                                <source type="image/webp" media="(max-width: 601px)" srcset="{{ asset('/uploads/jakosc-za-rozsadna-cene_600.webp') }}">
                                <source type="image/jpeg" srcset="{{ asset('/uploads/jakosc-za-rozsadna-cene.jpg') }}">
                                <img src="{{ asset('/uploads/jakosc-za-rozsadna-cene.jpg') }}" alt="Przykładowa aranżacja salonu w inwestycji Bliski Olechów" width="1306" height="880">
                            </picture>

                            <div class="why-carousel-apla">
                                <h2>JAKOŚĆ ZA ROZSĄDNĄ CENĘ</h2>
                                <p>Dzięki prawie 20-letniemu doświadczeniu wiemy jak budować wysokiej jakości osiedla w rozsądnej cenie. Bliski Olechów to komfortowe życie w cenie, która pozwala spać spokojnie.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="maingallery">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h2 data-aos="fade-right" data-aos-offset="300">GALERIA</h2>
                </div>
                <div class="col-12 col-sm-6">
                    <ul id="gallery_nav" class="mb-0 list-unstyled d-flex galleryCarouselNav">
                        <li class="active"><a class="change-carousel" href="#gallery_1">Budynek</a></li>
                        <li><a class="change-carousel" href="#gallery_2">Mieszkania</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="galleryContainer">
            <div id="gallery_1" class="slick">
                <ul class="mb-0 list-unstyled mt-3 mt-sm-5">
                    <li>
                        <picture>
                            <source type="image/webp" media="(min-width: 1920px)" srcset="{{ asset('/uploads/budynek_1.webp') }}">
                            <source type="image/webp" media="(min-width: 991px)" srcset="{{ asset('/uploads/budynek_1_991.webp') }}">
                            <source type="image/webp" media="(min-width: 576px)" srcset="{{ asset('/uploads/budynek_1_576.webp') }}">
                            <source type="image/webp" media="(max-width: 577px)" srcset="{{ asset('/uploads/budynek_1_576.webp') }}">
                            <source type="image/jpeg" srcset="{{ asset('/uploads/budynek_1.jpg') }}">
                            <img src="{{ asset('/uploads/budynek_1.jpg') }}" alt="Front budynku osiedla Bliski Olechów" width="1920" height="960">
                        </picture>
                    </li>
                    <li>
                        <picture>
                            <source type="image/webp" media="(min-width: 1920px)" srcset="{{ asset('/uploads/budynek_2.webp') }}">
                            <source type="image/webp" media="(min-width: 991px)" srcset="{{ asset('/uploads/budynek_2_991.webp') }}">
                            <source type="image/webp" media="(min-width: 576px)" srcset="{{ asset('/uploads/budynek_2_576.webp') }}">
                            <source type="image/webp" media="(max-width: 577px)" srcset="{{ asset('/uploads/budynek_2_576.webp') }}">
                            <source type="image/jpeg" srcset="{{ asset('/uploads/budynek_2.jpg') }}">
                            <img src="{{ asset('/uploads/budynek_2.jpg') }}" alt="Dorośli i dzieci przed budynkiem Bliski Olechów" width="1920" height="960">
                        </picture>
                    </li>
                    <li>
                        <picture>
                            <source type="image/webp" media="(min-width: 1920px)" srcset="{{ asset('/uploads/budynek_3.webp') }}">
                            <source type="image/webp" media="(min-width: 991px)" srcset="{{ asset('/uploads/budynek_3_991.webp') }}">
                            <source type="image/webp" media="(min-width: 576px)" srcset="{{ asset('/uploads/budynek_3_576.webp') }}">
                            <source type="image/webp" media="(max-width: 577px)" srcset="{{ asset('/uploads/budynek_3_576.webp') }}">
                            <source type="image/jpeg" srcset="{{ asset('/uploads/budynek_3.jpg') }}">
                            <img src="{{ asset('/uploads/budynek_3.jpg') }}" alt="Wieczór, oświetlony budynek Bliski Olechów" width="1920" height="960">
                        </picture>
                    </li>
                </ul>
                <div class="slick-nav">
                    <div class="slick-count">1/3</div>
                </div>
            </div>
            <div id="gallery_2" class="slick d-none">
                <ul class="mb-0 list-unstyled mt-3 mt-sm-5">
                    <li>
                        <picture>
                            <source type="image/webp" media="(min-width: 1920px)" srcset="{{ asset('/uploads/mieszkanie_1.webp') }}">
                            <source type="image/webp" media="(min-width: 991px)" srcset="{{ asset('/uploads/mieszkanie_1_991.webp') }}">
                            <source type="image/webp" media="(min-width: 576px)" srcset="{{ asset('/uploads/mieszkanie_1_576.webp') }}">
                            <source type="image/webp" media="(max-width: 577px)" srcset="{{ asset('/uploads/mieszkanie_1_576.webp') }}">
                            <source type="image/jpeg" srcset="{{ asset('/uploads/mieszkanie_1.jpg') }}">
                            <img src="{{ asset('/uploads/mieszkanie_1.jpg') }}" alt="Przykładowa aranżacja salonu" width="1920" height="960">
                        </picture>
                    </li>
                    <li>
                        <picture>
                            <source type="image/webp" media="(min-width: 1920px)" srcset="{{ asset('/uploads/mieszkanie_2.webp') }}">
                            <source type="image/webp" media="(min-width: 991px)" srcset="{{ asset('/uploads/mieszkanie_2_991.webp') }}">
                            <source type="image/webp" media="(min-width: 576px)" srcset="{{ asset('/uploads/mieszkanie_2_576.webp') }}">
                            <source type="image/webp" media="(max-width: 577px)" srcset="{{ asset('/uploads/mieszkanie_2_576.webp') }}">
                            <source type="image/jpeg" srcset="{{ asset('/uploads/mieszkanie_2.jpg') }}">
                            <img src="{{ asset('/uploads/mieszkanie_2.jpg') }}" alt="Przykładowa aranżacja pokoju dla dzieci" width="1920" height="960">
                        </picture>
                    </li>
                    <li>
                        <picture>
                            <source type="image/webp" media="(min-width: 1920px)" srcset="{{ asset('/uploads/mieszkanie_3.webp') }}">
                            <source type="image/webp" media="(min-width: 991px)" srcset="{{ asset('/uploads/mieszkanie_3_991.webp') }}">
                            <source type="image/webp" media="(min-width: 576px)" srcset="{{ asset('/uploads/mieszkanie_3_576.webp') }}">
                            <source type="image/webp" media="(max-width: 577px)" srcset="{{ asset('/uploads/mieszkanie_3_576.webp') }}">
                            <source type="image/jpeg" srcset="{{ asset('/uploads/mieszkanie_3.jpg') }}">
                            <img src="{{ asset('/uploads/mieszkanie_3.jpg') }}" alt="Przykładowa aranżacja miejsca do odpoczynku" width="1920" height="960">
                        </picture>
                    </li>
                </ul>
                <div class="slick-nav">
                    <div class="slick-count">1/3</div>
                </div>
            </div>
        </div>
    </section>

    <section id="maincta">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Rodzaje nowych mieszkań</h2>
                    <div class="row">
                        <div class="col-12 col-md-4" data-aos="fade-up" data-aos-offset="300">
                            <h3>2 pok. <span class="green">od 40</span> m<sup>2</sup></h3>
                        </div>
                        <div class="col-12 col-md-4" data-aos="fade-up" data-aos-offset="300" data-aos-delay="300">
                            <h3>3 pok. <span class="green">od 59</span> m<sup>2</sup></h3>
                        </div>
                        <div class="col-12 col-md-4" data-aos="fade-up" data-aos-offset="300" data-aos-delay="600">
                            <h3>4 pok. <span class="green">od 75</span> m<sup>2</sup></h3>
                        </div>
                    </div>
                    <a href="#" class="bttn" data-aos="fade-up" data-aos-offset="300" data-aos-delay="800">WSZYSTKIE MIESZKANIA SPRZEDANE</a>
                </div>
            </div>
        </div>
    </section>

    <section id="mainlocation">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="location-carousel">
                        <picture>
                            <source type="image/webp" media="(min-width: 1920px)" srcset="{{ asset('/gfx/park.webp') }}">
                            <source type="image/webp" media="(min-width: 991px)" srcset="{{ asset('/gfx/park_991.webp') }}">
                            <source type="image/webp" media="(min-width: 576px)" srcset="{{ asset('/gfx/park_576.webp') }}">
                            <source type="image/webp" media="(max-width: 577px)" srcset="{{ asset('/gfx/park_576.webp') }}">
                            <source type="image/jpeg" srcset="{{ asset('/gfx/park.jpg') }}">
                            <img src="{{ asset('/gfx/park.jpg') }}" alt="Uśmiechnięte rodzina spaceruje w parku, w pobliżu osiedla Bliski Olechów" width="1610" height="906">
                        </picture>
                        <picture>
                            <source type="image/webp" media="(min-width: 1920px)" srcset="{{ asset('/gfx/kids.webp') }}">
                            <source type="image/webp" media="(min-width: 991px)" srcset="{{ asset('/gfx/kids_991.webp') }}">
                            <source type="image/webp" media="(min-width: 576px)" srcset="{{ asset('/gfx/kids_576.webp') }}">
                            <source type="image/webp" media="(max-width: 577px)" srcset="{{ asset('/gfx/kids_576.webp') }}">
                            <source type="image/jpeg" srcset="{{ asset('/gfx/kids.jpg') }}">
                            <img src="{{ asset('/gfx/kids.jpg') }}" alt="Dzieci idą do przedszkola w pobliżu osiedla Bliski Olechów" width="1610" height="906">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
        <div class="container container-offset">
            <div class="row">
                <div class="order-2 order-md-1 col-12 col-md-5 d-flex justify-content-center align-items-end pt-4 pt-md-0">
                    <a href="{{ route('front.location.index') }}" class="bttn">ATUTY LOKALIZACJI</a>
                </div>
                <div class="order-1 order-md-2 col-12 col-md-7">
                    <div class="location-apla">
                        <h2>LOKALIZACJA NOWYCH MIESZKAŃ NA OLECHOWIE</h2>
                        <p><b>Bliski Olechów jest naprawdę bliski</b>! Wszechobecna zieleń, wygodny dojazd do centrum oraz bliskość wszelkich przydatnych punktów handlowo-usługowych, edukacyjnych i ochrony zdrowia to zalety Widzewa. Nasza inwestycja Bliski Olechów jest świetnie zlokalizowana przy ulicy Odnowiciela, w bliskości drogi wylotowej na A1 oraz kilku przystanków komunikacji zarówno tramwajowej jak i autobusowej.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="maininvestor">
        <div class="container">
            <div class="row">
                <div class="col-6 d-none d-xl-block" data-aos="fade-right" data-aos-offset="600">
                    <div class="maininvestor-img">
                        <picture class="d-none d-xl-block">
                            <source type="image/webp" media="(min-width: 1200px)" srcset="{{ asset('/uploads/inwestor.webp') }}">
                            <source type="image/webp" media="(max-width: 1201px)" srcset="{{ asset('/uploads/inwestor_300.webp') }}">
                            <source type="image/jpeg" srcset="{{ asset('/uploads/inwestor.jpg') }}">
                            <img src="{{ asset('/uploads/inwestor.jpg') }}" alt="Zakończona inwestycja dewelopera Madey Development" width="800" height="1100" loading="lazy">
                        </picture>
                    </div>
                </div>
                <div class="col-12 col-xl-6 d-flex align-items-center" data-aos="fade-left" data-aos-offset="400">
                    <div class="maininvestor-text">
                        <img src="{{ asset('/gfx/logo-kolor.png') }}" alt="Logo firmy Madey Development" width="250" height="72">
                        <h2>Jesteśmy partnerem, któremu możesz zaufać.</h2>
                        <p>Madey Development jest częścią Grupy Madej która od blisko 20 lat realizuje obiekty kubaturowe i inżynieryjne. Wiemy jak budować dobrze, sprawnie i na lata – jesteśmy dumni z naszych realizacji, które przetrwały próbę czasu, a nasi klienci z radością je użytkują.</p>
                        <p>Do każdego projektu podchodzimy z rozwagą i dobrym rozumieniem potrzeb naszych klientów; wiemy jak budować, by na kreowanych przez nas osiedlach żyło się komfortowo. Wieloletnie doświadczenie pomaga w tworzeniu inwestycji najwyższej jakości: o ponadczasowej architekturze, ze sprawdzonych jakości materiałów i z największą starannością wykonania.</p>
                        <p>W Madey Development mamy poczucie odpowiedzialności za to, co robimy i wierzymy, że w tak ważnej sprawie jak budowa domu a tym samym tworzenie powierzchni do życia,  nie można chodzić na skróty. Naszą misją jest tworzenie przestrzeni do komfortowego życia i robimy to z ogromną pasją i zaangażowaniem Dlatego nasze realizacje są zawsze przemyślane i doskonale zrealizowane.</p>
                        <img src="https://www.madeydevelopment.pl/files/upload/pzfd-logo.png" alt="Logo PZFD" style="width: 190px;margin-top: 20px;">
                        <a href="https://www.madeydevelopment.pl/inwestor/" class="bttn" target="_blank">O INWESTORZE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="maincontact">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center" data-aos="flip-left" data-aos-offset="400">
                        <img src="{{ asset('/gfx/logo.svg') }}" alt="Logo Bliski Olechów" width="209" height="263" class="m-auto" loading="lazy">
                        <h6>ul. Odnowiciela 13, 97-300 Łódź</h6>
                    </div>
                </div>
                <div class="col-12">
                    <div class="maincontact-row">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-border" data-aos="fade-right" data-aos-offset="400">
                                <div class="maincontact-item d-flex justify-content-center justify-content-sm-end">
                                    <i class="las la-envelope-open-text"></i>
                                    <a href="mailto:sprzedaz@madeydevelopment.pl">sprzedaz@madeydevelopment.pl</a>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6" data-aos="fade-left" data-aos-offset="400">
                                <div class="maincontact-item">
                                    <i class="las la-phone"></i>
                                    <a href="tel:+48576117119">+48 576 117 119</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@include('layouts.partials.footer')

@include('layouts.partials.cookies')

<link href="{{ asset('/css/styles.min.css?v=141222') }}" rel="stylesheet">

<!-- jQuery -->
<script src="{{ asset('/js/jquery.min.js') }}" charset="utf-8"></script>
<script src="{{ asset('/js/bootstrap.bundle.min.js') }}" charset="utf-8"></script>
<script src="{{ asset('/js/app.min.js') }}" charset="utf-8"></script>

<script src="{{ asset('/js/validation.min.js') }}" charset="utf-8"></script>
<script src="{{ asset('/js/pl.js') }}" charset="utf-8"></script>

@if(settings()->get("popup_status") == 1)
    <div class="modal" tabindex="-1" id="popModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {!! settings()->get("popup_text") !!}
                </div>
            </div>
        </div>
    </div>
@endif
<script type="text/javascript">
    $(document).ready(function(){
        @if(settings()->get("popup_status") == 1)
            const popModal = new bootstrap.Modal(document.getElementById('popModal'), {
                keyboard: false
            });
        @endif
        @if($popup == 1)
        popModal.show();
            setTimeout( function(){
                popModal.hide();
            }, {{ settings()->get("popup_timeout") }} );
        @endif
    });
</script>

@stack('scripts')

<script type="text/javascript">
    let video = document.getElementById('video')

    function playVideoOnScroll () {
        const vp = window.innerHeight;
        let offset = video.getBoundingClientRect().top

        if (offset < (vp - (vp / 3)) && offset > 0) {
            video.play();
        } else {
            video.pause();
        }
    }

    window.addEventListener('scroll', playVideoOnScroll, false)
    window.addEventListener('resize', playVideoOnScroll, false)

    AOS.init({disable: 'mobile'});

    WebFontConfig = {
        google: { families: [ 'Merriweather:300,400,700,900|Montserrat:400,500,600' ] }
    };

    (function(d) {
        var wf = d.createElement('script'), s = d.scripts[0];
        wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
        wf.async = true;
        s.parentNode.insertBefore(wf, s);
    })(document);

    jQuery.event.special.touchstart = {
        setup: function( _, ns, handle ) {
            this.addEventListener("touchstart", handle, { passive: !ns.includes("noPreventDefault") });
        }
    };
    jQuery.event.special.touchmove = {
        setup: function( _, ns, handle ) {
            this.addEventListener("touchmove", handle, { passive: !ns.includes("noPreventDefault") });
        }
    };
    jQuery.event.special.wheel = {
        setup: function( _, ns, handle ){
            this.addEventListener("wheel", handle, { passive: true });
        }
    };
    jQuery.event.special.mousewheel = {
        setup: function( _, ns, handle ){
            this.addEventListener("mousewheel", handle, { passive: true });
        }
    };
    $(document).ready(function(){
        $(".validateForm").validationEngine({
            validateNonVisibleFields: true,
            updatePromptsPosition:true,
            promptPosition : "topRight:-137px"
        });

        $(".change-carousel").click(function (e) {
            e.preventDefault();
            const carousel = $(this).attr('href');
            $('.galleryContainer .slick').addClass('d-none');
            $('.galleryContainer .slick-initialized').slick('unslick');
            //
            console.log(carousel);
            //
            $(carousel).removeClass('d-none');
            $(carousel + " ul").slick();
            $('.galleryCarouselNav li').removeClass('active');
            $(this).parent().addClass('active');
        });
        $("#gallery_1 ul").slick();

        @if($properties->count() > 4)
        $("#roomsList").slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1700,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 1199,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 700,
                    settings: {
                        slidesToShow: 1
                    }
                },
            ]
        });
        @endif

        $(".location-carousel").slick();
        $(".why-carousel-left, .why-carousel-right").slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows:false,
            dots: false,
            vertical: true,
        });
        $('.why-carousel-left, .why-carousel-right').on('afterChange', function(event, slick, direction){
            $('.why-carousel-apla').fadeIn();
        });

        $('.why-carousel-left, .why-carousel-right').on('beforeChange', function(event, slick, direction){
            $('.why-carousel-apla').hide();
        });

        $('#why-carousel-btn-left').click(function () {
            $('.why-carousel-left').slick('slickNext');
            $('.why-carousel-right').slick('slickPrev');
        });

        $('#why-carousel-btn-right').click(function () {
            $('.why-carousel-right').slick('slickNext');
            $('.why-carousel-left').slick('slickPrev');
        });

        $(".slick ul").on("afterChange", function(event, slick, currentSlide){
            $(".slick-count").text(parseInt(slick.currentSlide + 1) + '/' + slick.slideCount);
        });
    });
    @if (session('success')||session('warning'))
    $(window).load(function() {
        const aboveHeight = $('header').outerHeight();
        $('html, body').stop().animate({
            scrollTop: $('.alert').offset().top-aboveHeight
        }, 1500, 'easeInOutExpo');
    });
    @endif
</script>

{!! settings()->get("scripts_beforebody") !!}

</body>
</html>
