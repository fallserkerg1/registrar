@extends('layouts.master')

@section('title','Crear')

@section('content')
<br>
<br>
<br>
<div class="container">
<div class="container">
	<h2>Crear Registro</h2>

<form method="POST" action="{{ route('store')}}">
	@csrf
	<label>Nit</label><br><input type="text" name="nit">	
	<br>
	<label>Razón</label><br><input type="text" name="razon">
	<br>
	<label>Departamento</label><br><input type="text" name="departamento">
	<br>
	<label>Municipio</label><br><input type="text" name="municipio">
	<br>
	<label>Direccion</label><br><input type="text" name="direccion">
	<br>
	<label>Correo</label><br><input type="text" name="correo">
	<br>
	<label>Telefono</label><br><input type="text" name="telefono">
	<br>
	<br>
	<input type="submit" value ="Enviar" name="" class="btn btn-success">
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