<html lang="en">

<head>
    <title>Farming Company an Agriculture Category Flat Bootstrap responsive Website Template | Gallery :: w3layouts</title>
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
    <link rel="stylesheet" href="{{asset('/css/lightbox.css')}}">
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
                        <h1><a href="index.php">Farming <span>Company</span></a></h1>
                    </div>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                    <nav>
                        <ul class="nav navbar-nav">
                            <li><a href="index.php" class="hvr-sweep-to-bottom">Home</a></li>
                            <li><a href="about.php" class="hvr-sweep-to-bottom">About</a></li>
                            <li class="active"><a href="gallery.php" class="hvr-sweep-to-bottom">Gallery</a></li>
                            <li><a href="#" class="dropdown-toggle hvr-sweep-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Codes<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="hvr-sweep-to-bottom" href="icons.php">Icons</a></li>
                                    <li><a class="hvr-sweep-to-bottom" href="typography.php">Typography</a></li>
                                </ul>
                            </li>
                            <li><a href="mail.php" class="hvr-sweep-to-bottom">Mail Us</a></li>
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
            <h2>Our Gallery</h2>
            <div class="agileits-line"> </div>
        </div>
    </div>
    <!-- //banner -->
    <!-- gallery -->
    <div class="gallery">
        <div class="container">
            <div class="gallery-grids">
                <div class="col-md-4 gallery-grid">
                    <div class="grid">
                        <figure class="effect-roxy">
                            <a class="example-image-link" href="{{asset('/images/g1.jpg')}}" data-lightbox="example-set" data-title="In lacinia pharetra ipsum vel dapibus. Ut vitae tristique nisi, mattis pellentesque elit. Proin mollis sed nisi ac sodales.">
                                <img src="{{asset('/images/g1.jpg')}}" alt="" />
                                <figcaption>
                                    <h3>Maecenas <span>lacus</span></h3>
                                    <p> Aenean fermentum nisl ac imperdiet commodo</p>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                </div>
                <div class="col-md-4 gallery-grid">
                    <div class="grid">
                        <figure class="effect-roxy">
                            <a class="example-image-link" href="{{asset('/images/g2.jpg')}}" data-lightbox="example-set" data-title="In lacinia pharetra ipsum vel dapibus. Ut vitae tristique nisi, mattis pellentesque elit. Proin mollis sed nisi ac sodales.">
                                <img src="{{asset('/images/g2.jpg')}}" alt="" />
                                <figcaption>
                                    <h3>Aliquam <span>porta</span></h3>
                                    <p>Aenean fermentum nisl ac imperdiet commodo</p>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                </div>
                <div class="col-md-4 gallery-grid">
                    <div class="grid">
                        <figure class="effect-roxy">
                            <a class="example-image-link" href="{{asset('/images/g3.jpg')}}" data-lightbox="example-set" data-title="In lacinia pharetra ipsum vel dapibus. Ut vitae tristique nisi, mattis pellentesque elit. Proin mollis sed nisi ac sodales.">
                                <img src="{{asset('/images/g3.jpg')}}" alt="" />
                                <figcaption>
                                    <h3>Proin <span>mattis</span></h3>
                                    <p>Aenean fermentum nisl ac imperdiet commodo</p>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                </div>

                <div class="col-md-4 gallery-grid">
                    <div class="grid">
                        <figure class="effect-roxy">
                            <a class="example-image-link" href="{{asset('/images/g4.jpg')}}" data-lightbox="example-set" data-title="In lacinia pharetra ipsum vel dapibus. Ut vitae tristique nisi, mattis pellentesque elit. Proin mollis sed nisi ac sodales.">
                                <img src="{{asset('/images/g4.jpg')}}" alt="" />
                                <figcaption>
                                    <h3>Duis <span>rhoncus</span></h3>
                                    <p>Aenean fermentum nisl ac imperdiet commodo</p>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                </div>
                <div class="col-md-4 gallery-grid">
                    <div class="grid">
                        <figure class="effect-roxy">
                            <a class="example-image-link" href="{{asset('/images/g5.jpg')}}" data-lightbox="example-set" data-title="In lacinia pharetra ipsum vel dapibus. Ut vitae tristique nisi, mattis pellentesque elit. Proin mollis sed nisi ac sodales.">
                                <img src="{{asset('/images/g5.jpg')}}" alt="" />
                                <figcaption>
                                    <h3>Curabitur <span>quam</span></h3>
                                    <p>Aenean fermentum nisl ac imperdiet commodo</p>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                </div>
                <div class="col-md-4 gallery-grid">
                    <div class="grid">
                        <figure class="effect-roxy">
                            <a class="example-image-link" href="{{asset('/images/g6.jpg')}}" data-lightbox="example-set" data-title="In lacinia pharetra ipsum vel dapibus. Ut vitae tristique nisi, mattis pellentesque elit. Proin mollis sed nisi ac sodales.">
                                <img src="{{asset('/images/g6.jpg')}}" alt="" />
                                <figcaption>
                                    <h3>Maecenas <span>lacus</span></h3>
                                    <p>Aenean fermentum nisl ac imperdiet commodo</p>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                </div>

                <div class="col-md-4 gallery-grid">
                    <div class="grid">
                        <figure class="effect-roxy">
                            <a class="example-image-link" href="{{asset('/images/g7.jpg')}}" data-lightbox="example-set" data-title="In lacinia pharetra ipsum vel dapibus. Ut vitae tristique nisi, mattis pellentesque elit. Proin mollis sed nisi ac sodales.">
                                <img src="{{asset('/images/g7.jpg')}}" alt="" />
                                <figcaption>
                                    <h3>Maecenas <span>lacus</span></h3>
                                    <p> Aenean fermentum nisl ac imperdiet commodo</p>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                </div>
                <div class="col-md-4 gallery-grid">
                    <div class="grid">
                        <figure class="effect-roxy">
                            <a class="example-image-link" href="{{asset('/images/g1.jpg')}}" data-lightbox="example-set" data-title="In lacinia pharetra ipsum vel dapibus. Ut vitae tristique nisi, mattis pellentesque elit. Proin mollis sed nisi ac sodales.">
                                <img src="{{asset('/images/g1.jpg')}}" alt="" />
                                <figcaption>
                                    <h3>Aliquam <span>porta</span></h3>
                                    <p>Aenean fermentum nisl ac imperdiet commodo</p>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                </div>
                <div class="col-md-4 gallery-grid">
                    <div class="grid">
                        <figure class="effect-roxy">
                            <a class="example-image-link" href="{{asset('/images/g2.jpg')}}" data-lightbox="example-set" data-title="In lacinia pharetra ipsum vel dapibus. Ut vitae tristique nisi, mattis pellentesque elit. Proin mollis sed nisi ac sodales.">
                                <img src="{{asset('/images/g2.jpg')}}" alt="" />
                                <figcaption>
                                    <h3>Proin <span>mattis</span></h3>
                                    <p>Aenean fermentum nisl ac imperdiet commodo</p>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //gallery -->
    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="agileinfo_footer_grids">
                <div class="col-md-4 agileinfo_footer_grid">
                    <div class="agile-logo">
                        <h4><a href="index.php">Farming <span>Company</span></a></h4>
                    </div>
                    <p>Etiam condimentum mi nec tortor euismod, id lobortis odio dictum. Cras
                        suscipit elit eget mi volutpat facilisis.</p>
                    <div class="agileinfo-social-grids">
                        <h4 style="color: white"> Mídias Sociais </h4>
                        <ul>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 agileinfo_footer_grid">
                    <h3>Contact Info</h3>
                    <ul class="agileinfo_footer_grid_list">
                        <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>1234k Avenue, 4th block, <span>New York City.</span></li>
                        <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
                        <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
                    </ul>
                </div>
                <div class="col-md-4 agileinfo_footer_grid">
                    <h3>Navigation</h3>
                    <ul class="agileinfo_footer_grid_nav">
                        <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="index.php">Home</a></li>
                        <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="about.php">About Us</a></li>
                        <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="gallery.php">Gallery</a></li>
                        <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="typography.php">Typography</a></li>
                        <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="icons.php">Icons</a></li>
                        <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="mail.php">Mail Us</a></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="w3agile_footer_copy">
                <p>&copy; 2017 Farming Company. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
            </div>
        </div>
    </div>
    <!-- //footer -->
    <script src="{{asset('/js/lightbox-plus-jquery.min.js')}}"> </script>
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

