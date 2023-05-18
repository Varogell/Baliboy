@extends('layouts.app')

@section('title', 'Table')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Progress Anak</h1>
            </div>

            <div class="section-body">
                        <div class="card">
                            <div class="card-header">
                                <h4>Tabel Progress</h4>
                                <div class="card-header-form">
                                    <div class="card-header-form">
                                        <form class="row mb-3 mt-5" action="" method="POST">
                                        <div class="input-group">
                                            <a href="{{ route('progress.create') }}" class="btn btn-icon icon-left btn-success"><i class="fa-solid fa-plus"></i> Tambah Data</a>
                                            <a href="{{ route('cetak_pdf') }}" class="btn btn-icon icon-left btn-warning"><i class="fa-solid fa-plus"></i> Cetak Data</a>
                                            <input type="text" class="form-control ml-3" placeholder="Search" value="{{ (request()->cari) ? request()->cari : '' }}" name="cari" >
                                            <div class="input-group-btn">
                                                <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table-bordered table-md table">
                                        <tr>
                                            <th>No</th>
                                            <th>ID Progress</th>
                                            <th>Nama Anak</th>
                                            <th>Bulan ke </th>
                                            <th>Panjang Bayi</th>
                                            <th>Berat Bayi</th>
                                            <th width="280px">Action</th>
                                        </tr>
                                        @php
                                            $i=1;
                                        @endphp
                                        @foreach ($progress as $k)
                                            <tr>
                                                <td>{{ $i++}}</td>
                                                <td>{{ $k->id_progress}}</td>
                                               
                                                <td value="{{ $k->id_anak }}">{{ $k->nama}}</td>
                                               
                                                <td>{{ $k->bulan_ke}}</td>
                                                <td>{{ $k->panjang_bayi}}</td>
                                                <td>{{ $k->berat_bayi}}</td>
                                                <td>
                                                        <form action="{{ route('progress.destroy',$k->id_progress) }}" method="POST">
                                                        <a class="btn btn-info" href="">Show</a>
                                                        <a class="btn btn-primary" href="{{ route('progress.edit',$k->id_progress) }}">Edit</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <nav class="d-inline-block">
                                    <ul class="pagination mb-0">

                            <div class="row">
                                <div class="col-md-12">
                                    {{$progress->links('vendor.pagination.bootstrap-5')}}
                                </div>
                            </div>
                </div>
            </div>
<!--Grafik-->
            <div>
            <html>
                <head>
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script type="text/javascript">
                        google.charts.load('current', {'packages':['corechart']});
                        google.charts.setOnLoadCallback(drawChart);

                        function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                        ['Year', 'Sales', 'Expenses'],
                        ['2004',  1000,      400],
                        ['2005',  1170,      460],
                        ['2006',  660,       1120],
                        ['2007',  1030,      540],
                        ['2008',  2003,      200]
                        ]);

                        var options = {
                        title: 'Company Performance',
                        curveType: 'function',
                        legend: { position: 'bottom' }
                        };

                        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

                        chart.draw(data, options);
                        }
                    </script>
                </head>
            <body>
            <div id="curve_chart" style="width: 900px; height: 500px"></div>
            </body>
            </html>
            </div>

        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/jquery-ui-dist/jquery-ui.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/components-table.js') }}"></script>
@endpush


