<?php

namespace App\Http\Controllers\Painel;

use App\Models\diaLimitePagamento;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataLimiteController extends Controller
{
    private $dataLimite;
    public function __construct(diaLimitePagamento $dataLimite)
    {
        $this->dataLimite=$dataLimite;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataLimites = $this->dataLimite->all();
        return view('painel.dataLimite', compact('dataLimites'));
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
        diaLimitePagamento::create($request->all());
        return redirect()->route('dataLimite.index')->with('message', 'O último dia de pagamento adicionado com sucesso');
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
