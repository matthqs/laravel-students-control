@extends('layouts.app')
  
@section('title', 'Matrículas')
  
@section('contents')
    <h1 class="mb-0">Editar Matrícula</h1>
    <hr />
    <form action="{{ route('matriculas.update', $matricula->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nº Matricula</label>
                <input type="text" name="nome" class="form-control" placeholder="Nome do Aluno" value="{{ $matricula->id }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" placeholder="Nome do Aluno" value="{{ $matricula->aluno->nome }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Curso</label>
                <input type="text" name="curso" class="form-control" placeholder="Email" value="{{ $matricula->curso->titulo }}" >
            </div>
        </div>

        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $matricula->aluno->email }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Data Nascimento</label>
                <input type="date" name="data_nascimento" class="form-control" placeholder="Email" value="{{ $matricula->aluno->data_nascimento }}" >
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="button" class="btn btn-danger" onclick="cancelar()">Cancelar</button>
                <button type="submit" class="btn btn-warning">Salvar Alteração</button>
            </div>
        </div>

    </form>

    <script>
        function cancelar() {
            window.history.back(); // Go back to the previous page
        }
    </script>
@endsection