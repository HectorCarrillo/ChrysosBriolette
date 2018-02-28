<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"></meta>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0"></meta>
        <meta content="IE=edge" http-equiv="X-UA-Compatible"></meta>
        <title>Ficha Tecnica</title>
        <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700|Lobster|Roboto:400,500" rel="stylesheet"></link>
        <link href="./css/style-index-main.css" rel="stylesheet"></link>
        <link href="./css/style-icon.css" rel="stylesheet" type="text/css"></link>
        <?php
            include("./header.php");
        ?> 


        <style type="text/css">
        .hide-bullets {
            list-style:none;
            margin: auto;
        }
        .hide-bullets img{
            width: 100%;
            height: 100%;
        }
        </style>
        /* Fin de la configuracion>>>>>>>>>*/

        <!-- <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> -->
        <!-- <script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->

        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
        <style type="text/css">
        .x{
			border:2px solid red;
			width: 59%;
        }
        .x2{
        	width: 100%;
        	text-align: center;
        }
        .x2 li {
			display: inline-block;
			width: 50px;
			height: 50px;
			border:2px solid green;
        }
        .mag {
            width:200px;
            margin: 0 auto;
            float: none;
        }   
        .mag img {
            max-width: 100%;
        }
        .magnify {
            position: relative;
            cursor: none
        }
        .magnify-large {
            position: absolute;
            display: none;
            width: 175px;
            height: 175px;

        -webkit-box-shadow: 0 0 0 7px rgba(255, 255, 255, 0.85), 0 0 7px 7px rgba(0, 0, 0, 0.25), inset 0 0 40px 2px rgba(0, 0, 0, 0.25);
           -moz-box-shadow: 0 0 0 7px rgba(255, 255, 255, 0.85), 0 0 7px 7px rgba(0, 0, 0, 0.25), inset 0 0 40px 2px rgba(0, 0, 0, 0.25);
                box-shadow: 0 0 0 7px rgba(255, 255, 255, 0.85), 0 0 7px 7px rgba(0, 0, 0, 0.25), inset 0 0 40px 2px rgba(0, 0, 0, 0.25);
        
        -webkit-border-radius: 100%;
           -moz-border-radius: 100%;
                 border-radius: 100%
                }
                </style>
                /*Fin de Configuracion>>>>>>>>>>>>*/
                <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
                <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
</head>
<body>
<section class="section-main section-movil">
    <div class="wrap">
        <div class="flex-conteiner">

            <div class="container">
                <div id="">
                <!-- Slider -->
                    <div class="">
                        <div class="col-xs" id="slider">
                        <!-- Top part of the slider -->
                            <div class="">
                            <div class="col-sm" id="carousel-bounding-box">
                                <div class="carousel slide" id="myCarousel">
                                    <!-- Carousel items -->
                                    <div class="<!-- carousel-inner -->">
                                        <div class="active item mag" data-slide-number="0">
                                        <img data-toggle="magnify" src="./img/1-2.png" alt="">
                                    	</div>

                                        <div class="item mag" data-slide-number="1">
                                        <img data-toggle="magnify" src="./img/2-2.png">
                                    	</div>

                                        <div class="item mag" data-slide-number="2">
                                        <img data-toggle="magnify" src="./img/3-2.png">
                                    	</div>
                                    </div><!-- Carousel nav -->                               
                                </div>
                            </div>


                            <!-- <script type="text/javascript">
                                    /*
                                    Credits:
                                    https://github.com/marcaube/bootstrap-magnify
                                    */


                                    !function ($) {

                                        "use strict"; // jshint ;_;


                                        /* MAGNIFY PUBLIC CLASS DEFINITION
                                         * =============================== */

                                        var Magnify = function (element, options) {
                                            this.init('magnify', element, options)
                                        }

                                        Magnify.prototype = {

                                            constructor: Magnify

                                            , init: function (type, element, options) {
                                                var event = 'mousemove'
                                                    , eventOut = 'mouseleave';

                                                this.type = type
                                                this.$element = $(element)
                                                this.options = this.getOptions(options)
                                                this.nativeWidth = 0
                                                this.nativeHeight = 0

                                                this.$element.wrap('<div class="magnify" \>');
                                                this.$element.parent('.magnify').append('<div class="magnify-large" \>');
                                                this.$element.siblings(".magnify-large").css("background","url('" + this.$element.attr("src") + "') no-repeat");

                                                this.$element.parent('.magnify').on(event + '.' + this.type, $.proxy(this.check, this));
                                                this.$element.parent('.magnify').on(eventOut + '.' + this.type, $.proxy(this.check, this));
                                            }

                                            , getOptions: function (options) {
                                                options = $.extend({}, $.fn[this.type].defaults, options, this.$element.data())

                                                if (options.delay && typeof options.delay == 'number') {
                                                    options.delay = {
                                                        show: options.delay
                                                        , hide: options.delay
                                                    }
                                                }

                                                return options
                                            }

                                            , check: function (e) {
                                                var container = $(e.currentTarget);
                                                var self = container.children('img');
                                                var mag = container.children(".magnify-large");

                                                // Get the native dimensions of the image
                                                if(!this.nativeWidth && !this.nativeHeight) {
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

                                                    if(mag.is(":visible"))
                                                    {
                                                        var rx = Math.round(mx/container.width()*this.nativeWidth - mag.width()/2)*-1;
                                                        var ry = Math.round(my/container.height()*this.nativeHeight - mag.height()/2)*-1;
                                                        var bgp = rx + "px " + ry + "px";

                                                        var px = mx - mag.width()/2;
                                                        var py = my - mag.height()/2;

                                                        mag.css({left: px, top: py, backgroundPosition: bgp});
                                                    }
                                                }

                                            }
                                        }

                                        $.fn.magnify = function ( option ) {
                                            return this.each(function () {
                                                var $this = $(this)
                                                    , data = $this.data('magnify')
                                                    , options = typeof option == 'object' && option
                                                if (!data) $this.data('tooltip', (data = new Magnify(this, options)))
                                                if (typeof option == 'string') data[option]()
                                            })
                                        }

                                        $.fn.magnify.Constructor = Magnify

                                        $.fn.magnify.defaults = {
                                            delay: 0
                                        }


                                        /* MAGNIFY DATA-API
                                         * ================ */

                                        $(window).on('load', function () {
                                            $('[data-toggle="magnify"]').each(function () {
                                                var $mag = $(this);
                                                $mag.magnify()
                                            })
                                        })

                                    } ( window.jQuery );
                                    </script> -->


                            <!-- <div class="col-sm-4" id="carousel-text">
                            	
                            </div> -->

                            <!-- <div id="slide-content" style="display: none;">
                                <div id="slide-content-0">
                                    <h2>Oro Blanco</h2>
                                    <p>24k</p>
                                    <p class="sub-text">Descripcion: - <a href="#">Read more</a></p>
                                </div>

                                <div id="slide-content-1">
                                    <h2>Oro Blanco</h2>
                                    <p>24k</p>
                                    <p class="sub-text">Descripcion: - <a href="#">Read more</a></p>
                                </div>

                                <div id="slide-content-2">
                                    <h2>Oro Blanco</h2>
                                    <p>24k</p>
                                    <p class="sub-text">Descripcion: - <a href="#">Read more</a></p>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div><!--/Slider-->

                    <div class=" x hidden-xs" id="slider-thumbs">
                            <!-- Bottom switcher of slider -->
                            <ul class=" x2 hide-bullets">
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
                </div>
            </div>
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

        </div>
    </div>
</section>
  <?php
            include("./footer.php");
    ?>
    </body>
</html>