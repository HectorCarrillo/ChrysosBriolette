<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Diseño</title>
	 <link href="https://fonts.googleapis.com/css?family=Courgette|Open+Sans+Condensed:300,300i|Philosopher|Playfair+Display:400,700|Poiret+One|Quattrocento+Sans" rel="stylesheet">
	<link rel="stylesheet" href="./css/style-form-4.css">
	<link href="./css/style-icon.css" rel="stylesheet" type="text/css">
	<script src="./js/jquery-1.9.0.min.js" type="text/javascript"></script>
	<script src="./js/jquery.dd.min.js" type="text/javascript"></script>
</head>
<body>
	<div class="wrap wrap-movil" >
		<div class="container container-movil">
			<div class="form-main form-main-movil">
				<div class="thumb-logo">
					<img src="./img/logo-2.png" alt="">
				</div>
				<div class="box-title">
					<h2 id="title">"los mejores momentos se recuerdan con un lindo detalle"</h2>
				</div>
				<form class="form-movil" id="form" onsubmit="return validation();" action="" method="post" accept-charset="utf-8">
					<div class="info-data">
						<div class="info-name">
							<input class="in-movil" id="first_name" type="text" name="first_name" value="" placeholder="Nombre(s)" required="">
							<input class="in-movil" id="last_name" type="text" name="last_name" value="" placeholder="Apellido(s)" required="">
						</div>
						<div class="info-more">
							<input class="in-movil" id="phone" type="text" name="phone" value="" placeholder="9991213141" required="">
							<input class="in-movil" id="email" type="email" name="email" value="" placeholder="ejemplo@hotmail.com" required="">
						</div>
					</div>
					<div class="items">
						<div class="box-material">
							<select  class="model select-movil" name="webmenu" id="webmenu">
								<option value="Modelo-default">Selecione un modelo</option>
   								<option value="" data-image="./img/mini-1.jpg">aqwerty</option>
    							<option value="" data-image="./img/mini-2.jpg">aqwerty</option>
    							<option value="" data-image="./img/mini-3.jpg">aqwerty</option>
    							<option value="" data-image="./img/mini-1.jpg">aqwerty</option>
    							<option value="" data-image="./img/mini-2.jpg">aqwerty</option>
    							<option value="" data-image="./img/mini-3.jpg">aqwerty</option>
  							</select>
							<select class="material select-movil" >
								<option value="Material">Selecione un material</option>
								<option data-image="./img/mini-oro.jpg" value="Oro">Oro</option>
								<option data-image="./img/mini-plata.jpg" value="Plata">Plata</option>
								<option data-image="./img/mini-otro.jpg" value="Otro">Otro</option>
							</select>
						</div>
					</div>
					<div class="box-remarke box-remarke-movil">
						<textarea id="remarke" name="remarke" placeholder="Comentarios"></textarea>
					</div>
					<div class="box-control box-control-movil">
						<input id="clear" type="reset" name="clear" value="Borrar">
						<input id="send" type="submit" name="send" value="Guardar">
					</div>
					<div class="social social-movil">
               			<div class="box-social">
                    		<div class="media">
                        		<a id="facebook" href="#" title="facebook">
                        	    	<span class="icon-facebook">
                         	   		</span>
                        		</a>
                       		 	<a id="instagram" href="#" title="instagram">
                          	  		<span class="icon-instagram">
                           	 		</span>
                        		</a>
                       			<a id="youtube" href="#" title="youtube">
                           		 	<span class="icon-youtube">
                            		</span>
                        		</a>
                    		</div>
                   			<div class="return-home">
                        		<a href="./index.php" title="Home">
                           			Ir a inicio
                       		 	</a>
                        		<a href="./items.php" title="Items">
                         			Ir al articulo
                        		</a>
                   			</div>
                		</div>
            		</div>
				</form>
			</div>
		</div>
	</div>
<script language="javascript">
$(document).ready(function(e) {
try {
$("body select").msDropDown();
} catch(e) {
alert(e.message);
}
});
</script>
</body>
</html>