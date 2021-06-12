@extends('layout')
@section('content')
    <div class="container shadow-lg p-3 mt-5 bg-body rounded">
                <h1>Crear Estudiante</h1>
            <div class="">
                <form action="{{route('estudiantes.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="descripcion">ID</label>
                        <input class="form-control" type="text"  name="idestudiante"
                               value="">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Nombre</label>
                        <input class="form-control" type="text" name="nombre"
                               value="">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Apellidos</label>
                        <input class="form-control" type="date"
                               value=""  name="apellidos">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Correo</label>
                        <input class="form-control" type="email"  name="correo"
                               value="">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Telefono</label>
                        <input class="form-control" type="text"  name="telefono"
                               value="">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Genero</label>
                        <div class="input-group mb-3">
                            <select class="custom-select form-control" id="inputGroupSelect01" name="genero_id_genero">
                                @foreach($generos as $generos)
                                    <option value="{{$generos->id_generos}}">{{$genero->descripcion}}</option>
                                @endforeach
                            </select>
                        </div>
                    <div class="d-flex justify-content-center my-4">
                        <button class="btn btn-success" type="submit">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
