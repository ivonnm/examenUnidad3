
@extends('welcome')
@section('title')
@section('contenido')
<div class="container">
    <div class="container">
        <div class="container">
        <h1 class="text-center display-3">Actualiza</h1>
        <form action="{{route('personas.update')}}" method="POST">

            @csrf
            @method('put')


            <label for="apellidoPaterno">Apellido Paterno:</label>
            <input type="text" class="form-control" name="apellidoPaterno"/>
            <br>
            <label for="apellidoMaterno">Apellido Materno</label>
            <input type="text"  class="form-control" name="apellidoMaterno"/>
            <br>
            <label for="nombre">Nombre</label>
            <input type="text"  class="form-control" name="nombre"/>
            <br>
            <label for="fecha_n">Fecha de nacimiento</label>
            <input type="date" class="form-control"  name="fecha_n"/>
            <br>
            <label for="sexo">Sexo</label>
            <input type="text"  class="form-control" name="sexo"/>
            <br>
            <button class="btn btn-success" type="submit">Enviar formulario</button>
            <button class="btn btn-warning" type="submit">Regresar</button>
        </form>
    </div>
  </div>
</div>
@endsection


