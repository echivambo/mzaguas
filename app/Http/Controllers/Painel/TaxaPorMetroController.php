<?php

namespace App\Http\Controllers\Painel;

use App\Http\Requests\TaxaPorMetroRequest;
use App\Models\TaxaPorMetro;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TaxaPorMetroController extends Controller
{
    private $taxa;
    public function __construct(TaxaPorMetro $taxa)
    {
        $this->taxa=$taxa;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $taxas = $this->taxa->all();
        return view('painel.taxa', compact('taxas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('painel.taxa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TaxaPorMetroRequest $request)
    {
        TaxaPorMetro::create($request->all());
        return redirect()->route('taxa.index')->with('message', 'Nova taxa adicionada com sucesso');
        /*
        $dataForm = $request->all();
        $insert = $this->taxa->create($dataForm);


        if($insert)
            return redirect()->route('taxa.index')->with('message', 'Nova taxa adicionada com sucesso');
        else
            return redirect()->back();
        */
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
