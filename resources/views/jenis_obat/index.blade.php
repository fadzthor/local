@extends('layouts.app')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      {{-- <div class="col-sm-6">
        <h1>Jenis Obat</h1>
      </div> --}}
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Jenis Obat</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('jenisobat.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Jenis Obat</th>
            <th>Tanggal Dibuat</th>
            <th>Tanggal Diperbarui</th>            
            <th width="280px">Action</th>
        </tr>
        @foreach ($jenis_obats as $jenisObat)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $jenisObat->nama }}</td>
            <td>{{ $jenisObat->created_at }}</td>
            <td>{{ $jenisObat->updated_at }}</td>
            <td>
                <form action="{{ route('jenisobat.destroy',$jenisObat->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('jenisobat.show',$jenisObat->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('jenisobat.edit',$jenisObat->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $jenis_obats->links() !!}
  </div>
</div>
  </div>
  </section>

{{-- <section class="content-header">
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Jenis Obat</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Blank Page</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Title</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      Ga ngobat ga manja
    </div>
    
    <!-- /.card-body -->
    <div class="card-footer">
        Footer
      </div>
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->
</section> --}}
@endsection