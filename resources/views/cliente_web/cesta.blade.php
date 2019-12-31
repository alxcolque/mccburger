<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>MCCB</title>

  <!-- Custom fonts for this theme -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="css/freelancer.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Amburgesa</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ ('clienteweb') }}">Amburgesa</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ ('clienteweb') }}">Snack</a>
          </li>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a href="{{ ('cesta') }}" class="btn btn-outline-warning">Cesta
              <i class="fas fa-shopping-cart"></i>
              <span class="badge badge-danger">3</span>
            </a>
          </li>

          <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </div>
            </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="divider-custom bg-dark text-white text-center">

  </header>
  <!-- Portfolio Section -->
  <section class="page-section portfolio" id="cesta1">
    <div class="container text-center">
      <div class="row">
        <div class="col-xs-12">
          <h4 class="text-left font-default">3 Cosas en tu orden <button class="btn btn-outline-danger"><i class="fas fa-barcode"></i> Codigo de Pedido</button></h4>
          <div class="table-responsive offset-top-10">
            <table class="table table-shopping-cart">
              <tbody>
                <tr>

                  <td>
                    <div class="form-group stepper-type-2">
                      <span class="">1</span>
                    </div>
                  </td>

                  <td>
                    <div class="inset-left-20">
                      <div class="product-image"><img src="images/blog_img1.png" alt="" width="100" height="100"></div>
                    </div>
                  </td>
                  <td>
                    <div class="inset-left-30 text-left"><span class="product-brand text-italic">Burgers</span>
                      <div class="h5 text-sbold offset-top-0"><a class="link-default">Mini Burger</a></div>
                    </div>
                  </td>
                  <td>
                    <div class="col-lg-5 mb-5 mb-lg-0">
                      <div class="group-sm">
                        <div class="stepper-type-1">
                          <div class="stepper "><input class="form-control stepper-input" type="number" data-zeros="true" value="1" min="1" max="20" ><span class="stepper-arrow up"></span><span class="stepper-arrow down"></span></div>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="">
                      <button class="btn btn-outline-primary" data-toggle="modal" data-target="#personaliar_item"><i class="fas fa-edit"></i></button>
                      <button class="btn btn-outline-danger"><i class="fas fa-times fa-fw"></i></button>
                    </div>
                  </td>
                  <td>
                    <div class="inset-left-20"><span class="h5 text-sbold">$34</span></div>
                    <div class="inset-left-30 text-left">Cantidad: <span class="product-brand text-italic">2</span>
                    </div>
                  </td>
                </tr>
                <tr>

                  <td>
                    <div class="form-group stepper-type-2">
                      <span class="">2</span>
                    </div>
                  </td>

                  <td>
                    <div class="inset-left-20">
                      <div class="product-image"><img src="images/blog_img1.png" alt="" width="100" height="100"></div>
                    </div>
                  </td>
                  <td>
                    <div class="inset-left-30 text-left"><span class="product-brand text-italic">Burgers</span>
                      <div class="h5 text-sbold offset-top-0"><a class="link-default">Mini Burger</a></div>
                    </div>
                  </td>
                  <td>
                    <div class="col-lg-5 mb-5 mb-lg-0">
                      <div class="group-sm">
                        <div class="stepper-type-1">
                          <div class="stepper "><input class="form-control stepper-input" type="number" data-zeros="true" value="1" min="1" max="20" ><span class="stepper-arrow up"></span><span class="stepper-arrow down"></span></div>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="">
                      <button class="btn btn-outline-primary" data-toggle="modal" data-target="#personaliar_item"><i class="fas fa-edit"></i></button>
                      <button class="btn btn-outline-danger"><i class="fas fa-times fa-fw"></i></button>
                    </div>
                  </td>
                  <td>
                    <div class="inset-left-20"><span class="h5 text-sbold">$34</span></div>
                    <div class="inset-left-30 text-left">Cantidad: <span class="product-brand text-italic">2</span>
                    </div>
                  </td>
                </tr>
                <tr>

                  <td>
                    <div class="form-group stepper-type-2">
                      <span class="">3</span>
                    </div>
                  </td>

                  <td>
                    <div class="inset-left-20">
                      <div class="product-image"><img src="images/blog_img1.png" alt="" width="100" height="100"></div>
                    </div>
                  </td>
                  <td>
                    <div class="inset-left-30 text-left"><span class="product-brand text-italic">Burgers</span>
                      <div class="h5 text-sbold offset-top-0"><a class="link-default">Mini Burger</a></div>
                    </div>
                  </td>
                  <td>
                    <div class="col-lg-5 mb-5 mb-lg-0">
                      <div class="group-sm">
                        <div class="stepper-type-1">
                          <div class="stepper "><input class="form-control stepper-input" type="number" data-zeros="true" value="1" min="1" max="20" ><span class="stepper-arrow up"></span><span class="stepper-arrow down"></span></div>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="">
                      <button class="btn btn-outline-primary" data-toggle="modal" data-target="#personaliar_item"><i class="fas fa-edit"></i></button>
                      <button class="btn btn-outline-danger"><i class="fas fa-times fa-fw"></i></button>
                    </div>
                  </td>
                  <td>
                    <div class="inset-left-20"><span class="h5 text-sbold">$34</span></div>
                    <div class="inset-left-30 text-left">Cantidad: <span class="product-brand text-italic">2</span>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="offset-top-35 text-right">
            <div class="h4 font-default text-bold">
              <small class="inset-right-5 text-gray-light">Total:
              </small> $124
            </div>
              <a href="cesta.php" class="btn btn-success">Realizar Orden
                <i class="fas fa-shopping-cart"></i>
              </a>
          </div>
        </div>
      </div>
      <!-- /.row -->

    </div>
  </section>

  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <div class="row">

        <!-- Footer Location -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Ubicacion</h4>
          <p class="lead mb-0">Desarrolladores
            <br>Ciudad Oruro FNI</p>
        </div>

        <!-- Footer Social Icons -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Segir en redes sociales</h4>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-facebook-f"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-twitter"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-linkedin-in"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-dribbble"></i>
          </a>
        </div>

        <!-- Footer About Text -->
        <div class="col-lg-4">
          <h4 class="text-uppercase mb-4">Acerca de Colque</h4>
          <p class="lead mb-0">Puedes puedes encontrar haciendo clic
            <a href="#"> aqui</a>.</p>
        </div>

      </div>
    </div>
  </footer>

  <!-- Copyright Section -->
  <section class="copyright py-4 text-center text-white">
    <div class="container">
      <small>Copyright &copy; software de hambuerguesa</small>
    </div>
  </section>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>

  <!-- Portfolio Modals -->

  <!-- Portfolio Modal 1 -->
  <div class="portfolio-modal modal fade" id="burger" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title -->
                <h5 class="portfolio-modal-title text-secondary mb-0">¿Ordenar?</h5>
                <!-- Icon Divider -->
                <!-- Portfolio Modal - Image -->
                <img class="img-fluid rounded mb-5" src="img/portfolio/i3.png" alt="">
                <h4 class="font-weight-medium">Hamburguesa</h4>
								<h1 class="text-amount mb-4 mt-2 text-secondary">$10</h1>
                <button class="btn btn-danger" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Cancelar
                </button>
                <button class="btn btn-primary" data-dismiss="modal">
                  <i class="fas fa-plus"></i>
                  Pedir
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 2 -->
  <div class="portfolio-modal modal fade" id="personaliar_item" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="row">

          <div class="card-body " id="d1">
          	<div class="">
          		<div class="">
          				<div class="card">
          						<h5 class="card-header" id="detalles">Hamburguesa $12</h5>
          							<div class="row">
          								<div class="card-body">
          										<ul class="list-group">
          												<li class="list-group-item">
                                    <div class="row">

                                      <div class="product-image"><img src="images/blog_img1.png" alt="" width="100" height="100"></div>

                                      <table class="table table-shopping-cart">
                                        <tbody>
                                          <tr>
                                            <td>
                                              <div class="form-group stepper-type-2">
                                                <span class="">1</span>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="inset-left-30 text-left"><span class="product-brand text-italic">Cebolla</span>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="">
                                                <button class="btn btn-danger btn-sm" data-dismiss="modal">
                                                  <i class="fas fa-times fa-fw"></i>
                                                </button>
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="form-group stepper-type-2">
                                                <span class="">2</span>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="inset-left-30 text-left"><span class="product-brand text-italic">Huevo</span>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="">
                                                <button class="btn btn-danger btn-sm" data-dismiss="modal">
                                                  <i class="fas fa-times fa-fw"></i>
                                                </button>
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="form-group stepper-type-2">
                                                <span class="">3</span>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="inset-left-30 text-left"><span class="product-brand text-italic">Mayonesa</span>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="">
                                                <button class="btn btn-danger btn-sm" data-dismiss="modal">
                                                  <i class="fas fa-times fa-fw"></i>
                                                </button>
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="form-group stepper-type-2">
                                                <span class="">4</span>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="inset-left-30 text-left"><span class="product-brand text-italic">Tomate</span>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="">
                                                <button class="btn btn-danger btn-sm" data-dismiss="modal">
                                                  <i class="fas fa-times fa-fw"></i>
                                                </button>
                                              </div>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>

                                  </span></li>
          												<li class="list-group-item"><span class="m-l-10 text-secondary">Descripcion: </span><span id="arbitro"></li>
          										</ul>
          								</div>
          								<div class="card-body" id="sec_crea">
          										<ul class="list-group">
          												<li class="list-group-item"><span class="m-l-10 text-secondary">Ingredientes: <span class="m-l-10 text-primary" id="fecha"></span></li>
          												<li class="list-group-item"><span class="m-l-10 text-secondary">
                                    <table class="table table-shopping-cart">
                                      <tbody>
                                        <tr>
                                          <td>
                                            <div class="form-group stepper-type-2">
                                              <span class="">1</span>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="inset-left-30 text-left"><span class="product-brand text-italic">Cebolla</span>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="">
                                              <button class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#personaliar_item"><i class="fas fa-plus  "></i></button>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <div class="form-group stepper-type-2">
                                              <span class="">2</span>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="inset-left-30 text-left"><span class="product-brand text-italic">Huevo</span>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="">
                                              <button class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#personaliar_item"><i class="fas fa-plus"></i></button>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <div class="form-group stepper-type-2">
                                              <span class="">3</span>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="inset-left-30 text-left"><span class="product-brand text-italic">Mayonesa</span>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="">
                                              <button class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#personaliar_item"><i class="fas fa-plus"></i></button>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <div class="form-group stepper-type-2">
                                              <span class="">4</span>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="inset-left-30 text-left"><span class="product-brand text-italic">Tomate</span>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="">
                                              <button class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#personaliar_item"><i class="fas fa-plus"></i></button>
                                            </div>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </li>
          										</ul>
          								</div>

          							</div>
          				</div>
          		</div>
          	</div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 3 -->


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/freelancer.min.js"></script>


</body>

</html>
