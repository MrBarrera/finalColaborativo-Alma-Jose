@extends('layout')
@section('content')
    <div class="container shadow-lg p-3 mt-5 bg-body rounded">
        <h1 class="m-3"> Categoría </h1>
        <table class="table table-hover">
            <thead class="thead-dark">
            <tr>
                <td>Descripcion</td>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @forelse($categorias as $categoria)
                <tr>
                    <td>{{$categoria->descripcion}}</td>


                    <td class="d-flex justify-content-around">
                        <a class="btn btn-danger"  onclick="event.preventDefault();
                            document.getElementById('delete-categoria-{{$categoria->idcategoria}}').submit();">
                            Eliminar
                        </a>
                        <form id="delete-categoria-{{$categoria->idcategoria}}"
                              action="{{route('categorias.destroy',['categoria'=>$categoria])}}" method="POST"
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
