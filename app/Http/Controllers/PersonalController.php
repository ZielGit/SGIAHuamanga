<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personal;

class PersonalController extends Controller
{
    
    public function index()
    {
        /*
        $personals = Personal::all();
        return view('personal.index')->with('personals',$personals);*/
        $personals = Personal::all();
        return view('personal.index', compact('personals'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required',
            'apellido'=>'required',
            'cargo'=>'required',
            'condicion'=>'required',
            'plaza'=>'required',
            'dni'=>'required',
            'jornada'=>'required',
            'estado'=>'required'
        ]);

        $personals = new Personal();
        $personals->nombre = $request->get('nombre');
        $personals->apellido = $request->get('apellido');
        $personals->cargo = $request->get('cargo');
        $personals->condicion = $request->get('condicion');
        $personals->tipo_plaza = $request->get('plaza');
        $personals->dni = $request->get('dni');
        $personals->jor_lab = $request->get('jornada');
        $personals->estado = $request->get('estado');

        $personals->save();

        /*tambien podriamos lo de arriba por
        Personal::create($request->all());
        */
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Personal $personal)
    {
        /*
        $personal = Personal::find($id_personal);
        return view('personal.edit')->with('personal',$personal);*/

        return view('personal.edit', compact('personal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personal $personal)
    {
        $request->validate([
            'nombre'=>'required',
            'apellido'=>'required',
            'cargo'=>'required',
            'condicion'=>'required',
            'tipo_plaza'=>'required',
            'dni'=>'required',
            'jor_lab'=>'required',
            'estado'=>'required'
        ]);

        $personal->nombre = $request->nombre;
        $personal->apellido = $request->apellido;
        $personal->cargo = $request->cargo;
        $personal->condicion = $request->condicion;
        $personal->tipo_plaza = $request->tipo_plaza;
        $personal->dni = $request->dni;
        $personal->jor_lab = $request->jor_lab;
        $personal->estado = $request->estado;

        $personal->save();

        /*tambien podriamos lo de arriba por
        $personal->update($request->all());
        */
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
