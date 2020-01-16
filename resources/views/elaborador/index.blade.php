@extends('elaborador.elaborador_view')
@section('contenido')
<div class="container-fluid">

  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{route('elaborador')}}">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Elaborador</li>
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
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i>
        Listado de Usuarios</div>
      <div class="card-body">
        <div class="table-responsive">
            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
              <thead><tr class="text-black text-center">
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Fecha</th>
                <th>Estado</th>
              </tr></thead>
              <tbody>
                @foreach ($DetV as $Detalle)
                      <tr>
                      <td>{{$Detalle->devtoMenus->menu}}</td>
                      <td>{{$Detalle->devtoMenus->precio}}</td>
                      <td>{{$Detalle->cantidad}}</td>
                      <td>{{$Detalle->fecha}}</td>
                      <td>
                        @if($Detalle->estado === 'Pendiente')
                          <form  action="{{route('elaboradortareas.destroy',$Detalle->id)}}" method="POST">
                          {!!method_field('DELETE')!!}
                          @csrf
                          <button class="btn btn-block btn-success btn-xs mb-1">Finalizar Orden</button></a>
                          </form>
                        @else
                        Finalizado
                        @endif
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
