<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
  /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $curso = Curso::orderBy('created_at', 'DESC')->get();
  
        return view('cursos.index', compact('curso'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {
        Curso::create($request->all());
 
        return redirect()->route('cursos')->with('success', 'Curso added successfully');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $curso = Curso::findOrFail($id);
  
        return view('cursos.show', compact('curso'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $curso = Curso::findOrFail($id);
  
        return view('cursos.edit', compact('curso'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $curso = Curso::findOrFail($id);
  
        $curso->update($request->all());
  
        return redirect()->route('cursos')->with('success', 'Aviso: Curso atualizado com sucesso.');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $curso = Curso::findOrFail($id);
  
        $curso->delete();
  
        return redirect()->route('cursos')->with('success', 'Aviso: Curso excluído com sucesso.');
    }
}