@extends('layouts.app')
  
@section('title', 'Cursos')
  
@section('contents')
    <h1 class="mb-0">Incluir curso</h1>
    <hr />
    <form action="{{ route('cursos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="titulo" class="form-control" placeholder="Titulo">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <textarea class="form-control" name="descricao" placeholder="Descrição"></textarea>
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </div>
    </form>
@endsection