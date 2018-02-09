<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Diseñalo tu mismo</title>
	 <link href="https://fonts.googleapis.com/css?family=Courgette|Open+Sans+Condensed:300,300i|Philosopher|Playfair+Display:400,700|Poiret+One|Quattrocento+Sans" rel="stylesheet">
	<link rel="stylesheet" href="./css/style-form-4.css">
	<link href="./css/style-icon.css" rel="stylesheet" type="text/css">
	<script src="./js/jquery-1.9.0.min.js" type="text/javascript"></script>
	<script src="./js/jquery.dd.min.js" type="text/javascript"></script>
</head>
<body>
	<div class="wrap">
		<div class="container">
			<div class="form-main">
				<div class="thumb-logo">
					<img src="./img/logo-2.png" alt="">
				</div>
				<div class="box-title">
					<h2 id="title">"los mejores momentos se recuerdan con un lindo detalle"</h2>
				</div>
				<form id="form" onsubmit="return validation();" action="" method="post" accept-charset="utf-8">
					<div class="info-data">
						<div class="info-name">
							<input id="first_name" type="text" name="first_name" value="" placeholder="Nombre(s)" required="">
							<input id="last_name" type="text" name="last_name" value="" placeholder="Apellido(s)" required="">
						</div>
						<div class="info-more">
							<input id="phone" type="text" name="phone" value="" placeholder="9991213141" required="">
							<input id="email" type="email" name="email" value="" placeholder="ejemplo@hotmail.com" required="">
						</div>
					</div>
					<div class="items">
						<div class="box-material">
							<select  class="model" name="webmenu" id="webmenu">
								<option value="Modelo-default">Selecione un modelo</option>
   								<option value="" data-image="./img/mini-1.jpg">aqwerty</option>
    							<option value="" data-image="./img/mini-2.jpg">aqwerty</option>
    							<option value="" data-image="./img/mini-3.jpg">aqwerty</option>
    							<option value="" data-image="./img/mini-1.jpg">aqwerty</option>
    							<option value="" data-image="./img/mini-2.jpg">aqwerty</option>
    							<option value="" data-image="./img/mini-3.jpg">aqwerty</option>
  							</select>
							<select class="material" >
								<option value="Material">Selecione un material</option>
								<option data-image="./img/mini-oro.jpg" value="Oro">Oro</option>
								<option data-image="./img/mini-plata.jpg" value="Plata">Plata</option>
								<option data-image="./img/mini-otro.jpg" value="Otro">Otro</option>
							</select>
						</div>
						<div class="box-material">
							<select  class="model" name="webmenu">
								<option value="Tamanio">Tamaño</option>
   								<option value="N°8">
                                    N°8
                                </option>
                                <option value="n°9">
                                    n°9
                                </option>
                                <option value="N°10">
                                    N°10
                                </option>
								                <option value="N°11">
                                    N°11
                                </option>
                                <option value="N°12">
                                    N°12
                                </option>
                                <option value="N°13">
                                    N°13
                                </option>
                                <option value="N°14">
                                    N°14
                                </option>
                                <option value="N°15">
                                    N°15
                                </option>
                                <option value="N°16">
                                    N°16
                                </option>
								                <option value="N°17">
                                    N°17
                                </option>
                                <option value="N°18">
                                    N°18
                                </option>
                                <option value="N°19">
                                    N°19
                                </option>
                                <option value="N°20">
                                    N°20
                                </option>
                                <option value="N°21">
                                    N°21
                                </option>
                                <option value="N°22">
                                    N°22
                                </option>
                                <option value="N°23">
                                    N°23
                                </option>
                                <option value="N°24">
                                    N°24
                                </option>
                            </select>
							<select class="material" name="webmenu">
								<option value="Material">Piedra</option>
								<option value="Rubi">
                                    Rubi
                                </option>
                                <option value="Jade">
                                    Jade
                                </option>
                                <option value="Rubi2">
                                    Rubi2
                                </option>
                                <option value="Jade2">
                                     Jade2
                                </option>
                                <option value="OtroMaterial">
                                     Otro Material
                                </option>
							</select>
						</div>
						<div class="box-material">
							<select  class="material" name="webmenu">
								<option value="NPiedra">Número de piedra</option>
   								<option value="1">
                                  	1
                                </option>
                                <option value="2">
                                    2
                                </option>
                                <option value="3">
                                   	3
                                </option>
                                <option value="4">
                                   	4
                                </option>
                                <option value="5">
                                   	5
                                </option>
                                <option value="+5">
                                   	+ 5
                                </option>
                                <option value="OtroNumero">
                                   	Otro Número
                                </option>
                            </select>
							<select class="material" name="webmenu">
								<option value="Ocacion">Tipo de Ocasión</option>
								<option value="Regalo">
                                   	Regalo
                                </option>
                                <option value="Compromiso">
                                   Compromiso
                                </option>
                                <option value="Boda">
                                    Boda
                                </option>
                                <option value="Aniversario">
                                    Aniversario
                                </option>
							</select>
						</div>
					</div>
					<div class="box-remarke">
						<textarea id="remarke" name="remarke" placeholder="Comentarios"></textarea>
					</div>
					<div class="box-control">
						<input id="clear" type="reset" name="clear" value="Borrar">
						<input id="send" type="submit" name="send" value="Guardar">
					</div>
					<div class="social">
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