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
  <div class="d-flex flex-column mb-5 p-1 align-items-center">
    <form action="{{route('menus.store')}}" method="POST" class="tcolor" style="padding: 0px 50px 0px 50px">
    @csrf    
    <p class="text-center">Registrar Menus</p><br>
        <div class="form-group formuswidth">
        <input type="text" class="form-control" name="menu" placeholder="Menu">
        {!!$errors->first('menu')!!}
        </div>
        <div class="form-group formuswidth">
            <input type="text" class="form-control" name="precio" placeholder="Precio">
        {!!$errors->first('precio')!!}
        </div>
        <div>
            <select name="cat_id" class="form-control text-center mt-3">
                <option hidden value="">Seleccione Categoria</option>
                @foreach ($CategMen as $Categ)
                <option value="{{$Categ->id}}">{{$Categ->categoria}}</option>    
                @endforeach
            </select>
            {!!$errors->first('cat_id')!!}
        </div>
        <div class="btn-block formuswidth">
            <button type="submit" class="flex-row btn btn-primary btn-block btn-flat mt-3">Registrar</button>
        </div><br>
    </form>
</div>
</div>
@endsection
