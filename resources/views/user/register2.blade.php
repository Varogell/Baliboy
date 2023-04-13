@extends('layouts.auth')

@section('title', 'Register')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="container d-flex justify-content-center">
    <div class="card card-primary">
        <div class="card-header">
            <h4>Register</h4>
        </div>
        @if($errors->any())
            @foreach($errors->all() as $err)
                <p class="alert alert-danger">{{$err}}}</p>
            @endforeach
        @endif
        <div class="card-body" >
            <form method="POST" action="{{route('register.action')}}">
                @csrf
                    <input id="id_status"
                           type="hidden"
                           class="form-control"
                           name="id_status"
                           value="{{ old('id_status', '2') }}"
                           autofocus>

                    <div class="form-group">
                        <label for="nama">Name</label>
                        <input id="nama"
                               type="text"
                               class="form-control"
                               name="nama"
                               value="{{old('nama')}}"
                               autofocus>
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
                    <select class="form-control selectric" name="jenisKelamin">
                        <option value="L{{old('jenisKelamin') == 'L' ? 'selected' : ''}}">Laki-Laki</option>
                        <option value="P{{old('jenisKelamin') == 'P' ? 'selected' : ''}}">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="noHp">No Hp</label>
                    <input id="noHp"
                           type="text"
                           class="form-control"
                           name="noHp"
                           value="{{old('noHp')}}">
                    <div class="invalid-feedback">
                    </div>
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input id="alamat"
                           type="text"
                           class="form-control"
                           name="alamat"
                           value="{{old('alamat')}}">
                    <div class="invalid-feedback">
                    </div>
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
                        Register
                    </button>
                    <a class="btn btn-danger btn-lg btn-block" href="{{route('register')}}">Back</a>
                </div>
            </form>
        </div>
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
