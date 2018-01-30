<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
        <meta charset="utf-8">
            <meta content="IE=edge" http-equiv="X-UA-Compatible">
                <title>
                    header
                </title>
                <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700|Lobster|Roboto:400,500" rel="stylesheet">
                <link href="./css/style-icon.css" rel="stylesheet" type="text/css">
                <link rel="stylesheet" type="text/css" href="./css/style-header-main.css">
                <!-- <script src="./js/effect-main.js" type="text/javascript" charset="utf-8" ></script>
                <script src="./js/jquery-3.1.1.min.js" type="text/javascript" charset="utf-8" ></script> -->
            </meta>
        </meta>
    </head>
<body>
<header>
            <div id="container">
                <div class="menu-movil">
                   <div id="wraper">
                        <div  id="myMenu" class="main-item movil" onclick="myFunction()">
                            <span class="line line01"></span>
                            <span class="line line02"></span>
                            <span class="line line03"></span>
                        </div>
                    </div>
                    <div id="myDropdown" class="dropdown-content movil-nav mov-nav">
                        <a href="./index.php" id="home" title="Home">
                            HOME
                        </a>
                        <a href="#<!-- ./items.php -->" title="Joyeria">
                            JOYERIA
                        </a>
                        <a href="#<!-- ./engagement.php -->" title="Compromiso">
                            COMPROMISO
                        </a>
                        <a href="#<!-- ./gifts.php -->" title="Regalos">
                            REGALOS
                        </a>
                        <a href="#<!-- ./chrysos.php -->" title="pendientes">
                            ACERCA DE
                        </a>
                    </div>
                </div>
                <div class="logo">
                    <img alt="" src="./img/logo.jpg">
                    </img>
                </div>
                <div class="main-menu mov-2">
                    <nav id="nav-toggle">
                        <a href="./index.php" id="home" title="Home">
                            HOME
                        </a>
                        <a href="./items.php" title="Joyeria">
                            JOYERIA
                        </a>
                        <a href="./engagement.php" title="Compromiso">
                            COMPROMISO
                        </a>
                        <a href="./gifts.php" title="Regalos">
                            REGALOS
                        </a>
                        <a href="./chrysos.php" title="pendientes">
                            ACERCA DE
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