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
            <span class="badge badge-pill badge-success">Cajero Success</span> You successfully read this important alert message.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>

    <!--CAJERO-->
    

    
</div> <!-- .content -->
@endsection
