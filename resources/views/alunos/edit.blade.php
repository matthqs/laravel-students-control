@extends('layouts.app')
  
@section('title', 'Alunos')
  
@section('contents')
    <h1 class="mb-0">Editar Aluno</h1>
    <hr />
    <form action="{{ route('alunos.update', $aluno->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" placeholder="Nome do Aluno" value="{{ $aluno->nome }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $aluno->email }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Email</label>
                <input type="date" name="data_nascimento" class="form-control" placeholder="Email" value="{{ $aluno->data_nascimento }}" >
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