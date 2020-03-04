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
        <a class="btn btn-primary" style="left: 0px; margin: 0; margin-bottom: 20px" href="{{route('guest.registerCultivar')}}">CADASTRAR
            CULTIVAR</a>
        <br>

        <div class="card">
            <div class="card-header">
                Cultivares Cadastrados
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered table-hover letra9px">
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
    </div>
    <script>
        window.setTimeout(function () {
            $(".alert").fadeTo(1500, 0).slideUp(500, function () {
                $(this).remove();
            });
        }, 5000);
    </script>
@endsection
