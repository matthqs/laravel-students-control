@extends('layouts.app')
  
@section('title', 'Cursos')
  
@section('contents')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="mb-0">Listagem dos Cursos</h1>
        <div class="d-flex">
            <div>
                <a href="{{ route('cursos.create') }}" class="btn btn-primary mr-2">Incluir curso</a>
            </div>
        </div>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table id="curso-table" class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th></th>
                <th>Titulo do Curso</th>
                <th>Descrição</th>
                <th>Controle</th>
            </tr>
        </thead>
        <tbody>
            @if($curso->count() > 0)
                @foreach($curso as $c)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $c->titulo }}</td>
                        <td class="align-middle">{{ $c->descricao }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('cursos.show', $c->id) }}" type="button" class="btn btn-secondary">Detalhes</a>
                                <a href="{{ route('cursos.edit', $c->id)}}" type="button" class="btn btn-warning">Editar</a>
                                <form action="{{ route('cursos.destroy', $c->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Excluir</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Curso não encontrado</td>
                </tr>
            @endif
        </tbody>
    </table>

    <script>
$(document).ready(function() {

var matriculaTable = $('#matricula-table');
var table = $('#curso-table').DataTable({
    "language": {
        "sEmptyTable":     "Nenhum registro encontrado",
        "sInfo":           "Mostrando de _START_ até _END_ de _TOTAL_ registros",
        "sInfoEmpty":      "Mostrando 0 até 0 de 0 registros",
        "sInfoFiltered":   "(Filtrados de _MAX_ registros)",
        "sInfoPostFix":    "",
        "sInfoThousands":  ".",
        "sLengthMenu":     "Mostrar _MENU_ registros por página",
        "sLoadingRecords": "Carregando...",
        "sProcessing":     "Processando...",
        "sZeroRecords":    "Nenhum registro encontrado",
        "sSearch":         "Pesquisar:",
        "oPaginate": {
            "sNext":     "Próximo",
            "sPrevious": "Anterior",
            "sFirst":    "Primeiro",
            "sLast":     "Último"
        },
        "oAria": {
            "sSortAscending":  ": Ordenar colunas de forma ascendente",
            "sSortDescending": ": Ordenar colunas de forma descendente"
        }
    },
        columnDefs: [{
        "defaultContent": "",
        "targets": "_all"
    }],
    
});

$('#search').on('keyup', function () {
    table.search(this.value).draw();
});
});

    </script>
@endsection
