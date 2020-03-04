@extends('layouts.layout')

@section('title')
    <h2>CONTATO</h2>
@endsection
@section('content')
    <div class="contact-grids">

        <div class="col-md-7 contact-form">

            <form action="{{route('guest.saveContact')}}" method="POST">
                @csrf
                <input type="text" name="nome" placeholder="Nome" required="">
                <input type="email" class="email" name="Email" placeholder="E-mail" required="">
                <textarea placeholder="mensagem" name="Mensagem" required=""></textarea>
                @if(isset($message))
                    <p style="font-size:70%; color:#ac2925">{{$message}}</p>
                @endif
                <input type="submit" value="Enviar">
            </form>
        </div>

        <div class="col-md-4 contact-right">
            <div class="contact-text">
                <h4>HORÁRIO DE ATENDIMENTO : </h4>
                <p> Segunda – Segunda das 08:00 AM as 17:00 PM </p>
                <p><span class="glyphicon glyphicon-earphone"></span> TELEFONE : (42) 9 9954-3434</p>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>

@endsection
