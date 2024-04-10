@extends('layouts.app')
  
@section('title', 'Alunos')
  
@section('contents')
    <h1 class="mb-0">Detalhe do Aluno</h1>
    <hr />
    <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" placeholder="Nome do Aluno" value="{{ $aluno->nome }}" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $aluno->email }}" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Email</label>
                <input type="date" name="data_nascimento" class="form-control" placeholder="Email" value="{{ $aluno->data_nascimento }}" readonly >
            </div>
        </div>

        <div class="row">
        <div class="col mb-3">
            <label class="form-label">Criado em</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $aluno->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Atualizado em</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $aluno->updated_at }}" readonly>
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