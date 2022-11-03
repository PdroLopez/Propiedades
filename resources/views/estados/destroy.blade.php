 <form action="{{ route('mantenedor-estados.destroy', $estados->id )}}" method="POST">

                                       
    @method('DELETE')
    @csrf

    <button type="submit" title="delete"class="dropdown-item" onclick="return confirm('¿Quiere borrar el registro?')">Eliminar</button>

</form>