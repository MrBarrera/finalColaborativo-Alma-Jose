<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Genero;
use App\Http\Requests\GeneroPostRequest;

class ControllerGenero extends Controller
{
    public function index(Request $request)
    {  //leemos o listamos los datos

        $generos = Genero::all();
        return view('genero.index', compact('generos')); //nombre de ruta
    }

    public function create()
        //se crea categoria

    {   //se retorna a la ruta, se envian objetos o variables hacia la vista

        return view('genero.create');
    }

    public function store(GeneroPostRequest $request)
    {   //guardamos los datos ingresados

        $data = $request->validated();
        $genero = Genero::create($data);
        return redirect()->route('generos.index');
    }

}
