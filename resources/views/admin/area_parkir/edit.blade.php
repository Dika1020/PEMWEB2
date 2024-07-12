@extends('admin.layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Area Parkir</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                        <li class="breadcrumb-item active">Edit Area Parkir</li>
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
                            <a href="{{ route('area_parkir.index') }}" class="btn btn-success btn-sm">Kembali</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{ route('area_parkir.update', $area_parkir->id) }}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label for="nama" class="col-md-4">Nama</label>
                                    <input type="text" name="nama" id="nama" value="{{ old('nama', $area_parkir->nama) }}" class="form-control col-md-8" required>
                                </div>
                                <div class="form-group row">
                                    <label for="kapasitas" class="col-md-4">Kapasitas</label>
                                    <input type="number" name="kapasitas" id="kapasitas" value="{{ old('kapasitas', $area_parkir->kapasitas) }}" class="form-control col-md-8" required>
                                </div>
                                <div class="form-group row">
                                    <label for="keterangan" class="col-md-4">Keterangan</label>
                                    <textarea name="keterangan" id="keterangan" class="form-control col-md-8" rows="3">{{ old('keterangan', $area_parkir->keterangan) }}</textarea>
                                </div>
                                <div class="form-group row">
                                    <label for="kampus_id" class="col-md-4">Kampus</label>
                                    <select name="kampus_id" id="kampus_id" class="form-control col-md-8" required>
                                        <option value="">Pilih Kampus</option>
                                        @foreach($kampuss as $kampus)
                                            <option value="{{ $kampus->id }}" {{ old('kampus_id', $area_parkir->kampus_id) == $kampus->id ? 'selected' : '' }}>{{ $kampus->nama }}</option>
                                        @endforeach
                                    </select>
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
