@extends('layouts.administrador.admin')

@section('content')
<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex align-items-baseline mr-5">
            <h5 class="text-dark font-weight-bold my-2 mr-5">Taxi Ticket</h5>
            <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                <li class="breadcrumb-item">
                    <a href="" class="text-muted">Estados</a>
                </li>
            </ul>
        </div>

    </div>
</div>
<div class="container">
    <div class="card card-custom">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label"> Estados</h3>
                <div class="ml-10">@include('estados.create')</div>
            </div>
        </div>
        <div class="card-body">
            <div class="mb-7">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-xl-8">
                        <div class="row align-items-center">
                            <div class="col-md-4 my-2 my-md-0">
                                <div class="input-icon">
                                    <input type="text" class="form-control" placeholder="Buscar..." id="kt_datatable_search_query" />
                                    <span>
                                        <i class="flaticon2-search-1 text-muted"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="card-body table-responsive">
                <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>nombre</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($estado as $estados)
                            <tr>
                                <td>{{ $estados->id }}</td>
                                <td>{{ $estados->nombre }}</td>

                                <td>
                                    <a class="btn btn-warning" data-toggle="modal" data-target="#edit{{ $estados->id }}">Editar</a>
                                    @include('estados.destroy')
                                </td>
                                @include('estados.edit')
                            </tr>
                        @endforeach



                    </tbody>
                </table>

            </div> --}}

            <div class="container">
                <br>
                <table class="table table-light">
                    <thead class="thead-light">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Acciones</th>

                    </thead>
                    <tbody>
                        @foreach ($estado as $estados)
                            <tr>
                                <td>{{$estados->id}}</td>
                                <td>{{$estados->nombre}}</td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Acciones
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit{{$estados->id}}">Editar</a>
                                             @include('estados.destroy')
                                        </div>
                                    </div>
                                </td>

                            </tr>
                            @include('estados.edit')

                        @endforeach



                    </tbody>

                </table>

            </div>

        </div>
    </div>
</div>
@endsection
