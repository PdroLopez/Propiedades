<div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="edit{{$clientes->id}}" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
			{!! Form::open(['route' => ['mantenedor-cliente.update',$clientes->id],'files'=>true, 'method' => 'PUT']) !!}
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Editar Clientes
                </h5>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Nombre</label>
                            {!!Form::text('nombre',$clientes->nombre,['class'=>"form-control", 'placeholder'=>"Ingrese un nombre..." , 'required'])!!}
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Rut</label>
                            {!!Form::text('rut',$clientes->rut,['class'=>"form-control", 'placeholder'=>"Ingrese un rut ..." , 'required'])!!}
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Direccion</label>
                            {!!Form::text('direccion',$clientes->direccion,['class'=>"form-control", 'placeholder'=>"Ingrese una direccion..." , 'required'])!!}
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Correo</label>
                            {!!Form::email('correo',$clientes->correo,['class'=>"form-control", 'placeholder'=>"Ingrese un correo..." , 'required'])!!}
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


