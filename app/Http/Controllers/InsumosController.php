<?php

namespace App\Http\Controllers;

use DB;
use Carbon\Carbon;
use App\Insumos;
use App\Categoria_Insumos;
use Illuminate\Http\Request;

class InsumosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Insumosv=Insumos::All();
        return view('supervisor.insumos.index',compact('Insumosv'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $CategIns = Categoria_Insumos::all();
        return view('supervisor.insumos.create',compact('CategIns'));
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
            'insumo'=> "required|unique:insumos,insumo|max:30",
            'precio' => 'required|regex:/^\d+(\.\d{1,2})?$/i',
            'fkcategoria_insumos' => 'required',
        ]);
        Insumos::create($request->all());
        return redirect()->route('supervisor.insumos.index');
        /*$this->validate($request, [
            'insumo'=> "required|unique:insumos,insumo|max:30",
            'precio' => 'required|regex:/^\d+(\,\d{1,2})?$/i',
            'fkcategoria_insumos' => 'required'
        ]);
        DB::table('insumos')->insert([
            'insumo' => $request->input('insumo'),
            'precio'=>$request->input('precio'),
            'fkcategoria_insumos'=>$request->input('fkcategoria_insumos'),
            'created_at'=>Carbon::now(),   
            'updated_at'=>Carbon::now(),
        ]);
        return redirect()->route('insumos.index');*/
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
        $InsumEdit = Insumos::findorfail($id);
        $CategIns = Categoria_Insumos::all();
        return view('supervisor.insumos.edit', compact('InsumEdit','CategIns'));
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
            'insumo'=> "required|max:30|unique:insumos,insumo,$id",
            'precio' => 'required|regex:/^\d+(\.\d{1,2})?$/i',
            'fkcategoria_insumos' => 'required',
        ]);
        Insumos::findorfail($id)->update($request->all());
        //redireccionar
        return redirect()->route('supervisor.insumos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Insumos::findorfail($id)->delete();
        return redirect()->route('supervisor.insumos.index');
    }
}
