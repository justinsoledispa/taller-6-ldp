<?php

namespace App\Http\Controllers;
use App\Models\Proyecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProyectoController extends Controller
{
    public function index()
    {
        $proyectos = DB::table('proyectos')->get();

        return view('projects.index', [
            'proyectos' => $proyectos
        ]);
    }

    public function create()
    {
        return view('projects.new');
    }

    public function store(Request $request)
    {
        DB::table('proyectos')->insert([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->route('projects.index');
    }

    public function edit($id)
    {
        $proyecto = Proyecto::find($id);

        return view('projects.update',compact('proyecto'));
        
    }
}