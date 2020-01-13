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
      <button id="btn_cat_Menu" onclick="cateMenu()" type="button" class="btn btn-primary btn-sm"><i class="fa fa-star"></i>&nbsp; Categoria Menu</button>
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

      <p class="small text-center text-muted my-5">
        <em>More table examples coming soon...</em>
      </p>

    </div>


    <!--MODAL CATEGORIA--->
    <div class="modal fade" id="catModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mediumModalLabel">Medium Modal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        There are three species of zebras: the plains zebra, the mountain zebra and the Grévy's zebra. The plains zebra
                        and the mountain zebra belong to the subgenus Hippotigris, but Grévy's zebra is the sole species of subgenus
                        Dolichohippus. The latter resembles an ass, to which it is closely related, while the former two are more
                        horse-like. All three belong to the genus Equus, along with other living equids.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Confirm</button>
                </div>
            </div>
        </div>
    </div>
    <!--FIN MODAL CATEGORIA--->
@endsection
