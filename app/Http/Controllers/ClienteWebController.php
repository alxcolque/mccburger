<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteWebController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }
  public function index(){
    return view('cliente_web.clienteweb_view');
  }
  public function cesta(){
    return view('cliente_web.cesta');
  }
}
