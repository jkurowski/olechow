@extends('layouts.page')

@section('meta_title', $gallery->name)

@section('pageheader')
    @include('layouts.partials.developro-header', ['title' => $gallery->name, 'items' => [['uri'=> 'galeria', 'title'=>'Galeria']]])
@stop

@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            @foreach($gallery->photos as $image)
            <div class="col-4 mb-4">
                <picture>
                    <source type="image/webp" srcset="{{asset('uploads/gallery/images/thumbs/webp/'.$image->file_webp) }}">
                    <source type="image/jpeg" srcset="{{asset('uploads/gallery/images/thumbs/'.$image->file) }}">
                    <img src="{{asset('uploads/gallery/images/thumbs/'.$image->file) }}" alt="{{ $gallery->name }}">
                </picture>
            </div>
            @endforeach
        </div>
    </div>
@endsection

