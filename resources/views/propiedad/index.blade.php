@extends('layouts.admin.admin')
@section('content')

<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex align-items-baseline mr-5">
            <h5 class="text-dark font-weight-bold my-2 mr-5"> Axtell Propiedades</h5>
            <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                <li class="breadcrumb-item">
                    <a href="" class="text-muted">Propiedades</a>
                </li>
            </ul>
        </div>

    </div>
</div>
<div class="container">
    <div class="card card-custom">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label"> Propiedades
                    <a class="btn btn-primary" style="margin:5px;" href="{{asset('/crear-propiedad')}}">Crear Propiedad
                        <i class="fas fa-plus"></i></a>

                </h3>
                <div class="ml-10"></div>
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


            <div class="container">
                <br>
                <table class="table table-light">
                    <thead class="thead-light">
                        <tr>
                            <th>ID</th>
                            <th>Dirección</th>
                            <th>Propietario</th>
                            <th>Valor</th>
                            <th>Acciones</th>

                    </thead>
                    <tbody>
                       @foreach ($propiedad as $propiedades)
                        <tr>
                            <td>{{ $propiedades->id }}</td>
                            <td> {{ $propiedades->direccion }} </td>
                            <td> {{ $propiedades->owner->nombre }} </td>
                            <td> ${{number_format($propiedades->valor, 0, ',', '.')}}</td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Acciones
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit{{$propiedades->id}}">Editar</a>
                                        @include('propiedad.destroy')

                                    </div>
                                </div>
                            </td>



                        </tr>
                        @include('propiedad.edit')
                    @endforeach
                    {{-- {{-- @foreach ($imagen as $imagenes)
                    <img src="{{ asset('storage/'.$imagenes->ruta) }}" width="100%" height="auto"> --}}

                    </tbody>

                </table>

            </div>

        </div>
    </div>
</div>
@endsection
