{{$Modo =='crear' ? 'Agregar alumno':'Modificar alumno'}}

<br>
<br>
<label for="Nombre">{{'Nombre'}}</label>
<input type="text" name="Nombre" id="Nombre" value="{{ isset($alumno->Nombre)?$alumno->Nombre:''}}">
<br>

<label for="Apellidos">{{'Apellidos'}}</label>
<input type="text" name="Apellidos" id="Apellidos" value="{{ isset($alumno->Apellidos)?$alumno->Apellidos:''}}">
<br>

<label for="Correo">{{'Correo'}}</label>
<input type="email" name="Correo" id="Correo" value="{{ isset($alumno->Correo)?$alumno->Correo:''}}">
<br>

<label for="Grado">{{'Grado'}}</label>
<input type="text" name="Grado" id="Grado" value="{{ isset($alumno->Grado)?$alumno->Grado:''}}">
<br>

<input type="submit" value="{{$Modo =='crear' ? 'Agregar':'Modificar'}}">