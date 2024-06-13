<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SESYLSEMI SAC </title>
    <!-- link de estilo de fondo -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    <!-- link de estilo para -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

    <!-- enlace de archivo CSS personalizado-->
    <link rel="stylesheet" href="css/style1.css">
</head>

<body>

<!--iniciar seccion HEADER -->
<header>

<div id="menu-bar" class="fas fa-bars"></div>

<a href="#" class="logo"><span>S</span>ESYLSEMI</a>

<nav class="navbar">
<a href="#home">Inicio</a>
<a href="#book"> Nosotros</a>
<a href="#packages"> Servicios</a>
<a href="#services"> Trabaja con Nosotros</a>
<a href="#gallery"> Contacto</a>
</nav>

<div class="icons">
        <i class="fas fa-search" id="search-btn"></i> <!-- boton buscar -->
        <i class="fas fa-user" id="login-btn"></i>   <!-- boton login -->
</div>

<form action="" class="search-bar-container">
    <input type="search" id="search-bar" placeholder="buscar ....">
    <label for="search-bar" class="fas fa-search"></label>
</form>

</header>

<!--fin seccion HEADER -->

<!-- inicio de contenido de formulario flotante -->

<div class="login-form-container">
 
<i class="fas fa-times" id="form-close"></i>

    <form action="">
        <h3>login</h3>
        <input type="email" class="box" placeholder="ingresa usuario">
        <input type="password" class="box" placeholder="ingresa clave">
        <input type="submit" value="iniciar sesion" class="btn"> 
        <input type="checkbox" id="remember">
        <label for="remember">recordarme</label>
        <p>olvido su contraseña? <a href="#">click aqui</a></p> 
        <p>no tienes una cuenta? <a href="#">registrarme</a></p> 
    </form>

</div>

<!-- fin de contenido de formulario flotante -->


<!-- inicio seccion principal video -->

<section class="home" id="home">

    <div class="content">
        <h3>TU ELECCION ES SIMPLE</h3>
        <p> Honor - Lealtad - Disciplina - Tecnologico</p>
        <a href="#" class="btn">ver mas </a>
    </div>

    
    <div class="controls">
        <span class="vid-btn active" data-src="images/vid/vid-1.mp4"></span>
        <span class="vid-btn" data-src="images/vid/vid-2.mp4"></span>
        <span class="vid-btn" data-src="images/vid/vid-3.mp4"></span>
        <span class="vid-btn" data-src="images/vid/vid-4.mp4"></span>
        <span class="vid-btn" data-src="images/vid/vid-5.mp4"></span>
    </div>

    <div class="video-container">
        <video src="images/vid/vid-1.mp4" id="video-slider" loop autoplay muted></video>
    </div>

</section>

<!-- fin seccion principal video -->

<!-- book section star-->

<section class="book" id="book">

    <h1 class="heading">
    <span>b</span>
    <span>o</span>
    <span>o</span>
    <span>k</span>
    <span class="space"></span>
    <span>n</span>
    <span>o</span>
    <span>w</span>
    </h1>

    <div class="row">
        <div class="image">
            <img src="images/contact.svg" alt="">
        </div>

        <form action="">
            <div class="inputBox">
                <h3>where to</h3>
                <input type="text" placeholder="place name">
            </div>

            <div class="inputBox">
                <h3>how many</h3>
                <input type="number" placeholder="number of guets">
            </div>

            <div class="inputBox">
                <h3>arrival</h3>
                <input type="date">
            </div>

            <div class="inputBox">
                <h3>leaving</h3>
                <input type="date">
            </div>
            <input type="submit" class="btn" value="book now">

        </form>
    </div> 

</section>
<!-- section ends -->


<!-- packages section stars -->

<section class="packages" id="packages">

<h1 class="heading">
    <span>p</span>
    <span>a</span>
    <span>c</span>
    <span>k</span>
    <span>a</span>
    <span>g</span>
    <span>e</span>
    <span>s</span>
</h1>

<div class="box-container">

    <div class="box">
        <img src="images/ases-segu.jpg" alt="">
        <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i>mumbai</h3>
            <p>lorem ipsum dolorm sit amt consectetur disciplinitn elit, varios focus</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <div class="price"> $90.00 <span>$120.00</span></div>
            <a href="#" class="btn">book now</a>
        </div>
    </div>

    <div class="box">
        <img src="images/ases-segu.jpg" alt="">
        <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i>mumbai</h3>
            <p>lorem ipsum dolorm sit amt consectetur disciplinitn elit, varios focus</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <div class="price"> $90.00 <span>$120.00</span></div>
            <a href="#" class="btn">book now</a>
        </div>
    </div>

    <div class="box">
        <img src="images/ases-segu.jpg" alt="">
        <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i>mumbai</h3>
            <p>lorem ipsum dolorm sit amt consectetur disciplinitn elit, varios focus</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <div class="price"> $90.00 <span>$120.00</span></div>
            <a href="#" class="btn">book now</a>
        </div>
    </div>

    <div class="box">
        <img src="images/ases-segu.jpg" alt="">
        <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i>mumbai</h3>
            <p>lorem ipsum dolorm sit amt consectetur disciplinitn elit, varios focus</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <div class="price"> $90.00 <span>$120.00</span></div>
            <a href="#" class="btn">book now</a>
        </div>
    </div>

    <div class="box">
        <img src="images/ases-segu.jpg" alt="">
        <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i>mumbai</h3>
            <p>lorem ipsum dolorm sit amt consectetur disciplinitn elit, varios focus</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <div class="price"> $90.00 <span>$120.00</span></div>
            <a href="#" class="btn">book now</a>
        </div>
    </div>

    <div class="box">
        <img src="images/ases-segu.jpg" alt="">
        <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i>mumbai</h3>
            <p>lorem ipsum dolorm sit amt consectetur disciplinitn elit, varios focus</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <div class="price"> $90.00 <span>$120.00</span></div>
            <a href="#" class="btn">book now</a>
        </div>
    </div>


</div>


</section>

<!-- packages section ends -->

<!-- services section stars -->

<section class="services" id="services">

<h1 class="heading">
    <span>s</span>
    <span>e</span>
    <span>r</span>
    <span>v</span>
    <span>i</span>
    <span>c</span>
    <span>e</span>
    <span>s</span>
</h1>

<div class="box-container">

    <div class="box">
        <i class="fas fa-hotel"></i>
        <h3>affordable hotels</h3>
        <p>sdlknsdlnsdmcv sdklnsdklsdklnsdklnsdklndl n cksdncsdklncsdcnd
        ndskcnsdklnsdklncvsdklnvsd vd sdncsdklnvsdlkv dcdnndsc dc </p>
    </div>

    <div class="box">
        <i class="fas fa-hotel"></i>
        <h3>affordable hotels</h3>
        <p>sdlknsdlnsdmcv sdklnsdklsdklnsdklnsdklndl n cksdncsdklncsdcnd
        ndskcnsdklnsdklncvsdklnvsd vd sdncsdklnvsdlkv dcdnndsc dc </p>
    </div>

    <div class="box">
        <i class="fas fa-hotel"></i>
        <h3>affordable hotels</h3>
        <p>sdlknsdlnsdmcv sdklnsdklsdklnsdklnsdklndl n cksdncsdklncsdcnd
        ndskcnsdklnsdklncvsdklnvsd vd sdncsdklnvsdlkv dcdnndsc dc </p>
    </div>

    <div class="box">
        <i class="fas fa-hotel"></i>
        <h3>affordable hotels</h3>
        <p>sdlknsdlnsdmcv sdklnsdklsdklnsdklnsdklndl n cksdncsdklncsdcnd
        ndskcnsdklnsdklncvsdklnvsd vd sdncsdklnvsdlkv dcdnndsc dc </p>
    </div>
    
    <div class="box">
        <i class="fas fa-hotel"></i>
        <h3>affordable hotels</h3>
        <p>sdlknsdlnsdmcv sdklnsdklsdklnsdklnsdklndl n cksdncsdklncsdcnd
        ndskcnsdklnsdklncvsdklnvsd vd sdncsdklnvsdlkv dcdnndsc dc </p>
    </div>

    <div class="box">
        <i class="fas fa-hotel"></i>
        <h3>affordable hotels</h3>
        <p>sdlknsdlnsdmcv sdklnsdklsdklnsdklnsdklndl n cksdncsdklncsdcnd
        ndskcnsdklnsdklncvsdklnvsd vd sdncsdklnvsdlkv dcdnndsc dc </p>
    </div>

</div>

</section>
<!-- services section ends -->


<!-- gallery sections stars -->

<section class="gallery" id="gallery">

<h1 class="heading">
    <span>g</span>
    <span>a</span>
    <span>l</span>
    <span>l</span>
    <span>e</span>
    <span>r</span>
    <span>y</span>
</h1>

<div class="box-container">

<div class="box">
    <img src="images/capac.jpg" alt="">
    <div class="content">
        <h3>amazing plces</h3>
        <p>dfnmsdklcsd sdncsdklsd csdjckldc sd cncs csklcnslc sc </p>
        <a href="#" class="btn">see more</a>
    </div>
</div>

<div class="box">
    <img src="images/capac.jpg" alt="">
    <div class="content">
        <h3>amazing plces</h3>
        <p>dfnmsdklcsd sdncsdklsd csdjckldc sd cncs csklcnslc sc </p>
        <a href="#" class="btn">see more</a>
    </div>
</div>

<div class="box">
    <img src="images/capac.jpg" alt="">
    <div class="content">
        <h3>amazing plces</h3>
        <p>dfnmsdklcsd sdncsdklsd csdjckldc sd cncs csklcnslc sc </p>
        <a href="#" class="btn">see mpore</a>
    </div>
</div>

<div class="box">
    <img src="images/capac.jpg" alt="">
    <div class="content">
        <h3>amazing plces</h3>
        <p>dfnmsdklcsd sdncsdklsd csdjckldc sd cncs csklcnslc sc </p>
        <a href="#" class="btn">see more</a>
    </div>
</div>

<div class="box">
    <img src="images/capac.jpg" alt="">
    <div class="content">
        <h3>amazing plces</h3>
        <p>dfnmsdklcsd sdncsdklsd csdjckldc sd cncs csklcnslc sc </p>
        <a href="#" class="btn">see more</a>
    </div>
</div>

<div class="box">
    <img src="images/capac.jpg" alt="">
    <div class="content">
        <h3>amazing plces</h3>
        <p>dfnmsdklcsd sdncsdklsd csdjckldc sd cncs csklcnslc sc </p>
        <a href="#" class="btn">see more</a>
    </div>
</div>

</div>

</section>

<!-- gallery sections ends -->

<!-- review section starts -->

<section class="review" id="review">

<h1 class="heading">
    <span>r</span>
    <span>e</span>
    <span>v</span>
    <span>i</span>
    <span>e</span>
    <span>w</span>
</h1>

<div class="swiper-container review-slider">

<div class="swiper-wrapper">

<div class="swiper-slide">
    <div class="box">
        <img src="images/ugel02.png" alt="">
        <h3>johnw ssfd</h3>
        <p>nsndnas djdas asjasklnasl dsijidaslndas asxjasas
            naskncasklcnaskcn
            anasnasklncaskcn
            nsncasncasl sancasklncaskln casncasklncas cxaslcnaslk</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
    </div>
</div>

<div class="swiper-slide">
    <div class="box">
        <img src="images/ugel02.png" alt="">
        <h3>johnw ssfd</h3>
        <p>nsndnas djdas asjasklnasl dsijidaslndas asxjasas
            naskncasklcnaskcn
            anasnasklncaskcn
            nsncasncasl sancasklncaskln casncasklncas cxaslcnaslk</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
    </div>
</div>

<div class="swiper-slide">
    <div class="box">
        <img src="images/ugel02.png" alt="">
        <h3>johnw ssfd</h3>
        <p>nsndnas djdas asjasklnasl dsijidaslndas asxjasas
            naskncasklcnaskcn
            anasnasklncaskcn
            nsncasncasl sancasklncaskln casncasklncas cxaslcnaslk</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
    </div>
</div>

<div class="swiper-slide">
    <div class="box">
        <img src="images/ugel02.png" alt="">
        <h3>johnw ssfd</h3>
        <p>nsndnas djdas asjasklnasl dsijidaslndas asxjasas
            naskncasklcnaskcn
            anasnasklncaskcn
            nsncasncasl sancasklncaskln casncasklncas cxaslcnaslk</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
    </div>
</div>

<div class="swiper-slide">
    <div class="box">
        <img src="images/ugel02.png" alt="">
        <h3>johnw ssfd</h3>
        <p>nsndnas djdas asjasklnasl dsijidaslndas asxjasas
            naskncasklcnaskcn
            anasnasklncaskcn
            nsncasncasl sancasklncaskln casncasklncas cxaslcnaslk</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
    </div>
</div>

<div class="swiper-slide">
    <div class="box">
        <img src="images/ugel02.png" alt="">
        <h3>johnw ssfd</h3>
        <p>nsndnas djdas asjasklnasl dsijidaslndas asxjasas
            naskncasklcnaskcn
            anasnasklncaskcn
            nsncasncasl sancasklncaskln casncasklncas cxaslcnaslk</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
    </div>
</div>

</div>
</div>

</section>

<!-- review section ends -->

<!-- contact section starts -->

<section class="contact">

<h1 class="heading">
    <span>c</span>
    <span>o</span>
    <span>n</span>
    <span>t</span>
    <span>a</span>
    <span>c</span>
    <span>t</span>
</h1>

<div class="row">

<div class="image">
    <img src="images/contact.svg" alt="">
</div>

<form action="">
    <div class="inputBox">
        <input type="text" placeholder="name">
        <input type="email" placeholder="email">
    </div>
    <div class="inputBox">
        <input type="number" placeholder="number">
        <input type="text" placeholder="subjet">
    </div>
    <textarea placeholder="message" name="" id="" cols="30" rows="10"></textarea>
    <input type="submit" class="btn" value="send mesaaje">
</form>

</div>

</section>

<!-- contact section ends -->

<!-- brand section -->

 <section class="brand-container">

    <div class="swiper-container brand-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="images/ugel02.png" alt=""></div>
            <div class="swiper-slide"><img src="images/ugel02.png" alt=""></div>
            <div class="swiper-slide"><img src="images/ugel02.png" alt=""></div>
            <div class="swiper-slide"><img src="images/ugel02.png" alt=""></div>
            <div class="swiper-slide"><img src="images/ugel02.png" alt=""></div>
            <div class="swiper-slide"><img src="images/ugel02.png" alt=""></div>
        </div>
    </div>
 </section>

 <!-- footer section -->
  <section class="footer">
<div class="box-container">
    
    <div class="box">
        <h3>about us</h3>
        <p>hos sdk skdskdskd sdksdskdsk dkdksdk dksdkd</p>
    </div>

    <div class="box">
        <h3>branch locations</h3>
        <a href="#">india</a>
        <a href="#">india</a>
        <a href="#">india</a>
        <a href="#">india</a>
    </div>

    <div class="box">
        <h3>quick links</h3>
        <a href="#">facebook</a>
        <a href="#">instagram</a>
        <a href="#">twitter</a>
        <a href="#">tik tok</a>
    </div>

    <div class="box">
        <h3>follow us</h3>
        <a href="#">india</a>
        <a href="#">india</a>
        <a href="#">india</a>
        <a href="#">india</a>
    </div>


</div>

<h1 class="credit">Created by <span> mr. OSTOS RUBEN</span> || all righ reserved @2024 || SESYLSEMI S.A.C</h1>

  </section>


    <!-- enlace de archivo JS personalizado-->

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> <!-- estilo para SWIPER -->

    <script src="js/script1.js"></script>
</body>
</html>
