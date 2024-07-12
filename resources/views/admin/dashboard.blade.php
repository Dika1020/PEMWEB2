@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Parkir Kampus</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                        <li class="breadcrumb-item active">Parkir Kampus Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ App\Models\Jenis::count() }}</h3>
                            <p>Jenis</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-car"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{ App\Models\Kendaraan::count() }}</h3>
                            <p>Kendaraan</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-motorcycle"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ App\Models\Area_parkir::count() }}</h3>
                            <p>Area Parkir</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-parking"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ App\Models\Kampus::count() }}</h3>
                            <p>Kampus</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-university"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card bg-gradient-info">
                        <div class="card-header border-0">
                            <h3 class="card-title">
                                <i class="fas fa-newspaper mr-1"></i>
                                Parking News
                            </h3>
                            <div class="card-tools">
                                <button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li><i class="fas fa-info-circle"></i> Jaga kendaraanmu dengan membawa kartu identitas
                                    saat parkir di kampus.</li>
                                <li><i class="fas fa-info-circle"></i> Selalu membawa kunci ganda untuk keamanan kendaraan
                                    saat parkir.</li>
                                <li><i class="fas fa-info-circle"></i> Selalu gunakan helm saat berkendara di area kampus
                                    untuk keselamatan.</li>
                            </ul>
                        </div>
                    </div>
            <!-- /.row -->

            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-12 connectedSortable">
                    <!-- Parking Map -->
                </section>
                <!-- /.Left col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection