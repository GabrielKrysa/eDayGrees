@extends('layouts.app')

@section('body')
    <div class="banner about-banner">
        <div class="container">
            <h2>Cadastrar Propriedade</h2>
            <div class="agileits-line"></div>
        </div>
    </div>
    <div class="container">
        <div class="propertyRegister">
            <form method="POST" action="#" class="form-horizontal">
                @csrf
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Nome da propriedade</label>

                    <div class="form-group-lg">
                        <div class="col-md-5">
                            <input id="textinput" name="nomePropriedade" type="text"
                                   placeholder="Digite o nome da propriedade "
                                   class="form-control input-md w-25" required="">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="selectbasic">Videira</label>
                    <div class="form-group-lg">
                        <div class="col-md-5">
                            <select id="selectcultivar" name="tipoCultivar" class="form-control">
                                <option value="0">Seleciona cultivar</option>

                            </select>
                            @if(isset($erroCultivar))
                                <p style="font-size:70%; color:#ac2925">{{$erroCultivar}}</p>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="selectbasic">Estado</label>
                    <div class="form-group-lg">
                        <div class="col-md-5">
                            <select id="selectestado" name="selectestado" class="form-control">
                                <option value="0">Seleciona Estado</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="selectbasic">Cidade</label>
                    <div class="form-group-lg">
                        <div class="col-md-5">
                            <select id="selectcidade" name="selectcidade" class="form-control">
                                <option value="0">Seleciona a cidade</option>
                            </select>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection()
