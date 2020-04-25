@extends('layouts.layout')

@section('title')
    <h2>RELATÓRIO</h2>
@endsection
@section('content')

    <div class="container-fluid">
        @if (session('msg'))
            <div class="alert alert-success" role="alert" align="center">
                <a style="color: white">{{ session('msg') }}</a>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
        @endif
        <a class="btn btn-primary" style="left: 0px; margin: 0; margin-bottom: 20px"
           href="{{route('guest.registerCultivar')}}">CADASTRAR
            CULTIVAR</a>
        <br>

        <div class="card">
            <div class="card-header">
                Cultivares Cadastrados
                <div class="col" align="right">
                    <span id="span_icon_" title="mostrar mais" onclick="showCultivars()"><i id="icon_"
                                                                                            class="fas fa-angle-double-down"></i></span>
                </div>
            </div>
            <div id="cultivars" class="card-body" style="display: none">
                <table class="table table-striped letra9px">
                    <thead>
                    <tr>
                        <th scope="col">Identidicador</th>
                        <th scope="col">Cidade</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Status</th>
                    </tr>
                    <tbody>
                    @foreach($cultivares as $cultivar)
                        <tr>
                            <td>{{$cultivar->nome_propriedade}}</td>
                            <td>{{($cultivar->cidade)->nome}}</td>
                            <td>{{($cultivar->estado)->nome}}</td>
                            <td>{{$cultivar->status}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header">
                Histórico climático das cidades onde você possui cultivar(es)

                <div class="col" align="right">
                    <span id="span_icon" title="mostrar mais" onclick="showWeater()"><i id="icon"
                                                                                        class="fas fa-angle-double-down"></i></span>
                </div>
            </div>

            <div class="container" id="weater" style="display: none; margin-top: 18px;">
                @foreach($climas as $key => $item)

                    <div class="card" style="width: 1075px; margin-bottom: 15px">
                        <div class="card-header">
                            {{$key}}
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Temperatura Maxima</th>
                                    <th>Temperatura Minima</th>
                                    <th>Temperatura Média</th>
                                    <th>Média de Umidade</th>
                                    <th>Condição Climatica</th>
                                    <th>Data</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($item as $weater)
                                    <tr>
                                        <td>{{$weater->temperaturaMaxima}}</td>
                                        <td>{{$weater->temperaturaMinima}}</td>
                                        <td>{{$weater->temperaturaMedia}}</td>
                                        <td>{{$weater->umidadeRelativa}}</td>
                                        <td>{{$weater->condicao}}</td>
                                        <td>{{$weater->data}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </div>
    <script>
        window.setTimeout(function () {
            $(".alert").fadeTo(1500, 0).slideUp(500, function () {
                $(this).remove();
            });
        }, 5000);

        function showWeater() {
            if ($("#weater").is(':visible') === true) {
                $("#icon").attr('class', 'fas fa-angle-double-down');
                $("#span_icon").attr('title', 'mostrar mais');
                $("#weater").fadeOut();
            } else {
                $("#icon").attr('class', 'fas fa-angle-double-up');
                $("#span_icon").attr('title', 'mostrar menos');
                $("#weater").fadeIn(1000);
            }
        }

        function showCultivars() {
            if ($("#cultivars").is(':visible') === true) {
                $("#icon_").attr('class', 'fas fa-angle-double-down');
                $("#span_icon_").attr('title', 'mostrar mais');
                $("#cultivars").fadeOut();
            } else {
                $("#icon_").attr('class', 'fas fa-angle-double-up');
                $("#span_icon_").attr('title', 'mostrar menos');
                $("#cultivars").fadeIn();
            }
        }
    </script>
@endsection
