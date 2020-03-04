@extends('layouts.layout')

@section('title')
    <h2>LOGIN</h2>
@endsection
@section('content')
    <div class="loginmenu">
        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group row" align="right">
                    <label for="email" class="col-md-4 col-form-label text-md-right">Endereço de Email</label>

                    <div class="col-md-6">
                        <input id="email" type="email"
                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                               value="{{ old('email') }}" required autofocus placeholder="Digite o endereço de email cadastrado">

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert" style="color: red; font-size: 13px">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row" align="right">
                    <label for="password" class="col-md-4 col-form-label text-md-right">Senha</label>

                    <div class="col-md-6">
                        <input id="password" type="password"
                               class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                               required placeholder="Digite sua senha">

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>


                <div class="form-group row mb-0" align="center">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            Entrar
                        </button>

                        @if (Route::has('password.request'))
                            <!--<a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>-->
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
