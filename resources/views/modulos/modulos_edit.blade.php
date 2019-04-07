@extends('layouts.app')

@section('content')
    <div>
        <div class="jumbotron">
            <h1 class="text-center">Alteração de Modulos</h1>
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
        <form method="post" action="{{ route('modulos.update', $modulo->id) }}" >
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="titulo" class="form-control" id="titulo" name="titulo" value="{{ $modulo->titulo }}" requerid placeholder="coloque o título">
            </div>
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <input type="text" class="form-control" id="descricao" name="descricao" value="{{ $modulo->descricao }}"  requerid placeholder="Descrição">
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="{{ route('modulos.index') }}" class="btn btn-success">Voltar</a>
        </form>
    </div>
@endsection
