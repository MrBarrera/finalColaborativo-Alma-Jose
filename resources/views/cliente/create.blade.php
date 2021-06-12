@extends('layout')
@section('content')
    <div class="container shadow-lg p-3 mt-5 bg-body rounded">
                <h1>Crear Cliente</h1>
            <div class="">
                <form action="{{route('clientes.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="descripcion">Nit</label>
                        <input class="form-control" type="text"  name="nit"
                               value="">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Nombre</label>
                        <input class="form-control" type="text" name="nombre"
                               value="">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Fecha de Nacimiento</label>
                        <input class="form-control" type="date"
                               value=""  name="fecha_nacimiento">
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
                        <label for="descripcion">Categoria</label>
                        <div class="input-group mb-3">
                            <select class="custom-select form-control" id="inputGroupSelect01" name="categoria_idcategoria">
                                @foreach($categorias as $categoria)
                                    <option value="{{$categoria->idcategoria}}">{{$categoria->descripcion}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="descripcion">Genero</label>
                        <div class="input-group mb-3">
                            <select class="custom-select form-control" id="inputGroupSelect01" name="genero_idgenero">
                                @foreach($generos as $genero)
                                    <option data-tokens="{{$genero->descripcion}}"
                                            value="{{$genero->idgenero}}">{{$genero->descripcion}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Departamento</label>
                        <div class="input-group mb-3">
                            <select class="custom-select form-control" id="inputGroupSelect01" name="departamento_iddepartamento">
                                @foreach($departamentos as $departamento)
                                    <option value="{{$departamento->iddepartamento}}">{{$departamento->descripcion}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center my-4">
                        <button class="btn btn-success" type="submit">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
