
<a href="{{ url('alumnos/create') }}">Agregar Empleado</a>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Correo</th>
            <th>Grado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($alumnos as $alumno)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{ $alumno->Nombre}} </td>
            <td>{{ $alumno->Apellidos}}</td>
            <td>{{ $alumno->Correo}}</td>
            <td>{{ $alumno->Grado}}</td>
            <td>
            <a href="{{ url('/alumnos/'.$alumno->id.'/edit') }}">Editar</a>    
            | 
                <form method="post" action="{{ url('/alumnos/'.$alumno->id) }}">
                {{csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit">Borrar</button>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>