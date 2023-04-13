@extends('layouts.auth')

@section('title', 'Register')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="card card-primary" >
        <div class="card-header">
            <h4>Register</h4>
        </div>

        <div class="card-body" >
            <form method="POST" action="{{route('register.action')}}">
                <div class="row">
                    <div class="form-group col-6">
                        <label for="id">id</label>
                        <input id="id"
                               type="text"
                               class="form-control"
                               name="id"
                               value="{{old('id')}}
                               autofocus>
                    </div>
                    <div class="form-group col-6">
                        <label for="nama">Name</label>
                        <input id="nama"
                            type="text"
                            class="form-control"
                            name="nama"
                               value="{{old('nama')}}"
                            autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username"
                        type="text"
                        class="form-control"
                        name="username"
                           value="{{old('username')}}">
                    <div class="invalid-feedback">
                    </div>
                </div>

                <div>
                        <label for="password"
                            class="d-block">Password</label>
                        <input id="password"
                            type="password"
                            class="form-control pwstrength"
                            data-indicator="pwindicator"
                            name="password"
                               value="{{old('password')}}">
                        <div id="pwindicator"
                            class="pwindicator">
                            <div class="bar"></div>
                            <div class="label"></div>
                        </div>
                </div>

                <div>
                        <label>Jenis Kelamin</label>
                        <select class="form-control selectric"
                                value="{{old('jenisKelamin')}}">
                            <option value="laki-laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                </div>
                <div>
                        <label>Nomor Telepon</label>
                        <input type="text" value="{{old('noHp')}}"
                            class="form-control">
                </div>

                <div>
                    <label>Alamat</label>
                    <textarea class="form-control" value="{{old('alamat')}}">

                    </textarea>
                </div>

                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox"
                            name="agree"
                            class="custom-control-input"
                            id="agree">
                        <label class="custom-control-label"
                            for="agree">I agree with the terms and conditions</label>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit"
                        class="btn btn-primary btn-lg btn-block">
                        Register <a class="btn btn-danger btn-lg btn-block" href="{{route('home')}}">Back</a>
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>
    <script src="{{ asset('library/jquery.pwstrength/jquery.pwstrength.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/auth-register.js') }}"></script>
@endpush
