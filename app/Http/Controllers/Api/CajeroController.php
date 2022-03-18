<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cajero;

class CajeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cajeros = Cajero::all();
        return $cajeros;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cajero = new Cajero();
        $cajero->nombre = $request->nombre;
        $cajero->password = $request->password;
        $cajero->edad = $request->edad;
        $cajero->iniContrato = $request->iniContrato;
        $cajero->finContrato = $request->finContrato;

        $cajero->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cajero = Cajero::find($id);
        return $cajero;
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
        $cajero = Cajero::findOrFail($request->id);
        $cajero->nombre = $request->nombre;
        $cajero->password = $request->password;
        $cajero->edad = $request->edad;
        $cajero->iniContrato = $request->iniContrato;
        $cajero->finContrato = $request->finContrato;

        $cajero->save();
        return $cajero;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cajero = Cajero::destroy($id);
        return $cajero;
    }
}
