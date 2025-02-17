@extends('layouts.page', ['body_class' => 'property'])

@section('meta_title', $property->name)
@section('seo_title', $page->meta_title.' - '.$floor->name.' - '.$property->name)
@section('seo_description', $page->meta_description)

@section('pageheader')
    @include('layouts.partials.developro-header', ['title' => $property->name, 'header_file' => 'rooms.jpg', 'items' => [['uri'=> 'mieszkania', 'title'=>'Mieszkania'],['uri'=> 'mieszkania/pietro/'.$floor->id, 'title'=>$floor->name]]])
@stop

@section('content')
<div id="property">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-5">
                <div id="propertyNav" class="row">
                    <div class="col-12 col-sm-4">
                        @if($prev) <a href="{{route('front.investment.property.index', [$floor, $prev->id])}}" class="bttn">Poprzednie</a>@endif
                    </div>
                    <div class="col-12 col-sm-4">
                        <a href="{{route('front.investment.floor.index', $floor)}}" class="bttn">Plan piętra</a>
                    </div>
                    <div class="col-12 col-sm-4">
                        @if($next) <a href="{{route('front.investment.property.index', [$floor, $next->id])}}" class="bttn">Następne</a>@endif
                    </div>
                </div>
                <div class="property-desc">
                    <div class="room-status room-status-{{$property->status}}">
                        {{ roomStatus($property->status )}}
                    </div>
                    @if($property->price)
                        <h6 class="propertyPrice">@money($property->price)</h6>
                    @endif
                    <ul class="list-unstyled">
                        <li>Pokoje:<span>{{$property->rooms}}</span></li>
                        <li>Powierzchnia:<span>{{$property->area}} m<sup>2</sup></span></li>
                        @if($property->garden_area)<li>Ogródek:<span>{{$property->garden_area}} m<sup>2</sup></span></li>@endif
                        @if($property->balcony_area)<li>Balkon:<span>{{$property->balcony_area}} m<sup>2</sup></span></li>@endif
                        @if($property->balcony_area_2)<li>Balkon 2:<span>{{$property->balcony_area_2}} m<sup>2</sup></span></li>@endif
                        @if($property->terrace_area)<li>Taras:<span>{{$property->terrace_area}} m<sup>2</sup></span></li>@endif
                        @if($property->loggia_area)<li>Loggia:<span>{{$property->loggia_area}} m<sup>2</sup></span></li>@endif
                        @if($property->parking_space)<li>Miejsce postojowe:<span>{{$property->parking_space}}</span></li>@endif
                        @if($property->garage)<li>Garaż:<span>{{$property->garage}}</span></li>@endif
                    </ul>
                </div>

                <div class="property-img">
                    @if($property->file)
                        <a href="{{ asset('/investment/property/'.$property->file) }}" class="swipebox">
                            <picture>
                                <source type="image/webp" srcset="{{ asset('/investment/property/thumbs/webp/'.$property->file_webp) }}">
                                <source type="image/jpeg" srcset="{{ asset('/investment/property/thumbs/'.$property->file) }}">
                                <img src="{{ asset('/investment/property/thumbs/'.$property->file) }}" alt="{{$property->name}}">
                            </picture>
                        </a>
                    @endif
                </div>

                <div class="property-desc d-flex justify-content-center w-100">
                @if($property->file_pdf)
                    <a href="{{ asset('/investment/property/pdf/'.$property->file_pdf) }}" target="_blank" class="bttn">POBIERZ PLAN .PDF</a>
                @endif
                </div>
                @if($property->text)
                    <div class="mt-5 col-12">
                        {!! $property->text !!}
                    </div>
                @endif
            </div>
            <div class="col-12 col-xl-7 ps-3 ps-xl-5">
                <div id="property-form">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@push('scripts')
    <script src="{{ asset('/js/validation.js') }}" charset="utf-8"></script>
    <script src="{{ asset('/js/pl.js') }}" charset="utf-8"></script>
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
