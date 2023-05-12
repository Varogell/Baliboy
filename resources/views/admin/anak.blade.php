@extends('layouts.app')

@section('title', 'Table')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Anak</h1>
            </div>

            <div class="section-body">
                        <div class="card">
                            <div class="card-header">
                                <h4>Tabel Kota</h4>
                                <div class="card-header-form">
                                    <div class="card-header-form">
                                        <form class="row mb-3 mt-5" action="" method="POST">
                                        <div class="input-group">
                                            <a href="{{ route('anak.create') }}" class="btn btn-icon icon-left btn-success"><i class="fa-solid fa-plus"></i> Tambah Data</a>
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
                                            <th>ID anak</th>
                                            <th>Akte</th>
                                            <th>Nama</th>
                                            <th>TTL</th>
                                            <th>Nama Ibu</th>
                                            <th>Nama Ayah</th>
                                            <th>Alamat</th>
                                            <th>Telepon</th>
                                            <th width="280px">Action</th>
                                        </tr>
                                        @php
                                            $i=1;
                                        @endphp
                                        @foreach ($anak as $k)
                                            <tr>
                                                <td>{{ $i++}}</td>
                                                <td>{{ $k->id_anak}}</td>
                                                <td><a href="{{asset('storage/' . $k->akte)}}"><img src="{{asset('storage/' . $k->akte)}}" style ="max-width: 90px"></a></td>
                                                <td>{{ $k->nama}}</td>
                                                <td>{{ $k->TTL}}</td>
                                                <td>{{ $k->nama_ibu}}</td>
                                                <td>{{ $k->nama_ayah}}</td>
                                                <td>{{ $k->alamat}}</td>
                                                <td>{{ $k->telepon}}</td>
                                                <td>
                                                        <form action="{{ route('anak.destroy',$k->id_anak) }}" method="POST">
                                                        <a class="btn btn-info" href="">Show</a>
                                                        <a class="btn btn-primary" href="{{ route('anak.edit',$k->id_anak) }}">Edit</a>
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
                                    {{$anak->links('vendor.pagination.bootstrap-5')}}
                                </div>
                            </div>
                </div>
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
