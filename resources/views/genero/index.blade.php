@extends('layout')
@section('content')
    <div class="container shadow-lg p-3 mt-5 bg-body rounded">
        <h1 class="m-3"> Genero </h1>
        <table class="table table-hover">
            <thead class="thead-dark">
            <tr>
                <td>Descripcion</td>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @forelse($generos as $genero)
                <tr>
                    <td>{{$genero->descripcion}}</td>
                    <td class="d-flex justify-content-around">
                        <a class="btn btn-danger" href="javascript:void(0)" onclick="event.preventDefault();
                            document.getElementById('delete-genero-{{$genero->idgenero}}').submit();">
                            Eliminar
                        </a>
                        <form id="delete-genero-{{$genero->idgenero}}"
                              action="{{route('generos.destroy',['genero'=>$genero])}}" method="POST"
                              style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
            @empty
                <h1 class="m-4">Sin Registros</h1>
            @endforelse
            </tbody>
        </table>
    </div>

@endsection
