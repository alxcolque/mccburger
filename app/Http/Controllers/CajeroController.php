<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CajeroController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }
  public function index(){
    return view('cajero.cajero_view');
  }
  public function ventas(){
    return view('cajero.cajero_view');
  }
}
