<?php

namespace App\Http\Controllers\Painel;

use App\Http\Requests\DistritoRequest;
use App\Models\Distrito;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DistritoController extends Controller
{
    private $distrito;
    public function __construct(Distrito $distrito)
    {
        $this->distrito=$distrito;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $distritos = $this->distrito->all();
        $provincias = ['Maputo Provincia', 'Maputo Cidade','Gaza','Inhambane','Sofala','Zambézia','Nampula','Niassa','Manica','Tete','Cabo Delgado'];
        return view('painel.distrito', compact('distritos','provincias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('painel.distrito');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DistritoRequest $request)
    {
        Distrito::create($request->all());
        return redirect()->route('distrito.index')->with('message', 'Distrito salvo com sucesso');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
