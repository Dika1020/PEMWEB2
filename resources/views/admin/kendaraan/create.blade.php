@extends('admin.layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Kendaraan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Kendaraan</li>
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
                            <a href="{{ route('kendaraan.index') }}" class="btn btn-success btn-sm">Kembali</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{ route('kendaraan.store') }}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label for="merk" class="col-md-4">Merk</label>
                                    <input type="text" name="merk" id="merk" value="{{ old('merk') }}" class="form-control col-md-8" required>
                                </div>
                                <div class="form-group row">
                                    <label for="pemilik" class="col-md-4">Pemilik</label>
                                    <input type="text" name="pemilik" id="pemilik" value="{{ old('pemilik') }}" class="form-control col-md-8" required>
                                </div>
                                <div class="form-group row">
                                    <label for="nopol" class="col-md-4">Nomor Polisi</label>
                                    <input type="text" name="nopol" id="nopol" value="{{ old('nopol') }}" class="form-control col-md-8" required>
                                </div>
                                <div class="form-group row">
                                    <label for="thn_beli" class="col-md-4">Tahun Beli</label>
                                    <input type="number" name="thn_beli" id="thn_beli" value="{{ old('thn_beli') }}" class="form-control col-md-8" required>
                                </div>
                                <div class="form-group row">
                                    <label for="deskripsi" class="col-md-4">Deskripsi</label>
                                    <textarea name="deskripsi" id="deskripsi" class="form-control col-md-8" rows="3" required>{{ old('deskripsi') }}</textarea>
                                </div>
                                <div class="form-group row">
                                    <label for="kapasitas_kursi" class="col-md-4">Kapasitas Kursi</label>
                                    <input type="number" name="kapasitas_kursi" id="kapasitas_kursi" value="{{ old('kapasitas_kursi') }}" class="form-control col-md-8" required>
                                </div>
                                <div class="form-group row">
                                    <label for="rating" class="col-md-4">Rating</label>
                                    <input type="number" name="rating" id="rating" value="{{ old('rating') }}" class="form-control col-md-8" required>
                                </div>
                                <div class="form-group row">
                                    <label for="jenis_id" class="col-md-4">Jenis Kendaraan</label>
                                    <select name="jenis_id" id="jenis_id" class="form-control col-md-8" required>
                                        <option value="">Pilih Jenis Kendaraan</option>
                                        @foreach($jenis as $item)
                                            <option value="{{ $item->id }}" {{ old('jenis_id') == $item->id ? 'selected' : '' }}>{{ $item->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <input type="submit" value="Tambah" class="btn btn-primary">
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
