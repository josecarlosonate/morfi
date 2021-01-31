@extends('layouts.app')

@section('header')
    <!-- Carousel -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        
        <!-- Carousel Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ul>
    
        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/1.jpg" alt="Los Angeles" width="1100" height="500">
                <div class="banner-info">
                    <h5> ¿Necesitas un tecnico?</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, velit recusandae eum necessitatibus blanditiis porro cum</p>
                    <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="services.html"> Encuentralo Aqui</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/dos.png" alt="Chicago" width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="/img/3.jpg" alt="New York" width="1100" height="500">
                <div class="banner-info">
                    <h5> Registrate para contactarte</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, velit recusandae eum necessitatibus blanditiis porro cum</p>
                    <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="{{ route('register') }}"> Registrar</a>
                </div>
            </div>
        </div>
        
        <!-- Carousel Controls -->
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
@endsection
    
@section('content')

<div class="features">
    <div class="container">    
        <div class="fea-gd-vv row">	
            <div class="col-lg-3 col-sm-6">	
                <div class="float-lt feature-gd">	
                    <div class="icon"> 
                        <span class="fa fa-microchip" aria-hidden="true"></span>
                    </div>
                    <div class="icon-info">
                        <h5>Alta calidad</h5>
                        <p class="mt-2">Lorem ipsum dolor sit amet, consectetur </p>
                    </div>
                </div>
            </div>	
            <div class="col-lg-3 col-sm-6 mt-sm-0 mt-4">	
                <div class="float-mid feature-gd">	
                    <div class="icon"> <span class="fa fa-flask" aria-hidden="true"></span></div>
                        <div class="icon-info">
                            <h5>Servicio oportuno</h5>
                            <p class="mt-2">Lorem ipsum dolor sit amet, consectetur </p>
                        </div>
                    </div>
            </div> 
            <div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">	
                <div class="float-rt feature-gd">
                    <div class="icon"> 
                        <span class="fa fa-fire" aria-hidden="true"></span>
                    </div>
                    <div class="icon-info">
                        <h5>Entrega a tiempo</h5>
                        <p class="mt-2">Lorem ipsum dolor sit amet, consectetur </p>
                    </div>
                </div>
            </div>	 
            <div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">	
                <div class="float-lt feature-gd">	
                    <div class="icon"> 
                        <span class="fa fa-cog" aria-hidden="true"></span>
                    </div>
                    <div class="icon-info">
                        <h5>Garantizado</h5>
                        <p class="mt-2">Lorem ipsum dolor sit amet, consectetur </p>
                    </div>
                </div>	
            </div>	
        </div>
    </div>
</div>

<div class="w3l-about1 py-5" id="about">
    <div class="container py-lg-3">    
        <div class="aboutgrids row">
            <div class="col-lg-6 aboutgrid2">
                <img src="/img/deku.png" alt="about image" class="img-fluid">
            </div>
            <div class="col-lg-6 aboutgrid1 mt-lg-0 mt-4 pl-lg-5">
                <h4>¿Cómo te podemos ayudar?</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, velit recusandae eum necessitatibus blanditiis porro cum, facere qui impedit dolor doloribus quis reiciendis ullam repellendus.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, velit recusandae eum </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, velit recusandae eum necessitatibus blanditiis porro cum, facere qui impedit dolor doloribus quis reiciendis ullam repellendus.</p>
                <a class="btn btn-secondary btn-theme2" href="about.html"> Sobre nosotros</a>
            </div>
        </div>
    </div>
</div>

<section class="w3l-services2" id="stats">
    <div class="features-with-17_sur py-5">
            <div class="container py-md-3">
            
                <div class="row pt-lg-5 mt-lg-3">
                    <div class="col-lg-4 features-with-17-left_sur">
                        <h4 class="lft-head">Colocamos los tecnicos a tu alcanze</h4>
                        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla mollis dapibus nunc, ut rhoncus turpis sodales quis.</p>
                    </div>
                <div class="col-lg-8 my-lg-0 my-5 align-self-center features-with-17-right_sur">
                    <div class="features-with-17-right-tp_sur text-center">
                        <div class="features-with-17-left1">
                            <span class="fa fa-user s4"></span>		
                        </div>
                        <div class="features-with-17-left2">
                            <h6>1100</h6>
                            <p>CLIENTE FELIZ</p>		
                        </div>
                    </div>
                    <div class="features-with-17-right-tp_sur text-center">
                        <div class="features-with-17-left1">
                                <span class="fa fa-handshake-o s5"></span>		
                        </div>
                        <div class="features-with-17-left2">
                                <h6>1208</h6>
                                <p>TECNICOS REGISTRADOS</p>			
                        </div>
                    </div>
                    <div class="features-with-17-right-tp_sur text-center">
                        <div class="features-with-17-left1">
                            <span class="fa fa-lock s3"></span>		
                        </div>
                        <div class="features-with-17-left2">
                                <h6>1250</h6>
                                <p>SERVICIOS</p>	
                        </div>
                    </div>
                    
                    
                    
                </div>
            </div>
        </div>
    </div>
</section>

<section class="w3l-features-8">
    <div class="features py-5" id="features">
        <div class="container py-md-3">
            <div class="heading text-center mx-auto">
                <h3 class="head">Servicios Ofrecidos</h3>
                <p class="my-3 head"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                    Nulla mollis dapibus nunc, ut rhoncus
                    turpis sodales quis. Integer sit amet mattis quam.
                </p>
            </div>
        </div>
    </div>
</section>

@endsection