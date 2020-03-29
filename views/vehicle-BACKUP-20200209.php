<?php
$vehicle = $path['call_parts'][PATH_SUBSITE];
$id = array_search($vehicle, array_column($GLOBALS['vehicles'], 'slug'));
$vehicle_data = $GLOBALS['vehicles'][$id];
$next_vehicle = $id == count($GLOBALS['vehicles']) - 1 ? 0 : $id + 1;
$prev_vehicle = $id == 0 ? count($GLOBALS['vehicles']) - 1 : $id - 1;
?>

<body data-barba="wrapper">

  <main data-barba="container" data-barba-namespace="vehicle">

    <div class="fullpage-wrapper" id="fullpage-<?=$id?>">

      <div class="section vehicle__hero">
        
        <!--picture class="vehicle__image">
          <source srcset="/exoticcarclub/<?=D_IMAGES.$vehicles[6]['slug']?>/ferrari-portofino.jpg" media="(max-width: 639px) and (orientation: portrait)">
          <source srcset="/exoticcarclub/<?=D_IMAGES.$vehicles[6]['slug']?>/ferrari-portofino.jpg" media="(max-width: 839px) and (orientation: landscape)">
          <source srcset="/exoticcarclub/<?=D_IMAGES.$vehicles[6]['slug']?>/ferrari-portofino.jpg" media="(min-width: 640px) and (orientation:portrait)">
          <source srcset="/exoticcarclub/<?=D_IMAGES.$vehicles[6]['slug']?>/ferrari-portofino.jpg" media="(min-width: 840px) and (orientation:landscape)">
          <img src="/exoticcarclub/<?=D_IMAGES.$vehicles[6]['slug']?>/ferrari-portofino.jpg" alt="<?=$vehicle_data['name']?>">
        </picture-->

        <img class="vehicle__image" src="/exoticcarclub/<?=D_IMAGES.$vehicles[$id]['slug']?>/<?=$vehicles[$id]['slug']?>.jpg" alt="<?=$vehicle_data['name']?>">

        <div class="vehicle__info">
          <div class="vehicle__title">
            <h1><?=$vehicle_data['name']?></h1>
          </div>
          <div class="vehicle__details">

            <div class="vehicle__details__item acceleration">

              <div class="acceleration__speedometer">
                <div class="acceleration__speedometer__circle">
                  <div class="acceleration__speedometer__circle__inner"></div>
                </div>
                <div class="acceleration__speedometer__needle"></div>
              </div>

              <div class="acceleration__speedometer__numbers">
                <span class="acceleration__speedometer__numbers__digit">
                  0<br/>1<br/>2<br/>3<br/>4<br/>5<br/>6<br/>7<br/>8<br/>9
                </span>
                <span>.</span>
                <span class="acceleration__speedometer__numbers__digit">
                  0<br/>1<br/>2<br/>3<br/>4<br/>5<br/>6<br/>7<br/>8<br/>9<br/>
                  0<br/>1<br/>2<br/>3<br/>4<br/>5<br/>6<br/>7<br/>8<br/>9<br/>
                  0<br/>1<br/>2<br/>3<br/>4<br/>5<br/>6<br/>7<br/>8<br/>9<br/>
                  0<br/>1<br/>2<br/>3<br/>4<br/>5<br/>6<br/>7<br/>8<br/>9<br/>
                  0<br/>1<br/>2<br/>3<br/>4<br/>5<br/>6<br/>7<br/>8<br/>9<br/>
                  0<br/>1<br/>2<br/>3<br/>4<br/>5<br/>6<br/>7<br/>8<br/>9<br/>
                  0<br/>1<br/>2<br/>3<br/>4<br/>5<br/>6<br/>7<br/>8<br/>9<br/>
                  0<br/>1<br/>2<br/>3<br/>4<br/>5<br/>6<br/>7<br/>8<br/>9<br/>
                  0<br/>1<br/>2<br/>3<br/>4<br/>5<br/>6<br/>7<br/>8<br/>9<br/>
                  0<br/>1<br/>2<br/>3<br/>4<br/>5<br/>6<br/>7<br/>8<br/>9
                </span>
                <span>s</span>
              </div>
              <div class="acceleration__caption"><small>0-100 km/h</small></div>
            </div>

            <div class="vehicle__details__item mobile__hidden">
              <span>5.2 V10</span>
              <small>Silnik</small>
            </div>

            <div class="vehicle__details__item">
              <span>640 KM</span>
              <small>Moc</small>
            </div>

            <div class="vehicle__details__item">
              <span>325 km/h</span>
              <small>V max</small>
            </div>

          </div>

          <div class="hero__arrow mobile__hidden">
            <i class="hero__arrow__down"></i>
          </div>

        </div>

      </div>


      <div class="section">
        <div class="vehicle__section__v1">
          <div class="vehicle__section__img" style="background-image: url(/exoticcarclub/<?=D_IMAGES.$vehicles[3]['slug']?>/lamborghini-huracan-performante-silnik.jpg);">
          </div>
          <div class="vehicle__section__text ">
            <p class="lead">Huracán Performante przerobił koncepcję supersportowych samochodów i podniósł pojęcie osiągów do poziomów, których nigdy wcześniej nie było. Pojazd został przeprojektowany w całości pod względem masy, mocy silnika, podwozia, a przede wszystkim poprzez wprowadzenie innowacyjnego systemu aktywnej aerodynamiki: ALA.</p>
          </div>
        </div>
      </div>

      <div class="section">
        <div class="vehicle__section__v1">
          <div class="vehicle__section__text ">
            <p class="lead">Wykorzystanie nagrodzonego Forged Composites®, kształtowanego kutego włókna węglowego opatentowanego przez Automobili Lamborghini, jest naprawdę miłym akcentem i przyczynia się do uczynienia pojazdu jeszcze lżejszym.</p>
          </div>
          <div class="vehicle__section__img" style="background-image: url(/exoticcarclub/<?=D_IMAGES.$vehicles[3]['slug']?>/lamborghini-huracan-performante-logo-na-masce.jpg);">
          </div>
        </div>
      </div>

      <div class="section">
        <div class="vehicle__section__v1">
          <div class="vehicle__section__img" style="background-image: url(/exoticcarclub/<?=D_IMAGES.$vehicles[3]['slug']?>/lamborghini-huracan-performante-tyl.jpg);"></div>
          <div class="vehicle__section__text ">
            <p class="lead">Oprócz niezwykłych właściwości technologicznych, wprowadza także nową ideę piękna.</p>
          </div>
        </div>
      </div>

      <div class="section">
      
        <div class="slideshow">

<?php foreach($vehicle_data['img'] as $key => $value) { ?>
          <div class="slideshow__slide">
            <img src="/exoticcarclub/<?=D_IMAGES.$vehicle_data['slug']?>/<?=$vehicle_data['slug'].$key?>.jpg" alt="<?=$vehicle_data['name'].$value?>">
          </div>
<?php } ?>

          <ul class="slideshow__nav">
            <li id="slideshow__nav__prev"><span>&#10094;</span></li>
            <li id="slideshow__nav__next"><span>&#10095;</span></li>
          </ul><!-- end .slideshow__nav -->

        </div><!-- end .slideshow -->
      </div><!-- end .section -->

      <div class="section swipe">
        <div class="swipe__left" onclick="window.location='<?=get_lang_slug($GLOBALS['path_lang_translate'], $_SESSION['lang'], F_FLEET)?>/<?=$vehicles[2]['slug']?>';">
          <div class="swipe__bg" style="background-image: url(/exoticcarclub/<?=D_IMAGES.$vehicles[2]['slug']?>/<?=$vehicles[2]['slug']?>.jpg);"></div>
          <div class="swipe__overlay">
            <div class="swipe__overlay__text"><span>&#10094;</span> &nbsp;<?=$vehicles[2]['name']?></div>
          </div>
        </div>
        <div class="swipe__right" onclick="window.location='<?=get_lang_slug($GLOBALS['path_lang_translate'], $_SESSION['lang'], F_FLEET)?>/<?=$vehicles[4]['slug']?>';">
           <div class="swipe__bg" style="background-image: url(/exoticcarclub/<?=D_IMAGES.$vehicles[4]['slug']?>/<?=$vehicles[4]['slug']?>.jpg);"></div>
          <div class="swipe__overlay">
            <div class="swipe__overlay__text"><?=$vehicles[4]['name']?>&nbsp; <span>&#10095;</span></div>
          </div>
        </div>
      </div>

    </div><!-- end .fullpage-wrapper -->

    <a class="nav next" href="/exoticcarclub/<?=get_lang_slug($GLOBALS['path_lang_translate'], $_SESSION['lang'], F_FLEET)?>/<?=$vehicles[$next_vehicle]['slug']?>/">NEXT</a>
    <a class="nav prev" href="/exoticcarclub/<?=get_lang_slug($GLOBALS['path_lang_translate'], $_SESSION['lang'], F_FLEET)?>/<?=$vehicles[$prev_vehicle]['slug']?>/">PREV</a>

    <div class="screen-wipe-front"></div>
    <div class="screen-wipe-back"></div>
    <div class="screen-wipe-logo"><?php require_once D_INCLUDES.'logo_svg.php';?></div>

  </main>

  <script src="https://polyfill.io/v3/polyfill.min.js?features=default%2CArray.prototype.find%2CIntersectionObserver" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/@barba/core"></script>
  <script src="/exoticcarclub/js/jquery-3.4.1.min.js"></script>
  <script src="/exoticcarclub/js/fullpage.min.js" type="text/javascript"></script>
  <script src="/exoticcarclub/js/gsap.min.js"></script>
  <script src="/exoticcarclub/js/ScrollToPlugin.min.js"></script>
  <script src="/exoticcarclub/js/exoticcarclub.js"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function(){

      document.querySelector('.acceleration__speedometer__needle').classList.add('animate');
      document.querySelector('.acceleration__speedometer__circle__inner').classList.add('animate');
//      document.querySelectorAll('.speedometer__numbers__digit').classList.add('animate');

      var digits = document.querySelectorAll('.acceleration__speedometer__numbers__digit');
      digits.forEach(function(digit) {
        digit.classList.add('animate');
      });


      //
      // SLIDESHOW
      // Credit to Lars Faye
      // https://cheewebdevelopment.com/boilerplate-vanilla-javascript-content-slider/
      //
      const slideshow = document.querySelector('.slideshow');

      if (slideshow != null ) { //make sure we don't run this script if the slideshow is not present

        let slides = document.querySelectorAll('.slideshow__slide'), // grab all slides
        slideCount = slides.length, //count slides
        currentSlide = 0, // find a starting place for the current slide
        slideHeight = null, // we'll need this later for height calculation
        initialHeight = slides[0].clientHeight; // find the height of the first slide

        slides[0].classList.add('active'); //on load, activate the first slide

        function moveToSlide(n) { // declare our slide navigation function
          slides[currentSlide].className = 'slideshow__slide'; // assign the slide HTML element
          currentSlide = (n+slideCount)%slideCount; // determine current slide (for prev/next functions)
          slides[currentSlide].className = 'slideshow__slide active'; //if it's the current slide, add active class
          slideHeight = slides[currentSlide].clientHeight; // get the height of the current slide
          slideshow.style.height = slideHeight + 'px'; // set the height of the slides
          /*window.addEventListener('resize', function(){ // if the browser resizes
            resizedSlideHeight = slides[currentSlide].clientHeight; // get current slide height
            slideshow.style.height = resizedSlideHeight + 'px'; // update the height of the slideshow
          });*/
        }

        function nextSlide(e) {
          moveToSlide(currentSlide+1);
          if (e !== undefined) {
            let code = e.keyCode;
            if( code == 39 ) { //right arrow key
              moveToSlide(currentSlide+1);
            }
          }
        };
        function prevSlide(e) {
          moveToSlide(currentSlide+-1);
          if (e !== undefined) {
            let code = e.keyCode;
            if( code == 37 ) { //left arrow key
              moveToSlide(currentSlide+-1);
            }
          }
        };

        const slideHandlers = {
          nextSlide: function(element){
            document.querySelector(element).addEventListener('click',nextSlide);
            document.body.addEventListener('keydown',nextSlide, false); // if a key is pressed, attach a listener to find out which one
          },
          prevSlide: function(element){
            document.querySelector(element).addEventListener('click',prevSlide);
            document.body.addEventListener('keydown',prevSlide, false);
          }
        }

        slideHandlers.nextSlide('#slideshow__nav__next');
        slideHandlers.prevSlide('#slideshow__nav__prev');

        // Dynamic slideshow height

        slideshow.style.height = initialHeight + 'px'; //on load, set the height of the slider to the first active slide

        window.addEventListener('resize', function(){ // adjust the height of the slidehow as the browser is resized
          let resizedHeight = slides[0].clientHeight;
          slideshow.style.height = resizedHeight + 'px';
        });

        // Detect swipe events for touch devices, credit to Kirupa @ https://www.kirupa.com/html5/detecting_touch_swipe_gestures.htm
        let initialX = null;
        let initialY = null;

        function startTouch(e) {
          initialX = e.touches[0].clientX;
          initialY = e.touches[0].clientY;
        };

        function moveTouch(e) {
          if (initialX === null) {
            return;
          }
          if (initialY === null) {
            return;
          }
          let currentX = e.touches[0].clientX;
          let currentY = e.touches[0].clientY;
          let diffX = initialX - currentX;
          let diffY = initialY - currentY;
          if (Math.abs(diffX) > Math.abs(diffY)) {
            if (diffX > 0) { // swiped left
              moveToSlide(currentSlide+1); // hooking up our next slide function
            } else { // swiped right
              moveToSlide(currentSlide+-1); // hooking up our prev slide function
            }
          }
          initialX = null;
          initialY = null;
          e.preventDefault();
        };

        slideshow.addEventListener("touchstart", startTouch, false);
        slideshow.addEventListener("touchmove", moveTouch, false);

        slideshow.addEventListener("mouseover", stopSlideshow, false);
        slideshow.addEventListener("mouseout", startSlideshow, false);
        
        // var slideshowAuto = setInterval(nextSlide, 2000);
        var slideshowAuto = setInterval(nextSlide, 2000);

        function startSlideshow() {
          slideshowAuto = setInterval(nextSlide, 2000);
          console.log('startSlideshow');
        };

        function stopSlideshow() {
          clearInterval(slideshowAuto);
          slideshowAuto = 0;
          console.log('stopSlideshow');
        }

      } //end slideshow

    });
  </script>