@extends('layouts.master')

@section('stylesheet')
    <style>
        /* Agregar estilos personalizados aquí */
        .login-container {
            background-color: #f9f9f9;
            padding: 60px 0;
        }

        .login-form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 10px;
            padding: 40px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .login-form h2 img {
            display: block;
            margin: 0 auto;
            width: 200px;
            margin-top: -20px;
            height: 200px;
            margin-bottom: -50px
        }

        .login-form .form-group {
            margin-bottom: 20px;
        }

        .login-form label {
            font-weight: bold;
            color: #555555;
        }

        .login-form input[type="email"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #cccccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .login-form input[type="checkbox"] {
            margin-right: 5px;
        }

        .login-form .btn-primary {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: #ffffff;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out; /* Transición suave */
        }

        .login-form .btn-primary:hover,
        .login-form .btn-primary:focus {
            background-color: #0056b3; /* Cambio de color al pasar el mouse o enfocarse */
        }

        .login-form .forgot-password {
            text-align: right;
        }

        .login-form .forgot-password a {
            color: #007bff;
            text-decoration: none;
        }

        .login-form .forgot-password a:hover {
            text-decoration: underline;
        }
    </style>
@endsection

@section('content')
    <div class="login-container">
        <div class="login-form">
            <h2><img src="{{ asset('images/login.png') }}" alt="Logo"></h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="email">{{ trans('menu.Email') }}</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ trans('menu.Enter your email address') }}">
                </div>
                <div class="form-group">
                    <label for="password">{{ trans('menu.Password') }}</label>
                    <input type="password" id="password" name="password" required autocomplete="current-password" placeholder="{{ trans('menu.Enter your password') }}">
                </div>
                <div class="form-group">
                    <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember">{{ trans('menu.Remember Me') }}</label>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">{{ trans('menu.Login') }}</button>
                </div>
                <div class="form-group forgot-password">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">{{ trans('menu.Forgot Your Password?') }}</a>
                    @endif
                </div>
            </form>
        </div>
    </div>
@endsection
