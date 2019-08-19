@extends('layouts.app')

@section('body')
    <div class="banner about-banner">
        <div class="container">
            <h2>Cadastrar Propriedade</h2>
            <div class="agileits-line"></div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#List" role="tab"
                               aria-controls="home" aria-selected="true">MAMÃO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#AlocationList" role="tab"
                               aria-controls="contact" aria-selected="false">UVA</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="List" role="tabpanel">
                            <div class="container">
                                <div method="POST" action="#" class="form-horizontal">
                                    @csrf
                                    <div class="form-group">
                                        <label class="col-md-5 control-label" for="textinput">Nome da
                                            propriedade</label>

                                        <div class="form-group-lg">
                                            <div class="col-md-5">
                                                <input id="textinput" name="nomePropriedade" type="text"
                                                       placeholder="Digite o nome da propriedade "
                                                       class="form-control input-md w-25" required="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-5 control-label" for="selectbasic">Videira</label>
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
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show active" id="AlocationList" role="tabpanel">
                            <div class="container">
                                <div method="POST" action="#" class="form-horizontal">
                                    @csrf
                                    <div class="form-group">
                                        <label class="col-md-5 control-label" for="textinput">Nome da propriedade</label>

                                        <div class="form-group-lg">
                                            <div class="col-md-5">
                                                <input id="textinput" name="nomePropriedade" type="text"
                                                       placeholder="Digite o nome da propriedade "
                                                       class="form-control input-md w-25" required="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-5 control-label" for="selectbasic">Videira</label>
                                        <div class="form-group-lg">
                                            <div class="col-md-5">
                                                <select id="selectcultivar" name="tipoCultivar"
                                                        class="form-control">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


        <div class="propertyRegister">

        </div>
    </div>
@endsection()
