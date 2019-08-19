@extends('layouts.app')
@section('body')
    <div class="banner about-banner">
        <div class="container">
            <h2>Redefinição de senha</h2>
            <div class="agileits-line"></div>
        </div>
    </div>
    <!-- //banner -->
    <!-- contact -->
    <div class="logincadastro">
        <form method="POST" action="#" class="form-horizontal">
            @csrf
            <div class="container">
                <b><h3 align="center">Dados de usuário</h3></b>
                </br>
                <div class="agileits-line"></div>
            </div>

            <fieldset>
                <label class="col-md-4 control-label" for="textinput">CPF</label>
                <div class="form-group">
                    <div class="col-md-5">
                        <input id="textinput" name="cpf" onkeydown="javascript: fMasc( this, mCPF );" type="text"
                               placeholder="Digite o CPF do usuário" class="form-control input-md" required="">
                        @if(isset($erroCPF))
                            <p style="font-size:70%; color:#ac2925">{{$erroCPF}}</p>
                        @endif
                    </div>
                </div>

                <label class="col-md-4 control-label" for="textinput">Email</label>
                <div class="form-group">
                    <div class="col-md-5">
                        <input id="textinput" name="email" type="text" placeholder="Digite o email do usuário"
                               class="form-control input-md" required="">
                        @if(isset($erroEmail))
                            <p style="font-size:70%; color:#ac2925">{{$erroEmail}}</p>
                        @endif
                    </div>
                </div>

                <label class="col-md-4 control-label" for="passwordinput">Senha</label>
                <div class="form-group">
                    <div class="col-md-4">
                        <input id="passwordinput" name="password" type="password"
                               placeholder="Digite sua nova senha" class="form-control input-md" required="">
                        @if(isset($erroSenhaCurta))
                            <p style="font-size:70%; color:#ac2925">{{$erroSenhaCurta}}</p>
                        @endif
                    </div>
                </div>
                <label class="col-md-4 control-label" for="selectbasic">Pergunta de segurança</label>
                <div class="form-group">
                    <div class="col-md-4">
                        <select id="selectpergunta" name="selectpergunta" class="form-control">

                    </div>
                </div>

                <label class="col-md-4 control-label" for="resposta">Resposta</label>
                <div class="form-group">
                    <div class="col-md-4">
                        <input id="respostainput" name="resposta" type="text"
                               placeholder="Digite sua resposta" class="form-control input-md" required="">

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="singlebutton"></label>
                    <div class="col-md-4">
                        <input type="checkbox" name="checkbox"> Concorda em alterar minha senha
                        @if(isset($erroCheck))
                            <p style="font-size:70%; color:#ac2925">{{$erroCheck}}</p>
                        @endif
                        <button type="submit" id="singlebutton" name="singlebutton" class="btn btn-primary">Redefinir
                            Senha
                        </button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
@endsection
