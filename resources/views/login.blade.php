@extends('layouts.app')

@section('body')
    <div class="banner about-banner">
        <div class="container">
            <h2>Entrar</h2>
            <div class="agileits-line"></div>
        </div>
    </div>
    <!-- //banner -->
    <!-- contact -->
    <div class="loginmenu">

        <form method="POST" action="{{ route('login') }}" class="form-horizontal">@csrf
            <fieldset style="">
                <label class="col-md-4 control-label" for="textinput"></label>
                <div class="form-group">
                    <div class="col-md-4">
                        @if(isset($alert))
                            <p>{{$alert}}</p>
                        @endif
                    </div>
                </div>
                <!-- Text input-->
                <label class="col-md-4 control-label" for="textinput">Login</label>
                <div class="form-group">
                    <div class="col-md-4">
                        <input id="textinput" name="username" type="text" placeholder="Digite o nome do Usuário"
                               class="form-control input-md" required="" style="">
                    </div>
                </div>
                </br>

                <!-- Password input-->
                <label class="col-md-4 control-label" for="passwordinput">Senha</label>
                <div class="form-group">
                    <div class="col-md-4">
                        <input id="passwordinput" name="password" type="password" placeholder="Digite sua senha"
                               class="form-control input-md" required="">
                        <a href="{{route('reset')}}"> Esqueceu sua senha?</a>
                        <a href="{{route('main.register')}}"><p>Registre-se</p></a>
                    </div>

                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="singlebutton"></label>
                    <div class="col-md-4">
                        @if(isset($erro))
                            <p>{{$erro}}</p>
                        @endif


                        <button type="submit" id="singlebutton" name="singlebutton" class="btn btn-primary w-100">Entrar
                        </button>

                    </div>
                </div>


            </fieldset>
        </form>
    </div>
@endsection
