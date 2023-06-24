

</html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="<?php echo URL;?>foodpage/css/foodpage.css">
    
    <link rel="stylesheet" href="<?php echo URL;?>foodpage/css/gallery.css">
    

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Julee&display=swap" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <nav class="custom-navbar navbar navbar-expand-lg navbar-dark fixed-top" data-spy="affix" data-offset-top="10">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">Sobre nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#gallary">Galería</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#blog">Nuestro Menú</a>
                </li>
            </ul>
            <script>
            
                var imagenes=new Array(
                    ["<?php echo URL;?>foodpage/img/luna1.png"],
                    ["<?php echo URL;?>foodpage/img/luna2.png"],
                    ["<?php echo URL;?>foodpage/img/luna3.png"],
                    ["<?php echo URL;?>foodpage/img/luna4.png"],
                );
                var contador=0;
             
                function rotarImagenes()
                {
                    contador++
                    document.getElementById("brand-img").src=imagenes[contador%imagenes.length][0];
                }

                onload=function()
                {
                    rotarImagenes();
             
                    setInterval(rotarImagenes,1000);
                }
            </script>
            <a class="navbar-brand m-auto" href="#">
                <img class="brand-img" id="brand-img" name="brand-img" alt="" width="50px" height="50px" src="">
                <span class="brand-txt">TU POSTRE ASTRAL</span>
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="https://www.instagram.com/panartebga/">Instagram<span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.tiktok.com/@panartevirtual">TikTok</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#https://web.whatsapp.com/%F0%9F%8C%90/es">Whatsapp</a>
                </li>
                <li class="nav-item">
                            <a class="nav-link" href="<?php echo URL; ?>usuarioController/iniciar">Login</a>
                </li>
            </ul>
        </div>
    </nav>

    <header id="home" class="header">
        <div class="overlay text-white text-center">
            <h1 class="display-2 font-weight-bold my-3">TU POSTRE ASTRAL</h1>
            <h2 class="display-4 mb-5">Siempre Fresco &amp; Delicioso</h2>
            <a class="btn btn-lg btn-primary" href="#gallary">VEA NUESTRA GALERIA</a>
        </div>
    </header>

    <div id="about" class="container-fluid wow fadeIn" id="about" data-wow-duration="1.5s">
        <div class="row">
            <div class="col-lg-6 has-img-bg"></div>
            <div class="col-lg-6">
                <div class="row justify-content-center">
                    <div class="col-sm-8 py-5 my-5">
                        <h2 class="mb-4">Sobre nosotros</h2>
                        <b>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</b>
                        <br>
                        <br>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto doloremque quas optio accusantium, tenetur perferendis esse? Ex tenetur repudiandae facere architecto voluptate ducimus delectus eum pariatur unde, aliquid odio soluta.</p><br>
                        <p>Beatae, fugiat ab! Assumenda excepturi suscipit voluptatem omnis quae cumque ipsa, maxime ducimus deserunt aspernatur. Blanditiis natus perspiciatis dolores labore? Repudiandae, at.</p>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    


      <section class="gallery">
        <div id="gallary" class="text-center bg-dark text-light has-height-md middle-items wow fadeIn">
            <h2 class="section-title">GALERIA</h2>
        </div>
    
        <div class="container">
          <div class="grid">
            <div class="column-xs-12 column-md-4">
              <figure class="img-container">
                <img src="<?php echo URL;?>foodpage/img/sugared-croissants-l-16da3f8e-3b2b-424f-b64e-0602a50ce1f6-0-1400x919.jpg" />
                <figcaption class="img-content">
                  <h2 class="title">Croissant</h2>
                  <h3 class="category">Banana&Chantilly</h3>
                </figcaption>
                <span class="img-content-hover">
                  <h2 class="title">Croissant</h2>
                  <h3 class="category">Banana&Chantilly</h3>
                </span>
              </figure>
            </div>
            <div class="column-xs-12 column-md-4">
              <figure class="img-container">
                <img src="<?php echo URL;?>foodpage/img/cheesecake-fresa.jpg" />
                <figcaption class="img-content">
                  <h2 class="title">Cheesecake</h2>
                  <h3 class="category">Fresa</h3>
                </figcaption>
                <span class="img-content-hover">
                  <h2 class="title">Cheesecake</h2>
                  <h3 class="category">Fresa</h3>
                </span>
              </figure>
            </div>
            <div class="column-xs-12 column-md-4">
              <figure class="img-container">
                <img src="<?php echo URL;?>foodpage/img/mousse-de-chocolate-facil-1024x683.jpg">
                <figcaption class="img-content">
                  <h2 class="title">Mousses</h2>
                  <h3 class="category">Chocolate&Vainilla</h3>
                </figcaption>
                <span class="img-content-hover">
                  <h2 class="title">Mousses</h2>
                  <h3 class="category">Chocolate&Vainilla</h3>
                </span>
              </figure>
            </div>
            <div class="column-xs-12 column-md-6">
              <figure class="img-container">
                <img src="<?php echo URL;?>foodpage/img/postre-napoleon.jpg" />
                <figcaption class="img-content">
                  <h2 class="title">Napoleon</h2>
                  <h3 class="category">Avellana&Café</h3>
                </figcaption>
                <span class="img-content-hover">
                  <h2 class="title">Napoleon</h2>
                  <h3 class="category">Avellana&Café</h3>
                </span>
              </figure>
            </div>
            <div class="column-xs-12 column-md-6">
              <figure class="img-container">
                <img src="<?php echo URL;?>foodpage/img/Cheesecake de limón.jpg">
                <figcaption class="img-content">
                  <h2 class="title">Cheesecake</h2>
                  <h3 class="category">Limón&Menta</h3>
                </figcaption>
                <span class="img-content-hover">
                  <h2 class="title">Cheesecake</h2>
                  <h3 class="category">Limón&Menta</h3>
                </span>
              </figure>
            </div>
            <div class="column-xs-12">
              <figure class="img-container">
                <img src="<?php echo URL;?>foodpage/img/brownie.jpg" />
                <figcaption class="img-content">
                  <h2 class="title">Brownie </h2>
                  <h3 class="category">Almendras&Caramelo</h3>
                </figcaption>
                <span class="img-content-hover">
                  <h2 class="title">Brownie</h2>
                  <h3 class="category">Almendras&Caramenlo</h3>
                </span>
              </figure>
            </div>
          </div>
        </div>
     
     



      <div class="gallary row">
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">

      <img src="<?php echo URL;?>foodpage/img/br1.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
      <a href="#" class="gallary-overlay">
          <i class="gallary-icon ti-plus"></i>
      </a>
  </div>
  <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
      <img src="<?php echo URL;?>foodpage/img/br2.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
      <a href="#" class="gallary-overlay">
          <i class="gallary-icon ti-plus"></i>
      </a>
  </div>
  <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
      <img src="<?php echo URL;?>foodpage/img/br3.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
      <a href="#" class="gallary-overlay">
          <i class="gallary-icon ti-plus"></i>
      </a>
  </div>
  <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
      <img src="<?php echo URL;?>foodpage/img/br4.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
      <a href="#" class="gallary-overlay">
          <i class="gallary-icon ti-plus"></i>
      </a>
  </div>
  <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
      <img src="<?php echo URL;?>foodpage/img/pos2.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
      <a href="#" class="gallary-overlay">
          <i class="gallary-icon ti-plus"></i>
      </a>
  </div>
  <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
      <img src="<?php echo URL;?>foodpage/img/pos5.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
      <a href="#" class="gallary-overlay">
          <i class="gallary-icon ti-plus"></i>
      </a>
  </div>
  <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
      <img src="<?php echo URL;?>foodpage/img/pos4.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
      <a href="#" class="gallary-overlay">
          <i class="gallary-icon ti-plus"></i>
      </a>
  </div>
  <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
      <img src="<?php echo URL;?>foodpage/img/pos6.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
      <a href="#" class="gallary-overlay">
          <i class="gallary-icon ti-plus"></i>
      </a>
  </div>
</div>

</section>

    <!-- BLOG Section  -->
    <div id="blog" class="container-fluid bg-dark text-light py-5 text-center wow fadeIn">
        <h2 class="section-title py-5">NUESTRO MENÚ</h2>
        <div class="row justify-content-center">
            <div class="col-sm-7 col-md-4 mb-5">
                <ul class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#foods" role="tab"
                            aria-controls="pills-home" aria-selected="true">Foods</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#juices" role="tab"
                            aria-controls="pills-profile" aria-selected="false">Juices</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="foods" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card bg-transparent border my-3 my-md-0">
                            <img src="<?php echo URL;?>foodpage/img/maxresdefault.jpg" alt="template by DevCRID http://www.devcrud.com/"
                                class="rounded-0 card-img-top mg-responsive">
                            <div class="card-body">
                                <h1 class="text-center mb-4"><a href="#" class="badge badge-primary">$35.000</a></h1>
                                <h4 class="pt20 pb20">PAN DE MASA MADRE</h4>
                                <p class="text-white">El pan de masa madre o de masa madre es un pan elaborado mediante
                                    la fermentación de masa utilizando lactobacillaceae silvestres y levaduras. El ácido
                                    láctico de la fermentación imparte un sabor agrio y mejora las cualidades de
                                    conservación.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-transparent border my-3 my-md-0">
                            <img src="<?php echo URL;?>foodpage/img/focaccia.jpg" alt="template by DevCRID http://www.devcrud.com/"
                                class="rounded-0 card-img-top mg-responsive">
                            <div class="card-body">
                                <h1 class="text-center mb-4"><a href="#" class="badge badge-primary">$12.000</a></h1>
                                <h4 class="pt20 pb20">FOCCACIA</h4>
                                <p class="text-white">Deliciosa foccacia, elaborada con pan de masa madre, una cubierta
                                    con pimentones, ajos, aceitunas y trozos de queso mozzarella, bañados en aceite de
                                    oliva. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-transparent border my-3 my-md-0">
                            <img src="<?php echo URL;?>foodpage/img/prepara-galletas-tipo-palacio-hierro.jpg"
                                alt="template by DevCRID http://www.devcrud.com/"
                                class="rounded-0 card-img-top mg-responsive">
                            <div class="card-body">
                                <h1 class="text-center mb-4"><a href="#" class="badge badge-primary">$8.000</a></h1>
                                <h4 class="pt20 pb20">GALLETAS ESTILO NEW YORK</h4>
                                <p class="text-white">Galletas de un gran tamaño, cuyo interior contiene dulces
                                    sorpresas.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="juices" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row">
                    <div class="col-md-4 my-3 my-md-0">
                        <div class="card bg-transparent border">
                            <img src="<?php echo URL;?>foodpage/img/TE.webp" alt="template by DevCRID http://www.devcrud.com/"
                                class="rounded-0 card-img-top mg-responsive">
                            <div class="card-body">
                                <h1 class="text-center mb-4"><a href="#" class="badge badge-primary">$6.800</a></h1>
                                <h4 class="pt20 pb20">TE FRIO DE CANELA Y CITRICOS</h4>
                                <p class="text-white">Bebida refrescante con deliciosos sabores cítricos y canela. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-3 my-md-0">
                        <div class="card bg-transparent border">
                            <img src="<?php echo URL;?>foodpage/img/CAFECONAMOR.jpg" alt="template by DevCRID http://www.devcrud.com/"
                                class="rounded-0 card-img-top mg-responsive">
                            <div class="card-body">
                                <h1 class="text-center mb-4"><a href="#" class="badge badge-primary">$5.600</a></h1>
                                <h4 class="pt20 pb20">CAPPUCCINO</h4>
                                <p class="text-white">En pocas palabras... El café nos queda delicioso.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-3 my-md-0">
                        <div class="card bg-transparent border">
                            <img src="<?php echo URL;?>foodpage/img/CHOCOBEBIDA.jpg" alt="template by DevCRID http://www.devcrud.com/"
                                class="rounded-0 card-img-top mg-responsive">
                            <div class="card-body">
                                <h1 class="text-center mb-4"><a href="#" class="badge badge-primary">$7.300</a></h1>
                                <h4 class="pt20 pb20">CHOCOLATE CALIENTE</h4>
                                <p class="text-white">La mejor bebida que podemos ofrecerte es nuestro chocolate con
                                    canela caliente.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid bg-dark text-light has-height-md middle-items border-top text-center wow fadeIn">
        <div class="row">
            <div class="col-sm-4">
                <h3>CORREO:</h3>
                <P class="text-muted">tu_postreastral@gmail.com</P>
            </div>
            <div class="col-sm-4">
                <h3>LINEA DE ATENCION:</h3>
                <P class="text-muted">(304) 456-7890</P>
            </div>
            <div class="col-sm-4">
                <h3>DIRECCION:</h3>
                <P class="text-muted">Cra. 40 #10A -29, El Poblado, Medellín, El Poblado, Medellín, Antioquia</P>
            </div>
        </div>
    </div>
    <div class="bg-dark text-light text-center border-top wow fadeIn">
        <p class="mb-0 py-3 text-muted small">&copy; Copyright
            <script>document.write(new Date().getFullYear())</script> Made with <i class="ti-heart text-danger"></i> By
            <a href="http://devcrud.com">MY</a>
        </p>
    </div>

    <!-- google maps -->
    <script async defer
        src="https://www.google.com/maps/dir//La+Maga,+Cra.+40+%2310A+-29,+El+Poblado,+Medell%C3%ADn,+El+Poblado,+Medell%C3%ADn,+Antioquia/@6.209989,-75.569287,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8e4683321c41b137:0x34221c5ddc5dce6f!2m2!1d-75.5677268!2d6.2106109?hl=es-419"></script>

        <script src="<?php echo URL;?>foodpage/js/foodpage.js" type="text/javascript"></script>

<script src="<?php echo URL;?>foodpage/js/gallery.js" type="text/javascript"></script>

<script src="<?php echo URL;?>foodpage/js/wow.js" type="text/javascript"></script>

<script src="<?php echo URL;?>foodpage/js/jquery-3.4.1.js" type="text/javascript"></script>

<script src="<?php echo URL;?>foodpage/js/bootstrap.affix.js" type="text/javascript"></script>

<script src="<?php echo URL;?>foodpage/js/bootstrap.bundle.js" type="text/javascript"></script>




</body>
</html>