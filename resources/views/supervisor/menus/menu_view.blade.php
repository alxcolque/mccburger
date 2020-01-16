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
      <a class="btn btn-success" href="javascript:void(0)" id="createNewBook"> Create New Book</a>
      <!-- DataTables Example -->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>
          Menus</div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Menu</th>
                  <th>Precio</th>
                  <th>foto</th>
                  <th>tipo</th>
                  <th width="300px">Action</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>


    <!--MODAL CATEGORIA--->
    <!-- Bootstrap modal -->
      <div class="modal fade" id="ajaxModel" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
              <h3 class="modal-title">Nuevo</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
                <div class="modal-body form">
                  <form id="menuForm" name="bookForm" class="form-horizontal">
                   <input type="hidden" name="book_id" id="menu_id">
                    <div class="form-group">
                        <label for="menu" class="col-sm-2 control-label">Menu</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="menu" name="menu" placeholder="Enter Menu" value="" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="precio" class="col-sm-2 control-label">Precio</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="precio" name="precio" placeholder="Ingrese Precio" value="" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="foto" class="col-sm-2 control-label">Foto</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="foto" name="foto" placeholder="Ingrese foto" value="" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cat_id" class="col-sm-2 control-label">Tipo</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="cat_id" name="cat_id" placeholder="Ingrese tipo" value="" maxlength="50" required="">
                        </div>
                    </div>

                    <div class="col-sm-offset-2 col-sm-10">
                     <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Guadar Cambios
                     </button>
                    </div>
                </form>

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
