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
                                <h4>Tabel Admin</h4>
                                <div class="card-header-form">
                                    <div class="card-header-form">
                                        <form class="row mb-3 mt-5" action="" method="POST">
                                        <div class="input-group">
                                        
                                            <a href="{{ route('admin.create') }}" class="btn btn-icon icon-left btn-success"><i class="fa-solid fa-plus"></i> Tambah Data</a>
                                            
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
                                            <th>ID Status</th>
                                            <th>Nama Admin</th>
                                            <th>Jenis Kelamin</th>
                                            <th>No HP</th>
                                            <th>Alamat</th>
                                            <th>username</th>
                                            <th width="280px">Action</th>
                                        </tr>
                                        @php
                                            $i=1;
                                        @endphp
                                        @foreach ($admin as $k)
                                            <tr>
                                                <td>{{ $i++}}</td>
                                                <td value="{{ $k->id_status }}">{{ $k->nameStatus}}</td>
                                                <td>{{ $k->nama}}</td>
                                                <td>{{ $k->jenisKelamin}}</td>
                                                <td>{{ $k->noHp}}</td>
                                                <td>{{ $k->alamat}}</td>
                                                <td>{{ $k->username}}</td>
                                                <td>
                                                        <form action="{{ route('admin.destroy',$k->id) }}" method="POST">
                                                        <a class="btn btn-info" href="{{ route('admin.show',$k->id) }}">Show</a>
                                                        <a class="btn btn-primary" href="{{ route('admin.edit',$k->id) }}">Edit</a>
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
                                    {{$admin->links('vendor.pagination.bootstrap-5')}}
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
