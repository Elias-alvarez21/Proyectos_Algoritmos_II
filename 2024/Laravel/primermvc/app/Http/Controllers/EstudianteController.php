<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;

class EstudianteController extends Controller
{
    public function index()//METODO GetAll
    {
        $estudiantes = Estudiante::all();//COMANDO SQL "SELECT * FROM Estudiantes": es el GET ALL
        return view('welcome', ['estudiantes' => $estudiantes, 'titulo' => 'Listado de Estudiante']);
    }


    public function show() {
        return view('new');
    }

    public function store(Request $request)
    {
       $newEstudiante = new Estudiante();
       $newEstudiante->nombre = $request->nombre;
       $newEstudiante->apellido = $request->apellido;
       $newEstudiante->edad = $request->edad;
       $newEstudiante->cursando = $request->cursando;
       $newEstudiante->save();
        return redirect()->route('estudiante.index', ['message' => 'success']);
       

    }

    
    public function update(Request $request, string $id)
    {
        //PUT / PATCH UPDATE
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //DELETE DELETE
    }
}
