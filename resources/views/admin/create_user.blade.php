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
                                <h4>Form Tambah Admin</h4>
                            </div>
                            <div class="card-body">
                                <form method="post" action=" {{ route('admin.store') }}">
                                    @csrf
                                <div class="form-group">
                                    <label>Nama Admin</label>
                                    <input name="id" id="id" value="" hidden="">
                                    <input name="id_status" id="id_status" value="2" hidden="">
                                    <input type="text"
                                        class="form-control" name="nama" id="nama">
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <input type="text"
                                        class="form-control" name="jenisKelamin" id="jenisKelamin">
                                </div>
                                <div class="form-group">
                                    <label>No Hape</label>
                                    <input type="text"
                                        class="form-control" name="noHp" id="noHp">
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea class="form-control"
                                        data-height="150" name="alamat" id="alamat"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text"
                                        class="form-control" name="username" id="username">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text"
                                        class="form-control" name="password" id="password">
                                </div>
                            <div class="card-footer text-right">
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
