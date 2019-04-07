<?php

namespace App\Http\Controllers;

use App\Persistence\Atividade\Atividade;
use App\Persistence\Modulo\Modulo;
use Illuminate\Http\Request;
use App\Services\Atividade\AtividadesService;

class AtividadeController extends Controller
{

    private $atividadesService;

    public function __construct(AtividadesService $atividadesService)
    {
        $this->atividadesService = $atividadesService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $atividades = Atividade::all();

        return view('atividades.atividades_list', compact('atividades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $modulos = Modulo::all();
        return view('atividades.atividades_new', compact('modulos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_modulo' =>  'required|integer',
            'titulo'    =>  'required|string',
            'descricao' =>  'required|string',
        ]);

        $atividade =  new Atividade([
            'id_modulo'     =>  $request->get('id_modulo'),
            'titulo'        =>  $request->get('titulo'),
            'descricao'     =>  $request->get('descricao'),
        ]);
        $atividade->save();
        return redirect('/atividades')->with('sucess', 'stock gas been added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $atividade = Atividade::find($id);
        $modulos = Modulo::all();

        return view('atividades.atividades_edit', compact('atividade','modulos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_modulo' =>  'required|integer',
            'titulo'    =>  'required|string',
            'descricao' =>  'required|string',
        ]);

        $atividade = Atividade::find($id);
        $atividade->id_modulo   = $request->get('id_modulo');
        $atividade->titulo      = $request->get('titulo');
        $atividade->descricao   = $request->get('descricao');
        $atividade->save();

        return redirect('/atividades')->with('sucess', 'stock gas been update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $atividade = Atividade::find($id);
        $atividade->delete();

        return redirect('/atividades')->with('success', 'Stock has been deleted Successfully');
    }
}
