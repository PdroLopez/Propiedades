<button class="btn btn-primary" data-toggle="modal" data-target="#create">Agregar Propietario <i class="fas fa-plus"></i></button>

<div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="create" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        {!!Form::open(['route' => 'mantenedor-owner.store', 'method' => 'POST','files'=>true])!!}
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Nuevo Propietario
                </h5>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Nombre</label>
                            {!!Form::text('nombre',null,['class'=>"form-control", 'placeholder'=>"Ingrese un nombre..."])!!}
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Rut</label>
                            {!!Form::text('rut',null,['class'=>"form-control", 'placeholder'=>"Ingrese un rut ..."])!!}
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Direccion</label>
                            {!!Form::text('direccion',null,['class'=>"form-control", 'placeholder'=>"Ingrese una direccion..." ])!!}
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Correo</label>
                            {!!Form::email('correo',null,['class'=>"form-control", 'placeholder'=>"Ingrese un correo..." ])!!}
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">telefono</label>
                            {!!Form::number('telefono',null,['class'=>"form-control", 'placeholder'=>"Ingrese un telefono..." ])!!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal" type="button">
                    Cerrar
                </button>
                <button class="btn btn-primary">
                    Registrar
                </button>
            </div>
        </div>
        {!!Form::close()!!}
    </div>
</div>
