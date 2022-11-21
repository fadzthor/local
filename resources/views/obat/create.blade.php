@extends('layouts.app')
@section('content')

 <!-- Content Header (Page header) -->
 <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Daftar Obat</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Daftar Obat</a></li>
            <li class="breadcrumb-item active">Tambah</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Tambah Daftar Obat</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            
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
            <form action="{{ route('obat.store') }}" method="POST">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="">ID</label>                                
                  <input type="number" name="id" class="form-control" placeholder="ID Obat">
                </div>

                <div class="form-group">                  
                    <label>Jenis Obat</label>
                    @foreach($obats as $Obat)
                    <select class="form-control">
                      @foreach($Obat->jenisObat()->get() as $nama)
                      <option>{{ $nama->nama }}</option>                       
                      @endforeach
                    </select>
                    @endforeach
                </div>

                <div class="form-group">
                  <label for="">Nama Obat</label>                                
                  <input type="text" name="nama_obat" class="form-control" placeholder="Nama Obat">
                </div>
                <div class="form-group">
                  <label for="">Harga</label>                                
                  <input type="number" name="harga" class="form-control" placeholder="Harga">
                </div>
                <div class="form-group">
                  <label for="">Tanggal Kadaluwarsa</label>                                
                  <input type="date" name="tanggal_kadaluarsa" class="form-control" placeholder="Harga">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Gambar</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="exampleInputFile">
                      <label class="custom-file-label" for="exampleInputFile">Piih Gambar</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text">Upload</span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Tambah</button>                               
                <button type="submit" class="btn btn-default float-right"><a class="" href="{{ route('obat.index') }}"> Batal</a></button>
              </div>                               
            </form>
          </div>
          <!-- /.card -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
@endsection
