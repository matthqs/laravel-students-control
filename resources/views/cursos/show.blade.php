@extends('layouts.app')
  
@section('title', 'Cursos')
  
@section('contents')
    <h1 class="mb-0">Detalhe do Curso</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Título</label>
            <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $curso->titulo }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Descrição</label>
            <textarea class="form-control" name="description" placeholder="Descriptoin" readonly>{{ $curso->descricao }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Criado em</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $curso->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Atualizado em</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $curso->updated_at }}" readonly>
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