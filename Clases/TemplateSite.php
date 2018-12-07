<?php

namespace Clases;

class TemplateSite
{

  public $title;
  public $keywords;
  public $description;
  public $favicon;
  public $canonical;

  public function themeInit()
  {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <link rel="icon" href="<?=URL?>/assets/images/favicon.ico" type="image/x-icon">
        <!-- BOOTSTRAPE STYLESHEET CSS FILES -->
        <link rel="stylesheet" href="<?=URL?>/assets/css/bootstrap.min.css">
        <!-- JQUERY SELECT -->
        <link href="<?=URL?>/assets/css/select2.min.css" rel="stylesheet" />
        <!-- JQUERY MENU -->
        <link rel="stylesheet" href="<?=URL?>/assets/css/bootstrap-dropdownhover.css">
        <!-- ANIMATION -->
        <link rel="stylesheet" href="<?=URL?>/assets/css/animate.min.css">
        <!-- OWl  CAROUSEL-->
        <link rel="stylesheet" href="<?=URL?>/assets/css/owl.carousel.css">
        <link rel="stylesheet" href="<?=URL?>/assets/css/owl.style.css">
        <!-- TEMPLATE CORE CSS -->
        <link rel="stylesheet" href="<?=URL?>/assets/css/style.css">
        <!-- MOBILE MENU CSS -->
        <link href="<?=URL?>/assets/css/meanmenu.min.css" rel="stylesheet">
        <!-- FONT AWESOME -->
        <link rel="stylesheet" type="text/css" href="<?=URL?>/assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?=URL?>/assets/css/et-line-fonts.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="<?=URL?>/assets/fonts/classified/flaticon.css">
        <!-- Google Fonts -->
        <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900%7cOpen+Sans:400,600,700" rel="stylesheet" type="text/css">
        <!-- Theme Color -->
        <link rel="stylesheet" id="color" href="<?=URL?>/assets/css/colors/defualt.css">
        <!-- For Style Switcher -->
        <link rel="stylesheet" id="theme-color" type="text/css" href="<?=URL?>/assets/css/estilos.css" />
        <!-- JavaScripts -->
        <script src="<?=URL?>/assets/js/modernizr.js"></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php
        /*
        echo '<meta charset="utf-8"/>';
        echo '<meta name="author" lang="es" content="'.$this->autor.'" />';
        echo '<link rel="author" href="'.$this->made.'" rel="nofollow" />';
        echo '<meta name="copyright" content="'.$this->copy.'" />';
        echo '<link rel="canonical" href="'.$this->canonical.'" />';
        echo '<meta name="distribution" content="global" />';
        echo '<meta name="robots" content="all" />';
        echo '<meta name="rating" content="general" />';
        echo '<meta name="content-language" content="es-ar" />';
        echo '<meta name="DC.identifier" content="'.$this->canonical.'" />';
        echo '<meta name="DC.format" content="text/html" />';
        echo '<meta name="DC.coverage" content="'.$this->pais.'" />';
        echo '<meta name="DC.language" content="es-ar" />';
        echo '<meta http-equiv="window-target" content="_top" />';
        echo '<meta name="robots" content="all" />';
        echo '<meta http-equiv="content-language" content="es-ES" />';
        echo '<meta name="google" content="notranslate" />';
        echo '<meta name="geo.region" content="AR-X" />';
        echo '<meta name="geo.placename" content="'.$this->place.'" />';
        echo '<meta name="geo.position" content="'.$this->position.'" />';
        echo '<meta name="ICBM" content="'.$this->position.'" />';
        echo '<meta content="public" name="Pragma" />';
        echo '<meta http-equiv="pragma" content="public" />';
        echo '<meta http-equiv="cache-control" content="public" />';
        echo '<meta property="og:url" content="'.$this->canonical.'" />';
        echo '<meta charset="utf-8">';
        echo '<meta content="IE=edge" http-equiv="X-UA-Compatible">';
        echo '<meta content="width=device-width, initial-scale=1" name="viewport">';
        echo '<meta name="language" content="Spanish">';
        echo '<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />';
        echo '<title>'.$this->title.'</title>';
        echo '<meta http-equiv="title" content="'.$this->title.'" />';
        echo '<meta name="description" lang=es content="'.$this->description.'" />';
        echo '<meta name="keywords" lang=es content="'.$this->keywords.'" />';
        echo '<link href="'.$this->imagen.'" rel="Shortcut Icon" />';
        echo '<meta name="DC.title" content="'.$this->title.'" />';
        echo '<meta name="DC.subject" content="'.$this->description.'" />';
        echo '<meta name="DC.description" content="'.$this->description.'" />';
        echo '<meta property="og:title" content="'.$this->title.'" />';
        echo '<meta property="og:description" content="'.$this->description.'" />';
        echo '<meta property="og:image" content="'.$this->imagen.'" />';
        */
        ?>
    </head>
        <?php
      }

      public function themeNav(){
      ?>
          <?php include 'assets/inc/nav.inc.php'; ?>
          <?php
      }

      public function themeEnd()
      {
        ?>
        <?php include 'assets/inc/footer.inc.php'; ?>
          <!-- JAVASCRIPT JS  -->
          <script type="text/javascript" src="<?=URL?>/assets/js/jquery-3.1.1.min.js"></script>
          <!-- JQUERY MIGRATE  -->
          <script type="text/javascript" src="<?=URL?>/assets/js/jquery-migrate-1.2.1.min.js"></script>
          <!-- BOOTSTRAP CORE JS -->
          <script type="text/javascript" src="<?=URL?>/assets/js/bootstrap.min.js"></script>
          <!-- JQUERY SELECT -->
          <script type="text/javascript" src="<?=URL?>/assets/js/select2.min.js"></script>
          <!-- MEGA MENU -->
          <script type="text/javascript" src="<?=URL?>/assets/js/bootstrap-dropdownhover.js"></script>
          <!-- JQUERY EASING -->
          <script type="text/javascript" src="<?=URL?>/assets/js/easing.js"></script>
          <!-- JQUERY COUNTERUP -->
          <script type="text/javascript" src="<?=URL?>/assets/js/counterup.js"></script>
          <!-- JQUERY WAYPOINT -->
          <script type="text/javascript" src="<?=URL?>/assets/js/waypoints.min.js"></script>
          <!-- JQUERY REVEAL -->
          <script type="text/javascript" src="<?=URL?>/assets/js/footer-reveal.min.js"></script>
          <!-- Owl Carousel -->
          <script type="text/javascript" src="<?=URL?>/assets/js/owl-carousel.js"></script>
          <!-- MOBILE MENU JS -->
          <script type="text/javascript" src="<?=URL?>/assets/js/jquery.meanmenu.js"></script>
          <!--Style Switcher -->
          <script src="<?=URL?>/assets/js/color-switcher.js"></script>
          <!-- CORE JS -->
          <script type="text/javascript" src="<?=URL?>/assets/js/custom.js"></script>
          <!-- FOR THIS PAGE ONLY -->
          <script src="<?=URL?>/assets/js/imagesloaded.js"></script>
          <script src="<?=URL?>/assets/js/isotope.min.js"></script>
          <script type="text/javascript">
              (function($) {
                  "use strict";
                  $('#cats-masonry').imagesLoaded(function() {
                      $('#cats-masonry').isotope({
                          layoutMode: 'masonry',
                          transitionDuration: '0.3s'
                      });
                  });
              })
              (jQuery);
          </script>
    <?php
  }

      public function themeEndContact()
    {
        ?>
        <?php include 'assets/inc/footer.inc.php'; ?>
        <!-- JAVASCRIPT JS  -->
        <script type="text/javascript" src="<?=URL?>/assets/js/jquery-3.1.1.min.js"></script>
        <!-- JQUERY MIGRATE  -->
        <script type="text/javascript" src="<?=URL?>/assets/js/jquery-migrate-1.2.1.min.js"></script>
        <!-- BOOTSTRAP CORE JS -->
        <script type="text/javascript" src="<?=URL?>/assets/js/bootstrap.min.js"></script>
        <!-- JQUERY SELECT -->
        <script type="text/javascript" src="<?=URL?>/assets/js/select2.min.js"></script>
        <!-- MEGA MENU -->
        <script type="text/javascript" src="<?=URL?>/assets/js/bootstrap-dropdownhover.js"></script>
        <!-- JQUERY EASING -->
        <script type="text/javascript" src="<?=URL?>/assets/js/easing.js"></script>
        <!-- JQUERY COUNTERUP -->
        <script type="text/javascript" src="<?=URL?>/assets/js/counterup.js"></script>
        <!-- JQUERY WAYPOINT -->
        <script type="text/javascript" src="<?=URL?>/assets/js/waypoints.min.js"></script>
        <!-- JQUERY REVEAL -->
        <script type="text/javascript" src="<?=URL?>/assets/js/footer-reveal.min.js"></script>
        <!-- Owl Carousel -->
        <script type="text/javascript" src="<?=URL?>/assets/js/owl-carousel.js"></script>
        <!-- GOOGLE MAP -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDvL6_23zI-1JvUttxkt2K0KO4tfE1SiGk"></script>
        <script type="text/javascript" src="<?=URL?>/assets/js/map.js"></script>
        <!-- MOBILE MENU JS -->
        <script type="text/javascript" src="<?=URL?>/assets/js/jquery.meanmenu.js"></script>
        <!--Style Switcher -->
        <script src="<?=URL?>/assets/js/color-switcher.js"></script>
        <!-- CORE JS -->
        <script type="text/javascript" src="<?=URL?>/assets/js/custom.js"></script>
        <?php
    }

      public function themeEndProfile()
    {
        ?>
        <?php include 'assets/inc/footer.inc.php'; ?>
        <!-- JAVASCRIPT JS  -->
        <script type="text/javascript" src="<?=URL?>/assets/js/jquery-3.1.1.min.js"></script>
        <!-- JQUERY MIGRATE  -->
        <script type="text/javascript" src="<?=URL?>/assets/js/jquery-migrate-1.2.1.min.js"></script>
        <!-- BOOTSTRAP CORE JS -->
        <script type="text/javascript" src="<?=URL?>/assets/js/bootstrap.min.js"></script>
        <!-- JQUERY SELECT -->
        <script type="text/javascript" src="<?=URL?>/assets/js/select2.min.js"></script>
        <!-- MEGA MENU -->
        <script type="text/javascript" src="<?=URL?>/assets/js/bootstrap-dropdownhover.js"></script>
        <!-- JQUERY EASING -->
        <script type="text/javascript" src="<?=URL?>/assets/js/easing.js"></script>
        <!-- JQUERY COUNTERUP -->
        <script type="text/javascript" src="<?=URL?>/assets/js/counterup.js"></script>
        <!-- JQUERY WAYPOINT -->
        <script type="text/javascript" src="<?=URL?>/assets/js/waypoints.min.js"></script>
        <!-- JQUERY REVEAL -->
        <script type="text/javascript" src="<?=URL?>/assets/js/footer-reveal.min.js"></script>
        <!-- Owl CAROUSEL -->
        <script type="text/javascript" src="<?=URL?>/assets/js/owl-carousel.js"></script>
        <!-- MOBILE MENU JS -->
        <script type="text/javascript" src="<?=URL?>/assets/js/jquery.meanmenu.js"></script>
        <!--Style Switcher -->
        <script src="<?=URL?>/assets/js/color-switcher.js"></script>
        <!-- CORE JS -->
        <script type="text/javascript" src="<?=URL?>/assets/js/custom.js"></script>
        <!-- SLICK CAROUSEL -->
        <script type="text/javascript" src="<?=URL?>/assets/js/slick.min.js"></script>
        <script>
            $('.gallery-slideshow-not-tab').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                speed: 500,
                arrows: true,
                fade: true,
                asNavFor: '.gallery-nav-not-tab',
                adaptiveHeight: true,
            });
            $('.gallery-nav-not-tab').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                speed: 500,
                asNavFor: '.gallery-slideshow-not-tab',
                dots: false,
                centerMode: true,
                focusOnSelect: true,
                infinite: true,
                responsive: [{
                    breakpoint: 1199,
                    settings: {
                        slidesToShow: 5,
                    }
                }, {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 4,
                    }
                }, {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 3,
                    }
                }, {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                    }
                }]
            });
        </script>
        <?php
    }

      public function themeEndListingP()
    {
        ?>
        <?php include 'assets/inc/footer.inc.php'; ?>

        <!-- JAVASCRIPT JS  -->
        <script type="text/javascript" src="<?=URL?>/assets/js/jquery-3.1.1.min.js"></script>
        <!-- JQUERY MIGRATE  -->
        <script type="text/javascript" src="<?=URL?>/assets/js/jquery-migrate-1.2.1.min.js"></script>
        <!-- BOOTSTRAP CORE JS -->
        <script type="text/javascript" src="<?=URL?>/assets/js/bootstrap.min.js"></script>
        <!-- JQUERY SELECT -->
        <script type="text/javascript" src="<?=URL?>/assets/js/select2.min.js"></script>
        <!-- MEGA MENU -->
        <script type="text/javascript" src="<?=URL?>/assets/js/bootstrap-dropdownhover.js"></script>
        <!-- JQUERY EASING -->
        <script type="text/javascript" src="<?=URL?>/assets/js/easing.js"></script>
        <!-- JQUERY COUNTERUP -->
        <script type="text/javascript" src="<?=URL?>/assets/js/counterup.js"></script>
        <!-- JQUERY WAYPOINT -->
        <script type="text/javascript" src="<?=URL?>/assets/js/waypoints.min.js"></script>
        <!-- JQUERY REVEAL -->
        <script type="text/javascript" src="<?=URL?>/assets/js/footer-reveal.min.js"></script>
        <!-- Owl Carousel -->
        <script type="text/javascript" src="<?=URL?>/assets/js/owl-carousel.js"></script>
        <!-- MOBILE MENU JS -->
        <script type="text/javascript" src="<?=URL?>/assets/js/jquery.meanmenu.js"></script>
        <!--Style Switcher -->
        <script src="<?=URL?>/assets/js/color-switcher.js"></script>
        <!-- CORE JS -->
        <script type="text/javascript" src="<?=URL?>/assets/js/custom.js"></script>
        <!-- RANGE SLIDER JS -->
        <script src="<?=URL?>/assets/js/nouislider.min.js"></script>
        <script src="<?=URL?>/assets/js/wNumb.js"></script>
        <!-- FOR THIS PAGE ONLY -->
        <script src="<?=URL?>/assets/js/imagesloaded.js"></script>
        <script src="<?=URL?>/assets/js/isotope.min.js"></script>
        <script type="text/javascript">
            (function($) {
                "use strict";
                $('#cats-masonry').imagesLoaded(function() {
                    $('#cats-masonry').isotope({
                        layoutMode: 'masonry',
                        transitionDuration: '0.3s'
                    });
                });
            })(jQuery);
        </script>
        <script>
            var slider = document.getElementById('keyboard');

            noUiSlider.create(slider, {
                start: 10,
                step: 2,
                connect: [true, false],
                range: {
                    'min': 0,
                    'max': 20
                },
                format: wNumb({
                    decimals: 3,
                    thousand: '.',
                    prefix: ' Radius  = ',
                    postfix: ' (Km) ',
                })
            });

            keyboard.noUiSlider.on('update', function( values, handle ){
                keyboardspan.innerHTML = values[handle];
            });
            var handle = slider.querySelector('.noUi-handle');

            handle.setAttribute('tabindex', 0);

            handle.addEventListener('click', function(){
                this.focus();
            });

            handle.addEventListener('keydown', function( e ) {

                var value = Number( slider.noUiSlider.get() );

                switch ( e.which ) {
                    case 37: slider.noUiSlider.set( value - 10 );
                        break;
                    case 39: slider.noUiSlider.set( value + 10 );
                        break;
                }
            });
        </script>
        <?php
    }

      public function set($atributo, $valor)
      {
        $this->$atributo = $valor;
      }

      public function get($atributo)
      {
        return $this->$atributo;
      }
}
