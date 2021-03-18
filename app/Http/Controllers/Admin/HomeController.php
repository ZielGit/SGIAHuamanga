<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Personal;

class HomeController extends Controller {

    public function index() 
    {
        $personals = Personal::all();
        return view('admin.index')->with('personals',$personals);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    public function edit($id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
