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
    <div class="col-sm-12">
      <a href="{{route('insumos_stocks.create')}}" class=""><button class="btn btn-block btn-primary btn-xs mb-2 mr-2" style="width: 100px">Agregar</button></a>
    </div>
    <!--/.col-->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i>
        Stock de Insumos</div>
      <div class="card-body">
        <div class="table-responsive">
            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
              <thead><tr class="text-black text-center">
                <th>Cantidad</th>
                <th>Fecha</th>
                <th>Insumo</th>
                <th>Tienda</th>
                <th>Accion</th>
              </tr></thead>
              <tbody>
                @foreach ($InsStockInf as $IStock)
                      <tr>
                      <td>{{$IStock->cantidad}}</td>
                      <td>{{$IStock->fecha}}</td>
                      <td>{{$IStock->FInsStock_ToInsumo->insumo}}</td>
                      <td>{{$IStock->FInsStock_ToTienda->tienda}}</td>
                      <td>
                        <div class="float-left">
                        <a href="{{route('insumos_stocks.edit',$IStock->id)}}"><i class="btn btn-block btn-secondary fa fa-edit"></i></a>
                            <form  action="{{route('insumos_stocks.destroy',$IStock->id)}}" method="POST">
                              {!!method_field('DELETE')!!}
                              @csrf
                              <a><button class="btn btn-block btn-danger btn fa fa-trash"></button></a>
                            </form>
                          </div>
                        </td>
                      </tr>
                @endforeach    
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
</div> <!-- .content -->
@endsection
