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
      <form action="{{route('insumos_stocks.update',$InsumStockEdit->id)}}" method="POST" class="tcolor" style="padding: 0px 50px 0px 50px">
      {!!method_field('PUT')!!}
      @csrf    
      <p class="text-center">Actualizar Stock Insumos</p><br>
         <div class="form-group formuswidth">
            <input type="text" class="form-control" name="cantidad" value="{{$InsumStockEdit->cantidad}}" placeholder="Cantidad">
            {!!$errors->first('cantidad')!!}
        </div>
        <div class="form-group formuswidth">
            <input type="date" class="form-control" name="fecha" value="{{$InsumStockEdit->fecha}}" placeholder="fecha">
            {!!$errors->first('fecha')!!}
        </div>
        <div>
            <select name="ins_id" class="form-control text-center formuswidth mt-3">
                <option hidden value="{{$InsumStockEdit->FInsStock_ToInsumo->id}}">{{$InsumStockEdit->FInsStock_ToInsumo->insumo}}</option>
                @foreach ($InsInf as $Ins)
                <option value="{{$Ins->id}}">{{$Ins->insumo}}</option>    
                @endforeach
            </select>
            {!!$errors->first('ins_id')!!}
        </div>
        <div>
            <select name="tienda_id" class="form-control text-center formuswidth mt-3">
            <option hidden value="{{$InsumStockEdit->FInsStock_ToTienda->id}}">{{$InsumStockEdit->FInsStock_ToTienda->tienda}}</option>
                @foreach ($TieInf as $Tie)
                <option value="{{$Tie->id}}">{{$Tie->tienda}}</option>    
                @endforeach
            </select>
            {!!$errors->first('tienda_id')!!}
        </div>
          <div class="btn-block formuswidth">
              <button type="submit" class="flex-row btn btn-primary btn-block btn-flat mt-3">Actualizar</button>
          </div><br>
      </form>
  </div>
</div> <!-- .content -->
@endsection
