@extends('layout')
@section('content')
    <div class="container shadow-lg p-3 mt-5 bg-body rounded">
        <h1 class="m-3"> Clientes </h1>
        <table class="table table-hover">
            <thead class="thead-dark">
            <tr>
                <td>Nit</td>
                <td>Nombre</td>
                <td>Fecha de Nacimiento</td>
                <td>Edad</td>
                <td>Correo</td>
                <td>Telefono</td>
                <td>Categoria</td>
                <td>Genero</td>
                <td>Departamento</td>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @forelse($clientes as $cliente)
                <tr>
                    <td>{{$cliente->nit}}</td>

                    <td>{{$cliente->nombre}}</td>

                    <td>{{$cliente->fecha_nacimiento}}</td>

                    <td>@if($cliente->fecha_nacimiento) {{Carbon\Carbon::parse($cliente->fecha_nacimiento)->diffInYears(now())}} @endif</td>


                    <td>{{$cliente->correo}}</td>

                    <td>{{$cliente->telefono}}</td>

                    <td>{{$cliente->categoria}}</td>

                    <td>{{$cliente->genero}}</td>

                    <td>{{$cliente->departamento}}</td>

                    <td class="d-flex justify-content-around">
                        <a class="btn btn-danger" href="javascript:void(0)" onclick="event.preventDefault();
                            document.getElementById('delete-estudiante-{{$cliente->idcliente}}').submit();">
                            Eliminar
                        </a>
                        <form id="delete-cliente-{{$cliente->idcliente}}"
                              action="{{route('clientes.destroy',['estudiante'=>$cliente->idcliente])}}" method="POST"
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
