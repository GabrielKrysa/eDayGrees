<html>


<head>
    <script language="javascript" src="js/jquery-1.11.1.min.js"></script>

    <script language="javascript">
        $(document).ready(function () {
            $("#selectestado").change(function () {
                $("#selectestado option:selected").each(function () {
                    estado_id = $(this).val();
                    $.post("./php/cidade.php", {
                        estado_id: estado_id
                    }, function (data) {
                        $("#selectcidade").html(data);
                    });
                });
            });
        });
    </script>
</head>

<body>

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
<link href="{{asset('/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all">
<!-- css -->
<link rel="stylesheet" href="{{asset('/css/style.css')}}" type="text/css" media="all">
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
<!-- header -->
<div class="header">
    <div class="container">
        <nav class="navbar navbar-default">
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
        <h2>Cadastrar</h2>
        <div class="agileits-line"></div>
    </div>
</div>
<!-- //banner -->
<!-- CADASTRO DE  -->

<div class="cadastroPropriedade" name="cadastroPropriedade">
    <form method="POST" action="{{ route('registro') }}" class="form-horizontal">
        @csrf
        <div class="container">
            <b>
                <h3 align="center">Cadastro de Cultivar</h3>
            </b>
            </br>
            <div class="agileits-line"></div>
        </div>

        <fieldset>


            <br>
            <br>

            <div class="nomePropriedade">
                <!-- Nome de Propriedade -->
                <label class="col-md-4 control-label" for="textinput">Nome da propriedade</label>
                <div class="form-group">
                    <div class="col-md-5">
                        <input id="textinput" name="username" type="text" placeholder="Digite o nome da propriedade"
                               class="form-control input-md" required="">
                    </div>
                </div>
            </div>

            <!-- Estado de cadastro -->
            <div class="propriedadeEstado">
                <div class="form-group">
                    <label class="col-md-4 control-label" for="selectbasic">Estado</label>
                    <div class="form-group-lg">
                        <div class="col-md-5">
                            <select id="selectestado" name="selectestado" class="form-control">
                                <option value="0">Seleciona Estado</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cidade de cadastros -->
            <div class="propriedadeCidade">
                <div class="form-group">
                    <label class="col-md-4 control-label" for="selectbasic">Cidade</label>
                    <div class="form-group-lg">
                        <div class="col-md-5">
                            <select id="selectcidade" name="selectcidade" class="form-control">
                                <option value="0">Seleciona a cidade</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <br>

            <div>
                <script>
                    function abrir() {
                        document.getElementById('popup').style.display = 'block';
                    }

                    function fechar() {
                        document.getElementById('popup').style.display = 'none';
                    }
                </script>

            </div>


            <div class="opcaoSelecionaCadastro">

                <style>
                    .popup {
                        position: fixed;
                        top: 0;
                        bottom: 0;
                        left: 0;
                        right: 0;
                        margin: auto;
                        width: 300px;
                        height: 180px;
                        padding: 15px;
                        border: solid 1px #5cd08d;
                        background: #b3e8ca;
                        display: none;
                    }
                </style>


                <div id="popup" class="popup">
                    <p> Caso tenha realizado a poda da videira em dias anteriores, deverá realizar uma soma de
                        todas as temperaturas médias dos dias anteriores até o atual</p>
                </div>

                <label class="col-md-4 control-label" for="textinput">Poda já realizada</label>
                <div class="form-group">
                    <div class="col-md-5">
                        <input type="checkbox" name="emp_liq" id="emp_liq" onchange="habilitar()"/>
                        <br>
                        <br>
                        <a href="@" onmouseover="abrir();">?</a>
                        <br>
                        <a href="@" onmouseover="fechar();">Fechar</a>
                        <input class="form-control" id="motivo" name="motivo" type="text"
                               placeholder="Digite a soma da média de graus de todos os dias atrasados" disabled/>
                    </div>
                </div>

                <script>
                    function habilitar() {
                        if (document.getElementById('emp_liq').checked) {
                            document.getElementById('motivo').removeAttribute("disabled");
                        } else {
                            document.getElementById('onoff').value = ''; //Evita que o usuário defina um texto e desabilite o campo após realiza-lo
                            document.getElementById('motivo').setAttribute("disabled", "disabled");
                        }
                    }
                </script>

            </div>

            <br>
            <br>

            <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">Videira</label>
                <div class="form-group-lg">
                    <div class="col-md-5">
                        <select id="selectcultivar" name="tipoCultivar"
                                class="form-control">
                            <option value="0">Seleciona cultivar</option>

                        </select>
                        @if(isset($erroCultivar))
                            <p style="font-size:70%; color:#ac2925">{{$erroCultivar}}</p>
                        @endif
                    </div>
                </div>
            </div>


            <br>
            <br>

            <!-- Botão para cadastrar -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="singlebutton"></label>
                <div class="col-md-4">
                    <button type="submit" id="singlebutton" name="singlebutton" class="btn btn-primary">Cadastrar
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
                    <h4><a href="index.php">eDayGrees</a></h4>
                </div>
                <p>Unindo a tecnologia com o campo.</p>
                <div class="agileinfo-social-grids">
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
        <!--<div class="w3agile_footer_copy">
          <p>© eDayGrees | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
      </div>-->
    </div>
</div>
<!-- //footer -->
<script type="text/javascript" src="{{asset('/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/easing.js')}}"></script>
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function () {
        /*
          var defaults = {
          containerID: 'toTop', // fading element id
          containerHoverID: 'toTopHover', // fading element hover id
          scrollSpeed: 1200,
          easingType: 'linear'
          };
        */
        $().UItoTop({
            easingType: 'easeOutQuart'
        });
    });
</script>
<!-- //here ends scrolling icon -->
</body>

</html>
