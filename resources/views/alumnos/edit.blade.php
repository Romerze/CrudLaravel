<form action="{{ url('/alumnos/'.$alumno->id)}}" method="post">
    {{ csrf_field() }}
    {{ method_field('PATCH')}}

    @include('alumnos.form',['Modo'=>'editar'])
    
</form>