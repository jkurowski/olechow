@extends('layouts.page')

@section('meta_title', 'Kontakt')
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)

@section('pageheader')
    @include('layouts.partials.page-header', ['page' => $page, 'header_file' => 'contact.jpg'])
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mb-5">
                <h4 style="color: red;text-align:center;margin-bottom:0;display:none">Dnia 02.05 biuro sprzedaży będzie zamknięte</h4>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="contact-box">
                    <div class="contact-icon">
                        <i class="las la-map-marked-alt"></i>
                    </div>
                    <h3>Adres</h3>
                    <p><a href="https://www.google.com/maps/dir//Bliski+Olech%C3%B3w+-+Madey+Development+Kazimierza+Odnowiciela+13+92-414+%C5%81%C3%B3d%C5%BA/@51.7394061,19.5625714,14z/data=!4m8!4m7!1m0!1m5!1m1!1s0x471a346788b7396b:0xa69303da97516c13!2m2!1d19.5625714!2d51.7394061" target="_blank">ul. Odnowiciela 13, 97-300 Łódź</a></p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="contact-box">
                    <div class="contact-icon">
                        <i class="las la-envelope-open-text"></i>
                    </div>
                    <h3>Napisz do nas</h3>
                    <p><a href="mailto:sprzedaz@madeydevelopment.pl">sprzedaz@madeydevelopment.pl</a></p>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="contact-box">
                    <div class="contact-icon">
                        <i class="las la-phone"></i>
                    </div>
                    <h3>Zadzwoń do nas</h3>
                    <p><a href="tel:+48576117119">+48 576 117 119</a></p>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center pt-4 pt-xl-5 mt-4 mt-xl-5">
            <div class="col-12 col-xl-8">
                <div class="text-center">
                    <h3>Masz pytania?</h3>
                    <p>Nasza kadra to doświadczeni i wykwalifikowani menadżerowie, projektanci, sprzedawcy i inżynierowie, którzy są w stanie sprostać każdemu wyzwaniu, jakie niesie ze sobą proces inwestycyjny.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="googlemap">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15240.947783700245!2d19.56215067501078!3d51.73974500496235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471a346788b7396b%3A0xa69303da97516c13!2sBliski%20Olech%C3%B3w%20-%20Madey%20Development!5e0!3m2!1spl!2spl!4v1650973182034!5m2!1spl!2spl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

@endsection
@push('scripts')
    <script src="{{ asset('js/validation.js') }}" charset="utf-8"></script>
    <script src="{{ asset('js/pl.js') }}" charset="utf-8"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".validateForm").validationEngine({
                validateNonVisibleFields: true,
                updatePromptsPosition:true,
                promptPosition : "topRight:-137px"
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
@endpush
