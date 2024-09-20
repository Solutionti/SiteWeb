<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arkangeles | contacto</title>

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
<body class="bg-dark">
<?php require_once('componentes/navbar.php'); ?>

<div class="container content-space-t-3 content-space-t-lg-4 content-space-b-2">
  <div class="row">
    <div class="col-lg-6 mb-9 mb-lg-0">
      <div class="mb-5">
        <h1 class="text-white">Ponte en contacto</h1>
        <p class="text-white">Nos encantaría hablar sobre cómo podemos ayudarle.</p>
      </div>
      <div class="overflow-hidden">
        <div id="mapEg3" class="leaflet mb-5"></div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <h5 class="mb-1 text-white">Llámanos:</h5>
          <p class="text-white">+1 (062) 109-9222</p>
        </div>
        <div class="col-sm-6">
          <h5 class="mb-1 text-white">Envíenos un correo electrónico:</h5>
          <p class="text-white">hello@example.com</p>
        </div>
        <div class="col-sm-6">
          <h5 class="mb-1 text-white">Direcciòn:</h5>
          <p class="text-white">153 Williamson Plaza, Maggieberg</p>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="ps-lg-5">
        <div class="card">
          <div class="card-header border-bottom text-center">
            <h3 class="card-header-title">Consultas generales</h3>
          </div>
          <div class="card-body">
            <form>
              <div class="row gx-3">
                <div class="col-sm-6">
                  <div class="mb-3">
                    <label class="form-label" for="hireUsFormFirstNameEg3">Nombres</label>
                    <input
                      type="text"
                      class="form-control form-control-lg"
                    >
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="mb-3">
                    <label class="form-label" for="hireUsFormLasttNameEg3">Apellidos</label>
                    <input type="text" class="form-control form-control-lg">
                  </div>
                </div>
              </div>
              <div class="row gx-3">
                <div class="col-sm-6">
                  <div class="mb-3">
                    <label class="form-label" for="hireUsFormWorkEmailEg3">Correo electronico</label>
                    <input type="email" class="form-control form-control-lg">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="mb-3">
                    <label class="form-label" for="hireUsFormPhoneEg3">Telefono <span class="form-label-secondary">(Opcional)</span></label>
                    <input type="text" class="form-control form-control-lg" >
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="hireUsFormDetails">¿Como podemos ayudarle?</label>
                <textarea
                  class="form-control form-control-lg"
                  name="hireUsFormNameDetails"
                  id="hireUsFormDetails"
                  rows="4"
                ></textarea>
              </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-lg">Enviar consulta</button>
              </div>
              <div class="text-center">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>