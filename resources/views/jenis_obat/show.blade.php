@extends('layouts.app')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Detail Jenis Obat</h1>
        </div>
        <div class="row">
            <div class="col-lg-12 margin-tb">
                {{-- <div class="pull-left">
                    <h2> Show Product</h2>
                </div> --}}
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('jenisobat.index') }}"> Back</a>
                </div>
            </div>
        </div>

 <div class="row mb-2">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID :</strong>
                {{ $jenisObat->id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jenis Obat :</strong>
                {{ $jenisObat->nama }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Dibuat :</strong>
                {{ $jenisObat->created_at }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Diperbarui :</strong>
                {{ $jenisObat->updated_at }}
            </div>
        </div>

    </div>
    </div>
        </div>
    </div>
    </section>

@endsection