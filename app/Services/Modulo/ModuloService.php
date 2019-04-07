<?php

namespace App\Services\Modulo;

use Illuminate\Http\Request;
use App\Repositories\Modulo\ModuloRepository;

class ModuloService
{

    private $moduloRepository;

    public function __construct(ModuloRepository $moduloRepository)
    {
        $this->moduloRepository = $moduloRepository;
    }

    public function list(){
        return $this->moduloRepository->list();
    }
}