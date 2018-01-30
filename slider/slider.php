<!DOCTYPE html>
<html>
<head>
  <title>Slick</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="./slider/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="./slider/slick/slick-theme.css">
  <style type="text/css">
    html, body {
      margin: 0;
      padding: 0;
    }

    * {
      box-sizing: border-box;
    }

    .slider {
        width: 50%;
        margin: 100px auto;
    }

    .slick-slide {
      margin: 0px 20px;
    }

    .slick-slide img {
      width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
      color: black;
    }


    .slick-slide {
      transition: all ease-in-out .3s;
      opacity: .2;
    }
    
    .slick-active {
      opacity: .5;
    }

    .slick-current {
      opacity: 1;
    }
    #slider-main{
      position: relative;
      top: 150px;
      margin-bottom: 70px;
      width: 70%;
      height: 360px;
      /*border: 2px solid red;*/
    }
    @media screen and (min-width: 400px) and (max-width: 780px) {
      #slider-main{
        top: 20px;
      }
    }
    @media screen and (min-width: 280px) and (max-width: 400px) {
      #slider-main{
        top: 50px;
        height: 200px;
      }
    }
    
  </style>
</head>
<body>
<section class="lazy slider slider-movil " data-sizes="" id="slider-main">
    <div>
      <a href="http://www.google.com" title="">
        <img src="./img/web-img-1.jpg" data-sizes="">
      </a>
    </div>
   <div>
      <a href="http://www.google.com" title="">
        <img src="./img/web-img-2.jpg" data-sizes="">
      </a>
    </div>
    <div>
      <a href="http://www.google.com" title="">
        <img src="./img/web-img-3.jpg" data-sizes="">
      </a>
    </div>
     <div>
      <a href="http://www.google.com" title="">
        <img src="./img/web-img-4.jpg" data-sizes="">
      </a>
    </div>
</section>

  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="./slider/slick/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).on('ready', function() {
      $(".lazy").slick({
        dots: true,
        lazyLoad: 'ondemand',
        infinite: true
      });
    });
</script>

</body>
</html>
