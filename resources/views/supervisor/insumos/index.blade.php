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
      <a href="{{route('insumos.create')}}" class=""><button class="btn btn-block btn-primary btn-xs mb-2 mr-2" style="width: 100px">Agregar</button></a>
    </div>
    <!--/.col-->
    <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>
          Listado de Insumos</div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="usr" class="display table-bordered" style="border-width: 2px; border-color: black;">
              <thead><tr class="text-black text-center">
                <th>ID</th>
                <th>Insumo</th>
                <th>Precio</th>
                <th>Categoria</th>
                <th>Accion</th>
              </tr></thead>
              <tbody>
                @foreach ($Insumosv as $Insumo)
                      <tr>
                      <td>{{$Insumo->id}}</td>
                      <td>{{$Insumo->insumo}}</td>
                      <td>{{$Insumo->precio}}</td>
                      <td>{{$Insumo->FInsumos->descripcion}}</td>
                      <td>
                        <div class="float-left">
                        <a href="{{route('insumos.edit',$Insumo->id)}}"><i class="btn btn-block btn-secondary fa fa-edit"></i></a>
                            <form  action="{{route('insumos.destroy',$Insumo->id)}}" method="POST">
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
