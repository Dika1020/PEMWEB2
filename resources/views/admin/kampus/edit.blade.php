@extends('admin.layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Kampus</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('kampus.index') }}">Kampus</a></li>
                        <li class="breadcrumb-item active">Edit Kampus</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <a href="{{ route('kampus.index') }}" class="btn btn-success btn-sm">Kembali</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{ route('kampus.update', $kampus->id) }}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label for="nama" class="col-md-4">Nama</label>
                                    <input type="text" name="nama" id="nama" value="{{ $kampus->nama }}" class="form-control col-md-8" required>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat" class="col-md-4">Alamat</label>
                                    <input type="text" name="alamat" id="alamat" value="{{ $kampus->alamat }}" class="form-control col-md-8" required>
                                </div>
                                <div class="form-group row">
                                    <label for="latitude" class="col-md-4">Latitude</label>
                                    <input type="text" name="latitude" id="latitude" value="{{ $kampus->latitude }}" class="form-control col-md-8 @error('latitude') is-invalid @enderror">
                                    @error('latitude')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                    <small class="text-muted">Contoh: -6.200000 (gunakan format desimal, negatif untuk selatan, positif untuk utara)</small>
                                </div>
                                <div class="form-group row">
                                    <label for="longitude" class="col-md-4">Longitude</label>
                                    <input type="text" name="longitude" id="longitude" value="{{ $kampus->longitude }}" class="form-control col-md-8 @error('longitude') is-invalid @enderror">
                                    @error('longitude')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                    <small class="text-muted">Contoh: 106.816666 (gunakan format desimal, negatif untuk barat, positif untuk timur)</small>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <input type="submit" value="Edit" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@endsection
