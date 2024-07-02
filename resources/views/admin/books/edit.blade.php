@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Buku</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">Edit Buku</li>
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

                                <a href="{{ route('books.index') }}" class="btn btn-success btn-sm">Kembali</a>
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
                                <form action="{{ route('books.store', $book->id) }}" method="POST">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="title" class="col-md-4">Judul Buku</label>
                                        <input type="hidden" name="id" value="{{ $book->id }}">
                                        <input type="text" value="{{ $book->title }}" name="title" id="title"
                                            class="form-control col-md-8" required>
                                    </div>

                                    <div class="form-group row">
                                        <label for="isbn" class="col-md-4">ISBN</label>
                                        <input type="hidden" name="id" value="{{ $book->id }}">
                                        <input type="number" value="{{ $book->isbn }}" name="isbn" id="isbn"
                                            class="form-control col-md-8" required>
                                    </div>

                                    <div class="form-group row">
                                        <label for="deskripsi" class="col-md-4">Deskripsi Buku</label>
                                        <input type="hidden" name="id" value="{{ $book->id }}">
                                        <input type="text" value="{{ $book->deskripsi }}" name="deskripsi" id="deskripsi"
                                            class="form-control col-md-8" required>
                                    </div>

                                    <div class="form-group row">
                                        <label for="penulis" class="col-md-4">Penulis Buku</label>
                                        <input type="hidden" name="id" value="{{ $book->id }}">
                                        <input type="text" value="{{ $book->penulis }}" name="penulis" id="penulis"
                                            class="form-control col-md-8" required>
                                    </div>

                                    <div class="form-group row">
                                        <label for="penerbit" class="col-md-4">Penerbit Buku</label>
                                        <input type="hidden" name="id" value="{{ $book->id }}">
                                        <input type="text" value="{{ $book->penerbit }}" name="penerbit" id="penerbit"
                                            class="form-control col-md-8" required>
                                    </div>

                                    <div class="form-group row">
                                        <label for="cover_img" class="col-md-4">Cover Buku</label>
                                        <input type="hidden" name="id" value="{{ $book->id }}">
                                        <input type="file" value="{{ $book->cover_img }}" name="cover_img"
                                            id="cover_img" required>
                                    </div>

                                    <div class="form-group row">
                                        <label for="genres_id" class="col-md-4">Genre Buku</label>
                                        <select name="genres_id" id="genres_id" class="form-control col-md-8" required>
                                            @foreach ($genres as $genre)
                                                <option value="{{ $genre->id }}"
                                                    {{ $book->genres_id == $genre->id ? 'selected' : '' }}>
                                                    {{ $genre->nama }}</option>
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
