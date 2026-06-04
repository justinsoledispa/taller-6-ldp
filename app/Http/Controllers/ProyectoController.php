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

public function update(Request $request, string $id)
{
    $proyecto = Proyecto::findOrFail($id);

    $proyecto->update([
        'nombre' => $request->nombre,
        'descripcion' => $request->descripcion
    ]);

    return redirect()->route('projects.index');
}


    public function edit($id)
    {
        $proyecto = Proyecto::findOrFail($id);

        return view('projects.update',compact('proyecto'));
        
    }
    public function destroy($id){
        $proyecto=Proyecto::findOrFail($id);
        $proyecto->delete();
        return redirect()->route('projects.index');
    }
}