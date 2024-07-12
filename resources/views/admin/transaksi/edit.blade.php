@extends('admin.layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Transaksi</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                        <li class="breadcrumb-item active">Edit Transaksi</li>
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
                            <a href="{{ route('transaksi.index') }}" class="btn btn-success btn-sm">Kembali</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{ route('transaksi.update', $transaksi->id) }}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label for="tanggal" class="col-md-4">Tanggal</label>
                                    <input type="date" name="tanggal" id="tanggal" value="{{ old('tanggal', $transaksi->tanggal) }}" class="form-control col-md-8" required>
                                    @error('tanggal')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <label for="mulai" class="col-md-4">Waktu Mulai</label>
                                    <input type="time" name="mulai" id="mulai" value="{{ old('mulai', substr($transaksi->mulai, 0, 5)) }}" class="form-control col-md-8" required>
                                    @error('mulai')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <label for="akhir" class="col-md-4">Waktu Akhir</label>
                                    <input type="time" name="akhir" id="akhir" value="{{ old('akhir', substr($transaksi->akhir, 0, 5)) }}" class="form-control col-md-8" required>
                                    @error('akhir')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <label for="keterangan" class="col-md-4">Keterangan</label>
                                    <textarea name="keterangan" id="keterangan" class="form-control col-md-8" rows="3">{{ old('keterangan', $transaksi->keterangan) }}</textarea>
                                    @error('keterangan')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <label for="biaya" class="col-md-4">Biaya</label>
                                    <input type="number" name="biaya" id="biaya" value="{{ old('biaya', $transaksi->biaya) }}" class="form-control col-md-8" step="0.01" required>
                                    @error('biaya')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <label for="kendaraan_id" class="col-md-4">Kendaraan</label>
                                    <select name="kendaraan_id" id="kendaraan_id" class="form-control col-md-8" required>
                                        <option value="">Pilih Kendaraan</option>
                                        @foreach($kendaraans as $kendaraan)
                                            <option value="{{ $kendaraan->id }}" {{ old('kendaraan_id', $transaksi->kendaraan_id) == $kendaraan->id ? 'selected' : '' }}>{{ $kendaraan->merk }} - {{ $kendaraan->nopol }}</option>
                                        @endforeach
                                    </select>
                                    @error('kendaraan_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <label for="area_parkir_id" class="col-md-4">Area Parkir</label>
                                    <select name="area_parkir_id" id="area_parkir_id" class="form-control col-md-8" required>
                                        <option value="">Pilih Area Parkir</option>
                                        @foreach($area_parkirs as $area_parkir)
                                            <option value="{{ $area_parkir->id }}" {{ old('area_parkir_id', $transaksi->area_parkir_id) == $area_parkir->id ? 'selected' : '' }}>{{ $area_parkir->nama }}</option>
                                        @endforeach
                                    </select>
                                    @error('area_parkir_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
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
