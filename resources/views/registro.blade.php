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

        function mTel(tel) {
            tel = tel.replace(/\D/g, "")
            tel = tel.replace(/^(\d)/, "($1")
            tel = tel.replace(/(.{3})(\d)/, "$1)$2")
            if (tel.length == 9) {
                tel = tel.replace(/(.{1})$/, "-$1")
            } else if (tel.length == 10) {
                tel = tel.replace(/(.{2})$/, "-$1")
            } else if (tel.length == 11) {
                tel = tel.replace(/(.{3})$/, "-$1")
            } else if (tel.length == 12) {
                tel = tel.replace(/(.{4})$/, "-$1")
            } else if (tel.length > 12) {
                tel = tel.replace(/(.{4})$/, "-$1")
            }
            return tel;
        }

        function mCNPJ(cnpj) {
            cnpj = cnpj.replace(/\D/g, "")
            cnpj = cnpj.replace(/^(\d{2})(\d)/, "$1.$2")
            cnpj = cnpj.replace(/^(\d{2})\.(\d{3})(\d)/, "$1.$2.$3")
            cnpj = cnpj.replace(/\.(\d{3})(\d)/, ".$1/$2")
            cnpj = cnpj.replace(/(\d{4})(\d)/, "$1-$2")
            return cnpj
        }

        function mCPF(cpf) {
            cpf = cpf.replace(/\D/g, "")
            cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2")
            cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2")
            cpf = cpf.replace(/(\d{3})(\d{1,2})$/, "$1-$2")
            return cpf
        }

        function mCEP(cep) {
            cep = cep.replace(/\D/g, "")
            cep = cep.replace(/^(\d{2})(\d)/, "$1.$2")
            cep = cep.replace(/\.(\d{3})(\d)/, ".$1-$2")
            return cep
        }

        function mNum(num) {
            num = num.replace(/\D/g, "")
            return num
        }
    </script>
    <script language="javascript" src="js/jquery-1.11.1.min.js"></script>

    <script language="javascript">
        $(document).ready(function() {
            $("#selectestado").change(function() {
                $("#selectestado option:selected").each(function() {
                    estado_id = $(this).val();
                    $.post("./php/cidade.php", {
                        estado_id: estado_id
                    }, function(data) {
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
        addEventListener("load", function() {
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
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
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
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
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
                            <!--<li><a href="#" class="dropdown-toggle hvr-sweep-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Codes<span class="caret"></span></a>
                                      <ul class="dropdown-menu">
                                          <li><a class="hvr-sweep-to-bottom" href="icons.php">Icons</a></li>
                                          <li><a class="hvr-sweep-to-bottom" href="typography.php">Typography</a></li>
                                      </ul>
                                  </li>-->
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
    <!-- contact -->
    <div class="logincadastro">
        <form method="POST" action="{{ route('registro') }}" class="form-horizontal">
            @csrf
            <div class="container">
                <b>
                    <h3 align="center">Cadastro de Usuário</h3>
                </b>
                </br>
                <div class="agileits-line"></div>
            </div>

            <fieldset>
                <!-- Text input-->
                <label class="col-md-4 control-label" for="textinput">Nome</label>
                <div class="form-group">
                    <div class="col-md-5">
                        <input id="textinput" name="name" type="text" placeholder="Digite nome do usuário " class="form-control input-md w-25" required="">
                    </div>
                </div>
                <!-- Text input-->
                <label class="col-md-4 control-label" for="textinput">Último nome</label>
                <div class="form-group">
                    <div class="col-md-5">
                        <input id="textinput" name="lastname" type="text" placeholder="Digite sobrenome do usuário" class="form-control input-md" required="">

                    </div>
                </div>
                <!-- Text input-->
                <label class="col-md-4 control-label" for="textinput">CPF</label>
                <div class="form-group">
                    <div class="col-md-5">
                        <input id="textinput" name="cpf" onkeydown="javascript: fMasc( this, mCPF );" type="text" placeholder="Digite o CPF do usuário" class="form-control input-md" required="">
                        @if(isset($erroCpfexiste))
                        <p style="font-size:70%; color:#ac2925">{{$erroCpfexiste}}</p>
                        @endif
                        @if(isset($erroCpf))
                        <p style="font-size:70%; color:#ac2925">{{$erroCpf}}</p>
                        @endif
                    </div>
                </div>

                <!-- Text input-->
                <label class="col-md-4 control-label" for="textinput">Email</label>
                <div class="form-group">
                    <div class="col-md-5">
                        <input id="textinput" name="email" type="text" placeholder="Digite o email do usuário" class="form-control input-md" required="">
                        @if(isset($erroEmail))
                        <p style="font-size:70%; color:#ac2925">{{$erroEmail}}</p>
                        @endif
                    </div>
                </div>

                <!-- Text input-->
                <label class="col-md-4 control-label" for="textinput">Login</label>
                <div class="form-group">
                    <div class="col-md-5">
                        <input id="textinput" name="username" type="text" placeholder="Digite o login do usuário" class="form-control input-md" required="">
                        @if(isset($erroUsername))
                        <p style="font-size:70%; color:#ac2925">{{$erroUsername}}</p>
                        @endif
                    </div>
                </div>


                <label class="col-md-4 control-label" for="passwordinput">Senha</label>
                <div class="form-group">
                    <div class="col-md-4">
                        <input id="passwordinput" name="password" type="password" placeholder="Digite sua senha para cadastro" class="form-control input-md" required="">
                        @if(isset($erroSenhaDif))
                        <p style="font-size:70%; color:#ac2925">{{$erroSenhaDif}}</p>
                        @endif

                        @if(isset($erroSenhaCurta))
                        <p style="font-size:70%; color:#ac2925">{{$erroSenhaCurta}}</p>
                        @endif
                    </div>
                </div>
                <label class="col-md-4 control-label" for="passwordinput">Confirmar senha</label>
                <div class="form-group">
                    <div class="col-md-4">
                        <input id="passwordinput2" name="repeatpassaword" type="password" placeholder="Digite novamente sua senha" class="form-control input-md" required="">
                        @if(isset($erroSenhaDif))
                        <p style="font-size:70%; color:#ac2925">{{$erroSenhaDif}}</p>
                        @endif

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
                                <option value="<?php echo $perguntas[$i]->id; ?>"><?php echo $perguntas[$i]->perguntas ?></option>
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
                        <input id="respostainput" name="resposta" type="text" placeholder="Digite sua resposta" class="form-control input-md" required="">

                    </div>
                </div>
                <br>
                <br>

                <div class="container">
                    <b align="center">
                        <h3>Cadastro de Propriedade</h3>
                    </b>
                    </br>
                    <div class="agileits-line"></div>
                </div>



                <label class="col-md-4 control-label" for="textinput">Nome da propriedade</label>
                <div class="form-group">
                    <div class="col-md-5">
                        <input id="textinput" name="nomePropriedade" type="text" placeholder="Digite o nome da propriedade " class="form-control input-md w-25" required="">
                    </div>
                </div>
                <!-- Select input-->
                <label class="col-md-4 control-label" for="selectbasic">Videira</label>
                <div class="form-group">
                    <div class="col-md-4">
                        <select id="selectcultivar" name="tipoCultivar" class="form-control">
                            <option value="0">Seleciona cultivar</option>
                            <?php

                            $banco = new selects();

                            $cultivar = $banco->selectVideiras();
                            for ($i = 0; $i < count($cultivar); $i++) { ?>
                                <option value="<?php echo $cultivar[$i]->id; ?>"><?php echo $cultivar[$i]->cultivar ?></option>
                            <?php }
                        ?>
                        </select>
                        @if(isset($erroCultivar))
                        <p style="font-size:70%; color:#ac2925">{{$erroCultivar}}</p>
                        @endif
                    </div>
                </div>
                <label class="col-md-4 control-label" for="selectbasic">Estado</label>
                <div class="form-group">
                    <div class="col-md-4">
                        <select id="selectestado" name="selectestado" class="form-control">
                            <option value="0">Seleciona Estado</option>
                            <?php

                            $banco = new selects();

                            $states = $banco->selectState();
                            for ($i = 0; $i < count($states); $i++) { ?>
                                <option value="<?php echo $states[$i]->id; ?>"><?php echo $states[$i]->nome ?></option>
                            <?php }
                        ?>

                        </select>
                        @if(isset($erroEstado))
                        <p style="font-size:70%; color:#ac2925">{{$erroEstado}}</p>
                        @endif
                    </div>
                </div>
                <!-- Select Basic -->
                <label class="col-md-4 control-label" for="selectbasic">Cidade</label>
                <div class="form-group">
                    <div class="col-md-4">
                        <select id="selectcidade" name="selectcidade" class="form-control">
                        </select>
                        @if(isset($erroCidade))
                        <p style="font-size:70%; color:#ac2925">{{$erroCidade}}</p>
                        @endif
                    </div>
                </div>
                <!-- Button -->
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
                        <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:edaygrees@gmail.com">edaygrees@gmail.com</a></li>
                        <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>TELEFONE</li>
                    </ul>
                </div>
                <div class="col-md-4 agileinfo_footer_grid">
                    <h3>Navegação</h3>
                    <ul class="agileinfo_footer_grid_nav">
                        <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="{{route('principal.index')}}">Inicio</a>
                        </li>
                        <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="{{route('sobre')}}">Sobre</a>
                        </li>
                        <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="{{route('sobre')}}">Contato</a>
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
        $(document).ready(function() {
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