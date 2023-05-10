@extends('layouts.app')

@section('title', 'Form')

@push('style')
        <!-- CSS Libraries -->
        <link rel="stylesheet"
        href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Form</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
                    <div class="breadcrumb-item">Form</div>
                </div>
            </div>

            <div class="section-body">
                        <div class="card">
                            <div class="card-header">
                                <h4>Form Edit Anak</h4>
                            </div>
                            <div class="card-body">
                            <form method="post" action="{{ route('anak.update', $anak->id_anak) }}" id="myForm">
                                    @csrf
                                    @method('PUT')
                                <div class="form-group">
                                    <label>Nama Anak</label>
                                    <input name="id_anak" id="id_anak" value="{{ $anak->id_anak }}" hidden="">
                                    <input type="text"
                                        class="form-control" name="nama" id="nama" value="{{ $anak->nama }}">
                                </div>
                                <div class="form-group">
                                    <label>TTL</label>
                                    <input type="text"
                                        class="form-control" name="TTL" id="TTL" value="{{ $anak->TTL }}">
                                </div>
                                <div class="form-group">
                                    <label>Nama Ibu</label>
                                    <input type="text"
                                        class="form-control" name="nama_ibu" id="nama_ibu" value="{{ $anak->nama_ibu }}">
                                </div>
                                <div class="form-group">
                                    <label>Nama Ayah</label>
                                    <input type="text"
                                        class="form-control" name="nama_ayah" id="nama_ayah" value="{{ $anak->nama_ayah }}">
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea class="form-control"
                                        data-height="150" name="alamat" id="alamat" >{{ $anak->alamat }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Telepon</label>
                                    <input type="text"
                                        class="form-control" name="telepon" id="telepon" value="{{ $anak->telepon }}">
                                </div>
                            <div class="card-footer text-right">
                            {{--                                {{$anak->links('vendor.pagination.bootstrap-4') }}--}}
                                <button class="btn btn-primary mr-1"
                                    type="submit">Submit</button>
                                <button class="btn btn-secondary"
                                    type="reset">Reset</button>
                            </div>
                            </form>
                        </div>

            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
