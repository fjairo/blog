<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::orderBy('id', 'desc')->paginate();
        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'categoria' => 'require'
        ]);

        $curso = new Curso;
        $curso->name = $request->name;
        $curso->description = $request->descripcion;
        $curso->category = $request->categoria;
        $curso->save();

        return Redirect()->route('cursos.show', $curso->id);
    }

    public function show(Curso $curso)
    {

        return view('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso)
    {
        return view('cursos.edit', compact('curso'));
    }
    public function update(Request $request, Curso $curso)
    {
        $curso->name = $request->name;
        $curso->description = $request->descripcion;
        $curso->category = $request->categoria;
        $curso->save();
        
        return Redirect()->route('cursos.show', $curso->id);
    }
}
