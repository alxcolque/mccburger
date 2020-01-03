<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElaboradorController extends Controller
{
  public function index(){
    return view('elaborador.elaborador_view');
  }
}
