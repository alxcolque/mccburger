@extends('supervisor.layouts.supervisor')
@section('contenido')
<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{route('supervisor')}}">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Cat menu Edit</li>
  </ol>

  <div class="col-xl-12 col-lg-4 col-md-6 col-sm-12 col-12">
    <a href="{{route('catmenus.store')}}" type="button" class="btn btn-primary btn-sm"><i class="fa fa-arrow-left"></i>&nbsp; Categoria Menu</a>
    <div class="card">
    <h5 class="card-header">Categoria Menu</h5>
      <div class="row">
       <div class="card-body">
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
            </ul>
          </div><br />
          @endif

          <form method="POST" action="{{ route('catmenus.update', $cmEdit->id) }}">
            {!!method_field('PUT')!!}
            @csrf
              <div class="form-group">
                  <label for="categoria">Categoria:</label>
                  <input type="text" class="form-control" name="categoria" value="{{ $cmEdit->categoria }}">
                  {!!$errors->first('categoria')!!}
              </div>

              <center><div class="btn-block formuswidth">
                  <button type="submit" class="btn btn-success">Actualizar dato</button>
              </div></center><br>
          </form>

       </div>
      </div>
    </div>
  </div>
</div>
@endsection
