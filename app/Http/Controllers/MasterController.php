<?php

namespace App\Http\Controllers;


use App\Juridica;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Juridica::get();

        return view('registrar', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //return request();
        
        $variable = Juridica::create([
            'nit' => request('nit'),
            'razon' => request('razon'),
            'departamento' => request('departamento'),
            'municipio' => request('municipio'),
            'direccion' => request('direccion'),
            'correo' => request('correo'),
            'telefono' => request('telefono'),
        ]);

        return redirect('registrar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Juridica $fila)
    {
        return view('edit',[
            'fila' => $fila
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Juridica $fila)
    {
        $fila->update([
            'nit' => request('nit'),
            'razon' => request('razon'),
            'departamento' => request('departamento'),
            'municipio' => request('municipio'),
            'direccion' => request('direccion'),
            'correo' => request('correo'),
            'telefono' => request('telefono'),
        ]);

        return redirect('registrar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Juridica $fila)
    {
        $fila->delete();

        return redirect('registrar');
    }
}
