@extends('supervisor.layouts.supervisor')
@section('contenido')
<!-- Header-->

    <div class="container-fluid">

      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{route('supervisor')}}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Tables</li>
      </ol>
      <div class="col-sm-12">
        <a href="{{route('menus.create')}}" class=""><button class="btn btn-block btn-primary btn-xs mb-2 mr-2" style="width: 100px">Agregar</button></a>
      </div>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>
          Listado de Menus</div>
        <div class="card-body">
          <div class="table-responsive">
              <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                <thead><tr class="text-black text-center">
                  <th>ID</th>
                  <th>Menu</th>
                  <th>Precio</th>
                  <th>Categoria</th>
                  <th>Accion</th>
                </tr></thead>
                <tbody>
                  @foreach ($MenusInf as $Menus)
                        <tr>
                        <td>{{$Menus->id}}</td>
                        <td>{{$Menus->menu}}</td>
                        <td>{{$Menus->precio}}</td>
                        <td>{{$Menus->catMenu->categoria}}</td>
                        <td>
                          <div class="float-left">
                          <a href="{{route('menus.edit',$Menus->id)}}"><i class="btn btn-block btn-secondary fa fa-edit"></i></a>
                              <form  action="{{route('menus.destroy',$Menus->id)}}" method="POST">
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
</div>
@endsection
