<?php
session_start();
if(isset($_SESSION['nombre'])){
    // En caso contrario redirigimos el visitante a otra página
    header('Location: login/login.php');
    die();
}


?>

<!doctype html>
<html lang="es">
  <head>
    <title>Casino online</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     
    <!-- Bootstrap CSS v5.3.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <!--Style css-->
    <link rel="stylesheet" href="style.css">    

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://kit.fontawesome.com/5976fd2c71.js" crossorigin="anonymous"></script>

    <!--Icono-->
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/7399/7399022.png" type="image/ico">
  </head>

<body>
  <!--inicio navbar-->
  <header>
    <div class="navbar">
      <div class="logo">
        <a href="#">
          <img src="https://assets.stickpng.com/images/5884a9754549c0b81ec05477.png" width="50px" alt="" srcset="">
        </a>
      </div>
      <ul class="links">

        <li>
          <a href="index.php">Inicio</a>
        </li>
 

        <li>
          <a href="#titulo_reparacion">Nuestros juegos</a>
        </li>

        <li>
          <a href="#titulo_trabajos">Trabajos</a>
        </li>

        <li>
          <a href="#titulo_contacto">Contacto</a>
        </li>

      </ul>

      <div class="toggle_btn">
        <i class="fas fa-bars"></i>
      </div>
    </div>

    <div class="dropdown_menu">
        <li>
            <a href="index.php">Inicio</a>
        </li>

        <li>
          <a href="#titulo_dispositivo">Ver mi equipo</a>
        </li>

        <li>
          <a href="#titulo_reparacion">Servicos</a>
        </li>

        <li>
          <a href="#titulo_trabajos">Trabajos</a>
        </li>
        
        <li>
          <a href="#titulo_contacto">Contacto</a>
        </li>
        
        <li>
          <a href="login/login.php" class="action_btn">      
             Registrarse
          </a>        
        </li>
    </div>
  </header>
 <!--fin navbar-->


<!--Inicio Parte principal-->
<div class="col-sm-6 col-md-12 imagen_fondo text-center">
    <div  class="texto-imagen">
    </div>
  </div>         
<!--fin Parte principal-->
<div class="container">

<hr class="sidebar-divider">
<!-- Inicio Tarjetas de reparacion-->
<h3 id="titulo_reparacion" class="text-center">Nuestro juegos:</h3>

<div class="container-card">
  <div class="product">
    <div class="product-card">
      <h2 class="name">Tragamonedas</h2>
      <p class="costo">Contamos con un equipo de expertos en reparación de MacBook que se encargará de solucionar cualquier problema que pueda presentar tu dispositivo, utilizando piezas de repuesto originales y brindando un servicio rápido y eficiente.</p>
      <a href="#" class="popup-btn">Mas Informacion</a>
      <img src="https://i0.wp.com/www.edmradio.es/wp-content/uploads/2020/11/casino-3491253_1280.jpg?fit=1280%2C853&ssl=1"  class="product-img">
    </div>

    <div class="popup-view">
        <div class="popup-card">
          <a href="#"><i class="fas fa-times close-btn"></i></a>
         <div class="product-img">
            <img src="https://i0.wp.com/www.edmradio.es/wp-content/uploads/2020/11/casino-3491253_1280.jpg?fit=1280%2C853&ssl=1" style="left: 0%;  width: 360px; height: 100%;" alt="">
          </div>
          <div class="info">
              <h3>Tragamonedas</h3>
              <p>
                Lorem, ipsum dolor sit amet 
                consectetur adipisicing elit. 
                Aliquam tempore culpa soluta 
                sint laborum voluptatem.
              </p>
              <!--<span class="price">$120.000</span>-->
              <!--<a href="#" class="add-cart-btn">Add to cart</a>-->
          </div>
        </div>
    </div>
  </div>

  <div class="product">
    <div class="product-card">
      <h2 class="name">BlackJack</h2>
      <p class="costo">Nuestro equipo de especialistas en reparación de iPhone está preparado para resolver cualquier inconveniente que pueda surgir en tu dispositivo, proporcionando un servicio ágil y confiable con el uso de repuestos genuinos.</p>
      <a href="#" class="popup-btn">Mas Informacion</a>
      <img src="https://images.sigma.world/blackjack-card-counting-scaled-1.jpg"  class="product-img">
    </div>
    <div class="popup-view">
        <div class="popup-card">
          <a href="#"><i class="fas fa-times close-btn"></i></a>
          
          <div class="product-img">
            <img src="https://images.sigma.world/blackjack-card-counting-scaled-1.jpg" style="left: 0%;  width: 360px; height: 100%;" alt="">
          </div>

          <div class="info">
              <h3>BlackJack</h3>
              <p>
                Lorem, ipsum dolor sit amet 
                consectetur adipisicing elit. 
                Aliquam tempore culpa soluta 
                sint laborum voluptatem.
              </p>
              <!--<span class="price">$120.000</span>-->
              <!--<a href="#" class="add-cart-btn">Add to cart</a>-->
          </div>
        </div>
    </div>
  </div>

  <div class="product">
    <div class="product-card">
      <h2 class="name">La ruleta</h2>
      <p class="costo">Nuestro equipo está capacitado para solucionar cualquier problema, ya sea relacionado con la pantalla, la batería, el software u otros inconvenientes, ofreciendo un servicio confiable y eficiente para que puedas disfrutar nuevamente de tu iPad.</p>
      <a href="#" class="popup-btn">Mas Informacion</a>
      <img src="https://www.888casino.es/blog/sites/newblog.888casino.es/files/styles/twitter/public/2022-08/Tablero%20ruleta_0.jpg"  class="product-img">
    </div>
    <div class="popup-view">
        <div class="popup-card">
          <a href="#"><i class="fas fa-times close-btn"></i></a>
          
          <div class="product-img">
            <img src="https://www.888casino.es/blog/sites/newblog.888casino.es/files/styles/twitter/public/2022-08/Tablero%20ruleta_0.jpg" style="left: 0%;  width: 360px; height: 100%;" alt="">
          </div>

          <div class="info">
              <h3>La ruleta</h3>
              <p>
                Lorem, ipsum dolor sit amet 
                consectetur adipisicing elit. 
                Aliquam tempore culpa soluta 
                sint laborum voluptatem.
              </p>
              <!--<span class="price">$120.000</span>-->
              <!--<a href="#" class="add-cart-btn">Add to cart</a>-->
          </div>
        </div>
    </div>
  </div>

  <div class="product">
    <div class="product-card">
      <h2 class="name">Poker</h2>
      <p class="costo">En nuestro centro de reparación especializado, nos enfrentamos a cualquier obstáculo que pueda surgir en tu dispositivo. Puedes tener la tranquilidad de que restauraremos tu Apple Watch a su estado óptimo, permitiéndote aprovechar al máximo todas sus funcionalidades.</p>
      <a href="#" class="popup-btn">Mas Informacion</a>
      <img src="https://blog.bodog.com/wp-content/uploads/2020/07/caribbean-stud-poker-bodog.jpg"  class="product-img">
    </div>
    <div class="popup-view">
        <div class="popup-card">
          <a href="#"><i class="fas fa-times close-btn"></i></a>
          
          <div class="product-img">
            <img src="https://blog.bodog.com/wp-content/uploads/2020/07/caribbean-stud-poker-bodog.jpg" style="left: 0%;  width: 360px; height: 100%;" alt="">
          </div>
          <div class="info">
              <h3>Poker</h3>
              <p>
                Lorem, ipsum dolor sit amet 
                consectetur adipisicing elit. 
                Aliquam tempore culpa soluta 
                sint laborum voluptatem.
              </p>
              <!--<span class="price">$120.000</span>-->
              <!--<a href="#" class="add-cart-btn">Add to cart</a>-->
          </div>
        </div>
    </div>
  </div>

</div>
<!-- Fin Tarjetas de reparacion-->

<!--Inicio Sobre Nosotros-->
<hr class="sidebar-divider">
<h3 id="titulo_servicios" class="text-center mt-4"><i class="fas fa-user"></i> Sobre Nosotros</h3>
      
<div id="titulo_nosotros" class="col-12"> 
      <div class="container-nosotros mt-4">
        <div class="row-nosotros col-6" id="texto_imagen">
          <div id="quienes_somos_texto" >
                  <h3  class="text-seccion">Nosotros</h3> 
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur aliquam provident reprehenderit temporibus accusantium. Veniam, eligendi autem earum ipsum vero laborum esse molestias harum fuga dolorum, repellat, a incidunt odit! Ipsum incidunt accusamus ipsam. Dolorem velit quae at laboriosam dicta. Vitae placeat, tenetur iste adipisci sed dolores voluptatibus? Assumenda rem accusamus id sequi numquam quidem dignissimos nesciunt eligendi architecto expedita.<br>
                    </p>
          </div>
        </div>
          <div class="col-6">
            <img src="https://resizer.iproimg.com/unsafe/880x/filters:format(webp)/https://assets.iprofesional.com/assets/jpg/2020/04/494221.jpg" class="img-nosotros" id="imagen_appcell" >
          </div>

        
  </div>
</div>
<!--Fin Sobre Nosotros-->
      

<hr class="sidebar-divider">
<!--inicio carrousel-->
  <h3 id="titulo_trabajos" class="  text-center text-center mt-5 mb-4">
  <img src=" " width="30px">
    Galeria
  </h3>

  <div class="container-slider">
    <div class="slides">
      <div class="slide">
        <img class="img" src="https://robbreport.es/wp-content/uploads/2022/09/group-of-young-people-behind-roulette-table-on-black-background-young-people-made-bets-in-the-game-and-wait-for-the-result-bright-emotions-2.jpg.webp" alt="imagen 1" loading="lazy">
        <div class="slide-content">
        </div>
      </div>

      <div class="slide">
        <img class="img" src="https://i.insider.com/5f3aa414e89ebf001f0453d7?width=1136&format=jpeg" alt="imagen 1" loading="lazy">
      </div>

      <div class="slide">
        <img class="img" src="https://www.casinos.at/fileadmin/_processed_/1/b/csm_partyroulette-gruppe-freuen_c3705d206c.jpg" alt="imagen 1" loading="lazy">
      </div>

      <div class="slide">
        <img class="img" src="https://elperiodicodeyecla.com/wp-content/uploads/2019/10/casnionline.jpg" alt="imagen 1" loading="lazy">
      </div>

      <div class="slide">
        <img class="img" src="https://miro.medium.com/v2/resize:fit:900/1*J8hOJnfAqtIriUYVFIrk3A.jpeg" alt="imagen 1" loading="lazy">
      </div>

      <div class="slide">
        <img class="img" src="https://infocasino.guru/wp-content/uploads/2022/12/group-young-people-roulette-table-black-background-winning-player-bright-emotions.webp" alt="imagen 1" loading="lazy">
      </div>
    </div>

    <div class="slide-controls">
      <button id="prev-btn">
        <i class="fas fa-chevron-left"></i>
      </button>

      <button id="next-btn">
        <i class="fas fa-chevron-right"></i>
      </button>
    </div>

  </div>
<!--Fin carrousel-->


<!--inicio form-contacto-->
  <hr class="sidebar-divider">
  <h3 id="titulo_contacto" class="text-center mt-5 mb-2">
    <img src="img/hoja-icono.png" width="30px"> 
    Formulario de Contacto
  </h3>

  <div class="container-form-contacto">
    <div class="box-info">


      <div class="data">
            <h3>Complete este formulario para contactarnos</h3>

        <p><i class="fas fa-phone"></i>Tel: 3454645567</p>
        <p><i class="fas fa-envelope"></i>Email: usuario8010@gmail.com</p>
        <p><i class="fas fa-map"></i>Ubicacion: Calle 3254</p>
      </div>
    </div>
    
    <form id="contact-form" method="POST" class="form-cons">
      <div class="input-box">
          <input type="text" id="nombre" name="nombre" class="form-input"  placeholder="Escriba su nombre">
          <!-- <input type="text" required placeholder="Nombre y apellido"> -->
          <i class="fas fa-user"></i>
      </div>

      <div class="input-box">
        <textarea id="mensaje" name="mensaje" class="form-textarea" placeholder="Escriba su mensaje"></textarea>
      </div>

      <button type="submit" name="submit" value="enviar">Enviar</button>
    </form>
  </div>
<!--Fin form-contacto-->

<hr class="sidebar-divider">
<!-- Inicio carrousel Instagram-->
<h3 id="titulo_instagram" class="text-center mt-4 mb-5"><img src="img/instagram-icono-blanco.png" width="30px" alt="" srcset=""> Publicaciones De Instagram:</h3>
<div class="carrusel-list" id="carrusel-list">
    <button class="carrusel-arrow carrusel-prev" id="button-prev" data-button="button-prev"
      onclick="app.processingButton()">
      <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left"
          class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 320 512">
          <path fill="currentColor"
              d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z">
          </path>
      </svg>
    </button>

    <div class="carrusel-track" id="track">
      
      <div class="carrusel2">
        <div>
          <a href="#">                                     
            <div class="card">                              
              <iframe id="sds" width="270" height="440" src="https://www.instagram.com/p/C1r1mZKL_YB/embed" frameborder="0" scrolling="no"></iframe>
            </div>
          </a>
        </div>
      </div>

      <div class="carrusel2">
        <div>
          <a href="#">
            <div class="card text-center">
              <iframe id="sds" width="270" height="440" src="https://www.instagram.com/p/C1FTCO6rhow/embed" frameborder="0" scrolling="no"></iframe>
            </div>
          </a>
        </div>
      </div>

      <div class="carrusel2">
        <div>
          <a href="#">
            <div class="card text-center">
              <iframe id="sds" width="270" height="440" src="https://www.instagram.com/p/C1FTCO6rhow/embed" frameborder="0" scrolling="no"></iframe>
            </div>
          </a>
        </div>
      </div>

      <div class="carrusel2">
        <div>
          <a href="#">
            <div class="card text-center">
              <iframe id="sds" width="270" height="440" src="https://www.instagram.com/p/C1FTCO6rhow/embed" frameborder="0" scrolling="no"></iframe>
            </div>
          </a>
        </div>
      </div>

      <div class="carrusel2">
        <div>
          <a href="#">
            <div class="card text-center">
              <iframe id="sds" width="270" height="440" src="https://www.instagram.com/p/C1FTCO6rhow/embed" frameborder="0" scrolling="no"></iframe>
            </div>
          </a>
        </div>
      </div>

      <div class="carrusel2">
        <div>
          <a href="#">
            <div class="card text-center">
              <iframe id="sds" width="270" height="440" src="https://www.instagram.com/p/C1FTCO6rhow/embed" frameborder="0" scrolling="no"></iframe>
            </div>
          </a>
        </div>
      </div>

      <div class="carrusel2">
        <div>
          <a href="#">
            <div class="card text-center">
              <iframe id="sds" width="270" height="440" src="https://www.instagram.com/p/C1FTCO6rhow/embed" frameborder="0" scrolling="no"></iframe>
            </div>
          </a>
        </div>
      </div>

      <div class="carrusel2">
        <div>
          <a href="#">
            <div class="card text-center">
              <iframe id="sds" width="270" height="440" src="https://www.instagram.com/p/C1FTCO6rhow/embed" frameborder="0" scrolling="no"></iframe>
            </div>
          </a>
        </div>
      </div>

      <div class="carrusel2">
        <div>
          <a href="#">
            <div class="card text-center">
              <iframe id="sds" width="270" height="440" src="https://www.instagram.com/p/C1FTCO6rhow/embed" frameborder="0" scrolling="no"></iframe>
            </div>
          </a>
        </div>
      </div>

    </div>

      <button class="carrusel-arrow carrusel-next" id="button-next" data-button="button-next"
        onclick="app.processingButton(event)">
        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right"
            class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 320 512">
            <path fill="currentColor"
                d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
            </path>
        </svg>
      </button>
  

  </div>

</div>
    
<!-- Fin Instagram-->
</div>
</div>
<!--Inicio Footer--> 
<footer class="mt-5">
  <!-- <img src="./img/logo-principal.png" width="45px" alt="" srcset=""> -->
  <div class="social-icons-container">
    <a href="#" class="social-icon bg3"><i class="fa fa-instagram"></i></a>
    <a href="#" class="social-icon bg1"><i class="fa fa-facebook"></i></a>
    <a href="#" class="social-icon bg2" ><i class="fa fa-twitter"></i></a>
  </div>
  <ul class="footer-menu-container">
    <!-- <li class="menu-item">Nosotros</li>
    <li class="menu-item">Servicios</li>
    <li class="menu-item">Trabajos</li> -->
  </ul>
  <span>Copyright &copy;  Casino 2023</span>
</footer>
<!--Fin Footer--> 

<script src="script.js"></script>

</body>
  <!-- Popper js Development version -->
  <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>


