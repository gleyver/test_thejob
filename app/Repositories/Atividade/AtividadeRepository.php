<?php


namespace App\Repositories\Atividade;
use DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Collection;


class AtividadeRepository
{

    public function list(){
//        return dd(DB::connection()->table('atividades')->get());
        return view('atividades.atividades_list');
    }

    public function stored(){

    }

    public function update(){

    }
}