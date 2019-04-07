<?php

namespace App\Services\Atividade;

use Illuminate\Http\Request;
use App\Repositories\Atividade\AtividadeRepository;

class AtividadesService
{

    private $atividadeRepository;

    public function __construct(AtividadeRepository $atividadeRepository)
    {
        $this->atividadeRepository = $atividadeRepository;
    }

    public function list(){
        return $this->atividadeRepository->list();
    }

}