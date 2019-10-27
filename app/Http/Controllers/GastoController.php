<?php

namespace App\Http\Controllers;

use App\Gasto;
use Illuminate\Http\Request;
use Session;

class GastoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gastos = Gasto::paginate(4);
        return view ('gastos.index',compact('gastos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('gastos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate{[
            'nombre' => 'required',
            'descripcion' => 'required',
            'fecha' => 'required',
            'monto' => 'required',
        ]};

//$tipo=tipo:find('nombre')

        Gasto::create ($request->all());


        Session::flash('message','gasto guardado con exito');
        return redirect()->route('gastos.index');

    

    }

    

    /**
     * Display the specified resource.
     *
     * @param  \App\Gasto  $gasto
     * @return \Illuminate\Http\Response
     */
    public function show(Gasto $gasto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gasto  $gasto
     * @return \Illuminate\Http\Response
     */
    public function edit(Gasto $gasto)
    {
       return view ('gastos.edit',compact('gasto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gasto  $gasto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gasto $gasto)
    {
        $request->validate{[
            'nombre' => 'required',
            'descripcion' => 'required',
            'fecha' => 'required',
            'monto' => 'required',
        ]};

        $gasto->update($request->all());

        Session::flash('message','actualizado con exito');
        return redirect()->route('gastos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gasto  $gasto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gasto $gasto)
    {
        $gasto->delete();
        Session::flash('message','borrado con exito');
        return redirect()->route('gastos.index');
    }
}
