<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arkangeles | Inicio</title>

    <link rel="stylesheet" href="../public/fontawesome/css/fontawesome.css" />
    <link rel="stylesheet" href="../public/fontawesome/css/brands.css" />
    <link rel="stylesheet" href="../public/fontawesome/css/solid.css" />

    <link rel="stylesheet" href="../public/css/vendor.min.css">
    <link rel="stylesheet" href="../public/css/theme.min.css">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
     />
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</head>
<body>
  <style>
    .loader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #071B4D;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
  }
  .mouse {
    
  }
  .mouse:hover {
    color: #01CCFC !important;
  }
  .coloroscuro {
    background-color: #061447 !important;
  }
  .colorclaro {
    background-color: #061447 !important;
  }
  .zoom {
    transition: transform 0.9s ease; /* Transición suave */
  }
        
  .zoom:hover {
    transform: scale(1.1); /* Ajusta el valor para el nivel de zoom deseado */
    opacity: 70% ;
  }

  
  </style>

  <?php require_once('componentes/navbar.php'); ?>
  <main id="content" role="main" class="overflow-hidden">
    <div class="js-swiper-blog-metro-hero swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide d-lg-flex min-vh-lg-300  bg-img-start content-space-5" style="background-image: url(../public/img/portadanueva.jpg);">
          <div class="container">
            <div class="col-md-6">
              <a class="text-cap text-white-70" href="#">Pagina de Eventos</a>
              <div class="4 mb-md-4">
                <h2 class="text-white" id="textEfect"></h2>
              </div>
              <a
                class="btn btn-outline-info btn-transition text-white"
                target="blank"
                href="https://wa.me/+573145707617">
                MAS INFORMACION
                <i class="bi-chevron-right small ms-1"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- <div class="swiper-slide d-lg-flex min-vh-lg-300 gradient-x-overlay-lg-dark bg-img-start content-space-5" style="background-image: url(https://htmlstream.com/preview/front-v4.2/html/assets/img/1920x1080/img22.jpg);">
          <div class="container">
            <div class="col-md-6">
              <a class="text-cap text-white-70" href="#">Adventure</a>
              <div class="4 mb-md-4">
                <h2 class="text-white" id="textEfect">CAPITAL CHEERS CAMPEONATO NACIONAL</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem odit earum soluta officia, architecto sed, magni est fugit facilis.</p>
              </div>
              <a class="btn btn-outline-danger btn-transition" href="#">MAS INFORMACION<i class="bi-chevron-right small ms-1"></i></a>
            </div>
          </div>
        </div> -->
        <!-- <div class="swiper-slide d-lg-flex min-vh-lg-300 gradient-x-overlay-lg-dark bg-img-start content-space-5" style="background-image: url(https://htmlstream.com/preview/front-v4.2/html/assets/img/1920x1080/img2.jpg);">
          <div class="container">
            <div class="col-md-6">
              <a class="text-cap text-white-70" href="#">Adventure</a>
              <div class="4 mb-md-4">
                <h2 class="text-white" id="textEfect">CAPITAL CHEERS CAMPEONATO NACIONAL</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem odit earum soluta officia, architecto sed, magni est fugit facilis.</p>
              </div>
              <a class="btn btn-outline-danger btn-transition" href="#">MAS INFORMACION<i class="bi-chevron-right small ms-1"></i></a>
          </div>
          </div>
        </div> -->
        <!-- <div class="swiper-slide d-lg-flex min-vh-lg-300 gradient-x-overlay-lg-dark bg-img-start content-space-5" style="background-image: url(https://htmlstream.com/preview/front-v4.2/html/assets/img/1920x1080/img7.jpg);">
          <div class="container">
            <div class="col-md-6">
              <a class="text-cap text-white-70" href="#">Adventure</a>
              <div class="4 mb-md-4">
                <h2 class="text-white" id="textEfect">CAPITAL CHEERS CAMPEONATO NACIONAL</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem odit earum soluta officia, architecto sed, magni est fugit facilis.</p>
              </div>
              <a class="btn btn-outline-danger btn-transition" href="#">MAS INFORMACION<i class="bi-chevron-right small ms-1"></i></a>
            </div>
          </div> -->
        </div>
      </div>
  </main>
  <!--  -->
  <div class="container-fluid coloroscuro">
    <div class="row">
      <div class="col-md-6 content-space-1 coloroscuro">
      <h3 class="text-primary mx-5">Proximo evento</h3>
      <h4 class="mb-0 text-white mx-5">TORNEO CENTRO COLOMBIANO</h4>
      </div>
      <div class="col-md-4 offset-md-1 content-space-1 coloroscuro">
        <h3 class="text-white mx-5">07:00, 27 de Julio 2025</h3>
         <div class="js-countdown row mb-2">
          <div class="col-3">
            <h2 class="js-cd-days h1 text-primary mb-0 text-white mx-5">10</h2>
            <h5 class="mb-0 text-white mx-5">Dias</h5>
          </div>
          <div class="col-3">
            <h2 class="js-cd-hours h1 text-primary mb-0 text-white mx-5">20</h2>
            <h5 class="mb-0 text-white mx-5">horas</h5>
          </div>
          <div class="col-3">
            <h2 class="js-cd-minutes h1 text-primary mb-0 text-white mx-5">05</h2>
            <h5 class="mb-0 text-white mx-5">Min</h5>
          </div>
          <div class="col-3">
            <h2 class="js-cd-seconds h1 text-primary mb-0 text-white mx-5">56</h2>
            <h5 class="mb-0 text-white mx-5">seg</h5>
          </div>
        </div>
      </div>
    </div>
  </div>    
 <!--  -->
  <div class="container-fluid content-space-2">
    <div class="row">
        <div class="col-md-5 offset-md-1">
          <img src="../public/img/imagen1.png" class="img-fluid zoom">
        </div>
        <div class="col-md-6 mt-5">
          <a class="text-cap text-danger">Evento</a>
            <div class="4 mb-md-4">
              <h3 class="text-dark">TORNEO CENTRO COLOMBIANO</h3>
              <p>
                2024   / Cheer - Poms - Hip Hop /  Arkangeles Eventos Colombia.
              </p>
            </div>
              <a class="btn btn-outline-danger btn-transition btn-sm" href="#">VER MAS<i class="bi-chevron-right small ms-1"></i></a>
        </div>
    </div>
  </div>
  <!--  -->
  <div class="container">
  <div class="row justify-content-lg-between align-items-md-center">
    <div class="col-md-5 col-lg-5 ">
    <a class="text-cap text-danger">Evento</a>
      <h2 class="mb-4">TORNEO CENTRO COLOMBIANO</h2>
      <p>2024 / Cheer - Poms - Hip Hop / Arkangeles Eventos Colombia.</p>
      <p></p>
      <a class="btn btn-outline-danger btn-transition btn-sm" href="#">VER MAS<i class="bi-chevron-right small ms-1"></i></a>
    </div>
    <div class="col-md-7 mt-3">
      <img src="../public/img/imagen2.png" class="img-fluid zoom">
    </div>
  </div>
</div>
<!--  -->
<!--  -->
<div class="container  content-space-2">
  <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-1 mb-md-4">
    <h2>Proximos eventos</h2>
  </div>
  <div class="row mb-2">
    <div class="col-sm-6 col-md-3 mb-5 mb-lg-0">
      <img class="card-img rounded-2 zoom" src="../public/img/1.png" alt="Image Description">
      <div class="card card-sm text-center mt-n7 mx-3">
        <div class="card-body">
          <h4 class="card-title">Christina Kray</h4>
          <p class="card-text">Project Manager</p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-3 mb-5 mb-lg-0">
      <img class="card-img rounded-2 zoom" src="../public/img/2.png" alt="Image Description">
      <div class="card card-sm text-center mt-n7 mx-3">
        <div class="card-body">
          <h4 class="card-title">Jeff Fisher</h4>
          <p class="card-text">CEO, Director</p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-3 mb-5 mb-sm-0">
      <img class="card-img rounded-2 zoom" src="../public/img/3.png" alt="Image Description">
      <div class="card card-sm text-center mt-n7 mx-3">
        <div class="card-body">
          <h4 class="card-title">Lida Reidy</h4>
          <p class="card-text">Marketer</p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <img class="card-img rounded-2 zoom" src="../public/img/4.png" alt="Image Description">
      <div class="card card-sm text-center mt-n7 mx-3">
        <div class="card-body">
          <h4 class="card-title">Amy Forren</h4>
          <p class="card-text">Lead Designer</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--  -->
<!--  -->

<div class="container">
  <div class="row">
    <div class="col-md-5 mt-2 offset-md-1">
      <img src="../public/img/entrena1.jpg" class="img-fluid zoom">
    </div>
    <div class="col-md-5 mt-2">
      <img src="../public/img/entrena2.jpg" class="img-fluid zoom">
    </div>
  </div>
  <div class="row mt-4">
    <div class="col-md-5 mt-2 offset-md-1">
      <img src="../public/img/entrena4.jpg" class="img-fluid zoom">
    </div>
    <div class="col-md-5 mt-2">
      <img src="../public/img/entrena3.jpg" class="img-fluid zoom">
    </div>
  </div>
</div>
<!--  -->
<div class="container  content-space-3">
  <div class="row">
    <div class="col-md-5 mt-6">
    <iframe width="450" height="315" src="https://www.youtube.com/embed/hUKdA7I7Vq8?si=8Ur8P0RkIB3CU7u-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
    <div class="col-md-7">
      <a class="text-cap text-danger">Pasion por el deporte</a>
      <h2 class="mb-4 text-uppercase">Sé parte del mundo  Cheer </h2>
      <p>
        Somos Torneo centro colombiano , una empresa colombiana  fundada con el principal objetivo
        de impulsar productos únicos y de la mayor calidad con la que puedas practicar este hermoso
        deporte que tanto nos apasiona.
      </p>
      <button class="btn btn-outline-danger">Leer mas</button>

      <!-- Clients -->
<div class="container content-space-2">
  <div class="row">
    <div class="col text-center py-3">
      <img class="avatar avatar-lg avatar-4x3" src="https://htmlstream.com/preview/front-v4.2/html/assets/svg/brands/hollister-dark.svg" alt="Logo">
    </div>
    <div class="col text-center py-3">
      <img class="avatar avatar-lg avatar-4x3" src="https://htmlstream.com/preview/front-v4.2/html/assets/svg/brands/new-balance-dark.svg" alt="Logo">
    </div>
    <div class="col text-center py-3">
      <img class="avatar avatar-lg avatar-4x3" src="https://htmlstream.com/preview/front-v4.2/html/assets/svg/brands/puma-dark.svg" alt="Logo">
    </div>
    <div class="col text-center py-3">
      <img class="avatar avatar-lg avatar-4x3" src="https://htmlstream.com/preview/front-v4.2/html/assets/svg/brands/nike-dark.svg" alt="Logo">
    </div>
    <div class="col text-center py-3">
      <img class="avatar avatar-lg avatar-4x3" src="https://htmlstream.com/preview/front-v4.2/html/assets/svg/brands/tnf-dark.svg" alt="Logo">
    </div>
  </div>
</div>
    </div>
  </div>
</div>
<div class="container">
  <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
    <h3>PROXIMOS EVENTOS</h2>
  </div>
  <div class="row mb-7">
    <div class="col-sm-6 col-md-4 mb-5 mb-lg-0">
      <img class="card-img rounded-2 zoom" src="../public/img/proximo1.jpg" alt="Image Description">
      <div class="card card-sm text-center mt-n7 mx-3">
        <div class="card-body">
          <h4 class="card-title">Proximo evento</h4>
          <p class="card-text">05 Octubre 2024</p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-4 mb-5 mb-lg-0">
      <img class="card-img rounded-2 zoom" src="../public/img/proximo2.jpg" alt="Image Description">
      <div class="card card-sm text-center mt-n7 mx-3">
        <div class="card-body">
        <h4 class="card-title">Proximo evento</h4>
        <p class="card-text">12 Diciembre 2024</p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-4 mb-5 mb-sm-0">
      <img class="card-img rounded-2 zoom" src="../public/img/proximo3.jpg" alt="Image Description">
      <div class="card card-sm text-center mt-n7 mx-3">
        <div class="card-body">
          <h4 class="card-title">Proximo evento</h4>
          <p class="card-text">27 de Julio 2025</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container content-space-2 content-space-lg-3">
  <div class="row justify-content-lg-between align-items-lg-center">
    <div class="col-lg-5 mb-9 mb-lg-0">
      <div class="mb-3">
        <h2 class="h1">Nuestros mejores momentos cheers</h2>
      </div>
      <p>
        Sé parte del mundo Cheer  Somos  Arkangeles eventos, una empresa colombiana fundada
        con el principal objetivo de brindar productos únicos y de la mayor calidad con la que puedas
        practicar este hermoso deporte que tanto nos apasiona.
      </p>
      <div class="mt-4">
        <a class="btn btn-primary btn-transition px-5" href="#">Ver mas</a>
      </div>
    </div>
    <div class="col-lg-6 col-xl-5">
      <img src="../public/img/jurado.png" class="img-fluid">
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-12">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63656.44717946119!2d-74.83428127438985!3d4.311393430366987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f28ec54308e5f%3A0xad9e09275aa20260!2sGirardot%2C%20Cundinamarca!5e0!3m2!1ses-419!2sco!4v1726760814751!5m2!1ses-419!2sco" width="1130" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    </div>
  </div>
</div>
<?php require('componentes/footer.php'); ?>

  <script>
   window.addEventListener('load', () => {
    const loader = document.getElementById('loader');
    const content = document.getElementById('content');

    setTimeout(() => {
        clearInterval(loader);
        loader.style.display = 'none'; // Ocultar el loader
        content.classList.remove('hidden'); // Mostrar el contenido
    }, 3000);
   });
  </script>
  <script>
  (function() {
    // INITIALIZATION OF SWIPER
    // =======================================================
    var swiper = new Swiper('.js-swiper-blog-metro-hero',{
      effect: 'fade',
      autoplay: true,
      loop: true,
      pagination: {
        el: '.js-swiper-blog-metro-hero-pagination',
        clickable: true,
      }
    });
  })()
</script>
  <script>
    var typed = new Typed('#textEfect', {
      strings: ['ARKANGELES EVENTOS '],
      typeSpeed: 70,
    });
  </script>
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/countdown@2.6.0/countdown.min.js"></script>
  <script src="../public/js/counter.js"></script>
</body>
</html>