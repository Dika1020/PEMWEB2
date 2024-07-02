@extends('admin.layouts.app')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Member</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">Edit Member</li>
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

                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form action="{{ route('members.store') }}" method="POST">
                                    @csrf                                    
                                    <div class="form-group row">
                                        <label for="nama" class="col-md-4 col-form-label">Nama</label>
                                        <div class="col-md-8">
                                            <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama', $member->nama) }}" required>
                                            <input type="hidden" name="id" id="id" class="form-control" value="{{ old('id', $member->id) }}" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label">Email</label>
                                        <div class="col-md-8">
                                            <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $member->email) }}" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="status" class="col-md-4 col-form-label">Status</label>
                                        <div class="col-md-8">
                                            <select name="status" id="status" class="form-control" required>
                                                <option value="aktif" {{ old('status', $member->status) == 'aktif' ? 'selected' : '' }}>Aktif</option>
                                                <option value="tidak aktif" {{ old('status', $member->status) == 'tidak aktif' ? 'selected' : '' }}>Tidak Aktif</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="alamat" class="col-md-4 col-form-label">Alamat</label>
                                        <div class="col-md-8">
                                            <textarea name="alamat" id="alamat" cols="30" rows="4" class="form-control" required>{{ old('alamat', $member->alamat) }}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="gender" class="col-md-4 col-form-label">Gender</label>
                                        <div class="col-md-8">
                                            <select name="gender" id="gender" class="form-control" required>
                                                <option value="laki-laki" {{ old('gender', $member->gender) == 'laki-laki' ? 'selected' : '' }}>laki-laki</option>
                                                <option value="perempuan" {{ old('gender', $member->gender) == 'perempuan' ? 'selected' : '' }}>perempuan</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
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
