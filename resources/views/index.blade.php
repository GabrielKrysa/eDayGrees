@extends('layouts.app')

@section('body')

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

@endsection()

