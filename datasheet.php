<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0"></meta>
    <meta charset="utf-8"></meta>
    <meta content="IE=edge" http-equiv="X-UA-Compatible"></meta>
	<title>Ficha Tecnica</title>
    <link href="./css/style-datasheet-main.css" rel="stylesheet"></link>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css"></link>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"></link>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet"></link>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- <script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->
   	<script src="./js/jquery-3.1.1.min.js">
    </script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
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
     <section class="main-datasheet data-mov">
     	<div class="wrap">
     		<section class="container-items cont-ite-mov">
     			<article class="art-flex art-thumb cont-thumb-mov" id="main_area">
     				<div class="content-thum" id="carousel-bounding-box">
                        <div class="flex-cont carousel slide" id="myCarousel">
                            <div class="box-thumb carousel-inner">
                                <div class="thumb active item mag" data-slide-number="0">
                    	             <img data-toggle="magnify" src="./img/1-2.png" alt="">
               		           </div>
               		           <div class="thumb item mag" data-slide-number="1">
                  	                 <img data-toggle="magnify" src="./img/2-2.png" alt="">
               		           </div>
               		           <div class="thumb item mag" data-slide-number="2">
                  	                  <img data-toggle="magnify" src="./img/3-2.png" alt="">
               		           </div>
                            </div>                           
                        </div>
                     </div> 
                    <div class="cont-sli hidden-xs" id="slider-thumbs">
             	          <ul class="ul-sli hide-bullets">
                	           <li class="">
                     	          <a class="" id="carousel-selector-0"><img src="./img/1-2.png"></a>
                 	              </li>
                 	          <li class="">
                     	          <a class="" id="carousel-selector-1"><img src="./img/2-2.png"></a>
                 	          </li>
                 	          <li class="">
                     	          <a class="" id="carousel-selector-2"><img src="./img/3-2.png"></a>
                 	          </li>
             	          </ul>                 
                    </div>    
     			</article>
     			<article class="art-flex container-info cont-inf-mov">
     				<div class="cont-inf">
     					<h1 class="title">Anillo oro rosa</h1>
     					<h2 class="sub-title">Modelo 012457</h2>
     					<p class="paragraph">
     						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
     						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
     						quis nostrud 
     					</p>
     					<h2 class="sub-title">$31,000.00 <span>MXN</span></h2>
     				</div>
                    <div class="cont-btn-dsh">
                        
                        <a class="btn btn-a" href="./form-6.php" title="">Adquirir</a>
                        
                        <a class="btn btn-b" href="./form-6.php" title="">Diseñar</a>
                      
                    </div>
     			</article>
     		</section>
     	</div>
     </section>
    <?php 
    	include ("./footer.php");
     ?>
</body>
<script type="text/javascript">
 
    !function($) {
        "use strict"; 
        var Magnify = function(element, options) {
            this.init('magnify', element, options)
        }
        Magnify.prototype = {
            constructor: Magnify,
            init: function(type, element, options) {
                var event = 'mousemove',
                    eventOut = 'mouseleave';
                this.type = type
                this.$element = $(element)
                this.options = this.getOptions(options)
                this.nativeWidth = 0
                this.nativeHeight = 0
                this.$element.wrap('<div class="magnify" \>');
                this.$element.parent('.magnify').append('<div class="magnify-large" \>');
                this.$element.siblings(".magnify-large").css("background", "url('" + this.$element.attr("src") + "') no-repeat");
                this.$element.parent('.magnify').on(event + '.' + this.type, $.proxy(this.check, this));
                this.$element.parent('.magnify').on(eventOut + '.' + this.type, $.proxy(this.check, this));
            },
            getOptions: function(options) {
                options = $.extend({}, $.fn[this.type].defaults, options, this.$element.data())
                if (options.delay && typeof options.delay == 'number') {
                    options.delay = {
                        show: options.delay,
                        hide: options.delay
                    }
                }
                return options
            },
            check: function(e) {
                var container = $(e.currentTarget);
                var self = container.children('img');
                var mag = container.children(".magnify-large");
                // Get the native dimensions of the image
                if (!this.nativeWidth && !this.nativeHeight) {
                    var image = new Image();
                    image.src = self.attr("src");
                    this.nativeWidth = image.width;
                    this.nativeHeight = image.height;
                } else {
                    var magnifyOffset = container.offset();
                    var mx = e.pageX - magnifyOffset.left;
                    var my = e.pageY - magnifyOffset.top;
                    if (mx < container.width() && my < container.height() && mx > 0 && my > 0) {
                        mag.fadeIn(100);
                    } else {
                        mag.fadeOut(100);
                    }
                    if (mag.is(":visible")) {
                        var rx = Math.round(mx / container.width() * this.nativeWidth - mag.width() / 2) * -1;
                        var ry = Math.round(my / container.height() * this.nativeHeight - mag.height() / 2) * -1;
                        var bgp = rx + "px " + ry + "px";
                        var px = mx - mag.width() / 2;
                        var py = my - mag.height() / 2;
                        mag.css({
                            left: px,
                            top: py,
                            backgroundPosition: bgp
                        });
                    }
                }
            }
        }
        $.fn.magnify = function(option) {
            return this.each(function() {
                var $this = $(this),
                    data = $this.data('magnify'),
                    options = typeof option == 'object' && option
                if (!data) $this.data('tooltip', (data = new Magnify(this, options)))
                if (typeof option == 'string') data[option]()
            })
        }
        $.fn.magnify.Constructor = Magnify
        $.fn.magnify.defaults = {
            delay: 0
        }
        $(window).on('load', function() {
            $('[data-toggle="magnify"]').each(function() {
                var $mag = $(this);
                $mag.magnify()
            })
        })
    }(window.jQuery); 
</script>
<script type="text/javascript"> 
 jQuery(document).ready(function($) {
             
                    $('#myCarousel').carousel({
                            interval: false
                    });
             
                    $('#carousel-text').html($('#slide-content-0').html());
             
                    //Handles the carousel thumbnails
                   $('[id^=carousel-selector-]').click( function(){
                        var id = this.id.substr(this.id.lastIndexOf("-") + 1);
                        var id = parseInt(id);
                        $('#myCarousel').carousel(id);
                    });
             
             
                    // When the carousel slides, auto update the text
                    $('#myCarousel').on('slid.bs.carousel', function (e) {
                             var id = $('.item.active').data('slide-number');
                            $('#carousel-text').html($('#slide-content-'+id).html());
                    });
            }); 
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