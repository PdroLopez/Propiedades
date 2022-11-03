@extends('layouts.admin.admin')
@section('content')
<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex align-items-baseline mr-5">
            <h5 class="text-dark font-weight-bold my-2 mr-5">Axtell Propiedades</h5>
            <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                <li class="breadcrumb-item">
                    <a href="" class="text-muted">Clientes</a>
                </li>
            </ul>
        </div>

    </div>
</div>
<div class="container">
    <div class="card card-custom card-transparent">
        <div class="card-body p-0">
            <div class="wizard wizard-4" id="kt_wizard_v4" data-wizard-state="step-first" data-wizard-clickable="true">
                <div class="wizard-nav">
                    <div class="wizard-steps">
                        <div class="wizard-step" data-wizard-type="step" data-wizard-state="current" width="100%">
                            <div class="wizard-wrapper">
                                <div class="wizard-number">1</div>
								<div class="wizard-label">
									<div class="wizard-title">Agregar Cliente</div>
									<div class="wizard-desc">Datos Personales </div>
								</div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="card card-custom card-shadowless rounded-top-0">
        <div class="card-body p-0">
            <div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
                <div class="col-xl-12 col-xxl-7">
                    <div class="card-title">
                        <h1><b>Datos Personales</b></h1>
                    </div>

                        <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                            @if ($bandera == 1 )
                              {!!Form::open(['route' => 'mantenedor-cliente.store', 'method' => 'POST','files'=>true])!!}


                              <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Nombre</label>
                                        {!!Form::text('nombre',null,['class'=>"form-control", 'placeholder'=>"Ingrese un nombre..." , 'required'])!!}
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Rut</label>
                                        {!!Form::text('rut',null,['class'=>"form-control", 'placeholder'=>"Ingrese un rut ..." , 'required'])!!}
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Direccion</label>
                                        {!!Form::text('direccion',null,['class'=>"form-control", 'placeholder'=>"Ingrese una direccion..." , 'required'])!!}
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Correo</label>
                                        {!!Form::email('correo',null,['class'=>"form-control", 'placeholder'=>"Ingrese un correo..." , 'required'])!!}
                                    </div>
                                </div>




                                <div class="col-6">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-outline-primary">Guardar</button>

                                    </div>
                                </div>
                            </div>
                              {!! Form::close() !!}
                            @elseif($bandera == 2)
                                <h1>{{ $ultimoUsuario->id }}</h1>
                            @endif




                        </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
<script>
    function hola()
    {
        return "diste click";
    }

</script>
