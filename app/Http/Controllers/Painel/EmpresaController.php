<?php

namespace App\Http\Controllers\Painel;

use App\Models\Empresa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmpresaController extends Controller
{
    private $empresa;
    public function __construct(Empresa $empresa)
    {
        $this->empresa=$empresa;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('painel.regEmpresa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataForm = $request->all();
        $insert = $this->empresa->create($dataForm);

        $last_id = $insert->id;

        if($insert)
            return redirect()->route('fontenaria.create', compact('last_id'));
        else
            return redirect()->back();

    }

    public function regPrimeira(Request $request)
    {
        $dataForm = $request->all();
        $insert = $this->empresa->create($dataForm);

        $last_id = $insert->id;

        if($insert)
            return redirect()->route('fontenaria.create', compact('last_id'));
        else
            return redirect()->back();

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
