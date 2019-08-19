@extends('layouts.app')

@section('body')
    <script language="JavaScript">
        function enviardados() {
            if (document.data.password.value !== document.data.password1.value) {
                alert("Senhas diferentes!");
                document.data.password.focus();
                return false;
            }
        }
    </script>

    <script language="JavaScript">
        document.data.name_lastname.blur();
    </script>

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
                    @if(isset($erro))
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6"
                                     style="border:1px solid black; border-color:red ; color:#f37656;  padding-top: 50px; padding-right: 30px;  padding-bottom: 50px;  padding-left: 80px;">

                                    <p>{{$erro}}</p>

                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="card-header">
                        <div class="form-group ">
                            <div class="col-md-12">
                                <div class="col-md-6"
                                     align="center">

                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card-body">

                    <form method="POST" action="{{ route('registerUser') }}" class="form-horizontal" name="data"
                          onSubmit="return enviardados();">
                        @csrf
                        <div class="form-group">
                            <label for="name"
                                   class="col-md-4 text-md-right">{{ __('Nome completo') }}</label>

                            <div class="col-md-6">
                                <input id="name_lastname" type="text"
                                       class="form-control" name="name_lastname"
                                       required value="">
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="email"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Endereço de E-mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email"
                                       class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="TES TEST TES" required autocomplete="email">

                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="password"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password"
                                       type="password"
                                       class="form-control"
                                       name="password">
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="password-confirm"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password1"
                                       type="password"
                                       class="form-control"
                                       name="password1">
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
