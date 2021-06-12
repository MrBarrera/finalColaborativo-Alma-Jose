@extends('layout')
@section('content')
    <div class="container shadow-lg p-3 mt-5 bg-body rounded">
                <h1>Crear Genero</h1>
            <div class="">
                <form action="{{route('generos.store')}}" method="POST" novalidate>
                    @csrf
                    <div class="form-group">
                        <label for="descripcion">Descripcion</label>
                        <input class="form-control" type="text" name="descripcion" id="descripcion"
                               value="" maxlength="45">
                    </div>
                    <div class="d-flex justify-content-center my-4">
                        <button class="btn btn-success" type="submit">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
