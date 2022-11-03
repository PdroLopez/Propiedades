@extends('layouts.public.login')
@section('content')
<div class="form-container">
    <p class="text-center" style="margin-top: 17px; font-size:100%;">
        <img src="{{ asset('assets/img/user.svg') }}" width="90px;">
    </p>
    <h4 class="text-center all-tittles" style="margin-bottom: 30px;">Iniciar Sesión
    </h4>

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="group-material-login">
            <input type="text" name="email" id="email" class="material-login-control"  required="" maxlength="70">
            <span class="highlight-login"></span>
            <span class="bar-login"></span>
            <label> <img src="{{ asset('assets/img/envelope-fill.svg') }}"> &nbsp; Correo Electronico</label>
        </div>

        <div class="group-material-login">
            <input type="password" name="password" id="password" class="material-login-control"  required="" maxlength="70">
            <span class="highlight-login"></span>
            <span class="bar-login"></span>
            <label> <img src="{{ asset('assets/img/password.svg') }}" width="20px"> &nbsp; Contraseña</label>
        </div>



        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-outline-primary">
                    {{ __('Ingresar') }}
                </button>

                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
        </div>

    </form>
</div>
@endsection
