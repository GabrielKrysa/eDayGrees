@extends('layouts.layout')

@section('title')
    <h2>CADASTRO DE PROPRIEDADE</h2>
@endsection
@section('content')
    <div class="col-md-4">
        <div class="card">
            <div class="container box">
                @if (session('errors'))
                    <div class="alert alert-danger" role="alert" align="center">
                        <a style="color: white">Erros: {{ session('errors') }}</a>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                @endif
                @if (session('msg'))
                    <div class="alert alert-success" role="alert" align="center">
                        <a style="color: white">{{ session('msg') }}</a>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                @endif
                <form action="{{route('cultivar.salvar')}}" method="post">
                    <div class="form-group">
                        <label for="estado">Estados</label>
                        <select onchange="getCities()" name="estado" id="estado" class="form-control dynamic" required>
                            <option value="">Selecione o estado</option>
                            @foreach($estados as $estado)
                                <option value="{{$estado->nome}}" id="{{$estado->id}}">{{$estado->nome}}
                                    - {{$estado->sigla}}</option>
                            @endforeach
                        </select>
                    </div>
                    <br/>
                    <label>Cidade</label>
                    <div class="form-group">
                        <select type="text" id="cidade" name="cidade" class="form-control dynamic" required>
                        </select>
                    </div>
                    <br>
                    <label>Nome identificador</label>
                    <div class="form-group">
                        <input type="text" id="nome_propriedade" name="nome_propriedade"
                               class="form-control dynamic" required>
                    </div>

                    <div class="form-group">
                        <label>Cultivar</label>
                        <select name="cultivar" id="cultivar" class="form-control dynamic" required>
                            <option value="">Selecione o estado</option>
                            @foreach($cultivares as $cultivar)
                                <option value="{{$cultivar->cultivar}}"
                                        id="{{$cultivar->id}}">{{$cultivar->cultivar}}</option>
                            @endforeach
                        </select>
                    </div>
                    {{ csrf_field() }}
                    <br/>
                    <br/>
                    <button type="submit" class="btn btn-primary">salvar</button>
                </form>
            </div>

        </div>
    </div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"
            integrity="sha384-FzT3vTVGXqf7wRfy8k4BiyzvbNfeYjK+frTVqZeNDFl8woCbF0CYG6g2fMEFFo/i"
            crossorigin="anonymous"></script>
    <script>
        function getCities() {
            var state = $("#estado").children("option:selected").val();
            $.ajax({
                url: "{{route('cities.search', ['state' => '_state_'])}}".replace('_state_', state),
                type: "get",
                dataType: 'json',
                success: function (response) {
                    if (response.success === true) {
                        $('#cidade').empty();
                        $.each(response.data, function (item, value) {
                            $('#cidade').append('<option>' + value.nome + '</option>');
                        });
                    }
                }
            });
        }
    </script>
@endsection
