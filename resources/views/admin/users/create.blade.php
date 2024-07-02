@extends('admin.layouts.app')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tambah User</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">Tambah User</li>
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

                                <a href="{{ route('users.index') }}" class="btn btn-success btn-sm">Kembali</a>
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

                                <form action="{{ route('users.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="name" class="col-md-4">Nama</label>
                                        <input type="text" name="name" value="{{ old('name') }}" id="name" class="form-control col-md-8"
                                            required>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email" class="col-md-4">Email</label>
                                        <input type="email" name="email" value="{{ old('email') }}" id="email" class="form-control col-md-8"
                                            required>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password" class="col-md-4">Password</label>
                                        <input type="password" name="password" value="{{ old('password') }}" id="password" class="form-control col-md-8"
                                            required>
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
