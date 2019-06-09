<html lang="en">

<head>
    <title>eDayGrees</title>
    <link rel="shortcut icon" href="{{asset('/images/uvinha.png')}}">
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
            <!-- Marque e alterne para agrupar para melhor exibição em dispositivos móveis -->
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

            <!-- Centro de navegação top com opções -->
            <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                <nav>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{route('principal.index')}}">Inicio</a></li>
                        <li><a href="{{route('sobre')}}" class="hvr-sweep-to-bottom">Sobre</a></li>
                        @if(auth()->user() == null)
                            <li><a href="{{route('login')}}" class="hvr-sweep-to-bottom">Entrar</a></li>
                            <li><a href="{{route('cadastro')}}" class="hvr-sweep-to-bottom">Registre-se</a></li>
                            <li><a href="{{route('contato')}}" class="hvr-sweep-to-bottom">Contato</a></li>
                        @else
                            <li><a href="{{route('contato')}}" class="hvr-sweep-to-bottom">Contato</a></li>
                            <li><a href="{{route('relatorio')}}" class="hvr-sweep-to-bottom">Relatório</a></li>
                            <li><a>Bem vindo, <?php echo auth()->user()->username ?></a></li>
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
<div class="banner">
    <div class="container">
        <style>
            * {
                padding: 0;
                margin: 0;
                font-family: sans-serif;
            }

            .cont {
                text-align: center;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 100%;
            }

            .cont span {
                display: block;
            }

            .text1 {
                color: white;
                font-size: 60px;
                font-weight: 700;
                letter-spacing: 8px;
                margin-bottom: 20px;
                background: black;
                position: relative;
                animation: text 3s 1;
            }

            .text2 {
                font-size: 30px;
                color: #fff;
            }

            @Keyframes text {
                0% {
                    color: black;
                    margin-bottom: -40px;
                }

                30% {
                    latter-spacing: 25px;
                    margin-bottom: -40px;
                }

                85% {
                    latter-spacing 8px;
                    margin-bottom: -40px;
                }
            }
        </style>
        <div class="cont">
            <span class="text1" style="font-family: 'roboto', cursive">eDayGrees</span>
            <span class="text2">Unindo tecnologia com a agricultura</span>
        </div>

        <link rel="stylesheet" href="{{asset('../../public/css/flexslider.css')}}" type="text/css" media="screen"
              property=""/>
        <script defer src="{{asset('/js/jquery.flexslider.js')}}"></script>
        <script type="text/javascript">
            $(window).load(function () {
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function (slider) {
                        $('body').removeClass('loading');
                    }
                });
            });
        </script>
        <!-- //flexSlider -->
    </div>
</div>
<div class="blog">
    <div class="container">
        <div class="services-heading">
            <h3>SERVIÇOS QUE OFERECEMOS EM NOSSO SISTEMA</h3>
            <div class="agileits-line"></div>
        </div>
        <!--imagem e uma descrição-->
        <div class="agileinfo-blog-grids">
            <div class="col-md-4 wthree-blog">
                <div class="w3-agileits-blog">
                    <div class="w3-agileits-blog-img">
                        <a><img src="{{asset('/images/controleClima.jpg')}}" alt=""/></a>
                    </div>
                    <div class="w3-agileits-blog-text">
                        <a>Analise Climática</a>
                        <p>Sistema tem incluso um controle de clima, aonde pode buscar por dados
                            reais da propriedade. Vazendo um balanço de humidade e calor. Com isso
                            é realizado diversas análises de acumulo de graus e possiveis doenças.</p>
                    </div>
                </div>
            </div>
            <!--imagem e uma descrição-->
            <div class="col-md-4 wthree-blog">
                <div class="w3-agileits-blog">
                    <div class="w3-agileits-blog-img">
                        <a><img src="{{asset('/images/doencaUva.jpg')}}" alt=""/></a>
                    </div>
                    <div class="w3-agileits-blog-text">
                        <a>Avisos e análises de doenças</a>
                        <p>Através de busca de dados, o sistema pode dar avisos de possiveis
                            doenças que podem estar presente na cultura.</p>
                    </div>
                </div>
            </div>
            <!--imagem e uma descrição-->
            <div class="col-md-4 wthree-blog">
                <div class="w3-agileits-blog">
                    <div class="w3-agileits-blog-img">
                        <a><img src="{{asset('/images/relatorios.jpg')}}" alt=""/></a>
                    </div>
                    <div class="w3-agileits-blog-text">
                        <a>Geração de relatórios diários</a>
                        <p>Geração de relatórios diários para possivel acompanhamento de como anda
                            a cultura. Dados como graus acumulados, ciclo, além dos avisos e o clima em
                            tempo real.</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //blog -->
<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="agileinfo_footer_grids">
            <div class="col-md-4 agileinfo_footer_grid">
                <div class="agile-logo">
                    <h4><a href="{{route('principal.index')}}">eDayGrees</a></h4>
                </div>
                <p>Unindo tecnologia com campo.</p>
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
</body>

</html>
