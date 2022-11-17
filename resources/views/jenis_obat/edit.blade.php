@extends('layouts.app')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Ubah Jenis Obat</h1>
        </div>
  <div class="row">
          <div class="col-lg-12 margin-tb">
              {{-- <div class="pull-left">
                  <h2>Tambah Jenis Obat</h2>
              </div> --}}
              <div class="pull-right">
                  <a class="btn btn-primary" href="{{ route('jenisobat.index') }}"> Back</a>                  
              </div>
          </div>
      </div>
     
      @if ($errors->any())
      <div class="alert alert-danger">
          <strong>Whoops!</strong> There were some problems with your input.<br><br>
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
     
  <form action="{{ route('jenisobat.update',$jenisObat->id) }}" method="POST">
    @csrf
    {{-- @method('PUT') --}}
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama :</strong>
                <input type="text" name="nama" value="{{ $jenisObat->nama }}" class="form-control" placeholder="Nama">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
    </div>
        </div>
    </div>
    </section>

@endsection