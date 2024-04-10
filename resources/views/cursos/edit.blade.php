@extends('layouts.app')
  
@section('title', 'Cursos')
  
@section('contents')
    <h1 class="mb-0">Editar Curso</h1>
    <hr />
    <form action="{{ route('cursos.update', $curso->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Título</label>
                <input type="text" name="titulo" class="form-control" placeholder="Título" value="{{ $curso->titulo }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Descrição</label>
                <textarea class="form-control" name="descricao" placeholder="Descrição" >{{ $curso->descricao }}</textarea>
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