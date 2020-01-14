@extends('supervisor.layouts.supervisor')
@section('contenido')
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

  <div class="col-xl-12 col-lg-4 col-md-6 col-sm-12 col-12">
    <a href="{{route('catmenus.store')}}" type="button" class="btn btn-primary btn-sm"><i class="fa fa-arrow-left"></i>&nbsp; Categoria Menu</a>
    <div class="card">
    <h5 class="card-header" id="tit_part">Categoria Menu</h5>
      <div class="row">
       <div class="card-body" id="sec_crea">
               @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
            </ul>
          </div><br />
        @endif
          <form method="post" action="{{ route('catmenus.store') }}">
              <div class="form-group">
                  @csrf
                  <label for="categoria">Categoria:</label>
                  <input type="text" class="form-control" name="categoria"/>
              </div>

              <button type="submit" class="btn btn-success">Guardar</button>
          </form>
       </div>
      </div>
    </div>
  </div>
</div>
@endsection
