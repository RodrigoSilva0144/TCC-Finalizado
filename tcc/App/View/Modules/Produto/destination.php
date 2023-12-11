<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Àguia Turismo - Destinos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="images/logo.png" type="image/x-icon">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">


  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="styles/lista.css">

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" style="width: 120px;" href="/home"><img src="images/Logo.png" style="width: 120px;"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="home" class="nav-link">Inicio</a></li>
          <li class="nav-item active"><a href="destination" class="nav-link">Destinos</a></li>
          <li class="nav-item"><a href="login" class="nav-link">Login</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->

  <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
          <p class="breadcrumbs"><span class="mr-2"><a href="/home">Inicio <i class="fa fa-chevron-right"></i></a></span> <span>Destinos<i class="fa fa-chevron-right"></i></span></p>
          <h1 class="mb-0 bread">Nossos Destinos</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <div class="row">
        <?php foreach ($model->rows as $item) : ?>
          <div class="col-md-4 ftco-animate">
            <div class="project-wrap">
              <button id="img" type="button" data-toggle="modal" data-target="#modal_<?= $item->produto_id ?>" class="img" style="background-image: url(Viagensimg/<?= $item->produto_id ?>/<?= $item->nome_image ?>">
                <span class="price">R$: <?= $item->valor ?></span>
              </button>
              <div class="text p-4">
                <span class="days">Dias de viagem: <?= $item->quantdias ?></span>
                <h3><a href="#"><?= $item->cidade ?></a></h3>
                <p class="location"><span class="fa fa-map-marker"></span> Estado: <?= $item->estado ?></p>
                <ul>
                  <li><span class="flaticon-king-size"></span>Quartos: <?= $item->quartos ?></li>
                </ul>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_<?= $item->produto_id ?>">
                  Fotos
                </button>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </section>
  <!-- Modal -->
  <?php foreach ($model->rows as $item) : ?>
    <div class="modal fade" id="modal_<?= $item->produto_id ?>">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title"><?= $item->cidade ?></h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">
                ×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <div class="carouselmeu">
                <?php foreach ($arrayimg[$item->produto_id]['imagens'] as $img) : ?>
                  <div>
                    <img class="imagecaurosel" src="Viagensimg/<?= $item->produto_id ?>/<?= $img->nome_image ?>">
                  </div>
                <?php endforeach ?>
              </div>
              <div class="col-md-12" class="d-block w-30" id="divmodal">
                <h5><span class="days">Dias de viagem: <?= $item->quantdias ?></span></h5>
                <div class="text p-4" id="modalfooter">
                  <div class="col-md-6">
                    <p class="modalP"> Valor da Viagem: R$: <?= $item->valor ?></p>
                    <p class="location modalP"><span class="fa fa-map-marker"></span> Estado: <?= $item->estado ?></p>
                    <span class="flaticon-king-size">Quartos: <?= $item->quartos ?></span>
                  </div>
                  <div class="modal-footer" id="btnfechar">
                    <a class="wpp" aria-label="Chat on WhatsApp" href="https://wa.me/14981469361?text=Olá%20fique%20interessada(o)%20nesta%20viagem%20para%20<?= $item->cidade ?>,%20poderia%20me%20informar%20mais%20a%20respeito%20dela?" target="_blank"><img class="wpp" src="../../../images/WhatsAppButtonWhiteSmall.png"></a>
                    <button type="button" class="btn btn-secondary fechar" data-dismiss="modal">Fechar</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endforeach ?>

  <footer class="ftco-footer bg-bottom ftco-no-pt" style="background-image: url(images/bg_3.jpg);">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md pt-5">
          <div class="ftco-footer-widget pt-md-5 mb-4">
            <h2 class="ftco-heading-2">Sobre</h2>
            <p>De uma pequena cidade do interior paulista, para o mundo</p>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
              <li class="ftco-animate"><a href="https://api.whatsapp.com/send?phone=14981469361&text=reservar%20viagem" target="_blank"><span class="fa fa-whatsapp"></span></a></li>
              <li class="ftco-animate"><a href="https://www.facebook.com/aguiaviagensigaracudotiete/" target="_blank"><span class="fa fa-facebook"></span></a></li>
              <li class="ftco-animate"><a href="https://www.instagram.com/aguiaturismo.mila/" target="_blank"><span class="fa fa-instagram"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md pt-5 border-left">
          <div class="ftco-footer-widget pt-md-5 mb-4">
            <h2 class="ftco-heading-2">Experiências</h2>
            <ul class="list-unstyled">
              <li><a class="py-2 d-block">Aventuras</a></li>
              <li><a class="py-2 d-block">Hoteis e restaurantes</a></li>
              <li><a class="py-2 d-block">Praia</a></li>
              <li><a class="py-2 d-block">Natureza</a></li>
              <li><a class="py-2 d-block">Acampamentos</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md pt-5 border-left">
          <div class="ftco-footer-widget pt-md-5 mb-4">
            <h2 class="ftco-heading-2">Venha nos visitar</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><span class="icon fa fa-map-marker"></span><span class="text">R. Pereira de Rezende, 365, Igaraçu do Tietê - SP Brasil</span></li>
                <li><a><span class="icon fa fa-phone"></span><span class="text">14 3644-2866</span></a></li>
                <li><a><span class="icon fa fa-paper-plane"></span><span class="text">Aguiatour@gmail.com</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">

        </div>
      </div>
    </div>
  </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
    </svg></div>


  <script src="js/jquery.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <!-- <script src="js/google-map.js"></script> -->
  <script src="js/main.js"></script>

</body>

</html>