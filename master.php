
<?php
include("conexion.php");
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="ANSII">
        <title>Base Record Productions</title>
        <link href="Estilos/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="Estilos/estilos.css" rel="stylesheet" media="screen" type="text/css"/>        
        <script src="Estilos/jquery-1.12.4.min.js" type="text/javascript"></script>
        <script src="Estilos/bootstrap.js" type="text/javascript"></script>
        <script src="Estilos/audioPlayer.js" type="text/javascript"></script>
    </head>
<body>
        <div class="container-fluid">
       
                <div class="row">
                <header class="col-lg-12"> 
                    <figure class="col-lg-12">                    
                    <img class ="col-lg-3 col-lg-offset-5" src="img/logocolor.png" alt=""/>   
                    </figure>
                </header>
            </div>
            
           <div class="navbar navbar-default navbar-fixed-top navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
            
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                    <a href="" class="navbar-brand"> <img src="img/logocolor.png" alt="" id="logoNavbar"/> </a>  
                </div>
                <div class="collapse navbar-collapse" id="example">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="catalogo.php">Catalogo</a></li>
                        <li><a href="contacto.php">Contacto</a></li>
                        <li><a href="compras.php">Compras</a></li>
<!--                 
-->                    </ul>
                    
                    
                    <form action="" class="navbar-form navbar-right" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="search">                            
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
            <div class="row">
            <div id="myCarousel" class="carousel slide ">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to = "0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to = "1"></li>
                <li data-target="#myCarousel" data-slide-to = "2"></li>
            </ol>
            
            <div class="carousel-inner">
                <div class="item active">
                    <img src="img/slider/img1.jpg" alt="" class="img-responsive"/>                    
                    <div class="carousel-caption">
                        <h3 class="tituloSlider">4 Way Cyber Diarrhea Split</h3>
                        <p>The Out! - Cardinal Batman - Fartbomb - ROT in Space
                            <br>
                        Split de Cybergrind con bandas de Holanda, Hungría y Uruguay.</p>
                    </div>
                </div>
                <div class="item">
                    <img src="img/slider/img2.jpg" alt="" class="img-responsive"/>
                    
              <div class="carousel-caption">
                        <h3 class="tituloSlider">Pulmonary Fibrosis</h3>
                        <p>"Idiopathic Pulmonary Fibrosis"                            
                        </p>
                        
                    </div>
                </div>
                <div class="item ">
                    <img src="img/slider/im3.jpg" alt="" class="img-responsive"/>
              <div class="carousel-caption">
                        <h3 class="tituloSlider">Unhealthy Potions for Whores Witches</h3>
                        <p>Defibrillator - Comemierda - Vomito - Genetikai Hulladék - Clitorodectomía
                        <br>
                        Split con bandas de: Hungría, Uruguay y Ecuador.<p>
                    </div>
                </div>
                <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                    <span class="icon-prev"></span>
                </a>
                
                <a class="carousel-control right" href="#myCarousel" data-slide="next">
                    <span class="icon-next"></span>
                </a>
        </div>
        </div>
            </div>
            <div class="row">
                <section class="col-lg-3 sectionFondo" >
                    <article class="col-lg-12">
                        <h3>"4 Way Cyber Diarrhea Split"</h3>
                        <img src="img/00 - FrontCover.jpg" alt="" class="img-responsive"/>
                    </article>
                    <article class="col-lg-12">
                        <h3>"Last Days of Chorros - Antichorros"</h3>
                        <img src="img/tapa ldoc.jpg" alt="" class="img-responsive"/>
                    </article>
                    <article class="col-lg-12">
                        <h3>"Siniestro Total - Menos Mal Que Nos Queda Portugal"</h3>
                        <img src="img/menosmalXX.jpg" alt="" class="img-responsive"/>
                    </article>
                </section>
                <main class="col-lg-6" id="contenido">
                    <?php
                    mostrarContenido();
                    ?>

                </main>
                
                <section class="col-lg-3" id="reproductorFondo">
                    <div id="reproductor">
                        <div id="cabecera">
                      <audio src="" controls id="audioPlayer">
        Sorry, your browser doesn't support html5!
    </audio>
                            </div>
                        <div id="lista">
    <ul id="playlist">
        <li class="current-song">
            <a href="musica/01. Hell Awake.mp3">Butcher ABC - Hell Awake</a></li>
        <li><a href="musica/02 - Cardinal Batman - Health Problems.mp3">Cardinal Batman - Health Problems</a></li>
        <li><a href="musica/02 Societies Claws.mp3">Cülo - Societies Claws</a></li>
        
        
    </ul>
    </div>
    <script>        
        audioPlayer();
    </script>
    </div>
                </section>
            </div>
            <div class="row">
                <footer class="col-lg-12">
                    FOOTER
                </footer>
            </div>
        </div>
        
     
    </body>
</html>
