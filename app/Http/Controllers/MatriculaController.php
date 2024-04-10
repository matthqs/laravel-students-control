<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Curso;
use App\Models\Matricula;

class MatriculaController extends Controller
{
  /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matricula = Matricula::orderBy('created_at', 'DESC')->get();
  
        return view('matriculas.index', compact('matricula'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $alunos = Aluno::all(); // Fetch all alunos from the database

        $cursos = Curso::all(); // Assuming you also need to pass cursos to the view

        return view('matriculas.create', compact('alunos', 'cursos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {
        Matricula::create($request->all());
 
        return redirect()->route('matriculas')->with('success', 'Aluno added successfully');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $matricula = Matricula::findOrFail($id);
  
        return view('matriculas.show', compact('matricula'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $matricula = Matricula::findOrFail($id);
  
        return view('matriculas.edit', compact('matricula'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $matricula = Matricula::findOrFail($id);
  
        $matricula->update($request->all());
  
        return redirect()->route('matriculas')->with('success', 'Aviso: Matricula atualizada com sucesso.');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $matricula = Matricula::findOrFail($id);
  
        $matricula->delete();
  
        return redirect()->route('matriculas')->with('success', 'Aviso: Matricula excluída com sucesso.');
    }
}