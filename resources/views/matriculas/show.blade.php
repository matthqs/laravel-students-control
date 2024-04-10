@extends('layouts.app')
  
@section('title', 'Matriculas')	
  
@section('contents')
    <h1 class="mb-0">Detalhe da Matrícula</h1>
    <hr />
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
        <div class="col mb-3">
            <label class="form-label">Criado em</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $matricula->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Atualizado em</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $matricula->updated_at }}" readonly>
        </div>
        </div>

        <div class="row">
            <div class="col">
                <button type="button" class="btn btn-warning" onclick="voltar()">Voltar</button>
            </div>
        </div>
    </div>



    <script>
        function voltar() {
            window.history.back(); // Go back to the previous page
        }
    </script>
@endsection