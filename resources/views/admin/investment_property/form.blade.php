@extends('admin.layout')
@section('content')
    @if(Route::is('admin.developro.investment.floor.property.edit'))
        <form method="POST" action="{{route('admin.developro.investment.floor.property.update', [$investment, $floor, $entry])}}" enctype="multipart/form-data" class="mappa">
            {{method_field('PUT')}}
            @else
                <form method="POST" action="{{route('admin.developro.investment.floor.property.store', [$investment, $floor])}}" enctype="multipart/form-data" class="mappa">
                    @endif
                    @csrf
                    <div class="container">
                        <div class="card">
                            <div class="card-head container">
                                <div class="row">
                                    <div class="col-12 pl-0">
                                        <h4 class="page-title row"><i class="fe-home"></i><a href="{{route('admin.developro.index')}}">Inwestycje</a><span class="d-inline-flex ml-2 mr-2">/</span>{{$investment->name}}<span class="d-inline-flex ml-2 mr-2">/</span>{{ $floor->name }}<span class="d-inline-flex ml-2 mr-2">-</span>{{ $cardTitle }}</h4>
                                    </div>
                                </div>
                            </div>
                            @include('form-elements.back-route-button')
                            <div class="card-body">
                                <div class="mappa-tool">
                                    <div class="mappa-workspace">
                                        <div id="overflow" style="overflow:auto;width:100%;">
                                            <canvas class="mappa-canvas"></canvas>
                                        </div>
                                        <div class="mappa-toolbars">
                                            <ul class="mappa-drawers list-unstyled mb-0">
                                                <li><input type="radio" name="tool" value="polygon" id="new" class="addPoint input_hidden"/><label for="new" data-toggle="tooltip" data-placement="top" class="actionBtn tip addPoint" title="Służy do dodawanie nowego elementu"><i class="fe-edit-2"></i> Dodaj punkt</label></li>
                                            </ul>
                                            <ul class="mappa-points list-unstyled mb-0">
                                                <li><input checked="checked" type="radio" name="tool" id="move" value="arrow" class="movePoint input_hidden"/><label for="move" class="actionBtn tip movePoint" data-toggle="tooltip" data-placement="top" title="Służy do przesuwania punktów"><i class="fe-move"></i> Przesuń / Zaznacz</label></li>
                                                <li><input type="radio" name="tool" value="delete" id="delete" class="deletePoint input_hidden"/><label for="delete" class="actionBtn tip deletePoint" data-toggle="tooltip" data-placement="top" title="Służy do usuwana punków"><i class="fe-trash-2"></i> Usuń punkt</label></li>
                                            </ul>
                                            <ul class="mappa-list list-unstyled mb-0"></ul>
                                            <ul class="mappa-points list-unstyled mb-0">
                                                <li><a href="#" id="toggleparam" class="actionBtn tip toggleParam" data-toggle="tooltip" data-placement="top" title="Służy do pokazywania/ukrywania parametrów"><i class="fe-repeat"></i> Pokaż / ukryj parametry</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="toggleRow">
                                            @include('form-elements.mappa', ['label' => 'Współrzędne punktów', 'name' => 'cords', 'value' => $entry->cords, 'rows' => 10, 'class' => 'mappa-html'])
                                            @include('form-elements.mappa', ['label' => 'Współrzędne punktów HTML', 'name' => 'html', 'value' => $entry->html, 'rows' => 10, 'class' => 'mappa-area'])
                                        </div>
                                        @include('form-elements.html-select', [
                                            'label' => 'Status',
                                            'name' => 'status',
                                            'selected' => $entry->status,
                                            'select' => [
                                                '1' => 'Na sprzedaż',
                                                '2' => 'Rezerwacja',
                                                '3' => 'Sprzedane',
                                                '4' => 'Wynajęte'
                                        ]])
                                        @include('form-elements.html-select', [
                                            'label' => 'Oferta specjalna',
                                            'name' => 'highlighted',
                                            'selected' => $entry->highlighted,
                                            'select' => [
                                                '0' => 'Nie',
                                                '1' => 'Tak'
                                        ]])
                                        @include('form-elements.html-select', [
                                            'label' => 'Strona główna',
                                            'name' => 'homepage',
                                            'selected' => $entry->homepage,
                                            'select' => [
                                                '0' => 'Nie',
                                                '1' => 'Tak'
                                        ]])

                                        @include('form-elements.html-select', [
                                            'label' => 'Lokal usługowy',
                                            'name' => 'comercial_area',
                                            'selected' => $entry->comercial_area,
                                            'select' => [
                                                '0' => 'Nie',
                                                '1' => 'Tak'
                                        ]])
                                        @include('form-elements.input-text', ['label' => 'Nazwa', 'name' => 'name', 'value' => $entry->name, 'required' => 1])
                                        @include('form-elements.input-text', ['label' => 'Nazwa na liście', 'sublabel'=> 'Mieszkanie, Apartament itp', 'name' => 'name_list', 'value' => $entry->name_list, 'required' => 1])
                                        @include('form-elements.input-text', ['label' => 'Numer', 'name' => 'number', 'value' => $entry->number, 'required' => 1])
                                        @include('form-elements.input-text', ['label' => 'Kolejność na liście', 'sublabel'=> 'Tylko liczby', 'name' => 'number_order', 'value' => $entry->number_order, 'required' => 1])

                                        @include('form-elements.html-select', ['label' => 'Pokoje', 'name' => 'rooms', 'selected' => $entry->rooms, 'select' => [
                                            '1' => '1',
                                            '2' => '2',
                                            '3' => '3',
                                            '4' => '4',
                                            '5' => '5',
                                            '6' => '6'
                                            ]
                                        ])

                                        @include('form-elements.input-text', ['label' => 'Powierzchnia', 'name' => 'area', 'value' => $entry->area, 'required' => 1])
                                        @include('form-elements.input-text', ['label' => 'Cena', 'sublabel'=> 'Tylko liczby', 'name' => 'price', 'value' => $entry->price])


                                        @include('form-elements.input-text', ['label' => 'Ogródek', 'sublabel'=> 'Pow. w m<sup>2</sup>, tylko liczby', 'name' => 'garden_area', 'value' => $entry->garden_area])
                                        @include('form-elements.input-text', ['label' => 'Balkon', 'sublabel'=> 'Pow. w m<sup>2</sup>, tylko liczby', 'name' => 'balcony_area', 'value' => $entry->balcony_area])
                                        @include('form-elements.input-text', ['label' => 'Balkon 2', 'sublabel'=> 'Pow. w m<sup>2</sup>, tylko liczby', 'name' => 'balcony_area_2', 'value' => $entry->balcony_area_2])
                                        @include('form-elements.input-text', ['label' => 'Taras', 'sublabel'=> 'Pow. w m<sup>2</sup>, tylko liczby', 'name' => 'terrace_area', 'value' => $entry->terrace_area])
                                        @include('form-elements.input-text', ['label' => 'Loggia', 'sublabel'=> 'Pow. w m<sup>2</sup>, tylko liczby', 'name' => 'loggia_area', 'value' => $entry->loggia_area])

                                        @include('form-elements.html-input-text-count', ['label' => 'Nagłówek strony', 'sublabel'=> 'Meta tag - title', 'name' => 'meta_title', 'value' => $entry->meta_title, 'maxlength' => 60])
                                        @include('form-elements.html-input-text-count', ['label' => 'Opis strony', 'sublabel'=> 'Meta tag - description', 'name' => 'meta_description', 'value' => $entry->meta_description, 'maxlength' => 158])

                                        @include('form-elements.html-input-file', ['label' => 'Plan mieszkania', 'sublabel' => '(wymiary: '.config('images.property_plan.width').'px / '.config('images.property_plan.height').'px)', 'name' => 'file'])
                                        @include('form-elements.html-input-file', ['label' => 'Plan .pdf', 'sublabel' => 'Plan do pobrania', 'name' => 'file_pdf'])


                                        @include('form-elements.textarea-fullwidth', ['label' => 'Opis', 'name' => 'text', 'value' => $entry->text, 'rows' => 11, 'class' => 'tinymce'])
                                    </div>
                                </div>
                            </div>
                        </div>
                        @include('form-elements.submit', ['name' => 'submit', 'value' => 'Zapisz'])
                    </div>
                </form>
                @include('form-elements.tintmce')
                @endsection
                @push('scripts')
                    <script src="/js/plan/underscore.js" charset="utf-8"></script>
                    <script src="/js/plan/mappa-backbone.js" charset="utf-8"></script>
                    <script type="text/javascript">
                        const map = {
                            "name":"imagemap",
                            "areas":[{!! $entry->cords !!}]
                        };
                        $(document).ready(function() {
                            const mapview = new MapView({el: '.mappa'}, map);
                            @if($floor->file)
                            mapview.loadImage('/investment/floor/{{$floor->file}}');
                            @endif
                        });
                    </script>
        @endpush
