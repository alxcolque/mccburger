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
                  <th>Content</th>
                  <th>Image</th>
                  <th>User</th>
                  <th>Tools</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Title</th>
                  <th>Content</th>
                  <th>Image</th>
                  <th>User</th>
                  <th>Tools</th>
                </tr>
              </tfoot>

              <tbody>
                @foreach ($posts as $r)
                <tr>
                  <td>{{$r['id']}}</td>
                  <td>{{$r->title}}</td>
                  <td>{{$r->content}}</td>
                  <td>{{$r->image_url}}</td>
                  <td>{{$r->user['name']}}</td>
                  <td>{{'Acction'}}</td>
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
@endsection
