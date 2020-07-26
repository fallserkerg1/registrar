@extends('layouts.master')

@section('title','Registrar')

@section('content')

<div class="container">
	<br>
	<br>
	<br>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nit</th>
      <th scope="col">Razón</th>
      <th scope="col">Departamento</th>
      <th scope="col">Municipio</th>
      <th scope="col">Direccion</th>
      <th scope="col">Correo</th>
      <th scope="col">Telefono</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($datos as $fila)
    <tr>
      <th scope="row">{{ $fila->id}}</th>
      <td>{{ $fila->nit}}</td>
      <td>{{ $fila->razon}}</td>
      <td>{{ $fila->departamento}}</td>
      <td>{{ $fila->municipio}}</td>
      <td>{{ $fila->direccion}}</td>
      <td>{{ $fila->correo}}</td>
      <td>{{ $fila->telefono}}</td>
      <td><a href="{{ route('edit', $fila)}}" class="btn btn-success">Editar</a> 
        <form method="POST" action="{{ route('destroy',$fila)}}">
          @csrf @method('DELETE')
            <button class="btn btn-danger">Eliminar</button>
        </form>
    </tr>
  </tbody>
  @endforeach
</table>
</div>
<br>
  <div class="container">
    <a class="btn btn-primary" style ="float:right;" href="{{url('crear')}}">Crear Registro</a>
  </div>
@endsection