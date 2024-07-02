@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Pegawai</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">Edit Pegawai</li>
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

                                <a href="{{ route('employees.index') }}" class="btn btn-success btn-sm">Kembali</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <form action="{{ route('employees.store', $employee->id) }}" method="POST">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="nama" class="col-md-4">Nama</label>
                                        <input type="hidden" name="id" value="{{ $employee->id }}">
                                        <input type="text" value="{{ $employee->nama }}" name="nama" id="nama"
                                            class="form-control col-md-8" required>
                                    </div>

                                    <div class="form-group row">
                                        <label for="alamat" class="col-md-4">alamat</label>
                                        <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control col-md-8" required>{{ $employee->alamat }}</textarea>
                                    </div>

                                    <div class="form-group row">
                                        <label for="nohp" class="col-md-4">Nomor HP</label>
                                        <input type="number" value="{{ $employee->nohp }}" name="nohp" id="nohp"
                                            class="form-control col-md-8" required>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email" class="col-md-4">Email</label>
                                        <input type="email" value="{{ $employee->email }}" name="email" id="email"
                                            class="form-control col-md-8" required>
                                    </div>

                                    <div class="form-group row">
                                        <label for="positions_id" class="col-md-4">Posisi</label>
                                        <select name="positions_id" id="positions_id" class="form-control col-md-8"
                                            required>
                                            @foreach ($positions as $position)
                                                <option value="{{ $position->id }}"
                                                    {{ $employee->positions_id == $position->id ? 'selected' : '' }}>
                                                    {{ $position->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <input type="submit" value="Simpan" class="btn btn-primary">
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
