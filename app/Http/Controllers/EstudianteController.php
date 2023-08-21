<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

use Illuminate\Validation\Rule;


class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $estudiantes = Estudiante::all();
        return view('estudiante.index',compact('estudiantes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('estudiante.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $estudiantes = new Estudiante();

        $request->validate([
            'matricula' => ['required', 'unique:estudiantes,matricula', 'min:10', 'max:10'],
            'nombre' => ['required', 'regex:/^[a-zA-Z]+$/'],
            'apellidopaterno' => ['required', 'regex:/^[a-zA-Z]+$/'],
            'apellidomaterno' => ['required', 'regex:/^[a-zA-Z]+$/'],
            'correo' => ['required', 'email:rfc,dns','unique:estudiantes,correo'],
        ]);

        $estudiantes->matricula = $request->get('matricula');
        $estudiantes->nombre = $request->get('nombre');
        $estudiantes->apellidopaterno = $request->get('apellidopaterno');
        $estudiantes->apellidomaterno = $request->get('apellidomaterno');
        $estudiantes->correo = $request->get('correo');

        $estudiantes->save();

        return redirect('/estudiantes');
    }

    /**
     * Display the specified resource.
     */
    public function show(Estudiante $estudiante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $estudiante = Estudiante::find($id);
        return view('estudiante.edit',compact('estudiante'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $estudiante = Estudiante::find($id);

        //La validacion primero

        $request->validate([
            'matricula' => ['required', Rule::unique('estudiantes','matricula')->ignore($id), 'min:10', 'max:10'],
            'nombre' => ['required', 'regex:/^[a-zA-Z]+$/'],
            'apellidopaterno' => ['required', 'regex:/^[a-zA-Z]+$/'],
            'apellidomaterno' => ['required', 'regex:/^[a-zA-Z]+$/'],
            'correo' => ['required', 'email:rfc,dns', Rule::unique('estudiantes','correo')->ignore($id)],
        ]);

        $estudiante->matricula = $request->get('matricula');
        $estudiante->nombre = $request->get('nombre');
        $estudiante->apellidopaterno = $request->get('apellidopaterno');
        $estudiante->apellidomaterno = $request->get('apellidomaterno');
        $estudiante->correo = $request->get('correo');

        $estudiante->save();

        return redirect('/estudiantes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $estudiante = Estudiante::find($id);
        $estudiante->delete();

        return redirect('/estudiantes');
    }
}
