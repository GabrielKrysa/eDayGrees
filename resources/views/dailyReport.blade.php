@extends('layouts.app')

@section('body')
    <div class="banner about-banner">
        <div class="container">
            <h2>Relatório</h2>
            <div class="agileits-line"></div>
        </div>
    </div>


    <div class="gallery">
        <div class="container">
            <div class="gallery-grids">
                <div class="col-md-4 gallery-grid">
                    <div class="grid">
                        <figure class="effect-roxy">
                            <a class="example-image-link" href="{{asset('/images/g1.jpg')}}" data-lightbox="example-set"
                               data-title="In lacinia pharetra ipsum vel dapibus. Ut vitae tristique nisi, mattis pellentesque elit. Proin mollis sed nisi ac sodales.">
                                <img src="{{asset('/images/g1.jpg')}}" alt=""/>
                                <figcaption>
                                    <h3>Visualizar Relatório geral</h3>
                                    <p>Visualize aqui o relatório de todas as suas propriedades</p>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                </div>

                <div class="col-md-4 gallery-grid">
                    <div class="grid">
                        <figure class="effect-roxy">
                            <a class="example-image-link" href="{{asset('/images/g7.jpg')}}" data-lightbox="example-set"
                               data-title="In lacinia pharetra ipsum vel dapibus. Ut vitae tristique nisi, mattis pellentesque elit. Proin mollis sed nisi ac sodales.">
                                <img src="{{asset('/images/g7.jpg')}}" alt=""/>
                                <figcaption>
                                    <h3>Cadastrar Propriedade</h3>
                                    <p>Cadastre uma nova propriedade para iniciar o monitoramento</p>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                </div>
                <div class="col-md-4 gallery-grid">
                    <div class="grid">
                        <figure class="effect-roxy">
                            <a class="example-image-link" href="{{asset('/images/g2.jpg')}}" data-lightbox="example-set"
                               data-title="In lacinia pharetra ipsum vel dapibus. Ut vitae tristique nisi, mattis pellentesque elit. Proin mollis sed nisi ac sodales.">
                                <img src="{{asset('/images/g2.jpg')}}" alt=""/>
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
                            <a class="example-image-link" href="{{asset('/images/g3.jpg')}}" data-lightbox="example-set"
                               data-title="In lacinia pharetra ipsum vel dapibus. Ut vitae tristique nisi, mattis pellentesque elit. Proin mollis sed nisi ac sodales.">
                                <img src="{{asset('/images/g3.jpg')}}" alt=""/>
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
                            <a class="example-image-link" href="{{asset('/images/g4.jpg')}}" data-lightbox="example-set"
                               data-title="In lacinia pharetra ipsum vel dapibus. Ut vitae tristique nisi, mattis pellentesque elit. Proin mollis sed nisi ac sodales.">
                                <img src="{{asset('/images/g4.jpg')}}" alt=""/>
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
                            <a class="example-image-link" href="{{asset('/images/g5.jpg')}}" data-lightbox="example-set"
                               data-title="In lacinia pharetra ipsum vel dapibus. Ut vitae tristique nisi, mattis pellentesque elit. Proin mollis sed nisi ac sodales.">
                                <img src="{{asset('/images/g5.jpg')}}" alt=""/>
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
                            <a class="example-image-link" href="{{asset('/images/g6.jpg')}}" data-lightbox="example-set"
                               data-title="In lacinia pharetra ipsum vel dapibus. Ut vitae tristique nisi, mattis pellentesque elit. Proin mollis sed nisi ac sodales.">
                                <img src="{{asset('/images/g6.jpg')}}" alt=""/>
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
                            <a class="example-image-link" href="{{asset('/images/g1.jpg')}}" data-lightbox="example-set"
                               data-title="In lacinia pharetra ipsum vel dapibus. Ut vitae tristique nisi, mattis pellentesque elit. Proin mollis sed nisi ac sodales.">
                                <img src="{{asset('/images/g1.jpg')}}" alt=""/>
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
                            <a class="example-image-link" href="{{asset('/images/g2.jpg')}}" data-lightbox="example-set"
                               data-title="In lacinia pharetra ipsum vel dapibus. Ut vitae tristique nisi, mattis pellentesque elit. Proin mollis sed nisi ac sodales.">
                                <img src="{{asset('/images/g2.jpg')}}" alt=""/>
                                <figcaption>
                                    <h3>Proin <span>mattis</span></h3>
                                    <p>Aenean fermentum nisl ac imperdiet commodo</p>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <script src="{{asset('/js/lightbox-plus-jquery.min.js')}}"></script>
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
@endsection
