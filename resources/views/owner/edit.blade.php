<div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="edit{{$owners->id}}" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
			{!! Form::open(['route' => ['mantenedor-owner.update',$owners->id],'files'=>true, 'method' => 'PUT']) !!}
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Editar Propietario
                </h5>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Nombre</label>
                            {!!Form::text('nombre',$owners->nombre,['class'=>"form-control", 'placeholder'=>"Ingrese un nombre..."])!!}
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Rut</label>
                            {!!Form::text('rut',$owners->rut,['class'=>"form-control", 'placeholder'=>"Ingrese un rut ..."])!!}
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Direccion</label>
                            {!!Form::text('direccion',$owners->direccion,['class'=>"form-control", 'placeholder'=>"Ingrese una direccion..." ])!!}
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Correo</label>
                            {!!Form::email('correo',$owners->correo,['class'=>"form-control", 'placeholder'=>"Ingrese un correo..." ])!!}
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">telefono</label>
                            {!!Form::number('telefono',$owners->telefono,['class'=>"form-control", 'placeholder'=>"Ingrese un telefono..." ])!!}
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal" type="button">
                    Cerrar
                </button>
                <button class="btn btn-primary">
                    Actualizar
                </button>
            </div>
            {!!Form::close()!!}
        </div>
    </div>
</div>

