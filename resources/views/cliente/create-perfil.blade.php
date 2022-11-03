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
                                <div class="wizard-number">2</div>
								<div class="wizard-label">
									<div class="wizard-title">Datos de  Cliente Perfil</div>
									<div class="wizard-desc">Información de Perfilamiento </div>
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

                            {!!Form::open(array('url' => '/create-cliente-perfil', 'method' => 'post','files' => 'true'))!!}
                             <div class="row">
                                 {!! Form::hidden('id', $ultimoUsuario->id) !!}
                                        <div class="col-6">
                                                <div class="form-group">
                                                    <label for="">Tipo de Adquisicion </label>
                                                    {!! Form::select('adquision', array('arriendo' => 'Arriendo', 'compra' => 'Compra'), null,array('class' => 'form-control', 'placeholder'=>"Seleccionar"))!!}
                                                </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">Tipo Vivienda</label>
                                                {!! Form::select('tipo_vivienda', array('casa' => 'Casa', 'departamento' => 'Departamento'), null,array('class' => 'form-control', 'placeholder'=>"Seleccionar"))!!}
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">Cantidad de Dormitorios</label>
                                                {!! Form::select('can_dormitorios', array('1' => '1', '2' => '2', '4' => '4', '6' => '6', '8' => '8'), null,array('class' => 'form-control', 'placeholder'=>"Seleccionar"))!!}
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">Bodega</label>
                                                {!! Form::select('bodega', array('si' => 'Si', 'no' => 'No'), null,array('class' => 'form-control', 'placeholder'=>"Seleccionar"))!!}
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">Piscina</label>
                                                {!! Form::select('piscina', array('si' => 'Si', 'no' => 'No'), null,array('class' => 'form-control', 'placeholder'=>"Seleccionar"))!!}
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">Tipo de Cliente</label>
                                                {!! Form::select('tipo_cliente', array('compra' => 'Compra', 'casa propia' => 'Casa Propia', 'invensor' => 'Invensor'), null,array('class' => 'form-control', 'placeholder'=>"Seleccionar"))!!}
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-outline-primary">Guardar</button>
                                            </div>
                                        </div>
                                </div>
                            {!! Form::close() !!}





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
