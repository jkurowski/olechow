@extends('admin.layout')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-head container-fluid">
                <div class="row">
                    <div class="col-12 pl-0">
                        <h4 class="page-title"><i class="fe-home"></i><a href="{{route('admin.developro.index')}}">Inwestycje</a><span class="d-inline-flex me-2 ms-2">/</span>{{$investment->name}}</h4>
                    </div>
                </div>
            </div>

            @include('admin.investment_shared.menu')
        </div>
        <div class="card mt-3">
            <div class="card-body card-body-rem p-0">
                <div class="table-overflow">
                    @if (session('success'))
                        <div class="alert alert-success border-0 mb-0">
                            {{ session('success') }}
                            <script>setTimeout(function(){$(".alert").slideUp(500,function(){$(this).remove()})},3000)</script>
                        </div>
                    @endif
                    <table class="table mb-0" id="sortable">
                        <thead class="thead-default">
                        <tr>
                            <th>#</th>
                            <th>Nazwa</th>
                            <th class="text-center">Lokale</th>
                            <th>Data modyfikacji</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody class="content">
                        @foreach ($list as $index => $p)
                            <tr id="recordsArray_{{ $p->id }}">
                                <th class="position" scope="row">{{ $index+1 }}</th>
                                <td><a href="{{route('admin.developro.investment.floor.property.index', [$investment, $p])}}">{{ $p->name }}</a></td>
                                <td class="text-center">{{ $p->properties->count() }}</td>
                                <td>{{ $p->updated_at }}</td>
                                <td class="option-120">
                                    <div class="btn-group">
                                        <a href="{{route('admin.developro.investment.floor.property.index', [$investment, $p])}}" class="btn action-button me-1" data-toggle="tooltip" data-placement="top" title="Pokaż piętro"><i class="fe-folder"></i></a>
                                        <a href="{{route('admin.developro.investment.floor.edit', [$investment, $p])}}" class="btn action-button me-1" data-toggle="tooltip" data-placement="top" title="Edytuj piętro"><i class="fe-edit"></i></a>
                                        <form method="POST" action="{{route('admin.developro.investment.floor.destroy', [$investment, $p])}}">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn action-button confirm" data-toggle="tooltip" data-placement="top" title="Usuń piętro" data-id="{{ $p->id }}"><i class="fe-trash-2"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group form-group-submit">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-flex justify-content-end">
                    <a href="{{route('admin.developro.investment.floor.create', $investment)}}" class="btn btn-primary">Dodaj piętro</a>
                </div>
            </div>
        </div>
    </div>
@endsection
