@extends('layouts.app')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Obat Masuk</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Obat Masuk</a></li>
              <li class="breadcrumb-item active">Ubah</li>
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
                <h3 class="card-title">Ubah Obat Masuk</h3>
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
              <form class="form-horizontal" action="{{ route('obatmasuk.update',$obatMasuk->id) }}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="">Distributor</label>                  
                      <input type="text" name="distributor" value="{{ $obatMasuk->distributor }}" class="form-control" placeholder="Distributor">
                    </div>
                    <div class="form-group">                  
                      <label>Obat</label> 
                      <select class="form-control" name="id_obat">
                        @foreach($obats as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_obat }}</option>  
                        @endforeach
                      </select>
                  </div>
                    <div class="form-group">                      
                      <label for="">Obat</label>                  
                      <input type="text" name="id_obat" value="{{ $obatMasuk->id_obat }}" class="form-control" placeholder="Obat">
                    </div>
                    <div class="form-group">
                      <label for="">Jumlah</label>                  
                      <input type="number" name="jumlah" value="{{ $obatMasuk->jumlah }}" class="form-control" placeholder="Jumlah">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Ubah</button>                               
                  <button type="submit" class="btn btn-default float-right"><a class="" href="{{ route('obatmasuk.index') }}"> Batal</a></button>
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