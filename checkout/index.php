<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href=".././assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href=".././assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Mi conductor elegido | by andiazher
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href=".././assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href=".././assets/css/now-ui-kit.css?v=1.2.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href=".././assets/demo/demo.css" rel="stylesheet" />
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130039672-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-130039672-1');
  </script>

</head>

<body class="index-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-info fixed-top navbar-transparent " color-on-scroll="400">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="" rel="tooltip" title="Profesionales en servicios especiales"
          data-placement="bottom">
          Mi Conductor Elegido
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar top-bar"></span>
          <span class="navbar-toggler-bar middle-bar"></span>
          <span class="navbar-toggler-bar bottom-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image=".././assets/img/blurred-image-1.jpg">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)" onclick="scrollToBuyer()">
              <i class="now-ui-icons shopping_cart-simple"></i>
              <p>Adquirir mi servicio</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/"
              target="_blank">
              <i class="fab fa-twitter"></i>
              <p class="d-lg-none d-xl-none">Twitter</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/"
              target="_blank">
              <i class="fab fa-facebook-square"></i>
              <p class="d-lg-none d-xl-none">Facebook</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/"
              target="_blank">
              <i class="fab fa-instagram"></i>
              <p class="d-lg-none d-xl-none">Instagram</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="wrapper">
    <div class="page-header clear-filter" data-background-color="black">
      <div class="container">
        <div class="content-center brand">
          <img class="n-logo" src=".././assets/img/car.png" alt="" onclick="scrollToBuyer()">
          <h1 class="h1-seo" onclick="scrollToBuyer()">Buscas un conductor?</h1>
          <h3 onclick="scrollToBuyer()">Nosotros te podemos ayudar con lo que estas buscando.</h3>
        </div>
        <div class="category category-absolute">
          <h6 class="text-right">
            A service 
            <a href="" class="">
              andiazher
            </a>
          </h6>
          <a class="btn btn-primary btn-round btn-link" onclick="scrollToBuyer()">
            <i class="now-ui-icons arrows-1_minimal-down"> </i>
          </a>
        </div>
        <div  class="float-right" style="position:fixed;right:0%;z-index:9999">
          <div>
            <a class="btn btn-success" href="https://api.whatsapp.com/send?phone=573228902117&text=Hola!%2C%20para%20solicitar%20un%20servicio%20de%20condutor%20elegido." target="_blank">
              <i class="fab fa-whatsapp"> </i>
              Contactenos
            </a>
          </div>
          <div class="d-block d-sm-none">
            <a class="btn btn-info" href="tel:3228902117" target="_blank">
              <i class="fas fa-phone"> </i>
              &nbsp;Llamanos&nbsp;&nbsp;&nbsp;
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="main">
      <div class="section section-download" id="#download-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-lg-3 d-none invisible" >
              <div class="card card-pricing">
                <div class="card-body">
                  <h6 class="category">Pago en Efectivo</h6>
                  <p class="card-description">
                    Para pagos en efectivo despues del servicio
                  </p>
                  <a href="#pablo" class="btn btn-primary btn-round disabled">Realizar pedido</a>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-3">
              <div class="card card-pricing" data-background-color="blue">
                <div class="card-body">
                  <h6 class="category">Servicio Basico</h6>
                  <h2 class="card-title text-right">$60.000</h2>
                  <p class="card-description">
                    Servicio dentro de la Ciudad de Bogotá
                  </p>
                  <footer class="blockquote-footer text-white">El servicio es solo para dentro de la ciudad de Bogotá</footer>

                  <form method="post" action="https://gateway.payulatam.com/ppp-web-gateway/pb.zul" accept-charset="UTF-8">
                    <input type="submit" alt="" class="btn btn-primary btn-round" onClick="this.form.urlOrigen.value = window.location.href;" value="Pagar Ahora"/>
                    <input name="buttonId" type="hidden" value="SRtlxZ667poyFfEtnuKdazqqzei4J9ad50zyRu/moY+59kO2zZ1wkQ=="/>
                    <input name="merchantId" type="hidden" value="701126"/>
                    <input name="accountId" type="hidden" value="704171"/>
                    <input name="description" type="hidden" value="CONDUCTOR ELEGIDO SOLO BOGOTA"/>
                    <input name="referenceCode" type="hidden" value="0100001"/>
                    <input name="amount" type="hidden" value="60000.00"/>
                    <input name="tax" type="hidden" value="0.00"/>
                    <input name="taxReturnBase" type="hidden" value="0.00"/>
                    <input name="currency" type="hidden" value="COP"/>
                    <input name="lng" type="hidden" value="es"/>
                    <input name="displayBuyerComments" type="hidden" value="true"/>
                    <input name="buyerCommentsLabel" type="hidden" value="es:INGRESAR FECHA Y HORA DEL SERVICIO"/>
                    <input name="sourceUrl" id="urlOrigen" value="" type="hidden"/>
                    <input name="buttonType" value="SIMPLE" type="hidden"/>
                    <input name="signature" value="7b64073f2d5e2220d873f5fb58f622a9599b1b6535aed496453612d5ec2b37f6" type="hidden"/>
                  </form>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-3">
              <div class="card card-pricing"  data-background-color="orange">
                <div class="card-body">
                  <h6 class="category">Servicio Basico</h6>
                  <h2 class="card-title text-right">$90.000</h2>
                  <p class="card-description">
                    Servicios de municipios alrededor de Bogotá
                  </p>
                  <footer class="blockquote-footer text-white">El servicio es solo para municipios alredor y como destino a Bogotá</footer>
                  <form method="post" action="https://gateway.payulatam.com/ppp-web-gateway/pb.zul" accept-charset="UTF-8">
                     <input type="submit" alt="" class="btn btn-info btn-round" onClick="this.form.urlOrigen.value = window.location.href;" value="Pagar Ahora"/>
                    <input name="buttonId" type="hidden" value="eFnXHR1689IAcuRnNoy0OGJTla6mlELHTlmOhe7Cfk9CET2KAB43xQ=="/>
                    <input name="merchantId" type="hidden" value="701126"/>
                    <input name="accountId" type="hidden" value="704171"/>
                    <input name="description" type="hidden" value="CONDUCTOR ELEGIDO ALREDEDOR BOG"/>
                    <input name="referenceCode" type="hidden" value="0100002"/>
                    <input name="amount" type="hidden" value="90000.00"/>
                    <input name="tax" type="hidden" value="0.00"/>
                    <input name="taxReturnBase" type="hidden" value="0.00"/>
                    <input name="shipmentValue" value="0.00" type="hidden"/>
                    <input name="currency" type="hidden" value="COP"/>
                    <input name="lng" type="hidden" value="es"/>
                    <input name="displayBuyerComments" type="hidden" value="true"/>
                    <input name="buyerCommentsLabel" type="hidden" value="es:POR FAVOR CONFIRMAR FECHA Y HORA DEL SERVICIO, LO MISMO QUE EL LUGAR"/>
                    <input name="sourceUrl" id="urlOrigen" value="" type="hidden"/>
                    <input name="buttonType" value="SIMPLE" type="hidden"/>
                    <input name="signature" value="5f291f689ed6fcb9dadd86cc9a51f70ec810cbe3c89e1cdc000caee3145ec0a9" type="hidden"/>
                  </form>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-3 d-none invisible">
              <div class="card card-pricing" data-background-color="green">
                <div class="card-body">
                  <h6 class="category">Suscripción Mensual</h6>
                  <h2 class="card-title text-right">$450.000</h2>
                  <a href="#pablo" class="btn btn-primary btn-round disabled">
                    Pagar Ahora
                  </a>
                </div>
              </div>
            </div>

          </div>
          <div class="row justify-content-md-center sharing-area text-center">
            <div class="text-center col-md-12 col-lg-8">
              <h3>Gracias por preferirnos!</h3>
            </div>
            <div class="text-center col-md-12 col-lg-8">
              <a target="_blank" href="https://www.twitter.com/" class="btn btn-neutral btn-icon btn-twitter btn-round btn-lg"
                rel="tooltip" title="Follow us">
                <i class="fab fa-twitter"></i>
              </a>
              <a target="_blank" href="https://www.facebook.com" class="btn btn-neutral btn-icon btn-facebook btn-round btn-lg"
                rel="tooltip" title="Like us">
                <i class="fab fa-facebook-square"></i>
              </a>
              <a target="_blank" href="https://www.linkedin.com" class="btn btn-neutral btn-icon btn-linkedin btn-lg btn-round"
                rel="tooltip" title="Follow us">
                <i class="fab fa-linkedin"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="section" id="carousel" data-background-color="black">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <img class="d-block" src="assets/img/bg1.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Nature, United States</h5>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block" src="assets/img/bg3.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Somewhere Beyond, United States</h5>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block" src="assets/img/bg4.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Yellowstone National Park, United States</h5>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <i class="now-ui-icons arrows-1_minimal-left"></i>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <i class="now-ui-icons arrows-1_minimal-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="section">
        <div class="container text-center">
          <div class="row justify-content-md-center">
            <div class="col-md-12 col-lg-8">
              <h2 class="title">Profesionales en lo que hacemos</h2>
              <h5 class="description">Primera empresa en Bogotá que permite pagos online para servicios procesionales
                en conductor elegido</h5>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- Sart Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header justify-content-center">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              <i class="now-ui-icons ui-1_simple-remove"></i>
            </button>
            <h4 class="title title-up">Modal title</h4>
          </div>
          <div class="modal-body">
            <p>Test
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default">Nice Button</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!--  End Modal -->
    <!-- Mini Modal -->
    <div class="modal fade modal-mini modal-primary" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header justify-content-center">
            <div class="modal-profile">
              <i class="now-ui-icons users_circle-08"></i>
            </div>
          </div>
          <div class="modal-body">
            <p>Always have an access to your profile</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-link btn-neutral">Back</button>
            <button type="button" class="btn btn-link btn-neutral" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!--  End Modal -->
    <footer class="footer" data-background-color="black">
      <div class="container">
        <nav>
          <ul>
            <li>
              <a href="https://www.chosen-driver.com">
                Conductor Elegido
              </a>
            </li>
            <li>
              <a href="http://chosen-driver.andiazher.com">
                Sobre Nosotros
              </a>
            </li>
            <li>
              <a href="http://blog.andiazher.com">
                Blog
              </a>
            </li>
          </ul>
        </nav>
        <div class="copyright" id="copyright">
          &copy;
          <script>
            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
          </script> | Designed and coded by
          <a href="#https://www.andiazher.com/chosen-driver/v1/web/">andiazher</a>.
        </div>
      </div>
    </footer>
  </div>
  <!--   Core JS Files   -->
  <script src=".././assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src=".././assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src=".././assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src=".././assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src=".././assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src=".././assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src=".././assets/js/now-ui-kit.js?v=1.2.0" type="text/javascript"></script>
  <script>
    $(document).ready(function () {
      // the body of this function is in assets/js/now-ui-kit.js
      nowuiKit.initSliders();
    });    
  </script>
</body>

</html>