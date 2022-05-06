@extends('layouts.page')

@section('meta_title', 'Kontakt')

@section('pageheader')
    @include('layouts.partials.page-header', ['page' => $page, 'header_file' => 'contact.jpg'])
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="contact-box">
                    <div class="contact-icon">
                        <i class="las la-map-marked-alt"></i>
                    </div>
                    <h3>Adres</h3>
                    <p>ul. Odnowiciela 13, 97-300 Łódź</p>
                </div>
            </div>
            <div class="col-4">
                <div class="contact-box">
                    <div class="contact-icon">
                        <i class="las la-envelope-open-text"></i>
                    </div>
                    <h3>Napisz do nas</h3>
                    <p><a href="mailto:sprzedaz@bliski-olechów.pl">sprzedaz@bliski-olechów.pl</a></p>
                </div>
            </div>
            <div class="col-4">
                <div class="contact-box">
                    <div class="contact-icon">
                        <i class="las la-phone"></i>
                    </div>
                    <h3>Zadzwoń do nas</h3>
                    <p><a href="tel:+48534664737">+48 534 664 737</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="tel:+48882482077">+48 882 482 077</a></p>
                </div>
            </div>
        </div>


        <div class="row d-flex justify-content-center pt-5 mt-5">
            <div class="col-8">
                <div class="text-center">
                    <h3>Masz pytania?</h3>
                    <p>Nasza kadra to doświadczeni i wykwalifikowani menadżerowie, projektanci, sprzedawcy i inżynierowie, którzy są w stanie sprostać każdemu wyzwaniu, jakie niesie ze sobą proces inwestycyjny.</p>
                </div>
            </div>
            <div class="col-9">
                <div class="row d-flex justify-content-center">
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
                        <form method="post" id="contact-form" action="" class="validateForm">
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
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <div class="col-12 mt-1 form-input">
                                    <label for="form_message">Treść wiadomości <span class="text-danger">*</span></label>
                                    <textarea rows="5" cols="1" name="form_message" id="form_message" class="validate[required] form-control @error('form_message') is-invalid @enderror">{{ old('form_message') }}</textarea>

                                    @error('message')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <div class="rodo-obligation mt-4">
                                        <p>Zgodnie z art. 13 ust.1 i ust. 2 Rozporządzenia Parlamentu Europejskiego i Rady (UE) 2016/679 z dnia 27 kwietnia 2016 r. w sprawie ochrony osób fizycznych w związku z przetwarzaniem danych osobowych i w sprawie swobodnego przepływu takich danych informujemy, że administratorem Pani/Pana danych osobowych jest Madey Development spółka z ograniczoną odpowiedzialnością 2 sp.k., z siedzibą w  93-120 Łódź ul. Przybyszewskiego 199/205. Dane będą przetwarzane w celu założenia i prowadzenia konta klienta na stronie internetowej w tym przede wszystkim świadczenia usług drogą elektroniczną jak również w celu komunikacji.</p>
                                        <p>Osobie, której dane dotyczą, przysługuje prawo dostępu do treści swoich danych oraz ich poprawiania a także prawo sprzeciwu i żądania zaprzestania przetwarzania i usunięcia swoich danych osobowych.. Podanie danych osobowych przez użytkownika jest dobrowolne, jednakże odmowa podania danych osobowych spowoduje  brak możliwości skontaktowania się oraz udzielenia ewentualnej odpowiedzi na treść zamieszczoną w formularzu kontaktowym (w tym celu możesz wysłać takie oświadczenie na adres email biuro@madej-bud.pl lub pisemnie na adres siedziby. (<a href="https://www.madeydevelopment.pl/files/upload/polityka_prywatnosci.pdf" target="_blank">Polityka informacyjna</a>):</p>
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
