@extends('supervisor.layouts.supervisor')

@section('contenido')
<div class="container-fluid">

  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Supervisor</li>
  </ol>
    <div class="col-sm-12">
        <div class="alert  alert-success alert-dismissible fade show" role="alert">
            <span class="badge badge-pill badge-success">{{ Auth::user()->name }} Success</span> You successfully read this important alert message.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>


    <!--/.col-->
    <div class="d-flex flex-column mb-5 p-1 align-items-center">
        <form action="{{route('categoria_insumos.store')}}" method="POST" class="tcolor" style="padding: 0px 50px 0px 50px">
        @csrf    
        <p class="text-center">Registrar Categoria de Insumo</p><br>
            <div class="form-group formuswidth">
            <input type="text" class="form-control" name="descripcion" value="{{old('descripcion')}}" placeholder="Descripcion">
            {!!$errors->first('descripcion')!!}
            </div>
            <div class="btn-block formuswidth">
                <button type="submit" class="flex-row btn btn-primary btn-block btn-flat mt-3">Registrar</button>
            </div><br>
        </form>
    </div>
    <!--/.col-->
</div> <!-- .content -->
@endsection
