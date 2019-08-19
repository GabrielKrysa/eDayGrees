@extends('layouts.app')

@section('body')
    <div class="banner about-banner">
        <div class="container">
            <h2>Contato</h2>
            <div class="agileits-line"></div>
        </div>
    </div>
    <!-- //banner -->
    <!-- contact -->
    <div class="contact-top">
        <div class="container">
            <div class="contact-grids">

                <div class="col-md-7 contact-form">

                    <form action="" method="POST">
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
        </div>
    </div>
    <div class="map">
        <div class="services-heading">
            <h3>NOSSA SEDE</h3>
            <div class="agileits-line"></div>
        </div>
        </br>
        </br>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4161.272873539378!2d-51.48939972687!3d-25.385057691609717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ef362a96428765%3A0x3508ff16b1db8aaa!2sCampus+Cedeteg+da+Universidade+Estadual+Centro-Oeste+-+UNICENTRO!5e1!3m2!1sen!2sbr!4v1557378983757!5m2!1sen!2sbr"
            width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
@endsection()
