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
            @if(session()->has('error'))
            <div class="alert alert-danger">
            {{ session()->get('error') }}
            </div>
            @endif
            <div class="section-body">
                        <div class="card">
                            <div class="card-header">
                                <h4>Form Edit User</h4>
                            </div>
                            <div class="card-body">
                            <form method="post" action="{{ route('admin.update', $admin->id) }}" id="myForm">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                    <label>Nama Admin</label>
                                    <input name="id" id="id" value="{{ $admin->id }}" hidden="">
                                    <input name="password" id="password" value="{{ $admin->password }}" hidden>
                                    <input type="text"
                                        class="form-control" name="nama" id="nama" value="{{ $admin->nama }}">
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <input type="text"
                                        class="form-control" name="jenisKelamin" id="jenisKelamin" value="{{ $admin->jenisKelamin }}">
                                </div>
                                <div class="form-group">
                                    <label>No Hape</label>
                                    <input type="text"
                                        class="form-control" name="noHp" id="noHp" value="{{ $admin->noHp }}">
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea class="form-control"
                                        data-height="150" name="alamat" id="alamat">{{ $admin->alamat }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text"
                                        class="form-control" name="username" id="username" value="{{ $admin->username }}">
                                </div>
                                <div class="form-group">
                                    <label>Bulan ke</label>
                                    <select class="form-control" name="id_status" id="id_status">
                                    @foreach ($status as $k)
                                    <option value="{{ $k->id_status }}">{{ $k->nameStatus }}</option>
                                    @endforeach
                                    </select>
                                </div>
                            <div class="card-footer text-right">
                            {{--                                {{$admin->links('vendor.pagination.bootstrap-4') }}--}}
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
