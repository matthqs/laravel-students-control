<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Aluno;
use App\Models\Matricula;

class DashboardController extends Controller
{
    public function index()
    {
        // Fetch counts from respective models
        $cursoCount = Curso::count();
        $alunoCount = Aluno::count();
        $matriculaCount = Matricula::count();

        // Get the authenticated user
        $user = auth()->user();

        return view('dashboard', compact('user', 'cursoCount', 'alunoCount', 'matriculaCount'));
    }
}