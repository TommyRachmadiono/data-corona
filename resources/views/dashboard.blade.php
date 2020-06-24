@extends('templates.master')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Indonesia</h1> 
</div>

<!-- Content Row -->
<div class="row">

    <!-- Positif -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Positif</div>
                        <div id="divPositif" class="h5 mb-0 font-weight-bold text-gray-800">
                            {{ $indonesia[0]['positif'] }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-plus fa-2x text-warning"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sembuh -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Sembuh</div>
                        <div id="divSembuh" class="h5 mb-0 font-weight-bold text-gray-800">{{ $indonesia[0]['sembuh'] }}
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-laugh fa-2x text-success"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Meninggal -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Meninggal</div>
                        <div id="divMeninggal" class="h5 mb-0 font-weight-bold text-gray-800">
                            {{ $indonesia[0]['meninggal'] }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-frown fa-2x text-danger"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Dirawat -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Dirawat</div>
                        <div id="divDirawat" class="h5 mb-0 font-weight-bold text-gray-800">
                            {{ $indonesia[0]['dirawat'] }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-hospital fa-2x text-primary"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Content Row -->

<div class="row">

    <!-- Bar Chart -->
    <div class="col-xl-8 col-lg-7">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Indonesia Bar Chart</h6>
            </div>
            <div class="card-body">
                <div class="chart-bar">
                    <canvas id="myBarChart"></canvas>
                </div>
                {{-- <hr>
                Styling for the bar chart can be found in the <code>/js/demo/chart-bar-demo.js</code> file. --}}
            </div>
        </div>
    </div>

    <!-- Pie Chart -->
    <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Indonesia Doughnut Chart</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart"></canvas>
                </div>
                <div class="mt-4 text-center small">
                    <span class="mr-2">
                        <i class="fas fa-circle text-warning"></i> Positif
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle text-success"></i> Sembuh
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle text-danger"></i> Meninggal
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle text-primary"></i> Dirawat
                    </span>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Content Row -->


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tabel Provinsi Indonesia</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Kode Provinsi</th>
                        <th>Provinsi</th>
                        <th>Positif</th>
                        <th>Sembuh</th>
                        <th>Meninggal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($provinsi_indonesia as $data)
                        
                    <tr>
                        <td>{{ $data['Kode_Provi'] }}</td>
                        <td>{{ $data['Provinsi'] }}</td>
                        <td>{{ $data['Kasus_Posi'] }}</td>
                        <td>{{ $data['Kasus_Semb'] }}</td>
                        <td>{{ $data['Kasus_Meni'] }}</td>
                    </tr>
                    
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('custom_script')
<!-- Page level plugins -->
<script src="{{ asset('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('assets/js/demo/datatables-demo.js') }}"></script>
@endsection