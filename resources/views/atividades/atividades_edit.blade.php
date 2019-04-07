@extends('layouts.app')

@section('content')
    <div>
        <div class="jumbotron">
            <h1 class="text-center">Alteração de Atividades</h1>
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
        <form method="post" action="{{ route('atividades.update', $atividade->id) }}" >
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="titulo" class="form-control" id="titulo" name="titulo" requerid placeholder="coloque o título" value="{{ $atividade->titulo }}">
            </div>
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <input type="text" class="form-control" id="descricao" name="descricao" requerid placeholder="Descrição" value="{{ $atividade->descricao }}">
            </div>

            <label for="modulo">Modulo</label>
            <div class="input-group mb-3">
                <select class="custom-select" name="id_modulo">
                    @foreach($modulos as $modulo)
                        <option value="{{ $modulo->id }}"> {{ $modulo->titulo }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="{{ route('atividades.index') }}" class="btn btn-success">Voltar</a>
        </form>
    </div>
@endsection
