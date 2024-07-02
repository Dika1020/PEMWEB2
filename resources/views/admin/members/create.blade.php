@extends('admin.layouts.app')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tambah Member</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">Tambah Member</li>
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

                                <a href="{{ route('members.index') }}" class="btn btn-success btn-sm">Kembali</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <div class="alert alert-danger">
                                    @if (count($errors) > 0)
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>

                                <form action="{{ route('members.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="nama" class="col-md-4">Nama</label>
                                        <input type="text" name="nama" value="{{ old('nama') }}" id="nama" class="form-control col-md-8"
                                            required>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email" class="col-md-4">Email</label>
                                        <input type="email" name="email" value="{{ old('email') }}" id="email" class="form-control col-md-8"
                                            required>
                                    </div>

                                    <div class="form-group row">
                                        <label for="status" class="col-md-4">Status</label>
                                        <select name="status" id="status" class="form-control col-md-8" required>
                                            <option value="aktif" {{ old('status', $members->status ?? '') == 'aktif' ? 'selected' : '' }}>aktif</option>
                                            <option value="tidak aktif" {{ old('status', $members->status ?? '') == 'tidak aktif' ? 'selected' : '' }}>tidak aktif</option>
                                        </select>
                                    </div>

                                    <div class="form-group row">
                                        <label for="alamat" class="col-md-4">Alamat</label>
                                        <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control col-md-8" required></textarea>
                                    </div>

                                    <div class="form-group row">
                                        <label for="gender" class="col-md-4">Gender</label>
                                        <select name="gender" id="gender" class="form-control col-md-8" required>
                                            <option value="laki-laki" {{ old('gender', $members->gender ?? '') == 'laki-laki' ? 'selected' : '' }}>laki-laki</option>
                                            <option value="perempuan" {{ old('gender', $members->gender ?? '') == 'perempuan' ? 'selected' : '' }}>perempuan</option>
                                        </select>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <input type="submit" value="tambah" class="btn btn-primary">
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
