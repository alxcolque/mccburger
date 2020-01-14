<?php

namespace App\Http\Controllers;

use App\CategoriaMenu;
use Illuminate\Http\Request;

class CatMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['categoriamenus'] = CategoriaMenu::orderBy('id','desc')->paginate(8);
        return view('supervisor.menus.cat_menu',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supervisor.menus.cat_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validatedData = $request->validate([
          'categoria' => 'required|max:30',
          /*'genre' => 'required|max:255',
          'imdb_rating' => 'required|numeric',
          'lead_actor' => 'required|max:255',*/
      ]);
      $show = CategoriaMenu::create($validatedData);

      return redirect('/catmenus')->with('success', 'Registro guardado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CategoriaMenu  $categoriaMenu
     * @return \Illuminate\Http\Response
     */
    public function show(CategoriaMenu $categoriaMenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CategoriaMenu  $categoriaMenu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cmEdit = CategoriaMenu::findOrFail($id);
        return view('supervisor.menus.cat_edit', compact('cmEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategoriaMenu  $categoriaMenu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $validatedData = $request->validate([
        'categoria' => "required|max:30,$id",
      ]);
      CategoriaMenu::whereId($id)->update($validatedData);
      return redirect('/catmenus')->with('success', 'Actualizado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CategoriaMenu  $categoriaMenu
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoriaMenu $categoriaMenu)
    {
        $cmEdit = CategoriaMenu::where('id',$id)->delete();

        return Response::json($cmEdit);
    }
}
