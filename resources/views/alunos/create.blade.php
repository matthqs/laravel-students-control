@extends('layouts.app')
  
@section('title', 'Alunos')
  
@section('contents')
    <h1 class="mb-0">Incluir Aluno</h1>
    <hr />
    <form action="{{ route('alunos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nome" class="form-control" placeholder="Nome do Aluno" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
            <input type="email" name="email" class="form-control" placeholder="exemplo@exemplo.com" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
            <input type="date" name="data_nascimento" class="form-control"  placeholder="01/01/2000" required>
            </div>
        </div>  
 
        <div class="row mb-3" >
            <div class="col">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </div>
    </form>
@endsection