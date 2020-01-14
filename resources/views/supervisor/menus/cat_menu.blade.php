@extends('supervisor.layouts.supervisor')
@section('contenido')
<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{route('supervisor')}}">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Categoria Menus</li>
  </ol>

  <div class="col-xl-12 col-lg-4 col-md-6 col-sm-12 col-12">
    <a id="btn_cat_Menu" href="{{route('catmenus.create')}}" type="button" class="btn btn-success btn-sm"><i class="fa fa-plus"></i>&nbsp; Añadir Nuevo Tipo</a>
    <div class="card">
    <h5 class="card-header" id="tit_part">Categoria Menu</h5>
      <div class="row">
       <div class="card-body" id="sec_crea">
         @if(session()->get('success'))
           <div class="alert alert-success">
             {{ session()->get('success') }}
           </div><br />
         @endif
         <!-- DataTables Example -->
         <div class="card mb-3">
           <div class="card-body">
             <div class="table-responsive">
               <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                 <thead>
                   <tr>
                     <th>Id</th>
                     <th>Categoria</th>
                     <th><center></center></th>
                   </tr>
                 </thead>
                 <tbody>
                   @foreach ($categoriamenus as $r)
                   <tr>
                     <td>{{$r['id']}}</td>
                     <td>{{$r->categoria}}</td>
                     <td>
                       <center>
                         <div class="row">
                           <a href="{{ route('catmenus.edit', $r->id)}}" class="btn btn-info btn-sm">
                             <i class="fa fa-edit"></i>
                           </a>
                           <form action="{{ route('catmenus.destroy', $r->id)}}" method="post">
                             @csrf
                             @method('DELETE')
                             <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i></button>
                           </form>
                         </div>
                       </center>
                     </td>
                   </tr>
                   @endforeach

                 </tbody>
               </table>
               {{ $categoriamenus->links() }}
             </div>
           </div>
         </div>

       </div>
      </div>
    </div>
  </div>
</div>
@endsection
