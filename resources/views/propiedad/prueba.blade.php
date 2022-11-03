@extends('layouts.administrador.admin')
@section('content')
    <!-- bootstrap 4.x is supported. You can also use the bootstrap css 3.3.x versions -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
    <!-- if using RTL (Right-To-Left) orientation, load the RTL CSS file after fileinput.css by uncommenting below -->
    <!-- link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/css/fileinput-rtl.min.css" media="all" rel="stylesheet" type="text/css" /-->
    <!-- the font awesome icon library if using with `fas` theme (or Bootstrap 4.x). Note that default icons used in the plugin are glyphicons that are bundled only with Bootstrap 3.x. -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    <!-- piexif.min.js is needed for auto orienting image files OR when restoring exif data in resized images and when you
        wish to resize images before upload. This must be loaded before fileinput.min.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/js/plugins/piexif.min.js" type="text/javascript"></script>
    <!-- sortable.min.js is only needed if you wish to sort / rearrange files in initial preview.
        This must be loaded before fileinput.min.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/js/plugins/sortable.min.js" type="text/javascript"></script>
    <!-- popper.min.js below is needed if you use bootstrap 4.x (for popover and tooltips). You can also use the bootstrap js
       3.3.x versions without popper.min.js. -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- bootstrap.min.js below is needed if you wish to zoom and preview file content in a detail modal
        dialog. bootstrap 4.x is supported. You can also use the bootstrap js 3.3.x versions. -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <!-- the main fileinput plugin file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/js/fileinput.min.js"></script>
    <!-- following theme script is needed to use the Font Awesome 5.x theme (`fas`) -->
    <script script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/themes/fas/theme.min.js"></script -->
    <!-- optionally if you need translation for your language then include the locale file as mentioned below (replace LANG.js with your language locale) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/js/locales/LANG.js"></script>

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
                        {!!Form::open(['route' => 'mantenedor-propiedad.store', 'method' => 'POST','files'=>true])!!}

                        <div class="card-body">
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
                                        {!!Form::text('nombre',null,['class'=>"form-control", 'placeholder'=>"Ingrese un Nombre..." , 'required'])!!}
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Direccion</label>
                                        {!!Form::text('direccion',null,['class'=>"form-control", 'placeholder'=>"Ingrese una Dirección..." , 'required'])!!}
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Rol de Propiedad</label>
                                        {!!Form::text('rol_propiedad',null,['class'=>"form-control", 'placeholder'=>"Ingrese el Rol de la Propiedad..." , 'required'])!!}
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Disponibilidad apartir de:</label>
                                        {!!Form::date('disponibilidad',null,['class'=>"form-control", 'placeholder'=>"Ingrese el Rol de la Propiedad..." , 'required'])!!}
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Tipo de Propiedad</label>
                                        {!!Form::select('estado_id',$tipo_propiedad,null,['class'=>"form-control", 'placeholder'=>"Seleccionar"])!!}
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Orientación</label>

                                        {!! Form::select('size', array('norte' => 'Norte', 'sur' => 'Sur', 'este' => 'Este', 'oeste' => 'Oeste'), null,array('class' => 'form-control', 'placeholder'=>"Seleccionar"))!!}

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
                                        {!!Form::number('contribuccion',null,['class'=>"form-control", 'placeholder'=>"Ingrese una contribución..." , 'required'])!!}
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Gastos Comunes</label>
                                        {!!Form::number('gastos_comunes',null,['class'=>"form-control", 'placeholder'=>"Ingrese gastos Comunes..." , 'required'])!!}
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Llaves</label>
                                        {!!Form::text('llaves',null,['class'=>"form-control", 'placeholder'=>"Ingrese  llaves..." , 'required'])!!}
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
                                        {!! Form::select('size', array('com diario' => 'Com Diario','sin com diario' => 'Sin Com Diario', 'ciego' => 'Ciego'), null,array('class' => 'form-control', 'placeholder'=>"Seleccionar"))!!}
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Living Comedor</label>

                                        {!! Form::select('size', array('junto' => 'Junto', 'separado' => 'Separado', 'desnivel' => 'Desnivel'), null,array('class' => 'form-control', 'placeholder'=>"Seleccionar"))!!}

                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">Sala Estar</label>
                                        {!!Form::text('sala_estar',null,['class'=>"form-control", 'placeholder'=>"Ingrese Sala Estar..." , 'required'])!!}
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Dormitorios de Servicios </label>

                                        {!! Form::select('size', array('detras cocina' => 'Detras Cocina', 'fuera cocina' => 'Fuera Cocina'), null,array('class' => 'form-control', 'placeholder'=>"Seleccionar"))!!}

                                    </div>
                                </div>


                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Numeros de  Dormitorios</label>

                                        {!!Form::number('n_dormitorios',null,['class'=>"form-control", 'placeholder'=>"Ingrese Numeros de Dormitorios..." , 'required'])!!}

                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Baños de Servicios </label>

                                        {!!Form::text('banios_servicios',null,['class'=>"form-control", 'placeholder'=>"Ingrese Numeros de Dormitorios..." , 'required'])!!}

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
                                            <div class="file-loading">
                                            <input id="input-id" type="file" name="cartel[]" class="file" data-preview-file-type="text">                                            </div>


                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="input-res-1">Fotos</label>
                                            <div class="file-loading">
                                            <input id="input-id" type="file" class="file" name="fotos[]" data-preview-file-type="text">                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for=""> Fecha   </label>
                                            {!!Form::date('fecha',null,['class'=>"form-control", 'placeholder'=>"Ingrese Numeros de Dormitorios..." , 'required'])!!}


                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for=""> Valor  </label>

                                            {!!Form::number('valor',null,['class'=>"form-control", 'placeholder'=>"Ingrese Numeros de Dormitorios..." , 'required'])!!}

                                        </div>
                                    </div>
                                </div>

                                {{-- <button class="btn btn-secondary" data-dismiss="modal" type="button">
                                    Cerrar
                                </button> --}}
                                <button class="btn btn-primary">
                                    Registrar
                                </button>




                        {!! Form::close() !!}
                            </div>
                    </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
{{-- <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="d-flex flex-column-fluid">
        <div class="container">
            <div class="d-flex flex-row">
                <div class="flex-row-fluid ml-lg-8">
                    <div class="card card-custom card-stretch">

                        <div class="card-header py-3 mt-3">
                            <div class="card-title align-items-start flex-column">
                                <h3 class="card-label font-weight-bolder text-dark">Información Personal</h3>
                                <span class="text-muted font-weight-bold font-size-sm mt-1">Actualiza tus datos</span>
                            </div>
                            {!!Form::open(array('url' => 'tienda/mi-cuenta/actualizar', 'method' => 'post','files' => 'true'))!!}
                            <div class="card-toolbar">
                                <button type="submit" class="btn btn-success mr-2">Guardar Cambios</button>
                                <button type="reset" class="btn btn-secondary">Cancelar</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label class="col-xl-3"></label>
                                <div class="col-lg-9 col-xl-6">
                                    <h5 class="font-weight-bold mb-6">Información de Usuario</h5>
                                </div>
                            </div>
                            {{-- <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label text-right">Imagen</label>
                                <div class="col-lg-9 col-xl-6">
                                    <div class="image-input image-input-outline" id="kt_profile_avatar" style="background-image: url()">
                                        <div class="image-input-wrapper" style="background-image: url()"></div>
                                        <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Cambiar">
                                            <i class="fa fa-pen icon-sm text-muted"></i>
                                            <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg" />
                                            <input type="hidden" name="profile_avatar_remove" />
                                        </label>
                                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancelar">
                                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                                        </span>
                                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Eliminar">
                                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                                        </span>
                                    </div>
                                    <span class="form-text text-muted">Tipos de imagen: png, jpg, jpeg.</span>
                                </div>
                            </div> --}}
                            {{-- <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label text-right">Nombre</label>
                                <div class="col-lg-9 col-xl-6">
                                    <input class="form-control form-control-lg form-control-solid" name="name" type="text" value="{{ Auth::user()->name }}" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label text-right">Apellido</label>
                                <div class="col-lg-9 col-xl-6">
                                    <input class="form-control form-control-lg form-control-solid" name="apellido" type="text" value="{{ Auth::user()->apellido }}" />
                                </div>
                            </div>

                            @if (Auth::user()->foto)
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label text-right">Imagen</label>
                                    <div class="col-lg-9 col-xl-6">
                                        @foreach ($foto as $item)
                                            <img src="{{asset('storage/'.$item->foto)}}" width="50%" height="auto">
                                        @endforeach

                                   </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label text-right">Foto</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input class="form-control form-control-lg form-control-solid" name="foto" type="file"  />
                                    </div>
                                </div>
                            @else
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label text-right">Foto</label>
                                <div class="col-lg-9 col-xl-6">
                                    <input class="form-control form-control-lg form-control-solid" name="foto" type="file"  />
                                </div>
                            </div>


                            @endif
                            <div class="row">
                                <label class="col-xl-3"></label>
                                <div class="col-lg-9 col-xl-6">
                                    <h5 class="font-weight-bold mb-6"> Direcciones </h5>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label text-right">Region</label>
                                <div class="col-lg-9 col-xl-6">
                                    <select name="bk_regiones_id" id="region" class="form-control h-auto form-control-solid py-4 px-8" placeholder="Seleccione una Region" onchange="select(this.value)">

                                        <option value="">Seleccione una Región</option>
                                        @foreach($region as $regiones)
                                            <option value="{{ $regiones->id }}">{{ $regiones->nombre }}
                                            </option>
                                        @endforeach
                                      </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label text-right">Comuna</label>
                                <div class="col-lg-9 col-xl-6">
                                    <select name="bk_comunas_id" id="comuna" class="form-control h-auto form-control-solid py-4 px-8" placeholder="Seleccione una Region">
                                        <option value="">Seleccione una Comuna</option>
                                      </select>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label text-right">Dirección</label>
                                <div class="col-lg-9 col-xl-6">
                                    {!!Form::text('direccion',null,['class'=>"form-control h-auto form-control-solid py-4 px-8", 'placeholder'=>"Ingrese dirección..."])!!}
                                </div>
                            </div>


                            {{-- <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label text-right">Foto</label>
                                <div class="col-lg-9 col-xl-6">
                                    <input class="form-control form-control-lg form-control-solid" name="foto" type="file"  />
                                </div>
                            </div> --}}
                            {{-- <div class="row">
                                <label class="col-xl-3"></label>
                                <div class="col-lg-9 col-xl-6">
                                    <h5 class="font-weight-bold mt-10 mb-6">Información de Contacto</h5>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label text-right">Teléfono</label>
                                <div class="col-lg-9 col-xl-6">
                                    <div class="input-group input-group-lg input-group-solid">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="la la-phone"></i>
                                            </span>
                                        </div>
                                        <input type="text" name="telefono" class="form-control form-control-lg form-control-solid" value="{{ Auth::user()->telefono }}" placeholder="Phone" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label text-right">Email</label>
                                <div class="col-lg-9 col-xl-6">
                                    <div class="input-group input-group-lg input-group-solid">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="la la-at"></i>
                                            </span>
                                        </div>
                                        <input type="text" name="email" class="form-control form-control-lg form-control-solid" value="{{ Auth::user()->email }}" placeholder="Email" />
                                    </div>
                                </div>
                            </div>
                            {!!Form::close()!!}
                            {!!Form::open(array('url' => 'tienda/mi-cuenta/actualizar-contraseña', 'method' => 'post'))!!}
                            <div class="row">
                                <label class="col-xl-3"></label>
                                <div class="col-lg-9 col-xl-6">
                                    <h5 class="font-weight-bold mt-10 mb-6">Contraseña de Usuario</h5>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label text-right">Antigua Contraseña</label>
                                <div class="col-lg-9 col-xl-6">
                                    <div class="input-group input-group-lg input-group-solid">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                            </span>
                                        </div>
                                        <input type="password" name="old_ps" class="form-control form-control-lg form-control-solid" placeholder="" required="" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label text-right">Nueva Contraseña</label>
                                <div class="col-lg-9 col-xl-6">
                                    <div class="input-group input-group-lg input-group-solid">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                            </span>
                                        </div>
                                        <input type="password" name="password1" class="form-control form-control-lg form-control-solid" placeholder="" id="inputPassword1" onkeyup="validacion();" required="" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label text-right">Confirma Contraseña</label>
                                <div class="col-lg-9 col-xl-6">
                                    <div class="input-group input-group-lg input-group-solid">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                            </span>
                                        </div>
                                        <input type="password" name="password2" class="form-control form-control-lg form-control-solid" placeholder="" id="inputPassword2" onkeyup="validacion();" required="" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label text-right"></label>
                                <div class="col-lg-9 col-xl-6">
                                    <button type="submit" class="btn btn-success">Cambiar Contraseña</button>
                                </div>
                            </div>
                            {!!Form::close()!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>  --}}
    {{-- </div>
</div>  --}}

@endsection
