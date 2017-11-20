<?php

namespace App\Http\Controllers\Painel;

use App\Models\Distrito;
use App\Models\Fontenaria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FontenariaController extends Controller
{
    private $fontenaria;
    public function __construct(Fontenaria $fontenaria)
    {
        $this->fontenaria=$fontenaria;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fontenarias = $this->fontenaria->all();
        $distritos = Distrito::all();
        return view('painel.fontenaria', compact('fontenarias','distritos'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $distritos = Distrito::all();
        $empresa = DB::table('fontenarias')->where('id', Auth::id())->value('empresa_id');

        return view('painel.regFontenaria', compact('empresa','distritos'));
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
        $insert = $this->fontenaria->create($dataForm);
        $last_id = $insert->id;

        if (isset($_POST['primeira']))
            return redirect()->route('register', compact('last_id'));
        else {
            return redirect()->route('fontenaria.index')->with('message', 'Fontária salva com sucesso');
        }
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
