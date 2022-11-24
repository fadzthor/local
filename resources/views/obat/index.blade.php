@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Daftar Obat</h1>
                    <button class="btn btn-success"><a class="" href="{{ route('obat.create') }}">
                            Insert</a></button>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Daftar Obat</a></li>
                        <li class="breadcrumb-item active">List</li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Daftar Obat</h3>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Jenis Obat</th>
                                        <th>Nama Obat</th>
                                        <th>Stok</th>
                                        <th>Harga</th>
                                        <th>Tanggal Kadaluwarsa</th>
                                        <th>Tanggal Ditambahkan</th>
                                        <th>Tanggal Diperbarui</th>
                                        <th>Gambar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($obats as $Obat)
                                        <tr>
                                            <td>{{ $Obat->id }}</td>
                                            <td>{{ $Obat->id_jenis_obat }}</td>
                                            {{-- <td value="{{ $Obat->id_jenis_obat === $jenisobats->id }}">{{ $jenisobats->nama }}</td> --}}

                                            <td>{{ $Obat->nama_obat }}</td>
                                            <td>{{ $Obat->stok }}</td>
                                            <td>{{ $Obat->harga }}</td>
                                            <td>{{ $Obat->tanggal_kadaluarsa }}</td>
                                            <td>{{ $Obat->created_at }}</td>
                                            <td>{{ $Obat->updated_at }}</td>
                                            <td>
                                                <img src="{{ Storage::url('public/medicine/').$Obat->gambar }}" class="rounded" style="width: 40px">
                                            </td>
                                            
                                            {{-- <td>{{ $Obat->gambar }}</td> --}}
                                            <td>
                                                <form action="{{ route('obat.destroy', $Obat->id) }}"
                                                    method="POST">
                                                    <a class="btn btn-info"
                                                        href="{{ route('obat.show', $Obat->id) }}">Show</a>

                                                    <a class="btn btn-primary"
                                                        href="{{ route('obat.edit', $Obat->id) }}">Edit</a>

                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit"
                                                        onclick="return confirm('Are you sure?')"class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>                                
                            </table>
                        </div>
                        <!-- /.card-body -->

                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
    </section>
    
@endsection
