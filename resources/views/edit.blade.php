@extends('layouts.master')

@section('title','Editar')

@section('content')
<br>
<br>
<br>
<div class="container">
<div class="container">
	<h2>Editar Registro</h2>

<form method="POST" action="{{ route('update', $fila)}}">
	@csrf @method('PATCH')
	<label>Nit</label><br><input type="text" name="nit" value="{{ $fila->nit}}">	
	<br>
	<label>Razón</label><br><input type="text" name="razon" value="{{ $fila->razon}}">
	<br>
	<label>Departamento</label><br><input type="text" name="departamento" value="{{ $fila->departamento}}">
	<br>
	<label>Municipio</label><br><input type="text" name="municipio" value="{{ $fila->municipio}}">
	<br>
	<label>Direccion</label><br><input type="text" name="direccion" value="{{ $fila->direccion}}">
	<br>
	<label>Correo</label><br><input type="text" name="correo" value="{{ $fila->correo}}">
	<br>
	<label>Telefono</label><br><input type="text" name="telefono" value="{{ $fila->telefono}}">
	<br>
	<br>
	<input type="submit" value ="Actualizar" name="" class="btn btn-success">
</form>
<br>
  <div class="container">
    <a class="btn btn-primary" style ="float:right;" href="{{url('registrar')}}">Volver</a>
  </div>
</div>
</div>
<br>
<br>
<br>
<br>
@endsection