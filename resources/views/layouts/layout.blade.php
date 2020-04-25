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
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"
            integrity="sha384-FzT3vTVGXqf7wRfy8k4BiyzvbNfeYjK+frTVqZeNDFl8woCbF0CYG6g2fMEFFo/i"
            crossorigin="anonymous"></script>
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
    <script src="https://kit.fontawesome.com/76bf3db543.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.debug.js" integrity="sha384-THVO/sM0mFD9h7dfSndI6TS0PgAGavwKvB5hAxRRvc0o9cPLohB0wb/PTA7LdUHs" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
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
                    <h1><a href="{{route('main.index')}}">eDayGrees</a></h1>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                <nav>
                    <ul class="nav navbar-nav">
                        <li class="hvr-sweep-to-bottom"><a href="{{route('main.index')}}">Inicio</a></li>
                        <li><a href="{{route('main.about')}}" class="hvr-sweep-to-bottom">Sobre</a></li>
                        @if(auth()->user() == null)
                            <li><a href="{{route('login')}}" class="hvr-sweep-to-bottom">Entrar</a></li>
                            <li><a href="{{route('register')}}" class="hvr-sweep-to-bottom">Registre-se</a></li>
                            <li><a href="{{route('main.contact')}}" class="hvr-sweep-to-bottom">Contato</a></li>
                        @else
                            <li><a href="{{route('main.contact')}}" class="hvr-sweep-to-bottom">Contato</a></li>
                            <li><a href="{{route('guest.report')}}" class="hvr-sweep-to-bottom">Relatório</a></li>
                            <li>
                                <a class="dropdown-toggle hvr-sweep-to-bottom" type="button"
                                   id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">
                                    {{Auth::user()->name}}
                                </a>
                                <div class="dropdown-menu col-md-5" style="background: #212121"
                                     aria-labelledby="dropdownMenuButton" >
                                    <button style="margin: 0; padding: 0;" class="btn btn-primary">
                                        <a style="color: white" href="{{route('logout')}}">sair</a>
                                    </button>
                                </div>
                            </li>
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
        <main class="py-4">
            @yield('title')
        </main>
        <div class="agileits-line"></div>
    </div>
</div>
<!-- //banner -->
<!-- contact -->
<div class="contact-top">
    <div class="container">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</div>
<!-- //contact -->
<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="agileinfo_footer_grids">
            <div class="col-md-4 agileinfo_footer_grid">
                <div class="agile-logo">
                    <h4><a href="{{route('main.index')}}">eDayGrees</a></h4>
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
                            href="{{route('main.index')}}">Inicio</a>
                    </li>
                    <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a
                            href="{{route('main.index')}}">Sobre</a>
                    </li>
                    <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a
                            href="{{route('main.contact')}}">Contato</a>
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
