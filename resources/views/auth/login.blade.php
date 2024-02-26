@extends('layouts.auth')

@section('login')
    <div class="login-box">

        <!-- /.login-logo -->
        <div class="login-box-body">
            <div class="login-logo">
                <a href="{{ url('/') }}">
                    <img src="{{ url($setting->path_logo) }}" alt="logo.png" width="100">
                </a>
            </div>

            <form action="{{ route('login') }}" method="post" class="form-login">
                @csrf
                <div class="form-group has-feedback @error('email') has-error @enderror">
                    <input type="email" name="email" class="form-control" placeholder="Email" required
                        value="{{ old('email') }}" autofocus>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @error('email')
                        <span class="help-block">{{ $message }}</span>
                    @else
                        <span class="help-block with-errors"></span>
                    @enderror
                </div>
                <div class="form-group has-feedback @error('password') has-error @enderror">
                    <input type="password" name="password" id="password-field" class="form-control" placeholder="Password" required>
                    <span class="glyphicon glyphicon-eye-open field-icon toggle-password" style="cursor: pointer; position: absolute; right: 10px; top: 10px;"></span>
                    <!-- Tambahkan style untuk menempatkan ikon mata di dalam kotak password -->
                    @error('password')
                        <span class="help-block">{{ $message }}</span>
                    @else
                        <span class="help-block with-errors"></span>
                    @enderror
                </div>
                
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        document.querySelector('.toggle-password').addEventListener('click', function() {
                            const passwordField = document.querySelector('#password-field');
                            if (passwordField.type === 'password') {
                                passwordField.type = 'text';
                                this.classList.remove('glyphicon-eye-open');
                                this.classList.add('glyphicon-eye-close');
                            } else {
                                passwordField.type = 'password';
                                this.classList.remove('glyphicon-eye-close');
                                this.classList.add('glyphicon-eye-open');
                            }
                        });
                    });
                </script>
                <div class="row">
                    {{-- <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox"> In
                        </label>
                    </div>
                </div> --}}
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
@endsection
