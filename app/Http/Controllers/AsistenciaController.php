<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asistencia;
use App\Models\Personal;

class AsistenciaController extends Controller
{
    public function index()
    {
        $personals = Personal::all();
        $asistencias = Asistencia::all();
        return view('asistencia.index', [
            'personals' => $personals,
            'asistencias' => $asistencias
            ]);
        // return view('asistencia.index', compact('asistencias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personals = Personal::all();
        return view('asistencia.create', compact('personals'));
    }

    public function store(Request $request)
    {
        $asistencia = new Asistencia();
        // prueba
        $asistencia->personal_id = $request->get('personal_id');
        $asistencia->fecha = $request->get('fecha');
        $asistencia->estado = $request->get('estado');

        $asistencia->save();

        return redirect('/asistencia/create');
    }

    public function show($id)
    {
        //
    }

    public function edit()
    {
        //
    }
}
