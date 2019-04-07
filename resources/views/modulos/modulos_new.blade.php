@extends('layouts.app')

@section('content')
    <div>
        <div class="jumbotron">
            <h1 class="text-center">Cadastro de Modulos</h1>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
        @endif

        <form action="{{ route('modulos.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="titulo" class="form-control" id="titulo" name="titulo" requerid placeholder="coloque o título">
            </div>
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <input type="text" class="form-control" id="descricao" name="descricao" requerid placeholder="Descrição">
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="{{ route('modulos.index') }}" class="btn btn-success">Voltar</a>
        </form>
    </div>
@endsection
