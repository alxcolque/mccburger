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
          <div class="alert  alert-success alert-dismissible fade show" role="alert">
              <span class="badge badge-pill badge-success">Success</span> You successfully read this important alert message.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
      </div>
      <button href="javascript:void(0)"  type="button" class="btn btn-success"><i class="fa fa-plus"></i>&nbsp; Añadir Nuevo</button>
      <button id="btn_cat_Menu" href="javascript:void(0)" type="button" class="btn btn-primary btn-sm"><i class="fa fa-star"></i>&nbsp; Categoria Menu</button>
      <!-- DataTables Example -->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>
          Data Table Example</div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Title</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Title</th>
                </tr>
              </tfoot>

              <tbody>
                @foreach ($categoriamenus as $r)
                <tr>
                  <td>{{$r['id']}}</td>
                  <td>{{$r->categoria}}</td>
                </tr>
                @endforeach

              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>

    </div>


    <!--MODAL CATEGORIA--->
    <!-- Bootstrap modal -->
      <div class="modal fade" id="modal_cat_menu" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
              <h3 class="modal-title">Nuevo</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
                <div class="modal-body form">
                  <form action="#" id="postForm" class="form-horizontal">
                    <div class="form-group">
                        <label for="categoria" class="col-sm-12 control-label">Nombre de categoria</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Escriba Categoria" value="" maxlength="50" required="">
                        </div>

                    </div>
                    <button id="btn-save" type="button" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Guardar</button>
                  </form>
                  <!-- DataTables Example -->
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="table-responsive">
                        <table id="dataTables" class="table table-striped table-bordered">
                          <thead>
                            <tr>
                              <th>Id</th>
                              <th>Title</th>
                              <th><center>accion</center></th>
                            </tr>
                          </thead>

                          <tbody>
                            @foreach ($categoriamenus as $r)
                            <tr id="cate_id_{{ $r->id }}">
                              <td>{{$r['id']}}</td>
                              <td>{{$r->categoria}}</td>
                              <td><center>
                                <a href="javascript:void(0)" id="edit-post" data-id="{{ $r->id }}" class="btn btn-info"><i class="fa fa-edit"></i></a>
                                <a href="javascript:void(0)" id="delete-post" data-id="{{$r->id }}" class="btn btn-danger delete-post"><i class="fa fa-trash"></i></a>
                              </center></td>
                            </tr>
                            @endforeach

                          </tbody>
                        </table>
                        {{ $categoriamenus->links() }}
                      </div>
                    </div>
                  </div>
                </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
      <!-- End Bootstrap modal -->
    <!--FIN MODAL CATEGORIA--->
@endsection
