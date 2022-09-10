<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Los vecinos de la Paca-banda de rock de Treinta y tres Uruguay">
    <meta name="keywords" content="Los vecinos de la Paca, rock,treinta y tres, CONTACTO,Uruguay">
    <meta name="author" content="Pablo Cossio">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <title>LVP-CONTACTO</title>
</head>
<body>
    <!--HEADER-->
    <header class="container-fluid">
        <div class="row header">
            <div class="col-md-2 col-sm-12 header__logo">
                <img src="img/logo.gif" alt="LOGO" class="header__logo__img">
                <em class="header__logo__texto">LOS VECINOS DE LA PACA</em>
            </div>
            <div class="col-md-10 header__banner d-none  d-md-block">
            </div>
        </div>
        <!--NAV-->
        <div class="row header__nav">
            <nav class="navbar col-12 navbar-expand-lg">
                <!--BOTON CELULARES-->
                <button class="navbar-toggler ml-auto mr-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"  aria-label="Toggle navigation">
                    <span>
                    </span>
                </button>
                <!--BOTON CELULARES-->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto  ">
                        <li class="nav-item active">
                            <a class="link nav-link text-center" href="index.html">
                                <span class="link iconify" data-icon="mdi:yurt">       
                                </span>
                                INICIO
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="link nav-link text-center" href="quienes.html">
                                <span class="iconify" data-icon="mdi:vlc">
                                </span>
                            QUIENES SOMOS?
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <span class="link-sub">
                                <a class="link nav-link text-center dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="iconify" data-icon="ic:baseline-movie">
                                    </span>
                                    MULTIMEDIA
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <!--SUB MENU-->
                                    <a class="link dropdown-item text-center" href="fotos.html">
                                        <span class=" iconify" data-icon="ic:baseline-camera-alt">
                                        </span>
                                        FOTOS
                                    </a>
                                    <a class="link dropdown-item text-center" href="videos.html">
                                        <span class=" iconify" data-icon="ei:sc-youtube"></span>
                                        VIDEOS
                                    </a>
                                    <a class="link dropdown-item text-center" href="musica.html">
                                        <span class=" iconify"data-icon="ic:baseline-music-note">
                                        </span>
                                        MUSICA
                                    </a>
                                </div>
                            </span>
                        </li>
                        <li class="nav-item">
                            <a class="link nav-link text-center" href="contacto.html">
                                <span class="iconify" data-icon="bxs:contact"></span>
                                CONTACTO
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!--NAV-->
    </header>
    <!--HEADER-->
    <main class="container-fluid">
<!--CONTACTO-->
        <h1>CONTACTENOS</h1> 
        <div class="row main__contacto">
            <form action="enviar.php" class="col-md-6  main__contacto__form">
                <h2>MANDE MENSAJE</h2>
                    <label for="nombre">NOMBRE</label>
                    <input  name="nombre" type="text" placeholder="NOMBRE" class="form-control">
                    <label for="mail">EMAIL</label>
                    <input  name="mail" type="text" placeholder="EMAIL" class="form-control">
                    <label for="mensaje">MENSAJE</label>
                    <textarea class="form-control"  name="mensaje" placeholder="SU MENSAJE AQUI" rows="7"></textarea>
                    <button type="submit" class="btn btn-danger btn-lg">ENVIAR</button>
            </form>
            <div class="col-md-6 main__contacto__redes">
                <h2>NUESTRAS REDES</h2>
                <div class="main__contacto__red">
                    <a href="https://www.facebook.com/losvecinosdelapaca" target="_blank" title="Facebook">
                        <figure class="main__contacto__redes__figure">
                            <img src="img/facebook.png" alt="Facebook">
                        </figure>
                        <p>/losvecinosdelapaca</p>
                    </a>
                </div>
                <div class="main__contacto__red">
                    <a href="https://www.instagram.com/losvecinosdelapaca" target="_blank" title="Instagram">
                        <figure class="main__contacto__redes__figure">
                            <img src="img/instagram.png" alt="instagram">
                        </figure>
                        <p>/losvecinosdelapaca</p>
                    </a>
                </div>
                <div class="main__contacto__red">
                    <a href="https://youtube.com/channel/UCwHd3PkXauqHgcdwCi44ZWA" target="_blank" title="Facebook"> 
                        <figure class="main__contacto__redes__figure">
                            <img src="img/youtube.png" alt="youtube">
                        </figure>
                        <p>/losvecinosdelapaca</p>
                    </a>   
                </div>
                <div class="main__contacto__red">
                    <a href="https://youtube.com/channel/UCwHd3PkXauqHgcdwCi44ZWA" target="_blank" title="Facebook">
                        <figure class="main__contacto__redes__figure">
                            <img src="img/wassap.png" alt="whatsapp">
                        </figure>
                        <p>/losvecinosdelapaca</p>
                    </a>
                </div>
            </div>
        </div>
        <!--CONTACTO-->
    </main>
    <!--FOOTER-->
    <footer class="container-fluid row footer">
        <div class="col-4 footer__copyright">
            <p> copyright Los Vecinos de la Paca 2022</p>
        </div>
        <div class="col-4 footer__design">
            <p>desingn by pablocossio.net</p>   
        </div>
        <div class="col-4 footer__redes">
            <a href="https://www.facebook.com/losvecinosdelapaca" target="_blank" title="Facebook"><img src="img/facebook.png" alt="Facebook"></a>
            <a href="https://www.instagram.com/losvecinosdelapaca" target="_blank" title="Instagram"><img src="img/instagram.png" alt="Instagram"></a>
            <a href="https://www.instagram.com/losvecinosdelapaca" target="_blank" title="Instagram"><img src="img/wassap.png" alt="whatsapp"></a>
        </div>
    </footer>
    <!--FOOTER-->
    <!-- JavaScript -->
    <script src="js/menu.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
    </script>
    <!-- JavaScript -->
</body>
</html>