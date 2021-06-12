<?php

namespace App\Http\Controllers;

use App\Genero;
use App\Estudiante;
use App\Http\Requests\EstudiantePostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerEstudiante extends Controller
{
    public function index(Request $request)
    {

        $clientes = DB::table('estudiante')
            ->join('genero', 'estudiante.genero_id_genero','=', 'genero.id_genero')
            ->select('estudiante.*', 'genero.descripcion as genero' )->get();
        return view('estudiante.index', compact('estudiantes'));


    }

    public function create()
    {
        $generos = Genero::all();
        return view('estudiante.create',compact('genero'));
    }

    public function store(EstudiantePostRequest $request)
    {
        $data = $request->validated();
        $estudiantes= Estudiante::create($data);
        return redirect()->route('estudiantes.index');
    }


}
