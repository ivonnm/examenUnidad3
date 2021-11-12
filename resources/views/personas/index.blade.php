
@extends('welcome')
@section('title')
@section('contenido')
<h1 class="text-center display-3">Bienvenidos al registro</h1>
<br>
<br>
<a href="{{route('personas.create')}}" ><h5>Crear Un nuevo registro</h5></a>

<br>
<br>
        <li class="list-group-item">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Apellido Paterno</th>
                        <th scope="col">Apellido Materno</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">fecha de nacimiento</th>
                        <th scope="col">sexo</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach($persona as $personas)
                    <tr>
                        <th scope="row">{{$personas->id}}</th>
                        <th>{{$personas->apellidoPaterno}}</th>
                        <th>{{$personas->apellidoMaterno}}</th>
                        <th>{{$personas->nombre}}</th>
                        <th>{{$personas->fecha_n}}</th>
                        <th>{{$personas->sexo}}</th>

                    </tr>
                    <th>
                         <!-- BOTON Eliminar -->
                        <form action="{{route('personas.destroy',$personas)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger"><i class="fas fa-user-times"></i></button>
                        </form>
                    </th>
                    <th>
                        <button type="button" class="btn btn-warning">
                            <a style="color: black;" href="{{route('personas.actualizar', $personas)}}"><i class="fas fa-pen"></i></a>
                        </button>
                    </th>
                    <th>
                        <?php
                        $fecha_n = new DateTime($personas['fecha_n']);
                        $actual = new DateTime();
                        $edad = $actual->diff($fecha_n);
                        echo $edad->y;
                        ?>
                    </th>


                    @endforeach


                </tbody>
            </table>
        </li>



@endsection

