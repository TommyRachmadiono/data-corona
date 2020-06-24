@extends('templates.master')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Global</h1>
</div>

<!-- Content Row -->
<div class="row">

    <!-- Positif -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Positif</div>
                        <div id="divPositif" class="h5 mb-0 font-weight-bold text-gray-800">
                            {{ $positif['value'] }}
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-plus fa-2x text-warning"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sembuh -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Sembuh</div>
                        <div id="divSembuh" class="h5 mb-0 font-weight-bold text-gray-800">
                            {{ $sembuh['value'] }}
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
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Meninggal</div>
                        <div id="divMeninggal" class="h5 mb-0 font-weight-bold text-gray-800">
                            {{ $meninggal['value'] }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-frown fa-2x text-danger"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- Content Row -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tabel Global</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Country</th>
                        <th>Confirmed</th>
                        <th>Deaths</th>
                        <th>Recovered</th>
                        {{-- <th>Meninggal</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($global as $data)
                        
                    <tr>
                        <td>{{ $data['Country_Region'] }}</td>
                        <td>{{ $data['Confirmed'] }}</td>
                        <td>{{ $data['Deaths'] }}</td>
                        <td>{{ $data['Recovered'] }}</td>
                        {{-- <td>{{ $data['Kasus_Meni'] }}</td> --}}
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