<!DOCTYPE html>
<html>

<body>﻿
  <!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
  <!--// bootstrap-css -->
  <!-- css -->
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
  <!--// css -->
  <!-- font-awesome icons -->
  <link href="css/font-awesome.css" rel="stylesheet">
  <!-- //font-awesome icons -->
  <!-- font -->
  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/SmoothScroll.min.js"></script>
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
            <h1><a href="index.php">eDayGrees</a></h1>
          </div>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
          <nav>
            <ul class="nav navbar-nav">
              <li><a href="index.php" class="hvr-sweep-to-bottom">Inicio</a></li>
              <li><a href="about.php" class="hvr-sweep-to-bottom">Sobre</a></li>
              <li><a href="mail.php" class="hvr-sweep-to-bottom">Contato</a></li>
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
      <h2>Cadastrar Propriedade</h2>
      <div class="agileits-line"> </div>
    </div>
  </div>
  <!-- //banner -->
  <!-- contact -->
  <div class="logincadastro">
    <form class="form-horizontal">
      @csrf
      <fieldset>
        <!-- Text input-->
        <label class="col-md-4 control-label" for="textinput">Nome da propriedade</label>
        <div class="form-group">
          <div class="col-md-5">
            <input id="textinput" name="textinput" type="text" placeholder="Digite o nome da propriedade " class="form-control input-md w-25" required="">
          </div>
        </div>
        <!-- Select input-->
        <label class="col-md-4 control-label" for="selectbasic">Videira</label>
        <div class="form-group">
          <div class="col-md-2">
            <select id="selectbasic" name="selectbasic" class="form-control">
              <option value="1">TIPO 1</option>
              <option value="2">TIPO 2</option>
              <option value="3">TIPO 3</option>
            </select>
          </div>
        </div>
        <!-- Select Basic -->
        <label class="col-md-4 control-label" for="selectbasic">Estado</label>
        <div class="form-group">
          <div class="col-md-2">
            <select id="selectbasic" name="selectbasic" class="form-control">
              <option value="1">AC</option>
              <option value="2">AL</option>
              <option value="3">AP</option>
              <option value="4">AN</option>
              <option value="5">BA</option>
              <option value="6">CE</option>
              <option value="7">DF</option>
              <option value="8">ES</option>
              <option value="9">GO</option>
              <option value="10">MA</option>
              <option value="11">MT</option>
              <option value="12">MS</option>
              <option value="13">MG</option>
              <option value="14">PA</option>
              <option value="15">PB</option>
              <option value="16">PR</option>
              <option value="17">PE</option>
              <option value="18">PI</option>
              <option value="19">RJ</option>
              <option value="20">RN</option>
              <option value="21">RO</option>
              <option value="22">RR</option>
              <option value="23">SC</option>
              <option value="24">SP</option>
              <option value="25">SE</option>
              <option value="26">TO</option>
            </select>
          </div>
        </div>
        <!-- Select Basic -->
        <label class="col-md-4 control-label" for="selectbasic">Cidade</label>
        <div class="form-group">
          <div class="col-md-4">
            <select id="selectbasic" name="selectbasic" class="form-control">
            </select>
          </div>
        </div>
        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="singlebutton"></label>
          <div class="col-md-4">
            <button id="singlebutton" name="singlebutton" class="btn btn-primary">Cadastrar</button>
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
            <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>END CEDETEG, <span>Guarapuava.</span>
            </li>
            <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:edaygrees@gmail.com">edaygrees@gmail.com</a></li>
            <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>TELEFONE</li>
          </ul>
        </div>
        <div class="col-md-4 agileinfo_footer_grid">
          <h3>Navegação</h3>
          <ul class="agileinfo_footer_grid_nav">
            <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="index.php">Inicio</a></li>
            <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="about.php">Sobre</a>
            </li>
            <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="mail.php">Contato</a></li>
          </ul>
        </div>
        <div class="clearfix"> </div>
      </div>
      <!--<div class="w3agile_footer_copy">
                <p>© eDayGrees | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
            </div>-->
    </div>
  </div>
  <!-- //footer -->
  <script type="text/javascript" src="js/move-top.js"></script>
  <script type="text/javascript" src="js/easing.js"></script>
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