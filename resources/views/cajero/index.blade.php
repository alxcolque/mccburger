@extends('cajero.layouts.dashboard')

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
    <div class="col-sm-12">
      <a href="{{route('ventas.create')}}" class=""><button class="btn btn-block btn-primary btn-xs mb-2 mr-2" style="width: 100px">Agregar</button></a>
    </div>
    <!--/.col-->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i>
        Listado de Ventas</div>
      <div class="card-body">
        <div class="table-responsive">
            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
              <thead><tr class="text-black text-center">
                <th>ID</th>
                <th>Fecha</th>
                <th>Total</th>
              </tr></thead>
              <tbody>
                @foreach ($Ventasinfo as $ventas)
                      <tr>
                      <td>{{$ventas->id}}</td>
                      <td>{{$ventas->fecha}}</td>
                      <td>{{$ventas->total}}</td>
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
