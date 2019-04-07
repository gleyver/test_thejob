@extends('layouts.app')

@section('content')
    <div>
        <div class="jumbotron">
            <h1 class="text-center">Modulos</h1>
        </div>
        <a href="{{ route('modulos.create') }}" class="btn btn-primary">Novo</a>
        <br>
        <br>
        <div class="table-responsive">
            <table class="table table-hover">

                <tr>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Status</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
                @foreach($modulos as $modulo)
                <tr>
                    <td>{{ $modulo->titulo }}</td>
                    <td>{{ $modulo->descricao }}</td>
                    <td>{{ $modulo->status }}</td>
                    <td><a href="{{ route('modulos.edit',$modulo->id)}}" class="btn btn-primary">Editar</a></td>
                    <td>
                        <form action="{{ route('modulos.destroy', $modulo->id)}}" method="post">
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
