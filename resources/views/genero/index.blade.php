@extends('layout')
@section('content')
    <div class="container shadow-lg p-3 mt-5 bg-body rounded">
        <h1 class="m-3"> GENERO </h1>
        <table class="table table-hover">
            <thead class="thead-dark">
            <tr>
                <td>id_genero</td>
                <th>&nbsp;</th>
            </tr>

            <tr>
                <td>Descripcion</td>
                <th>&nbsp;</th>
            </tr>

            </thead>
            <tbody>
            @forelse($generos as $genero)
            @empty
                <h1 class="m-4">Sin Registros</h1>
            @endforelse
            </tbody>
        </table>
    </div>

@endsection
