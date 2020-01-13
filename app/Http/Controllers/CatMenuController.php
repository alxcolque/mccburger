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
        return view('supervisor.menus.menu_view',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $postID = $request->post_id;
        $post   =   Post::updateOrCreate(['id' => $postID],
                    ['title' => $request->title, 'body' => $request->body]);
    
        return Response::json($post);
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
    public function edit(CategoriaMenu $categoriaMenu)
    {
        $where = array('id' => $id);
        $post  = Post::where($where)->first();
 
        return Response::json($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategoriaMenu  $categoriaMenu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoriaMenu $categoriaMenu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CategoriaMenu  $categoriaMenu
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoriaMenu $categoriaMenu)
    {
        $post = Post::where('id',$id)->delete();
   
        return Response::json($post);
    }
}
