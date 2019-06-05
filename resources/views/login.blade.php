<html>
<head>
    <title>eDayGrees</title>
    <link rel="shortcut icon" href="{{asset('/images/uvinha.png')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="Farming Company Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design">
    <script type="application/x-javascript">

        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- bootstrap-css -->
    <link href="{{asset('/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}" type="text/css" media="all">
    <link href="{{asset('/css/font-awesome.css')}}" rel="stylesheet">

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

@section('content')
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
                            <li><a href="{{route('contato')}}" class="hvr-sweep-to-bottom">Contato</a></li>
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
                        <a href="{{route('redefinirsenha')}}"> Esqueceu sua senha?</a>
                        <a href="{{route('cadastro')}}"><p>Registre-se</p></a>
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
                            <span>Guarapuava.</span>
                        </li>
                        <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a
                                href="mailto:edaygrees@gmail.com">edaygrees@gmail.com</a></li>
                        <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>TELEFONE</li>
                    </ul>
                </div>
                <div class="col-md-4 agileinfo_footer_grid">
                    <h3>Navegação</h3>
                    <ul class="agileinfo_footer_grid_nav">
                        <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a
                                href="route{{'principal.index'}}">Inicio</a>
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
