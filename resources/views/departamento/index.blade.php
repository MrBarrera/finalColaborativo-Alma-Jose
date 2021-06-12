@extends('layout')
@section('content')
    <div class="container shadow-lg p-3 mt-5 bg-body rounded">
        <h1 class="m-3"> Departamentos </h1>
        <table class="table table-hover">
            <thead class="thead-dark">
            <tr>
                <td>Descripcion</td>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @forelse($departamentos as $departamento)
                <tr>
                    <td>{{$departamento->descripcion}}</td>
                    <td class="d-flex justify-content-around">
                        <a class="btn btn-danger" href="javascript:void(0)" onclick="event.preventDefault();
                            document.getElementById('delete-departamento-{{$departamento->iddepartamento}}').submit();">
                            Eliminar
                        </a>
                        <form id="delete-departamento-{{$departamento->iddepartamento}}"
                              action="{{route('departamentos.destroy',['departamento'=>$departamento])}}" method="POST"
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
