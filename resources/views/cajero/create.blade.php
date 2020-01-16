@extends('supervisor.layouts.supervisor')

@section('contenido')
<div class="container-fluid">

  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{route('cajero')}}">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Cajero</li>
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
        <form action="{{route('ventas.store')}}" method="POST" class="tcolor" style="padding: 0px 50px 0px 50px">
        @csrf    
        <p class="text-center">Registrar Insumo</p><br>
        <div class="form-group formuswidth">
            <input type="date" class="form-control" name="fecha" placeholder="Fecha">
            {!!$errors->first('fecha')!!}
            </div>
            <div class="form-group formuswidth">
                <input type="text" class="form-control" name="total" placeholder="Total">
                {!!$errors->first('total')!!}
            </div>
            <div class="form-group formuswidth">
            <input type="text" class="form-control" readonly="readonly" value="{{Auth::user()->id}}" name="user_id" placeholder="{{Auth::user()->name}}">
                {!!$errors->first('user_id')!!}
            </div>
            <div>
                <select name="tienda_id" class="form-control text-center mt-3">
                    <option hidden value="">Seleccione Tienda</option>
                    @foreach ($Tiendasinfo as $Tienda)
                    <option value="{{$Tienda->id}}">{{$Tienda->tienda}}</option>    
                    @endforeach
                </select>
                {!!$errors->first('tienda_id')!!}
            </div>
            <div class="btn-block formuswidth">
                <button type="submit" class="flex-row btn btn-primary btn-block btn-flat mt-3">Registrar</button>
            </div><br>
        </form>
    </div>
</div> <!-- .content -->
@endsection
