@extends('supervisor.layouts.supervisor')
@section('contenido')
<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{route('supervisor')}}">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Tables</li>
  </ol>
  <div class="col-sm-12">
      <div class="alert  alert-success alert-dismissible fade show" role="alert">
          <span class="badge badge-pill badge-success">Success</span> You successfully read this important alert message.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
  </div>
  <button href="javascript:void(0)"  type="button" class="btn btn-success"><i class="fa fa-plus"></i>&nbsp; Añadir Nuevo</button>
  <a id="btn_cat_Menu" href="{{route('menus.create')}}" type="button" class="btn btn-primary btn-sm"><i class="fa fa-star"></i>&nbsp; Categoria Menu</a>

  <div class="col-xl-12 col-lg-4 col-md-6 col-sm-12 col-12">
    <div class="card">
    <h5 class="card-header" id="tit_part">e1 vs e2</h5>
      <div class="row">
       <div class="card-body">
           <ul class="list-group">
               <li class="list-group-item"><span class="m-l-10 text-secondary">Estadio: </span><span id="estadio"></span></li>
               <li class="list-group-item"><span class="m-l-10 text-secondary">Dirigido por: </span><span id="arbitro"></li>
           </ul>
       </div>
       <div class="card-body" id="sec_crea">
           <ul class="list-group">
               <li class="list-group-item"><span class="m-l-10 text-secondary">Incia: <span class="m-l-10 text-primary" id="fecha"></span></li>
               <li class="list-group-item"><span class="m-l-10 text-secondary">Tiempo restante: <span class="m-l-10  text-success " id="tiempo_restante"></span></li>
           </ul>
       </div>
       <div class="card-body" id="sec_en_jue">
           <ul class="list-group">
               <li class="list-group-item"><span class="m-l-10 text-secondary">En juego: <span class="m-l-10 text-primary" id="tiempo_jueg"></span></li>
           </ul>
       </div>
       <div class="card-body" id="sec_ter">
           <ul class="list-group">
               <li class="list-group-item"><span class="m-l-10 text-secondary">Duró: <span class="m-l-10 text-primary" id="duracion"></span></li>
           </ul>
       </div>
      </div>
    </div>
  </div>


</div>


@endsection
