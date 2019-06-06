<?php

include('./php/script.php');

?>

<html>


<head>
    <script type="text/javascript">
        function fMasc(objeto, mascara) {
            obj = objeto
            masc = mascara
            setTimeout("fMascEx()", 1)
        }

        function fMascEx() {
            obj.value = masc(obj.value)
        }

        function mCPF(cpf) {
            cpf = cpf.replace(/\D/g, "")
            cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2")
            cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2")
            cpf = cpf.replace(/(\d{3})(\d{1,2})$/, "$1-$2")
            return cpf
        }

        function mNum(num) {
            num = num.replace(/\D/g, "")
            return num
        }
    </script>
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
        <h2>Redefinição de senha</h2>
        <div class="agileits-line"></div>
    </div>
</div>
<!-- //banner -->
<!-- contact -->
<div class="logincadastro">
    <form method="POST" action="{{route('resetPassword')}}" class="form-horizontal">
        @csrf
        <div class="container">
            <b><h3 align="center">Dados de usuário</h3></b>
            </br>
            <div class="agileits-line"></div>
        </div>

        <fieldset>
            <label class="col-md-4 control-label" for="textinput">CPF</label>
            <div class="form-group">
                <div class="col-md-5">
                    <input id="textinput" name="cpf" onkeydown="javascript: fMasc( this, mCPF );" type="text"
                           placeholder="Digite o CPF do usuário" class="form-control input-md" required="">
                    @if(isset($erroCPF))
                        <p style="font-size:70%; color:#ac2925">{{$erroCPF}}</p>
                    @endif
                </div>
            </div>

            <label class="col-md-4 control-label" for="textinput">Email</label>
            <div class="form-group">
                <div class="col-md-5">
                    <input id="textinput" name="email" type="text" placeholder="Digite o email do usuário"
                           class="form-control input-md" required="">
                    @if(isset($erroEmail))
                        <p style="font-size:70%; color:#ac2925">{{$erroEmail}}</p>
                    @endif
                </div>
            </div>

            <label class="col-md-4 control-label" for="passwordinput">Senha</label>
            <div class="form-group">
                <div class="col-md-4">
                    <input id="passwordinput" name="password" type="password"
                           placeholder="Digite sua nova senha" class="form-control input-md" required="">
                    @if(isset($erroSenhaCurta))
                        <p style="font-size:70%; color:#ac2925">{{$erroSenhaCurta}}</p>
                    @endif
                </div>
            </div>
            <label class="col-md-4 control-label" for="selectbasic">Pergunta de segurança</label>
            <div class="form-group">
                <div class="col-md-4">
                    <select id="selectpergunta" name="selectpergunta" class="form-control">

                        <?php

                        $banco = new selects();

                        $perguntas = $banco->getPerguntas();
                        for ($i = 0; $i < count($perguntas); $i++) { ?>
                        <option value="<?php echo $perguntas[$i]->id; ?>"><?php echo $perguntas[$i]->perguntas?></option>
                        <?php }
                        ?>
                    </select>
                    @if(isset($erroPergunta))
                        <p style="font-size:70%; color:#ac2925">{{$erroPergunta}}</p>
                    @endif
                </div>
            </div>

            <label class="col-md-4 control-label" for="resposta">Resposta</label>
            <div class="form-group">
                <div class="col-md-4">
                    <input id="respostainput" name="resposta" type="text"
                           placeholder="Digite sua resposta" class="form-control input-md" required="">

                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="singlebutton"></label>
                <div class="col-md-4">
                    <input type="checkbox" name="checkbox"> Concorda em alterar minha senha
                    @if(isset($erroCheck))
                        <p style="font-size:70%; color:#ac2925">{{$erroCheck}}</p>
                    @endif
                    <button type="submit" id="singlebutton" name="singlebutton" class="btn btn-primary">Redefinir Senha
                    </button>
                </div>
            </div>
        </fieldset>
    </form>
</div>




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
