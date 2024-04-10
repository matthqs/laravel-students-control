@extends('layouts.app')
  
@section('title', 'Matrículas')
  
@section('contents')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="mb-0">Listagem de Matrículas</h1>
        <div class="d-flex">
            <div>
                <a href="{{ route('matriculas.create') }}" class="btn btn-primary mr-2">Incluir matricula</a>
            </div>
        </div>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table id="matricula-table" class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th></th>
                <th>Nº Matrícula</th>
                <th>Nome Aluno</th>
                <th>Curso</th>
                <th>Controle</th>
            </tr>
        </thead>
        <tbody>
            @if($matricula->count() > 0)
                @foreach($matricula as $c)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $c->id }}</td>
                        <td class="align-middle">{{ $c->aluno->nome }}</td>
                        <td class="align-middle">{{ $c->curso->titulo }}</td>
                        <td class="align-middle">

                                <a href="{{ route('matriculas.show', $c->id) }}" type="button" class="btn btn-secondary">Detalhes</a>
                                <a href="{{ route('matriculas.edit', $c->id)}}" type="button" class="btn btn-warning">Editar</a>
                                <form action="{{ route('matriculas.destroy', $c->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Excluir</button>
                                </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Aluno não encontrado</td>
                </tr>
            @endif
        </tbody>
    </table>

    <script>
$(document).ready(function() {

    var matriculaTable = $('#matricula-table');
    var table = $('#matricula-table').DataTable({
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
