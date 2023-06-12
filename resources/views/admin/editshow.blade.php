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
                                <h4>Form Edit Progress Anak</h4>
                            </div>
                            <div class="card-body">
                                <form method="post" action="{{ route('show.update', $progress->id_progress) }}">
                                    @csrf
                                    @method('PUT')
                                <div class="form-group">
                                    <label>Nama Anak</label>
                                    <input name="id_progress" id="id_progress" value="{{ $progress->id_progress }}" hidden="">
                                    <select class="form-control" name="id_anak" id="id_anak">
                                    <option value="{{ $progress->id_anak }}">{{ $progress->nama }}</option>
                                    </select>
                                <div class="form-group">
                                    <label>Bulan ke</label>
                                    <select class="form-control" name="bulan_ke" id="bulan_ke">
                                    <option value="{{ $progress->bulan_ke }}">{{ $progress->bulan_ke }}</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Panjang Bayi</label>
                                    <input type="text"
                                        class="form-control" name="panjang_bayi" id="panjang_bayi" value="{{ $progress->panjang_bayi }}">
                                </div>
                                <div class="form-group">
                                    <label>Berat Bayi</label>
                                    <input type="text"
                                        class="form-control" name="berat_bayi" id="berat_bayi" value="{{ $progress->berat_bayi }}">
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
