@extends('layouts.app')

@section('content')
    <div>
        <div class="jumbotron">
            <h1 class="text-center">Atividades</h1>
        </div>
        <a href="{{ route('atividades.create') }}" class="btn btn-primary">Novo</a>
        <br>
        <br>
        <div class="table-responsive">
            <table class="table table-hover">
                <tr>
                    <th>Modulo</th>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Status</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
                @foreach($atividades as $atividade)
                    <tr>
                        <td>{{ $atividade->id }}</td>
                        <td>{{ $atividade->titulo }}</td>
                        <td>{{ $atividade->descricao }}</td>
                        <td>{{ $atividade->status }}</td>
                        <td><a href="{{ route('atividades.edit',$atividade->id)}}" class="btn btn-primary">Editar</a></td>
                        <td>
                            <form action="{{ route('atividades.destroy', $atividade->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <hr>
        <a href="./" class="btn btn-success">Voltar</a>
    </div>
@endsection
