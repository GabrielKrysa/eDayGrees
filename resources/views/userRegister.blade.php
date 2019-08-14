@extends('layouts.app')

@section('body')
    <div class="banner about-banner">
        <div class="container">
            <h2>Cadastrar</h2>
            <div class="agileits-line"></div>
        </div>
    </div>

    <div class="container justify-content-center">
        <div class=" justify-content-center">
            <div class="col-md-auto">
                <div class="card">
                    <div class="card-header"></div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('registerUser') }}" class="form-horizontal">
                            @csrf
                            <div class="form-group">
                                <label for="name"
                                       class="col-md-4 text-md-right">{{ __('Nome completo') }}</label>

                                <div class="col-md-6">
                                    <input id="name_lastname" type="text"
                                           class="form-control" name="name_lastname"
                                           required autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $nameError }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Endereço de E-mail') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror"
                                           name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $emailError }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control"
                                           name="password" required autocomplete="new-password">
                                    @if(isset($alert))
                                        <span class="is-invalid" role="alert">
                                            <strong>{{ $alert }}</strong>
                                        </span>
                                    @endif

                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="password-confirm"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Senha') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="Auth::attempt("
                                           required autocomplete="new-password">
                                </div>
                            </div>


                            <div class="col-md-2 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Cadastrar') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()
