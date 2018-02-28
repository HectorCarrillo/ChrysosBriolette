<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"></meta>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0"></meta>
        <meta content="IE=edge" http-equiv="X-UA-Compatible"></meta>
        <title>Chrysos-Briolette</title>
        <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700|Lobster|Roboto:400,500" rel="stylesheet"></link>
        <link href="./css/style-index-main.css" rel="stylesheet"></link>
        <link href="./css/style-icon.css" rel="stylesheet" type="text/css"></link>
         <!-- style header -->
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700|Lobster|Roboto:400,500" rel="stylesheet"></link>
    <link href="./css/style-icon.css" rel="stylesheet" type="text/css"></link>
    <link rel="stylesheet" type="text/css" href="./css/style-header-main.css"></link>
    <!-- Style footer -->
    <link href="./css/style-footer-main.css" rel="stylesheet"></link>
        
    </head>
    <body>
        <?php
            include("./header.php");
        ?> 
       <!--  <?php 
          include ("./slider/slider.php");
        ?> -->
        <section class="section-main section-movil">
            <div class="wrap">
                <div class="flex-conteiner">
                    <div id="anillos" class="box-flex-movil">
                        <div class="content-info">
                            <div class="info" id="info-1">
                                <h2 class="title">
                                    Lorem ipsum
                                </h2>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                                </p>
                            </div>
                            <div class="btn" id="btn-1">
                                <a href="#" title="">
                                    Ver más
                                </a>
                            </div>
                        </div>
                    </div>
                    <div id="dijes" class="box-flex-movil">
                        <div class="content-info">
                            <div class="info" id="info-1">
                                <h2 class="title">
                                    Lorem ipsum
                                </h2>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                                </p>
                            </div>
                            <div class="btn" id="btn-1">
                                <a href="Ver más" title="">
                                    Ver más
                                </a>
                            </div>
                        </div>
                    </div>
                    <div id="anillos" class="box-flex-movil">
                        <div class="content-info">
                            <div class="info" id="info-1">
                                <h2 class="title">
                                    Lorem ipsum
                                </h2>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                                </p>
                            </div>
                            <div class="btn" id="btn-1">
                                <a href="./items.html" title="">
                                    Ver más
                                </a>
                            </div>
                        </div>
                    </div>
                    <div id="dijes" class="box-flex-movil">
                        <div class="content-info">
                            <div class="info" id="info-1">
                                <h2 class="title">
                                    Lorem ipsum
                                </h2>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                                </p>
                            </div>
                            <div class="btn" id="btn-1">
                                <a href="Ver más" title="">
                                    Ver más
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
            include("./footer.php");
        ?>
    </body>
    <script src="./js/effect-index.js">
    </script>
    <script src="./js/jquery-3.1.1.min.js">
    </script>
    <!-- Effect header -->
    <script>
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        
        }
        window.onclick = function(e) {
            if (!e.target.matches('.main-item')) {

                    var wraper = document.getElementsByClassName("dropdown-content");
                    var i;
                    for (i = 0; i < wraper.length; i++) {
                     var openDropdown = wraper[i];
                        if (openDropdown.classList.contains("show")) {
                        openDropdown.classList.remove("show");
                     }
                 }
            }
        }
    </script>
    <script src="./js/effect-index.js">
    </script>
</html>