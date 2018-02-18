<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0"></meta>
        <meta charset="utf-8"></meta>
        <meta content="IE=edge" http-equiv="X-UA-Compatible"></meta>
        <title>header</title>
        <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700|Lobster|Roboto:400,500" rel="stylesheet"></link>
        <link href="./css/style-icon.css" rel="stylesheet" type="text/css"></link>
        <link rel="stylesheet" type="text/css" href="./css/style-header-main.css"></link>
        <script src="./js/effect-index.js">
        </script>
        <script src="./js/jquery-3.1.1.min.js">
        </script>
    </head>
<body>
<header>
    <div id="container container-2">
        <div class="menu-movil">
            <div id="wraper">
                        <div  id="myMenu" class="main-item movil" onclick="myFunction()">
                            <span class="line line01"></span>
                            <span class="line line02"></span>
                            <span class="line line03"></span>
                        </div>
            </div>
            <div id="myDropdown" class="dropdown-content movil-nav mov-nav">
                       <a href="./index.php" id="home" title="Inicio">
                            Inicio
                        </a>
                        <a href="./joyeria.php" title="Joyeria">
                            Joyeria
                        </a>
                        <a href="#" title="Compromiso">
                            Compromiso
                        </a>
                        <a href="#" title="Regalos">
                            Regalos
                        </a>
                        <a href="./location.php" title="Ubicación">
                            Ubicación
                        </a>
            </div>
        </div>
        <div class="logo logo-mini">
                    <a href="./index.php" id="home" title="Inicio">
                        <img alt="Chrysosbriolette" src="./img/miniL.png">
                        </img>
                    </a>
        </div>
        <div class="main-menu main-menu-2 mov-2">
            <nav id="nav-toggle">
                        <a href="./index.php" id="home" title="Inicio">
                            Inicio
                        </a>
                        <a href="./joyeria.php" title="Joyeria">
                            Joyeria
                        </a>
                        <a href="./engagement.php" title="Compromiso">
                            Compromiso
                        </a>
                        <a href="./gifts.php" title="Regalos">
                            Regalos
                        </a>
                        <a href="./location.php" title="Ubicación">
                            Ubicación
                        </a>
            </nav>
        </div>
    </div>
</header>
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
</body>
</html>