@extends('layouts.app')

@section('content')
    <div>
        <div class="jumbotron">
            <h1 class="text-center">HOME</h1>
        </div>

        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-3">
                    <a href="{{ route('modulos.index') }}" class="btn btn-primary">MODULOS</a>
                </div>
                <div class="col-md-3">
                    <a href="{{ route('atividades.index') }}" class="btn btn-warning">ATIVIDADES</a>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
@endsection
