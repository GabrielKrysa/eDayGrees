<html>

<head>
    <title> eDayGrees </title>

    <title>eDayGrees</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
    <!--// bootstrap-css -->
    <!-- css -->
    <link rel="stylesheet" href="{{asset('/css/style.css')}}" type="text/css" media="all">
    <!--// css -->
    <!-- font-awesome icons -->
    <link href="{{asset('/css/font-awesome.css')}}" rel="stylesheet">
    <!-- //font-awesome icons -->
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
    <!-- header -->
</head>

<body>
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
                        <li class="active"><a href="{{route('main.index')}}">Inicio</a></li>
                        <li><a href="{{route('main.about')}}" class="hvr-sweep-to-bottom">Sobre</a></li>
                        @if(auth()->user() == null)
                            <li><a href="{{route('login')}}" class="hvr-sweep-to-bottom">Entrar</a></li>
                            <li><a href="{{route('register')}}" class="hvr-sweep-to-bottom">Registre-se</a></li>
                            <li><a href="{{route('main.contact')}}" class="hvr-sweep-to-bottom">Contato</a></li>
                        @else
                            <li><a href="{{route('main.contact')}}" class="hvr-sweep-to-bottom">Contato</a></li>
                            <li><a href="{{route('guest.report')}}" class="hvr-sweep-to-bottom">Relatório</a></li>
                            <li><a>Bem vindo, {{Auth::user()->name}}></a></li>
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
        <h2>Cadastrar</h2>
        <div class="agileits-line"></div>
    </div>
</div>
<br>
<div class="container">
    <div class="col-md-4">
        <div class="card">
            <div class="container box">
                <form action="{{route('cultivar.salvar')}}" method="post">
                    <div class="form-group">
                        <label>Estados</label>
                        <select name="state" id="state" class="form-control dynamic">
                            <option value="">Selecione o estado</option>
                            @foreach($estados as $estado)
                                <option value="{{$estado->title}}" id="{{$estado->id}}">{{$estado->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <br/>
                    <label>Cidade</label>
                    <div class="form-group">
                        <input type="text" id="cidade" name="cidade" class="form-control dynamic">
                    </div>
                    <br>
                    <label>Nome identificador</label>
                    <div class="form-group">
                        <input type="text" id="nome_propriedade" name="nome_propriedade"
                               class="form-control dynamic">
                    </div>

                    <div class="form-group">
                        <label>Cultivar</label>
                        <select name="cultivar" id="cultivar" class="form-control dynamic">
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
</div>

<div class="footer">
    <div class="container">
        <div class="agileinfo_footer_grids">
            <div class="col-md-4 agileinfo_footer_grid">
                <div class="agile-logo">
                    <h4><a href="{{route('main.index')}}">eDayGrees</a></h4>
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
                            href="{{route('main.index')}}">Inicio</a>
                    </li>
                    <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a
                            href="{{route('main.about')}}">Sobre</a>
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
<script type="text/javascript" src="{{asset('/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/easing.js')}}"></script>
</body>

</html>

<script>
    $(document).ready(function () {

        $('.dynamic').change(function () {
            if ($(this).val() !== '') {
                var select = $(this).attr("id");
                var value = $(this).val();
                var dependent = $(this).data('dependent');
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: "{{ route('dynamicdependent.fetch') }}",
                    method: "POST",
                    data: {select: select, value: value, _token: _token, dependent: dependent},
                    success: function (result) {
                        $('#' + dependent).html(result);
                    }

                })
            }
        });

        $('#country').change(function () {
            $('#state').val('');
            $('#city').val('');
        });

        $('#state').change(function () {
            $('#city').val('');
        });


    });
</script>
