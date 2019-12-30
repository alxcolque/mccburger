@extends('layouts.app')
@section('header')
<header class="masthead bg-dark text-white text-center">
  <div class="d-flex  flex-column">

    <!-- Masthead Avatar Image -->

    <div class="row">
        <div class="col-md-12">
            <div class="full">
                <div id="main_slider" class="carousel vert slide" data-ride="carousel" data-interval="5000">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="slider_cont">
                                        <h3 class="text-warning">Descubra Amburguesas de Calidad<br> lo mejor</h3>
                                        <p>Se trata de un lugar amplio.</p>
                                        <a class="main_bt_border" href="#portfolio">Ver recetas</a>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="slider_image full text_align_center">
                                        <img class="img-responsive" src="img/portfolio/i3.png" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="slider_cont">
                                        <h3 class="text-primary">Amburguesas de <br>Buen Precio</h3>
                                        <p>El cliente Disfruta de las de las mejores amburguesas personalizadas.</p>
                                        <a class="main_bt_border" href="#portfolio">Ver recetas</a>
                                    </div>
                                </div>
                                <div class="col-md-7 full text_align_center">
                                    <div class="slider_image">
                                        <img class="img-responsive" src="img/portfolio/i3.png" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                        <i class="fa fa-fa-angle-up"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

  </div>
</header>
@endsection
