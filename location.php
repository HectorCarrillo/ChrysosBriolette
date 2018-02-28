<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0"></meta>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ubicación</title>
	<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700|Lobster|Roboto:400,500" rel="stylesheet"></link>
     <link href="./css/style-icon.css" rel="stylesheet" type="text/css"></link>
	<link rel="stylesheet" type="text/css" href="./css/style-location-main.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700|Philosopher" rel="stylesheet">
   <!-- style header -->
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700|Lobster|Roboto:400,500" rel="stylesheet"></link>
    <link href="./css/style-icon.css" rel="stylesheet" type="text/css"></link>
    <link rel="stylesheet" type="text/css" href="./css/style-header-main.css"></link>
    <!-- Style footer -->
    <link href="./css/style-footer-main.css" rel="stylesheet"></link>
	   
<body>
	<?php 
		include ('./header.php');
     ?>
    <section class="main-location location-mov">
     	<div class="wrap wrap-mov">
     		<section class="container-information cont-flex flex-mov">
     			<article class="art-flex flex-1 content-img art-mov" id="art-mov">
     				 <div class="thumb thum-mov">
     				 	 <img src="./img/location.jpg" alt="Chrysosbriolette">
     				 </div>
     			</article>
                    <article class="art-flex flex-2 content-information art-mov" id="art-mov">
                          <div class="content-text">
                                <h1 class="title">
                                  Chrysos Briolette 
                               </h1>
                               <h2 class="sub-title">
                                  Comprometido con el arte y elegancia.
                               </h2>
                               <p class="paragraph">
                                  <!-- Nos ponemos a sus ordenes, cumpliendo con el compromiso de ofrecerle 
                                  los diseños que solo los tiene en su imaginacion, regalando momentos 
                                  inolvidables, convirtiendo esos momentos en bellos recuerdos.  -->
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex.
                               </p>
                          </div>
                    </article>
     		</section>
     		<section class="container-location cont-flex flex-mov">
     				<article class="art-flex container-horary cont-hor-mov">
     				<div class="content-text">
                              <h1 class="title t2">
                                     Visítanos 
                              </h1>
                              <h2 class="sub-title"><span class="icon-calendar"></span>Lunes a Viernes</h2>
                              <h2 class="sub-title"><span class="icon-clock"></span>8:00 AM a 19:00 PM</h2>
                              <h2 class="sub-title"><span class="icon-calendar"></span>Sabados</h2>
                              <h2 class="sub-title"><span class="icon-clock"></span>8:00 AM a 14:00 PM</h2>
                              <h2 class="sub-title"><span class="icon-phone"></span>
                                     Número de atención al cliente
                              </h2>
                              <h2 class="sub-title">+51 (999)9.99.99</h2>
                              <h2 class="sub-title"><span class="icon-envelop"></span>Correo Electronico
                              </h2>
                              <h2 class="sub-title">ventas@chrysos3djoyeria.com.mx</h2>
                         </div>
		   			</article>
     			     <article class="art-flex content-location content-location-mov">
     				 <iframe class="if-location" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d931.1969476115065!2d-89.60163916127009!3d21.00114196875403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5676cc7f1612f5%3A0x258478fd840d0621!2sCalle+14+192%2C+M%C3%A9xico+Oriente%2C+97137+M%C3%A9rida%2C+Yuc.!5e0!3m2!1ses-419!2smx!4v1518810125333" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
				     </article>
     		</section>
     	</div>
    </section>
 <?php 
		include ('./footer.php');
 ?>
</body>
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