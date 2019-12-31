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
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Amburgesa</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#snack">Snack</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Acerca de</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contactar</a>
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
  @yield('content')
  <!-- Masthead -->
  <header class="divider-custom bg-dark text-white text-center">

  </header>

  <section class="page-section portfolio" id="portfolio">
    <div class="container">

      <!-- Portfolio Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Hamburgesas</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Portfolio Grid Items -->
          <div class="row aos-init" data-aos="fade-up" data-aos-offset="-300">
            <div class="col-sm-4">
              <div class="pricing-box">
                <img src="img/portfolio/i3.png" alt="starter">
                <h6 class="font-weight-medium title-text">Starter Business</h6>
                <h1 class="text-amount mb-4 mt-2">$23</h1>
                <ul class="pricing-list">
                  <li>Create a free website</li>
                  <li>Connect Domain</li>
                  <li>Business and ecommerce</li>
                  <li>Idea for smaller professional websites</li>
                  <li>Web space</li>
                </ul>
                <button class="btn btn-outline-primary" data-toggle="modal" data-target="#burger">Ordenar</button>

              </div>
            </div>

            <div class="col-sm-4">
              <div class="pricing-box selected">
                <img src="img/portfolio/i3.png" alt="starter">
                <h6 class="font-weight-medium title-text">Professional</h6>
                <h1 class="text-amount mb-4 mt-2">$45</h1>
                <ul class="pricing-list">
                  <li>Create a free website</li>
                  <li>Connect Domain</li>
                  <li>Business and ecommerce</li>
                  <li>Idea for smaller professional websites</li>
                  <li>Web space</li>
                </ul>
                <button class="btn btn-outline-primary" data-toggle="modal" data-target="#burger">Ordenar</button>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="pricing-box">
                <img src="img/portfolio/i3.png" alt="starter">
                <h6 class="font-weight-medium title-text">Premium</h6>
                <h1 class="text-amount mb-4 mt-2">$87</h1>
                <ul class="pricing-list">
                  <li>Create a free website</li>
                  <li>Connect Domain</li>
                  <li>Business and ecommerce</li>
                  <li>Idea for smaller professional websites</li>
                  <li>Web space</li>
                </ul>
                <button class="btn btn-outline-primary" data-toggle="modal" data-target="#burger">Ordenar</button>
              </div>
            </div>
          </div>



      <!-- /.row -->

    </div>
  </section>
  <!-- Portfolio Section -->
  <section class="page-section portfolio" id="snack">
    <div class="container">

      <!-- Portfolio Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Bebidas</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Portfolio Grid Items -->
          <div class="row aos-init" data-aos="fade-up" data-aos-offset="-300">
            <div class="col-sm-4">
              <div class="pricing-box">
                <img src="images/client.jpg" alt="starter">
                <h6 class="font-weight-medium title-text">Starter Business</h6>
                <h1 class="text-amount mb-4 mt-2">$23</h1>
                <ul class="pricing-list">
                  <li>Create a free website</li>
                  <li>Connect Domain</li>
                  <li>Business and ecommerce</li>
                  <li>Idea for smaller professional websites</li>
                  <li>Web space</li>
                </ul>
                <button class="btn btn-outline-primary" data-toggle="modal" data-target="#snack1">Ordenar</button>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="pricing-box selected">
                <img src="images/client.jpg" alt="starter">
                <h6 class="font-weight-medium title-text">Professional</h6>
                <h1 class="text-amount mb-4 mt-2">$45</h1>
                <ul class="pricing-list">
                  <li>Create a free website</li>
                  <li>Connect Domain</li>
                  <li>Business and ecommerce</li>
                  <li>Idea for smaller professional websites</li>
                  <li>Web space</li>
                </ul>
                <button class="btn btn-outline-primary" data-toggle="modal" data-target="#snack1">Ordenar</button>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="pricing-box">
                <img src="images/client.jpg" alt="starter">
                <h6 class="font-weight-medium title-text">Premium</h6>
                <h1 class="text-amount mb-4 mt-2">$87</h1>
                <ul class="pricing-list">
                  <li>Create a free website</li>
                  <li>Connect Domain</li>
                  <li>Business and ecommerce</li>
                  <li>Idea for smaller professional websites</li>
                  <li>Web space</li>
                </ul>
                <button class="btn btn-outline-primary" data-toggle="modal" data-target="#snack1">Ordenar</button>
              </div>
            </div>
          </div>

      <!-- /.row -->

    </div>
  </section>





  <!-- About Section -->
  <section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container">

      <!-- About Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-white">Acerca de nosotros</h2>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- About Section Content -->
      <div class="row">
        <div class="col-lg-4 ml-auto">
          <p class="lead">Lorem ipsun  Lorem ipsun  Lorem ipsun  Lorem ipsun  Lorem ipsun  Lorem ipsun  Lorem ipsun  Lorem ipsun  Lorem ipsun  Lorem ipsun  Lorem ipsun  .</p>
        </div>
        <div class="col-lg-4 mr-auto">
          <p class="lead">Lorem ipsun  Lorem ipsun  Lorem ipsun  Lorem ipsun  Lorem ipsun  Lorem ipsun  Lorem ipsun  Lorem ipsun  Lorem ipsun  Lorem ipsun  Lorem ipsun  .!</p>
        </div>
      </div>

      <!-- About Section Button -->
      <div class="text-center mt-4">
        <a class="btn btn-xl btn-outline-light" href="#contact">
          <i class="fas fa-download mr-2"></i>
          Contactar!
        </a>
      </div>

    </div>
  </section>

  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">

      <!-- Contact Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contáctame</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Contact Section Form -->
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <form name="sentMessage" id="contactForm" novalidate="novalidate">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Nombre</label>
                <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Direccion de correo electronico</label>
                <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Numero de Celular</label>
                <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Mensaje</label>
                <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Enviar</button>
            </div>
          </form>
        </div>
      </div>

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
  <div class="portfolio-modal modal fade" id="snack1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
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
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Tasty Cake</h2>
                <!-- Icon Divider -->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Image -->
                <img class="img-fluid rounded mb-5" src="img/portfolio/cake.png" alt="">
                <!-- Portfolio Modal - Text -->
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                <button class="btn btn-primary" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Close Window
                </button>
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
