@extends('layouts.app')
  
@section('title', 'Alunos')
  
@section('contents')
    <h1 class="mb-0">Incluir Aluno</h1>
    <hr />
    <form action="{{ route('matriculas.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row mb-3">
        <div class="col">
            <select name="aluno_id" class="form-control" required>
                <option value="">Selecione o Aluno</option>
                @foreach($alunos as $aluno)
                    <option value="{{ $aluno->id }}">{{ $aluno->nome }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <select name="curso_id" class="form-control" required>
                <option value="">Selecione o Curso</option>
                @foreach($cursos as $curso)
                    <option value="{{ $curso->id }}">{{ $curso->titulo }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <!-- Other fields like email and data_nascimento -->

    <div class="row mb-3">
        <div class="col">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </div>
</form>

@endsection