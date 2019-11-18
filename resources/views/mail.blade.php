<html lang="en">

<head>
    <title>eDayGrees</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Farming Company Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- bootstrap-css -->
    <link href="{{asset('/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <!--// bootstrap-css -->
    <!-- css -->
    <link rel="stylesheet" href="{{asset('/css/style.css')}}" type="text/css" media="all"/>
    <!--// css -->
    <!-- font-awesome icons -->
    <link href="{{asset('/css/font-awesome.css')}}" rel="stylesheet">
    <!-- font -->
    <script src="{{asset('/js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.js')}}"></script>
    <script src="{{asset('/js/SmoothScroll.min.js')}}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
</head>

<body>
<!-- header -->
<div class="header">
    <div class="container">
        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="w3layouts-logo">
                    <h1><a href="{{route('principal.index')}}">eDayGrees</a></h1>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                <nav>
                    <ul class="nav navbar-nav">
                        <li><a href="{{route('principal.index')}}" class="hvr-sweep-to-bottom">Inicio</a></li>
                        <li><a href="{{route('sobre')}}" class="hvr-sweep-to-bottom">Sobre</a></li>
                        @if(auth()->user() == null)
                            <li><a href="{{route('login')}}" class="hvr-sweep-to-bottom">Entrar</a></li>
                            <li><a href="{{route('cadastro')}}" class="hvr-sweep-to-bottom">Registre-se</a></li>
                        @else
                            <li><a href="{{route('relatorio')}}" class="hvr-sweep-to-bottom">Relatório</a></li>
                            <li><a>Bem vindo, <?php echo auth()->user()->username ?></a>
                            </li>
                            <li><a href="{{route('logout')}}" class="hvr-sweep-to-bottom">sair</a></li>
                        @endif
                    </ul>
                </nav>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
    </div>
</div>
<!-- //header -->
<!-- banner -->
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

                <form action="{{route('salvarContato')}}" method="POST">
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
<!-- //contact -->
<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="agileinfo_footer_grids">
            <div class="col-md-4 agileinfo_footer_grid">
                <div class="agile-logo">
                    <h4><a href="{{route('principal.index')}}">eDayGrees</a></h4>
                </div>
                <p>Unindo a tecnologia com o campo.</p>
                <div class="agileinfo-social-grids">
                    <h4 style="color: white"> Mídias Sociais </h4>
                    <ul>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 agileinfo_footer_grid">
                <h3>Informação de Contato</h3>
                <ul class="agileinfo_footer_grid_list">
                    <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>END CEDETEG,
                        <span>Guarapuava.</span></li>
                    <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a
                            href="mailto:edaygrees@gmail.com">edaygrees@gmail.com</a></li>
                    <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>TELEFONE</li>
                </ul>
            </div>
            <div class="col-md-4 agileinfo_footer_grid">
                <h3>Navegação</h3>
                <ul class="agileinfo_footer_grid_nav">
                    <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a
                            href="{{route('principal.index')}}">Inicio</a>
                    </li>
                    <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a
                            href="{{route('sobre')}}">Sobre</a>
                    </li>
                    <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a
                            href="{{route('sobre')}}">Contato</a>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //footer -->
<script type="text/javascript" src="{{asset('/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/easing.js')}}"></script>
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function () {
        $().UItoTop({
            easingType: 'easeOutQuart'
        });
    });
</script>
<!-- //here ends scrolling icon -->
</body>

</html>
