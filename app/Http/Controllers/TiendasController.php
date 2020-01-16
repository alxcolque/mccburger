<?php

namespace App\Http\Controllers;

use App\Tiendas;
use Illuminate\Http\Request;

class TiendasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $TiendasI=Tiendas::All();
        return view('supervisor.tiendas.index',compact('TiendasI'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supervisor.tiendas.create');
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
            'tienda'=> "required|max:50",
            'direccion'=> "required|max:50",
            'nit'=> "required|numeric",
        ]);
        Tiendas::create($request->all());
        return redirect()->route('tiendas.index');
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
        $TiendasEdit = Tiendas::findorfail($id);
        return view('supervisor.tiendas.edit', compact('TiendasEdit'));
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
            'tienda'=> "required|max:50",
            'direccion'=> "required|max:50",
            'nit'=> "required|numeric",
        ]);
        Tiendas::findorfail($id)->update($request->all());
        //redireccionar
        return redirect()->route('tiendas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tiendas::findorfail($id)->delete();
        return redirect()->route('tiendas.index');
    }
}
