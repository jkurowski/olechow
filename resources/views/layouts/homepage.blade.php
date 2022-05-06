<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
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
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/styles.min.css') }}" rel="stylesheet">

    @stack('style')
</head>
<body class="{{ !empty($body_class) ? $body_class : '' }}">

@include('layouts.partials.header')

<main>

    <div id="slider">
        <div class="slider-carousel">

        </div>
    </div>

    <section id="maininvestment">
        <div class="container-fluid green-bg">
            <div class="row">
                <div class="col-6 p-0">
                    <img src="{{ asset('/uploads/mainabout.jpg') }}" alt="">
                </div>
                <div class="col-6 d-flex align-items-center">
                    <div class="maininvestment-text">
                        <h2>Bliski Olechów – odwiedź nas i przekonaj się, że komfortowe życie jest na wyciągnięcie ręki</h2>
                        <p>Bliski Olechów to nowoczesne budownictwo otoczone zielenią, świetnie skomunikowane zarówno samochodem jak i transportem miejskim. Istotnym elementem jest realizowanie  naszej inwestycji z zastosowaniem sprawdzonych materiałów i technologii.</p>
                        <a href="" class="bttn">DLACZEGO WARTO</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-6 p-0"></div>
                <div class="col-6 d-flex justify-content-center">
                    <div class="maininvest-cta text-center">
                        <h2>Kup apartament już <br><span>od 6.500 zł/m<sup>2</sup></span></h2>
                        <a href="{{ route('front.investment.show') }}" class="bttn">DOSTĘPNE MIESZKANIA</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="mainwhy">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="why-title">DLACZEGO WARTO?</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-5 position-relative">
                    <div class="why-carousel-left">
                        <div class="why-carousel-item">
                            <img src="https://placehold.co/909x880" alt="">
                            <div class="why-carousel-apla">
                                <h2>LOKALIZACJA</h2>
                                <p>Zlokalizowany w zielonym sercu Widzewa Bliski Olechów jest świetnie skomunikowany z centrum Łodzi zarówno komunikacją miejską jak i samochodem.</p>
                            </div>
                        </div>
                        <div class="why-carousel-item">
                            <img src="https://placehold.co/909x880" alt="">
                            <div class="why-carousel-apla">
                                <h2>ARCHITEKTURA</h2>
                                <p>Wiemy, że lepiej żyje się w pięknym otoczeniu, dlatego Bliski Olechów został zaprojektowany w ponadczasowym stylu, a słoneczne i rozkładowe mieszkania wyposażone w przestronne balkony lub loggie staną się miejscem komfortowego życia.</p>
                            </div>
                        </div>
                        <div class="why-carousel-item">
                            <img src="https://placehold.co/909x880" alt="">
                            <div class="why-carousel-apla">
                                <h2>BEZPIECZEŃSTWO</h2>
                                <p>Osiedle jest monitorowane, każde mieszkanie wyposażone w system SmartHome - instalacje alarmową, drzwi wejściowe do lokali o podwyższonej odporności na włamania.</p>
                            </div>
                        </div>
                    </div>
                    <div class="why-carousel-nav">
                        <button id="why-carousel-btn-left"><i class="las la-angle-left"></i></button>
                        <button id="why-carousel-btn-right"><i class="las la-angle-right"></i></button>
                    </div>
                </div>
                <div class="col-7">
                    <div class="why-carousel-right">
                        <div class="why-carousel-item">
                            <img src="https://placehold.co/1302x880" alt="">
                            <div class="why-carousel-apla">
                                <h2>ZIELEŃ I WYPOCZYNEK</h2>
                                <p>Bliski Olechów znajduje się  przy Parku Źródła Olechówki oraz innych terenach zielonych wyposażonych w m.in. tężnię solankową, nowoczesne place zabaw dla dzieci oraz infrastrukturę sportowo-rekreacyjną.</p>
                            </div>
                        </div>
                        <div class="why-carousel-item">
                            <img src="https://placehold.co/1302x880" alt="">
                            <div class="why-carousel-apla">
                                <h2>NA WYCIĄGNIĘCIE RĘKI</h2>
                                <p>Bliskość przedszkoli i dobrych szkół, przychodni publicznych i prywatnych, szeroki wybór sklepów i aptek oraz świetne miejsca do sportu,  rekreacji i odpoczynku w otoczeniu zieleni to powód, dla którego naszą najnowszą inwestycję zdecydowaliśmy się zrealizować właśnie tutaj.</p>
                            </div>
                        </div>
                        <div class="why-carousel-item">
                            <img src="https://placehold.co/1302x880" alt="">
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
                <div class="col-6">
                    <h2>GALERIA</h2>
                </div>
                <div class="col-6">
                    <ul id="gallery_nav" class="mb-0 list-unstyled d-flex galleryCarouselNav">
                        <li class="active"><a class="change-carousel" href="#gallery_1">Budynek</a></li>
                        <li><a class="change-carousel" href="#gallery_2">Mieszkania</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="galleryContainer">
            <div id="gallery_1" class="slick">
                <ul class="mb-0 list-unstyled mt-5">
                    <li><img src="{{ asset('/uploads/budynek_1.jpg') }}" alt=""></li>
                    <li><img src="{{ asset('/uploads/budynek_2.jpg') }}" alt=""></li>
                    <li><img src="{{ asset('/uploads/budynek_3.jpg') }}" alt=""></li>
                </ul>
                <div class="slick-nav">
                    <div class="slick-count">1/3</div>
                </div>
            </div>
            <div id="gallery_2" class="slick d-none">
                <ul class="mb-0 list-unstyled mt-5">
                    <li><img src="{{ asset('/uploads/mieszkanie_1.jpg') }}" alt=""></li>
                    <li><img src="{{ asset('/uploads/mieszkanie_2.jpg') }}" alt=""></li>
                    <li><img src="{{ asset('/uploads/mieszkanie_3.jpg') }}" alt=""></li>
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
                    <h2>Kup apartament już od <span class="green">6.500 zł/m<sup>2</sup></span></h2>
                    <a href="{{ route('howtobuy.index') }}" class="bttn">DOWIEDZ SIĘ JAK</a>
                </div>
            </div>
        </div>
    </section>

    <section id="mainlocation">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="location-carousel">
                        <img src="{{ asset('/gfx/park.jpg') }}" alt="">
                        <img src="{{ asset('/gfx/kids.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container container-offset">
            <div class="row">
                <div class="col-5 d-flex justify-content-center align-items-end">
                    <a href="{{ route('front.location.index') }}" class="bttn">ATUTY LOKALIZACJI</a>
                </div>
                <div class="col-7">
                    <div class="location-apla">
                        <h2>LOKALIZACJA</h2>
                        <p><b>Bliski Olechów jest naprawdę bliski</b>! Wszechobecna zieleń, wygodny dojazd do centrum oraz bliskość wszelkich przydatnych punktów handlowo-usługowych, edukacyjnych i ochrony zdrowia to zalety Widzewa. Nasza inwestycja Bliski Olechów jest świetnie zlokalizowana przy ulicy Odnowiciela, w bliskości drogi wylotowej na A1 oraz kilku przystanków komunikacji zarówno tramwajowej jak i autobusowej.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="maininvestor">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="maininvestor-img">
                        <img src="{{ asset('/uploads/inwestor.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-6 d-flex align-items-center">
                    <div class="maininvestor-text">
                        <img src="{{ asset('/gfx/logo-kolor.png') }}" alt="Logo Madey Development">
                        <h2>Jesteśmy partnerem, któremu możesz zaufać.</h2>
                        <p>Madey Development jest częścią Grupy Madej która od blisko 20 lat realizuje obiekty kubaturowe i inżynieryjne. Wiemy jak budować dobrze, sprawnie i na lata – jesteśmy dumni z naszych realizacji, które przetrwały próbę czasu, a nasi klienci z radością je użytkują.</p>
                        <p>Do każdego projektu podchodzimy z rozwagą i dobrym rozumieniem potrzeb naszych klientów; wiemy jak budować, by na kreowanych przez nas osiedlach żyło się komfortowo. Wieloletnie doświadczenie pomaga w tworzeniu inwestycji najwyższej jakości: o ponadczasowej architekturze, ze sprawdzonych jakości materiałów i z największą starannością wykonania.</p>
                        <p>W Madey Development mamy poczucie odpowiedzialności za to, co robimy i wierzymy, że w tak ważnej sprawie jak budowa domu a tym samym tworzenie powierzchni do życia,  nie można chodzić na skróty. Naszą misją jest tworzenie przestrzeni do komfortowego życia i robimy to z ogromną pasją i zaangażowaniem Dlatego nasze realizacje są zawsze przemyślane i doskonale zrealizowane.</p>
                        <a href="https://www.madeydevelopment.pl/" class="bttn" target="_blank">O INWESTORZE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="maincontact">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <img src="{{ asset('/gfx/logo.svg') }}" alt="Logo Bliski Olechów" width="209" height="263" class="m-auto">
                        <h6>ul. Wschodnia 2, 97-300 Łódź</h6>
                    </div>
                </div>
                <div class="col-12">
                    <div class="maincontact-row">
                        <div class="row">
                            <div class="col-6 col-border">
                                <div class="maincontact-item d-flex justify-content-end">
                                    <i class="las la-envelope-open-text"></i>
                                    <a href="mailto:sprzedaz@bliski-olechów.pl">sprzedaz@bliski-olechów.pl</a>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="maincontact-item">
                                    <i class="las la-phone"></i>
                                    <a href="tel:+48 570 880 110">+48 570 880 110</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center mt-4">
                <div class="col-12">
                    @if (session('success'))
                        <div class="alert alert-success border-0">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('warning'))
                        <div class="alert alert-warning border-0">
                            {{ session('warning') }}
                        </div>
                    @endif
                </div>
                <div class="col-6">
                    <form method="post" id="homepage-form" action="" class="validateForm">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-6 form-input">
                                <label for="form_name">Imię <span class="text-danger">*</span></label>
                                <input name="form_name" id="form_name" class="validate[required] form-control @error('form_name') is-invalid @enderror" type="text" value="{{ old('form_name') }}">

                                @error('name')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                            <div class="col-6 form-input">
                                <label for="form_email">E-mail <span class="text-danger">*</span></label>
                                <input name="form_email" id="form_email" class="validate[required] form-control @error('form_email') is-invalid @enderror" type="text" value="{{ old('form_email') }}">

                                @error('email')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="col-12 mt-1 form-input">
                                <label for="form_message">Treść wiadomości <span class="text-danger">*</span></label>
                                <textarea rows="5" cols="1" name="form_message" id="form_message" class="validate[required] form-control @error('form_message') is-invalid @enderror">{{ old('form_message') }}</textarea>

                                @error('message')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="rodo-obligation mt-4">
                                    <p>Suspendisse efficitur, lorem id blandit interdum, ante eros feugiat ipsum, at laoreet sem libero nec ligula. Praesent varius, urna vitae ornare facilisis, risus purus vulputate odio, nec consectetur nisl nulla congue mi. Pellentesque eget massa facilisis, dapibus massa tincidunt, pretium arcu. Integer eget suscipit nibh, in efficitur ex. (<a href="" target="_blank">Polityka informacyjna</a>):</p>
                                </div>
                            </div>
                            <div class="rodo-rules">
                                @foreach ($rules as $r)
                                    <div class="col-12">
                                        <div class="rodo-rule clearfix">
                                            <input name="rule_{{$r->id}}" id="rule_{{$r->id}}" value="1" type="checkbox" @if($r->required === 1) class="validate[required]" @endif data-prompt-position="topLeft:0">
                                            <label for="zgoda_{{$r->id}}" class="rules-text">{!! $r->text !!}</label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="row row-form-submit">
                            <div class="col-12 pt-3">
                                <div class="input text-center">
                                    <input name="form_page" type="hidden" value="homepage">
                                    <script type="text/javascript">
                                        document.write("<button class=\"bttn\" type=\"submit\">WYŚLIJ WIADOMOŚĆ</button>");
                                    </script>
                                    <noscript><p><b>Do poprawnego działania, Java musi być włączona.</b><p></noscript>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

@include('layouts.partials.footer')

@include('layouts.partials.cookies')

@include('inline.modal')

<!-- jQuery -->
<script src="{{ asset('/js/jquery.min.js') }}" charset="utf-8"></script>
<script src="{{ asset('/js/bootstrap.bundle.min.js') }}" charset="utf-8"></script>
<script src="{{ asset('/js/app.js') }}" charset="utf-8"></script>

<script src="{{ asset('/js/validation.js') }}" charset="utf-8"></script>
<script src="{{ asset('/js/pl.js') }}" charset="utf-8"></script>

@stack('scripts')

<script type="text/javascript">
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
    $(window).load(function() {

    });
</script>

</body>
</html>
