
<form action="{{ url('/alumnos')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}

@include('alumnos.form',['Modo'=>'crear'])

</form>