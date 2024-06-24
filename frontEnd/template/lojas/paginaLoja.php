<?php

require_once ("../../../controllerLoja.php");

?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title> Scoop icy </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../../../css/bootstrap.css" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="../../../css/font-awesome.min.css" rel="stylesheet" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../../../css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../../../css/responsive.css" rel="stylesheet" />



  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <div class="hero_area">

    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
             <h1>Scoop Icy</h1>
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mx-auto ">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Inicio<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="menu.html">Lojas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">Sobre</a>
              </li>
            </ul>
            <div class="user_option">
              <a href="" class="user_link">
                <i class="fa fa-user" aria-hidden="true"></i>
              </a>
              <a class="cart_link" href="#">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                  <g>
                    <g>
                      <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                   c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                   C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                   c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                   C457.728,97.71,450.56,86.958,439.296,84.91z" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                   c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                    </g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                </svg>
              </a>
              <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->

    <!-- informações da empresa -->
    <div class="container">
      
      <div class="row">
        
        <div class="col-md-4">

          <div class="container">
            <div class="row">
        
              <div class="col-md-6">
                <div class="d-flex justify-content-left" class="rounded-circle" style="height: 100px; width: 100px;">
                  <img src="../images/fiquebem (1).png">
                </div>
              </div>
              <div class="col-md-6">
              <h3 style="color:white;">
                Nossa açaideira
              </h3>		
              </div>

            </div>
          </div>

        </div> 
        
        <div class="col-md-8">
          <div class="d-flex justify-content-end">
            <h4 style="color:white;">
              aberto hoje
            </h6>
          </div>

          <div class="container" style="padding-right: 0px;">

            <div class="row">
  
              <div class="col-md-12 d-flex justify-content-end">
                <h5 style="color: white;">
                  taxa de entrega: R$ 2
                </h5>
              </div>
  
            </div>
  
          </div>

        </div>

      </div> 

      <div class="row">

        <div class="col-md-6">
          <h5 style="color: white;">
            telefone para contato: 88 9999 9999
          </h5>
        </div>

        <div class="col-md-6 d-flex justify-content-end">
          <h5 style="color: white;">
            endereço: rua tal tal bairro tal tal cidade tal tal
          </h5>
        </div>

      </div>

      <div class="row"> 

        <div class="col-md-6">
          <h5 style="color: white;">
            email para contato: aaa@aaa.a
          </h5>
        </div>

      </div>

    </div>

    <!--cardápio da loja-->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">
        
        <div class="section-title">
          <div class="row" data-aos="fade-up" data-aos-delay="100">
          <h2></h2>
          <p></p>
         
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <p>Açaí</p>
            </ul>
          </div>
        </div>
      </div>
        
       

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              
             
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="2000">
          <div class="section-title">
          </div>
        

          <div class="col-lg-6 menu-item filter-starters">
            <img src="" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Açaí tradicional - 250g</a><span>$9,99</span>
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Açaí tradicional - 300g</a><span>$11,99</span>
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Açaí tradicional - 400g</a><span>$12,99</span>
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Açaí tradicional - 500g</a><span>$15.99</span>
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Açaí tradicional - 650g</a><span>$20,99</span>
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Açaí tradicional - 1kg</a><span>$35,99</span>
            </div>
          </div>

         

          

         

        </div>

      </div>
    </section>
    
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

       

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <div class="section-title">
              
                <p>Caldas</p>
              </div>
             
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-6 menu-item filter-starters">
            <img src="" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Calda de amendoim</a><span>$0,99</span>
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Calda de chocolate com avelã</a><span>$0,99</span>
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Calda de choco waffer branco</a><span>$0,99</span>
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Calda de choco waffer preto</a><span>$0,99</span>
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Calda de doce de leite liso</a><span>$1,99</span>
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Calda de morango em pedaços</a><span>$1,99</span>
            </div>

        </div>

      </div>
    </section><!-- End Menu Section -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

       

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <div class="section-title">
              
                <p>Cremes</p>
              </div>
             
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-6 menu-item filter-starters">
            <img src="" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Creme de ninho</a><span>$2,99</span>
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/bread-barrel.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Creme de ninho trufado</a><span>$2,99</span>
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/cake.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Creme de oreo</a><span>$2,99</span>
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/caesar.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Creme de ovomaltine</a><span>$2,99</span>
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/tuscan-grilled.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Creme de paçoca</a><span>$2,99</span>
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/mozzarella.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Creme de morango trufado</a><span>$2,99</span>
            </div>

        </div>

      </div>
    </section>


    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

       

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <div class="section-title">
              
                <p>Mixes</p>
              </div>
             
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/lobster-bisque.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Leite em pó</a><span>$0,99</span>
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/bread-barrel.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Micro chocobol</a><span>$0,99</span>
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/cake.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Jujuba</a><span>$0,99</span>
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/caesar.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Castanha triturada</a><span>$0,99</span>
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/tuscan-grilled.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Cookies</a><span>$0,99</span>
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/mozzarella.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Canudos waffer baunilha</a><span>$0,99</span>
            </div>

        </div>

      </div>
    </section>

    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

       

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <div class="section-title">
              
                <p>Frutas</p>
              </div>
             
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/lobster-bisque.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Banana</a><span>$1,50</span>
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/bread-barrel.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Morango</a><span>$1,50</span>
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/cake.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Abacaxi</a><span>$1,50</span>
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/caesar.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">kiwi</a><span>$1,50</span>
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/tuscan-grilled.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Uva</a><span>$1,50</span>
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/mozzarella.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Manga</a><span>$1,50</span>
            </div>

        </div>

      </div>
    </section>

    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

       

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <div class="section-title">
              
                <p>Corbeturas</p>
              </div>
             
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/lobster-bisque.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Corbetura de morango</a><span>$0,25</span>
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/bread-barrel.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Corbetura de chocolate </a><span>$0,25</span>
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/cake.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Corbetura de abacaxi</a><span>$0,25</span>
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/caesar.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Corbetura leite condensado</a><span>$0,50</span>
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/tuscan-grilled.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Cobertura de doce de leite</a><span>$0,50</span>
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/mozzarella.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Cobertura de frutas vermelhas</a><span>$0,50</span>
            </div>

        </div>

      </div>
    </section>

     <!-- fim informações da empresa -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4>
              Contatos
            </h4>
            <div class="contact_link_box">
              
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                 Telefone +55 94002-8922
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  scoopicy@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <a href="" class="footer-logo">
              Scoop Icy
            </a>
            <p>
              Você também pode entrar em contato com nós pelas nossas redes sociais 
            </p>
            <div class="footer_social">
              <a href="https://www.facebook.com/profile.php?id=61557925204934&locale=pt_BR">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="https://x.com/Scoop_icy">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="https://www.instagram.com/scoop.icy/">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <h4>
            Horário de funcionamento
          </h4>
          <p>
            Domingo a Domingo
          </p>
        </div>
      </div>
      <div class="footer-info">
        <p>
          <span id="displayYear"></span> 
          <a href="https://html.design/"></a><br><br>
           <span id="displayYear"></span>
          <a href="https://themewagon.com/" target="_blank"></a>
        </p>
      </div>
    </div>
  </footer>
  <!-- footer section -->

   <!-- O Modal -->
  <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Se cadastre ou logue para comprar no nosso site!!!</p>

      <a href="cadastrarCliente.php">Cadastrar</a>
      <a href="loginCliente.php">Logar</a>
  
  </div>

  </div>

  <!-- MODAL -->
  <script src="../../../js/modal.js"></script>
  <!-- jQery -->
  <script src="../../../js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>