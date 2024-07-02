@extends('admin.layouts.app')
<link rel="stylesheet" href="{{ asset('css/pegawai.css') }}">
@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        {{ $header }}
                    </div>
                    <div class="card-body">
                        <h1> {{ $title }} </h1>
                        <p> {{ $caption }} </p>
                        <div class="table">
                            <h2>Nama Pegawai</h2>
                            <table>
                                <tr>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                </tr>
                                @foreach ($data_pgw as $data)
                                    <tr>
                                        <td>{{ $data['nama'] }}</td>
                                        <td>{{ $data['jabatan'] }}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                    <div class="card-footer text-body-secondary">
                        {{ $footer }}
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
