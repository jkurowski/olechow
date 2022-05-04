@extends('layouts.page')

@section('meta_title', $page->title)

@section('pageheader')
    @include('layouts.partials.page-header', ['page' => $page])
@stop

@section('content')
    <div id="howtowork">

    </div>
@endsection
@push('scripts')

@endpush
