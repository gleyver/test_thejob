<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Modulo\ModuloService;
use App\Persistence\Modulo\Modulo;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;


class ModuloController extends Controller
{


    private $moduloService;

    public function __construct(ModuloService $moduloService)
    {
        $this->moduloService = $moduloService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modulos = Modulo::all();

        return view('modulos.modulos_list', compact('modulos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modulos.modulos_new');
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
            'titulo'    =>'required|string',
            'descricao' =>'required|string',
        ]);

        $modulo =  new Modulo([
           'titulo'     =>  $request->get('titulo'),
           'descrica'   =>  $request->get('descricao'),
        ]);
        $modulo->save();
        return redirect('/modulos')->with('sucess', 'stock gas been added');

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
        $modulo = Modulo::find($id);

        return view('modulos.modulos_edit', compact('modulo'));
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
//        echo "cheguei";
        $request->validate([
            'titulo'    =>'required|string',
            'descricao' =>'required|string',
        ]);
//
        $modulo = Modulo::find($id);
        $modulo->titulo     = $request->get('titulo');
        $modulo->descricao  = $request->get('descricao');
        $modulo->save();
//
////        echo "foi";
        return redirect('/modulos')->with('sucess', 'stock gas been update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $modulo = Modulo::find($id);
        $modulo->delete();

        return redirect('/modulos')->with('success', 'Stock has been deleted Successfully');
    }
}
