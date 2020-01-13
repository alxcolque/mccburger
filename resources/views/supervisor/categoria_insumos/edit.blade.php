@extends('supervisor.layouts.supervisor')

@section('contenido')
<div class="container-fluid">

  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{route('supervisor')}}">Dashboard</a>
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
    <div class="d-flex flex-column mb-5 p-1 align-items-center">
      <form action="{{route('categoria_insumos.update',$CategEdit->id)}}" method="POST" class="tcolor" style="padding: 0px 50px 0px 50px">
        {!!method_field('PUT')!!}
        @csrf 
      <p class="text-center">Editar Categoria de Insumo</p><br>
          <div class="form-group formuswidth">
          <input type="text" class="form-control" name="descripcion" value="{{$CategEdit->descripcion}}" placeholder="Descripcion">
          {!!$errors->first('descripcion')!!}
          </div>
          <div class="btn-block formuswidth">
              <button type="submit" class="flex-row btn btn-primary btn-block btn-flat mt-3">Editar</button>
          </div><br>
      </form>
  </div>
</div> <!-- .content -->
@endsection
