<html lang="en">

<head>
    <title>eDayGrees</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Farming Company Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- bootstrap-css -->
    <link href="{{asset('/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!--// bootstrap-css -->
    <!-- css -->
    <link rel="stylesheet" href="{{asset('/css/style.css')}}" type="text/css" media="all" />
    <!--// css -->
    <!-- font-awesome icons -->
    <link href="{{asset('/css/font-awesome.css')}}" rel="stylesheet">
    <script src="{{asset('/js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.js')}}"></script>
    <script src="{{asset('/js/SmoothScroll.min.js')}}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
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
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="w3layouts-logo">
                        <h1><a href="{{route('login')}}">eDayGrees</a></h1>
                    </div>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                    <nav>
                        <ul class="nav navbar-nav">
                            <li><a href="{{route('principal.index')}}" class="hvr-sweep-to-bottom">Inicio</a></li>
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
                    </nav>
                </div>
        </div>
        <!-- //header -->
        <!-- banner -->
        <div class="banner about-banner">
            <div class="container">
                <h2>SOBRE</h2>
                <div class="agileits-line"></div>
            </div>
        </div>

        <!-- //about-top -->
        <!-- feature-grid -->
        <div class="feature-grid">
            <div class="container">
                <div class="services-heading">
                    <h3>NOSSO TRABALHO</h3>
                    <div class="agileits-line"></div>
                </div>
                <div class="agileits-feature-grids">
                    <div class="col-sm-4 agileinfo-feature-grid">
                        <div class="agileinfo-feature-info">
                            <img src="{{asset('/images/quemSomos.jpg')}}" alt="" />
                            <h5>Quem somos ? </h5>
                            <p>A história do software eDayGress surgiu com uma parceria entra o departamento de Ciência da
                                Computação com membros Graduados na área da Agronomia, com vista sempre no bem estar e
                                facilidade de uso. Esse sistema foi muito bem planejado com diversas idéias e aplicações
                                usando as melhores técnicas e aprendizados para sua funcionalidade ser a mais completa
                                possivel. Tem a garantir um controle prático de produções em propriedades da cultura da
                                uva. </p>
                        </div>
                    </div>
                    <div class="col-sm-4 agileinfo-feature-grid">
                        <div class="agileinfo-feature-info">
                            <img src="{{asset('/images/nossaMissao.jpg')}}" alt="" />
                            <h5>Missão</h5>
                            <p>Proporcionar as pessoas uma melhor qualidade de vida. Dando suporte a produção, com base
                                nesse método de acompanhamento prático e fácil de usar. Proporcionando assim uma vida mais
                                leve. Aplicação de atualizações para melhoria de nosso suporte para as pessoas que estão
                                utulizando nosso sistema</p>
                        </div>
                    </div>
                    <div class="col-sm-4 agileinfo-feature-grid">
                        <div class="agileinfo-feature-info">
                            <img src="{{asset('/images/valores.jpg')}}" alt="" />
                            <h5>Valores</h5>
                            <p>Nossos valores sempre serão no profissionalismo de toda equipe. O comprometimento pelo
                                desafio de sempre estar ao dispor de melhorias para as pessoas que usam nosso sistema.
                                Mantendo o respeito e dedicação com todos.</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- feature-grid -->
        <!-- AQUI COLOCAMOS A EQUIPE DE TRABALHO -->
        <div class="team">
            <div class="container">
                <div class="services-heading">
                    <h3>NOSSA EQUIPE</h3>
                    <div class="agileits-line"></div>
                </div>
                <div class="team-row">
                    <div class="col-md-3 team-grids">
                        <div class="team-img">
                            <img class="img-responsive" src="{{asset('/images/equipe1.jpg')}}" alt="">
                            <div class="captn">
                                <div class="captn-top">
                                    <h4>Tiago Alves</h4>
                                    <p>Ex militar, acadêmico de ciência da Computação bacharel</p>
                                </div>
                                <div class="wthree-social-grids">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 team-grids">
                        <div class="team-img">
                            <img class="img-responsive" src="{{asset('/images/equipe2.jpg')}}" alt="">
                            <div class="captn">
                                <div class="captn-top">
                                    <h4>Mark Willian</h4>
                                    <p>Técnico em Agropecuária, acadêmico de ciência da Computação bacharel</p>
                                </div>
                                <div class="wthree-social-grids">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 team-grids">
                        <div class="team-img">
                            <img class="img-responsive" src="{{asset('/images/equipe3.jpg')}}" alt="">
                            <div class="captn">
                                <div class="captn-top">
                                    <h4>Gabriel Krysa</h4>
                                    <p>Programador, acadêmico de ciência da Computação bacharel</p>
                                </div>
                                <div class="wthree-social-grids">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 team-grids">
                        <div class="team-img">
                            <img class="img-responsive" src="{{asset('/images/professor.jpg')}}" alt="">
                            <div class="captn">
                                <div class="captn-top">
                                    <h4>Marcos Quinaia</h4>
                                    <p>Professor</p>
                                </div>
                                <div class="wthree-social-grids">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- //team -->
        <!-- //about -->
        <!-- footer -->
        <div class="footer">
            <div class="container">
                <div class="agileinfo_footer_grids">
                    <div class="col-md-4 agileinfo_footer_grid">
                        <div class="agile-logo">
                            <h4><a href="i{{route('principal.index')}}">eDayGrees</a></h4>
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
                            <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>END CEDETEG, <span>Guarapuava.</span>
                            </li>
                            <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:edaygrees@gmail.com">edaygrees@gmail.com</a></li>
                            <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>TELEFONE</li>
                        </ul>
                    </div>
                    <div class="col-md-4 agileinfo_footer_grid">
                        <h3>Navegação</h3>
                        <ul class="agileinfo_footer_grid_nav">
                            <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="route{{'principal.index'}}">Inicio</a>
                            </li>
                            <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="{{route('sobre')}}">Sobre</a>
                            </li>
                            <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="{{route('sobre')}}">Contato</a>
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
            $(document).ready(function() {
                $().UItoTop({
                    easingType: 'easeOutQuart'
                });
            });
        </script>
</body>

</html>