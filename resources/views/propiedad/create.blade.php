@extends('layouts.administrador.admin2')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">

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
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="d-flex flex-column-fluid">
        <div class="container">
            <div class="d-flex flex-row">
                <div class="flex-row-fluid ml-lg-8">
                    <div class="card card-custom card-stretch">
                        <div class="card-header py-3 mt-3">
                            <div class="card-title align-items-start flex-column">
                                <h3 class="card-label font-weight-bolder text-dark">Crear Propiedad</h3>
                                <span class="text-muted font-weight-bold font-size-sm mt-1">Ingrese sus datos</span>
                            </div>
                        </div>
                        {!!Form::open(['route' => 'mantenedor-propiedad.store', 'method' => 'POST','enctype'=>'multipart/form-data','files'=>true])!!}
                        <div class="card-body">
                            <div id="select-owner">
                                <div class="form-group">
                                    {!! Form::select('owner', $owner, null, ['class'=>"form-control", 'placeholder'=>"Seleccione propietario...",'id'=>"this.value",'onchange'=>"cambiar(this.value)"]) !!}

                                </div>

                            </div>

                            <div style="display:none;" id="mostrar-div">
                                <div class="row">
                                    <label class="col-xl-3"></label>
                                    <div class="col-lg-9 col-xl-6">
                                        <h5 class="font-weight-bold mb-6" style="text-align:center;">Información de la Propiedad</h5>
                                    </div>
                                </div>
                                <div class="row">
                                     <div class="col-6">
                                        <div class="form-group">
                                            <label for="">Nombre</label>
                                            {!!Form::text('nombre',null,['class'=>"form-control", 'placeholder'=>"Ingrese un Nombre..."  ])!!}
                                        </div>
                                    </div>
                                   <div class="col-6">
                                        <div class="form-group">
                                            <label for="">Direccion</label>
                                            {!!Form::text('direccion',null,['class'=>"form-control", 'placeholder'=>"Ingrese una Dirección..."  ])!!}
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">Rol de Propiedad</label>
                                            {!!Form::text('rol_propiedad',null,['class'=>"form-control", 'placeholder'=>"Ingrese el Rol de la Propiedad..."])!!}
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">Disponibilidad apartir de:</label>
                                            {!!Form::date('disponibilidad',null,['class'=>"form-control", 'placeholder'=>"Ingrese el Rol de la Propiedad..."])!!}
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">Tipo de Propiedad</label>
                                            {!!Form::select('tipo_propiedad_id',$tipo_propiedad,null,['class'=>"form-control", 'placeholder'=>"Seleccionar"])!!}
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">Orientación</label>

                                            {!! Form::select('orientacion', array('norte' => 'Norte', 'sur' => 'Sur', 'este' => 'Este', 'oeste' => 'Oeste'), null,array('class' => 'form-control', 'placeholder'=>"Seleccionar"))!!}

                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="">Observación</label>

                                            <textarea class="form-control" col="4" name="observacion" placeholder="Ingrese Observación"></textarea>

                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">Contribuccion</label>
                                            {!!Form::number('contribuccion',null,['class'=>"form-control", 'min'=>'1', 'placeholder'=>"Ingrese una contribución..." , ])!!}
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">Gastos Comunes</label>
                                            {!!Form::number('gastos_comunes',null,['class'=>"form-control",  'min'=>'1','placeholder'=>"Ingrese gastos Comunes..." , ])!!}
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">Llaves</label>
                                            {!!Form::text('llaves',null,['class'=>"form-control", 'placeholder'=>"Ingrese  llaves..." , ])!!}
                                        </div>
                                    </div>


                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for=""> Año de Contrucción   </label>
                                            {!!Form::number('anio_contruccion',null,['class'=>"form-control",  'min'=>'1','placeholder'=>" ej: 2020..." , ])!!}
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for=""> Tipo  de Contrucción   </label>
                                            <select name="tipo_contruccion" class="form-control"    placeholder="Seleccione...">
                                                <option value="Solida">Solida </option>
                                                <option value="Mixta">Mixta </option>
                                                <option value="Adobe">Adobe </option>
                                                <option value="Otro">Otro </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for=""> Calefacion Central    </label>
                                            {!!Form::text('calefacion_central',null,['class'=>"form-control",  'min'=>'1','placeholder'=>" Ingrese un valor..." , ])!!}
                                        </div>
                                    </div>
                                     <div class="col-6">
                                        <div class="form-group">
                                            <label for=""> Piso   </label>
                                            {!!Form::text('piso',null,['class'=>"form-control", 'placeholder'=>"Ingrese un Nombre..." , ])!!}
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for=""> Patio   </label>
                                            {!! Form::select('patio', array('Ante Jardin' => 'Ante Jardin', 'Pat Trasero' => 'Pat Trasero', 'Pat Servicio' => 'Pat Servicio'), null,array('class' => 'form-control', 'placeholder'=>"Seleccionar"))!!}
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for=""> Suelo   </label>
                                            {!! Form::select('suelo', array(' Alfombrado' => 'Alfombrado', 'Parquet' => ' Parquet', 'Ceramico' => 'Ceramico','Otro' => 'Otro'), null,array('class' => 'form-control', 'placeholder'=>"Seleccionar"))!!}
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for=""> Metraje Construido   </label>
                                            {!!Form::number('metraje_construido',null,['class'=>"form-control",  'min'=>'1','placeholder'=>" Ingrese un valor..." , ])!!}
                                        </div>
                                    </div>


                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for=""> Metraje Total   </label>
                                            {!!Form::number('metraje_total',null,['class'=>"form-control",  'min'=>'1','placeholder'=>" Ingrese un valor..." , ])!!}
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for=""> Bodega    </label>
                                            {!!Form::text('bodega',null,['class'=>"form-control", 'placeholder'=>"Ingrese un Nombre..." , ])!!}
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for=""> Estacionamiento    </label>
                                            {!! Form::select('estacionamiento', array(' Abierta' => 'Abierto', 'Techado' => ' Techado', 'Subterráneo' => 'Subterráneo'), null,array('class' => 'form-control', 'placeholder'=>"Seleccionar"))!!}
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for=""> Piscina    </label>
                                            {!! Form::select('piscina', array(' Interior' => 'Interior', 'Exterior' => ' Exterior', 'Temperada' => 'Temperada'), null,array('class' => 'form-control', 'placeholder'=>"Seleccionar"))!!}
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for=""> Terraza    </label>
                                            {!! Form::select('terraza', array(' Abierta' => 'Abierta', 'Cerrada' => ' Cerrada'), null,array('class' => 'form-control', 'placeholder'=>"Seleccionar"))!!}
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">  Logia    </label>
                                            {!! Form::select('logia', array(' Abierta' => 'Abierta', 'Cerrada' => ' Cerrada'), null,array('class' => 'form-control', 'placeholder'=>"Seleccionar"))!!}
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for=""> Ascensor    </label>
                                            {!!Form::text('ascensor',null,['class'=>"form-control", 'placeholder'=>"Ingrese un Nombre..." , ])!!}
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for=""> Hall    </label>
                                            {!!Form::text('hall',null,['class'=>"form-control",  'min'=>'1','placeholder'=>" Ingrese un valor..." , ])!!}
                                        </div>
                                    </div>


                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for=""> Escritorio    </label>
                                            {!!Form::text('escritorio',null,['class'=>"form-control",  'min'=>'1','placeholder'=>" Ingrese un valor..." , ])!!}
                                        </div>
                                    </div>

                                     <div class="col-6">
                                        <div class="form-group">
                                            <label for=""> Calefacion Central    </label>
                                            {!!Form::text('calefacion_central',null,['class'=>"form-control",  'min'=>'1','placeholder'=>" Ingrese un valor..." , ])!!}
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for=""> Estado  Edificio    </label>
                                            {!!Form::text('estado_edificio',null,['class'=>"form-control",  'min'=>'1','placeholder'=>" Ingrese un valor..." , ])!!}
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for=""> Estado Departamento    </label>
                                            {!!Form::text('estado_departamento',null,['class'=>"form-control",  'min'=>'1','placeholder'=>" Ingrese un valor..." , ])!!}
                                        </div>
                                    </div>


                                </div>

                                 <hr>

                                <div class="row">
                                    <label class="col-xl-3"></label>
                                    <div class="col-lg-9 col-xl-6">
                                        <h5 class="font-weight-bold mb-6" style="text-align:center;">Detalle de la Propiedad</h5>
                                    </div>
                                </div>
                                <div class="row">
                                     <div class="col-6">
                                        <div class="form-group">
                                            <label for="">Cocina</label>
                                            {!! Form::select('cocina', array('com diario' => 'Com Diario','sin com diario' => 'Sin Com Diario', 'ciego' => 'Ciego'), null,array('class' => 'form-control', 'placeholder'=>"Seleccionar"))!!}
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">Living Comedor</label>

                                            {!! Form::select('living_comedor', array('junto' => 'Junto', 'separado' => 'Separado', 'desnivel' => 'Desnivel'), null,array('class' => 'form-control', 'placeholder'=>"Seleccionar"))!!}

                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="">Sala Estar</label>
                                            {!!Form::text('sala_estar',null,['class'=>"form-control", 'placeholder'=>"Ingrese Sala Estar..." , ])!!}
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">Dormitorios de Servicios </label>

                                            {!! Form::select('dormitorios_servicios', array('detras cocina' => 'Detras Cocina', 'fuera cocina' => 'Fuera Cocina'), null,array('class' => 'form-control', 'placeholder'=>"Seleccionar"))!!}

                                        </div>
                                    </div>


                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">Numeros de  Dormitorios</label>

                                            {!!Form::number('n_dormitorios',null,['class'=>"form-control", 'placeholder'=>"Ingrese Numeros de Dormitorios..." , ])!!}

                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">Baños de Servicios </label>

                                            {!!Form::text('banios_servicios',null,['class'=>"form-control", 'placeholder'=>"Ingrese Numeros de Dormitorios..." , ])!!}

                                        </div>
                                    </div>



                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for=""> Baños  </label>

                                            {!! Form::select('banios', array('visita ' => ' Visita', 'luz' => ' Luz','ciego' => 'Ciego' ), null,array('class' => 'form-control', 'placeholder'=>"Seleccionar"))!!}

                                        </div>
                                    </div>

                                </div>
                                <hr>

                                <div class="row">
                                    <label class="col-xl-3"></label>
                                    <div class="col-lg-9 col-xl-6">
                                        <h5 class="font-weight-bold mb-6" style="text-align:center;">Detalle de la Venta de la Propiedad</h5>
                                    </div>
                                </div>
                                <div class="row">

                                     <div class="col-6">
                                        <div class="form-group">


                                            <label for="input-res-1">Carteles</label>

                                           <input id="input-id" name="cartel[]" type="file" class="file" data-preview-file-type="text" multiple>
                                       </div>
                                    </div>

                                   <div class="col-6">
                                        <div class="form-group">
                                            <label for="input-res-1">Fotos</label>
                                            <input id="input-id" name="fotos[]" type="file" class="file" data-preview-file-type="text" multiple>
                                        </div>
                                    </div>





                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for=""> Valor  </label>
                                            {!!Form::number('valor',null,['class'=>"form-control", 'placeholder'=>"Ingrese Numeros de Dormitorios..." , ])!!}

                                        </div>
                                    </div>




                                </div>




                                <button class="btn btn-primary">
                                    Registrar
                                </button>

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
</div>
@endsection
<script>
    function cambiar(id){
            const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
        confirmButton: 'btn btn-success',
        cancelButton: 'btn btn-danger'
    },
    buttonsStyling: false
    })

    swalWithBootstrapButtons.fire({
    title: '¿Esta seguro de seleccionar este propietario',
    text: "¡No podrás revertir esto!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: '¡Sí!',
    cancelButtonText: '¡No!',
    reverseButtons: true
    }).then((result) => {
    if (result.isConfirmed) {
        var select= document.getElementById('select-owner');
        var mostrar= document.getElementById('mostrar-div');
        select.style.display = 'none';
        mostrar.style.display = 'block';
        swalWithBootstrapButtons.fire(
        'Aviso',
        'El propietario fue seleccionado correctamente!',
        'success',
        )
    } else if (
        /* Read more about handling dismissals below */
        result.dismiss === Swal.DismissReason.cancel
    ) {
        swalWithBootstrapButtons.fire(
        'Negación',
        'El propietario no fue seleccionado... Intente nuevamente',
        'error'
        )
    }
    })


    }
</script>
