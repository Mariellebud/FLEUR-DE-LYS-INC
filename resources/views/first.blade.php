<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FLEUR DE LYS INCORPORATION</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ url('home/assets/img/fdl1.png')}}" rel="icon">
  <link href="{{ url('home/assets/img/fdl1.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ url('home/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{ url('home/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ url('home/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ url('home/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ url('home/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ url('home/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ url('home/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{ url('home/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ url('home/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Multi - v4.7.0
  * Template URL: https://bootstrapmade.com/multi-responsive-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo"><img src="{{ url('home/assets/img/fdl.png')}}" alt="" class="img-fluid"></a>
      <h1 class="logo"><a href="index.html">FLEUR DE LYS INC</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
     

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Accueil</a></li>
          <li><a class="nav-link scrollto" href="#why-us">A propros de nous</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li class="dropdown"><a href="#"><span>Boutique</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{url('ecommerce')}}">FDL Market</a></li>
              <li><a href="#">FDL Fournisseur</a></li>

              
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="#about">Visiter</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(home/assets/img/slide/boutique.png)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">BIENVENU A <span>FLEUR DE LYS INCORPORATION</span></h2>
              <p class="animate__animated animate__fadeInUp">Nous sommes une équipe qui a un seul objectif satisfaire la clientèle, car votre avenir est entre vos mains.</p>
              <a href="#counts" class="btn-get-started animate__animated animate__fadeInUp scrollto">Lire plus</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(home/assets/img/slide/formation4.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">BIENVENU A <span>FLEUR DE LYS INCORPORATION</span></h2>
              <p class="animate__animated animate__fadeInUp">Nous sommes une équipe qui a un seul objectif satisfaire la clientèle, car votre avenir est entre vos mains.</p>
              <a href="#counts" class="btn-get-started animate__animated animate__fadeInUp scrollto">Lire plus</a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(home/assets/img/slide/graphic.png)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">BIENVENU A <span>FLEUR DE LYS INCORPORATION</span></h2>
              <p class="animate__animated animate__fadeInUp">Nous sommes une équipe qui a un seul objectif satisfaire la clientèle, car votre avenir est entre vos mains.</p>
              <a href="#counts" class="btn-get-started animate__animated animate__fadeInUp scrollto">Lire plus</a>
            </div>
          </div>
        </div>

        <!-- Slide 4 -->
        <div class="carousel-item" style="background-image: url(home/assets/img/slide/créationSiteweb.png)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">BIENVENU A <span>FLEUR DE LYS INCORPORATION</span></h2>
              <p class="animate__animated animate__fadeInUp">Nous sommes une équipe qui a un seul objectif satisfaire la clientèle, car votre avenir est entre vos mains.</p>
              <a href="#counts" class="btn-get-started animate__animated animate__fadeInUp scrollto">Lire plus</a>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
   
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Client satisfait :</strong> Nous nous assurant de la satisfaction de notre clientèle afin de le fidéliser, nous sommes à la merci de nos clients car nos clients sont roi.</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Project :</strong> Fleur de lys inc a en réserve plusieurs projets qu'il va mettre en place afin de dévélopper le pays et lutter contre le chômage </p>
              <!--<a href="#">Find out more &raquo;</a>-->
            </div>
          </div>

         <!-- <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hours Of Support</strong> aut commodi quaerat. Aliquam ratione</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>-->

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Travailleur </strong> Notre équipe s'investit corps et âme pour l'évolution de notre entreprise</p>
             <!--<a href="#">Find out more &raquo;</a>--> 
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("home/assets/img/Lassociation.png");' data-aos="zoom-out" data-aos-delay="100">
            <a href="#https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

            <div class="content">
              <h3>Fleur de lys incorporation est une entreprise<strong> de vente et marketing, e-commerce, formation, conception...</strong></h3>
              <p>
                Créée en 2021 son capital est estimé à 120.000.000.000 de FCFA, le siège général se trouve à Brazzaville 1370 rue loufou plateaux des 15 ans              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> FDL fournisseur <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      Fleur de lys inc offre à sa cliente la possibilité de créer des boutiques sur notre plateform.</p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> FDL design <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Fait des conceptions de carte de visite; curricumum vitae; flyers; affiche publicitaire... </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> FDL éducation <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Offre des formations linguistiques, informatique pour ceux qui veulent se former.</p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-4" class="collapsed"><span>04</span> FDL market <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Permet au client d'acheter different article et service sur notre plateform.</div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-5" class="collapsed"><span>05</span> FDL web/ desktop <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Permet au client de demander une conception de site web, application mobile ou de get_extension_funcs.</div>
                </li>

              </ul>
            </div>
            
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>voici nos services</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-cart"></i></div>
              <h4><a href="">Vente / Marketing</a></h4>
              <p>Publicité et vente des produits et services de ses clients</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-laptop"></i></div>
              <h4><a href="">Design graphique</a></h4>
              <p>Tout service de design confonfu</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-book"></i></div>
              <h4><a href="">Education</a></h4>
              <p>Des formation de different domaines</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-arch"></i></div>
              <h4><a href="">Création de boutique</a></h4>
              <p>Boutique en ligne visible à tous</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-basket"></i></div>
              <h4><a href="">Alimentation</a></h4>
              <p>Produits alimentaires , restauration</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4><a href="">Solution informatique</a></h4>
              <p>Conception de site web, application mobile ou de gestion</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    
    <!-- ======= Team Section ======= -->
     <!--<section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Notre équipe</h2>
          <p>Voici notre équipe</p>
        </div>

        <div class="row">

          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <img src="{{ url('home/assets/img/team/team-1.jpg')}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Prisman NGOULOU</h4>
                  <span>COE / Fondateur</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-whatsapp"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.1s">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <img src="{{ url('home/assets/img/team/team-2.jpg')}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Félicia BIYOUDI</h4>
                  <span> COE / Fondatrice</span>
                </div>
                <div class="social">
                  <a href="https://wa.me/message/U6DUTTBGDY2AK1t"><i class="bi bi-whatsapp"></i></a>
                  <a href="https://www.facebook.com/marielle9.biyoudi."><i class="bi bi-facebook"></i></a>
                  <a href="https://www.linkedin.com/in/diane-biyoudi-b640a721b/"><i class="bi bi-linkedin"></i></a>
                  <a href="https://t.me/feliciabud"><i class="bi bi-telegram"></i></a>

                </div>
              </div>
            </div>
          </div>

          
         <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.3s">
            <div class="member" data-aos="zoom-in" data-aos-delay="400">
              <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Amanda Jepson</h4>
                  <span>Accountant</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>-->

        </div>

      </div>
    </section><!-- End Team Section -->

   
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Nous contacter</p>
        </div>

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Localisation</h3>
                  <p>1370 rue loufou plateaux des 15 ans, Brazzaville</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email </h3>
                  <p>fleurdelys.inc@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3> Téléphone <h3>
                  <p>+242 953 90 23</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="{{url('send')}}" method="POST"  class="php-email-for" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Votre email" required>
                </div>
              </div>
              <div class="form-group mt-3">
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Chargement</div>
                <div class="error-message"></div>
                  @if(\Session :: has('insert'))

                <div class="sent-message">{!!\Session :: get('insert')!!}Votre message a bien été envoyé.  Merci!</div>
                    @endif

              </div>
              <div class="text-center"><button type="submit">Envoyer</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>Fleur de lys inc</h3>
              <p class="pb-3"><em>L'avenir est entre vos mains.</em></p>
              <p>
                1370 rue loufou plateaux des 15 ans <br>
                Brazzaville, REPUBLIQUE DU CONGO<br><br>>
                <strong>Téléphone:</strong> +242 06 953 90 23<br>
                <strong>Email:</strong> fleurdelysinc@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="https://wa.me/message/U6DUTTBGDY2AK1" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
                <a href="https://www.facebook.com/fdlGlobal" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="http://instagram.com/fleurdelys.inc?utm_source=qr" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://www.linkedin.com/in/fleur-de-lys-inc-10993624a/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Nos Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Design graphique</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Education</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Création de boutique</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Alimentation</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Liens utiles</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Accueil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">A propos de nous</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Nos Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">FDL fournisseur</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">FDL market</a></li>
            </ul>
          </div>

       <!--   <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>-->

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Fleur de lys inc</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/multi-responsive-bootstrap-template/ -->
        Designed by <a href="#https://bootstrapmade.com/">Fleur de lys inc</a>
      </div> 
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ url('home/assets/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{ url('home/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{ url('home/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ url('home/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ url('home/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ url('home/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ url('home/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ url('home/assets/js/main.js')}}"></script>

</body>

</html>