<?php

namespace App\Http\Controllers;

use App\Categoria_Insumos;
use App\Insumos;
use CategoriaInsumos;
use Illuminate\Http\Request;

class Categoria_InsumosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $CatI=Categoria_Insumos::All();
        return view('categoria_insumos.index',compact('CatI'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categoria_insumos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'descripcion'=> "required|unique:categoria_insumos,descripcion",
        ]);
        Categoria_Insumos::create($request->all());
        return redirect()->route('categoria_insumos.index');
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
        $CategEdit = Categoria_Insumos::findorfail($id);
        return view('categoria_insumos.edit', compact('CategEdit'));
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
        $this->validate($request, [
            'descripcion'=> "required|unique:categoria_insumos,descripcion,$id",
        ]);
        Categoria_Insumos::findorfail($id)->update($request->all());
        //redireccionar
        return redirect()->route('categoria_insumos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Categoria_Insumos::findorfail($id)->delete();
        return redirect()->route('categoria_insumos.index');
    }
}
