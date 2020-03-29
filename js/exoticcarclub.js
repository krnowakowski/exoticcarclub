document.addEventListener('DOMContentLoaded', () => {

  const fullpage_init = (page_id) => {

    /*if (document.documentElement.classList.contains('fp-enabled')) {
      console.log('destroy');
      fullpage_api.destroy('all');
    }*/
    // console.log('#fullpage-' + page_id);
    var myFullpage = new fullpage('#' + page_id, {
      //anchors: ['firstPage', 'secondPage', '3rdPage', '4thPage'],
      // sectionsColor: ['#C63D0F', '#1BBC9B', '#7E8F7C', '#e7e7e7'],
      navigation: true,
      navigationPosition: 'right',
      // navigationTooltips: ['First page', 'Second page', 'Third page', 'Fourth and last page'],
      responsiveWidth: 768,
      afterResponsive: function(isResponsive){

      }
    });
    //console.log(myFullpage);
  }


  const eccTransition = {

    from: {namespace: ['home', 'vehicle', 'about', 'waszka', 'offer', 'events']},

    leave({ current, trigger }) {
      const done = this.async();
      var tl = gsap.timeline({onComplete: done});
      if (trigger.classList.contains('swipe__left')) {
        tl.set(".screen-wipe-back", {left: 0})
          .set(".screen-wipe-front", {left: 0})
          .fromTo(".screen-wipe-back", {scaleX: 0}, {scaleX: 1, duration: .8, transformOrigin:'left', ease: "power4.inOut"})
          .fromTo(".screen-wipe-front", {scaleX: 0}, {scaleX: 1, duration: .7, transformOrigin:'left', ease: "power4.inOut"}, .2)
      } else {
        tl.set(".screen-wipe-back", {right: 0})
          .set(".screen-wipe-front", {right: 0})
          .fromTo(".screen-wipe-back", {scaleX: 0}, {scaleX: 1, duration: .8, transformOrigin:'right', ease: "power4.inOut"})
          .fromTo(".screen-wipe-front", {scaleX: 0}, {scaleX: 1, duration: .7, transformOrigin:'right', ease: "power4.inOut"}, .2)
      }
    },

    beforeEnter({ next, trigger }) {
      gsap.set(".screen-wipe-back", {scaleX: 1});
      gsap.set(".screen-wipe-front", {scaleX: 1});
    },

    after({ next, trigger }) {
      var tl = gsap.timeline();
      if (trigger.classList.contains('swipe__left')) {
        tl.set(".screen-wipe-back", {scaleX: 0})
          .to(".screen-wipe-front", {scaleX: 0, duration: .6, transformOrigin:'right', ease: "expo.inOut"}, .2)
      } else {
        tl.set(".screen-wipe-back", {scaleX: 0})
          .to(".screen-wipe-front", {scaleX: 0, duration: .6, transformOrigin:'left', ease: "expo.inOut"}, .2)
      }
  
      if (document.querySelectorAll('.acceleration').length != 0) {
        refreshVehicle();
      }
      // console.log(next.container.firstElementChild.id);
      // fullpage_init(next.container.firstElementChild.id);
    }
  };

  const eccWithUpTransition = {

    from: {namespace: ['fleet', 'faq', 'page-unavailable']},

    before: () =>
      new Promise(resolve => {
        gsap.to(window, {
          duration: 0.4,
          scrollTo: 0,
          onUpdate() {
            window.pageYOffset === 0 && resolve();
          },
          onComplete: resolve
        });
      }),

    leave({ current, trigger }) {
      const done = this.async();
      var tl = gsap.timeline({onComplete: done});
      if (trigger.classList.contains('swipe__left')) {
        tl.set(".screen-wipe-back", {left: 0})
          .set(".screen-wipe-front", {left: 0})
          .fromTo(".screen-wipe-back", {scaleX: 0}, {scaleX: 1, duration: .8, transformOrigin:'left', ease: "power4.inOut"})
          .fromTo(".screen-wipe-front", {scaleX: 0}, {scaleX: 1, duration: .7, transformOrigin:'left', ease: "power4.inOut"}, .2)
      } else {
        tl.set(".screen-wipe-back", {right: 0})
          .set(".screen-wipe-front", {right: 0})
          .fromTo(".screen-wipe-back", {scaleX: 0}, {scaleX: 1, duration: .8, transformOrigin:'right', ease: "power4.inOut"})
          .fromTo(".screen-wipe-front", {scaleX: 0}, {scaleX: 1, duration: .7, transformOrigin:'right', ease: "power4.inOut"}, .2)
      }
    },

    beforeEnter({ next, trigger }) {
      gsap.set(".screen-wipe-back", {scaleX: 1});
      gsap.set(".screen-wipe-front", {scaleX: 1});
    },

    after({ next, trigger }) {
      var tl = gsap.timeline();
      if (trigger.classList.contains('swipe__left')) {
        tl.set(".screen-wipe-back", {scaleX: 0})
          .to(".screen-wipe-front", {scaleX: 0, duration: .6, transformOrigin:'right', ease: "expo.inOut"}, .2)
      } else {
        tl.set(".screen-wipe-back", {scaleX: 0})
          .to(".screen-wipe-front", {scaleX: 0, duration: .6, transformOrigin:'left', ease: "expo.inOut"}, .2)
      }
  
      if (document.querySelectorAll('.acceleration').length != 0) {
        refreshVehicle();
      }
      // console.log(next.container.firstElementChild.id);
      // fullpage_init(next.container.firstElementChild.id);
    }
  };


  barba.hooks.afterLeave((data) => {
    if (typeof fullpage_api !== 'undefined') {
      fullpage_api.destroy('all');
    }
  });


  barba.init({
    // debug: true,
    // cacheIgnore: true,
    prefetchIgnore: true,
    views: [
      {
        namespace: 'home',
        afterEnter(data) {
          prepareHome();
        }
      },
      {
        namespace: 'fleet',
        afterEnter(data) {
          prepareFleet();
        }
      },
      {
        namespace: 'vehicle',
        afterEnter(data) {
          fullpage_init(data.next.container.firstElementChild.id);
          refreshVehicle();
        }
      },
      {
        namespace: 'about',
        afterEnter(data) {
          fullpage_init(data.next.container.firstElementChild.id);
        }
      },
      {
        namespace: 'offer',
        afterEnter(data) {
          fullpage_init(data.next.container.firstElementChild.id);
        }
      },
      {
        namespace: 'events',
        afterEnter(data) {
          fullpage_init(data.next.container.firstElementChild.id);
        }
      },
      {
        namespace: 'waszka',
        afterEnter(data) {
          fullpage_init(data.next.container.firstElementChild.id);
        }
      }
    ],
    transitions: [eccTransition, eccWithUpTransition]
  });


  /********************************/
  /*          NAVIGATION          */
  /********************************/

  const menuToggler = document.querySelector('.navbar__toggler'),
        navigationMenu = document.getElementById("overlayNavigation"),
        navBgBlack = navigationMenu.querySelector('.nav__bg--black'),
        navBgEcc = navigationMenu.querySelector('.nav__bg--ecc'),
        navLinks = navigationMenu.querySelectorAll('.nav__item'),
        easeIn = "circ.in",
        easeOut = "circ.out",
        easeInOut = "circ.inOut";
  let   navTimeline = gsap.timeline({paused: true}),
        navList = navigationMenu.querySelector('.nav__list'),
        playState = true;

  // Animate navigation overlay open / close
  function navTimelineSet(bgEccX, bgBlackX, borderLeft) {
    navTimeline.clear();
    navTimeline
      .addLabel("startLabels", "0.35")
      .fromTo('#overlayNavigation',
        {top: "-100%", ease: easeIn},
        {top: "0%", ease: easeOut, duration: 0.1, onReverseComplete: function() {}})
      // .to(navBg, 
        // {width: "100%", ease: easeInOut, duration: animationTime, stagger: 0.25})
      .to(navBgEcc,
        {translateX: bgEccX, borderLeftWidth: borderLeft, ease: easeInOut, duration: 0.4}, "0.1")
      .to(navBgBlack,
        {translateX: bgBlackX, borderLeftWidth: borderLeft, ease: easeInOut, duration: 0.4}, "0.2")
      .fromTo('.nav__list',
        {right: "-100%", ease: easeIn},
        {right: "0%", ease: easeOut, duration: 0.01}, "0")
      .fromTo(navLinks,
        {x: "10%", opacity: 0},
        {x: "0%", opacity: 1, duration: 0.4, stagger: 0.05}, "startLabels");
      //navTimeline.timeScale( 0.25 );
  }

  // Open / close navigation overlay on menu toggler click
  menuToggler.addEventListener('click', () => {
    if (playState) {
      playState = false;
      navTimeline.play();
      menuToggler.classList.add('active');
    } else {
      playState = true;
      navTimeline.reverse();
      menuToggler.classList.remove('active');
    }
  });

  // Close navigation overlay on click outside of the menu (not only after menu toggler is clicked)
  window.addEventListener('click', (e) => {
    if (menuToggler.classList.contains('active')  // overlay navigation not open
      && !navList.contains(e.target)              // click was not on navigation list 
      && !menuToggler.contains(e.target)){        // click was not on menu toggler (in order to prevent simultaneous open and close resulting in overlay not opening at all)
        playState = true;
        navTimeline.reverse();
        menuToggler.classList.remove('active');
    } 
  });

  // Close navbar overlay after a link is clicked (otherwise it stays open on new page due to barba.js)
  navLinks.forEach(key => key.addEventListener('click', () => {
    playState = true;
    navTimeline.reverse();
    menuToggler.classList.remove('active');
  }));

  document.querySelector('.navbar__logo').addEventListener('click', (e) => {
    // Prevent reloading of home page
    let home = new RegExp("/exoticcarclub/$").test(window.location.href);
    if (home) {
      e.preventDefault();
    }
    // Close navigation overlay on click on navbar logo
    if (!playState) {
      playState = true;
      navTimeline.reverse();
      menuToggler.classList.remove('active');
    }
  });

  // Update navigation overlay to be full screen width on smartphones and half screen on tablets and desktops  
  var mql = window.matchMedia('(min-width: 768px)');
  function updateNav(e) {
    if (e.matches) {
      /* the viewport is 768 pixels wide or more  */
      navTimelineSet("49vw", "50vw", "10vw");
    } else {
      /* the viewport is less than 768 pixels wide */
      navTimelineSet("0vw", "0vw", "0vw");
    }
  }
  updateNav(mql);
  mql.addListener(updateNav);


  /********************************/
  /*            HOME              */
  /********************************/

  // let checkHome = document.getElementById('fullpage-home');
  function prepareHome() {
  // Execute only on vehicles pages
  // if (typeof(checkHome) != 'undefined' && checkHome != null) {
// console.log(checkHome);
    var myFullpage = new fullpage('#fullpage-home', {
      //anchors: ['firstPage', 'secondPage', '3rdPage', '4thPage'],
      // sectionsColor: ['#C63D0F', '#1BBC9B', '#7E8F7C', '#e7e7e7'],
      navigation: true,
      navigationPosition: 'right',
      navigationTooltips: ['Exotic Car Club', 'Nasza flota', 'Oferta', 'Eventy', 'O nas', 'Stopka'],
      // responsiveWidth: 900,
      // afterResponsive: function(isResponsive){

      // }
    });

    const hero = document.querySelector('.hero');
    const slider = document.querySelector('.slider');
    const logo = document.querySelector('.logo');
    const hamburger = document.querySelector('.menu-toggler');
    const headline = document.querySelector('.headline');
    const btn = document.querySelector('.hero__inner > .home__inner__btn');

    const homeTl = gsap.timeline();
    homeTl.fromTo(hero, {height: "0%"}, {height: "100%", ease: "power2.inOut", duration: 0.9})
      .fromTo(hero, {width: "120%"}, {width: "100%", ease: "power2.inOut", duration: 0.9})
      .addLabel("setDetails", "<0.3")
      .fromTo(slider, {x: "-100%"}, {x: "0%", ease: "power2.inOut", duration: 0.9}, "-=0.9")
      .fromTo(logo, {opacity: 0, x: 30}, {opacity: 1, x: 0, duration: 0.5}, "setDetails")
      .fromTo(hamburger, {opacity: 0, x: 30}, {opacity: 1, x: 0, duration: 0.5}, "setDetails")
      .fromTo(headline, {opacity: 0}, {opacity: 1, duration: 0.5}, "setDetails")
      .fromTo(btn, {opacity: 0}, {opacity: 1, duration: 0.2});
  }


  /********************************/
  /*            FLEET             */
  /********************************/

    // Execute only on fleet page
    // if (vehicles.length != 0) {
  function prepareFleet() {
    const vehicles = document.querySelectorAll('.fleet__item');

    // Execute only on fleet page
    // if (vehicles.length != 0) {

      vehicles.forEach(key => key.addEventListener('mouseover', () => {
        let car = key.firstElementChild.dataset.slug;
        let fleetTl = gsap.timeline();
        fleetTl.set(`[data-slug=${car}]`, {zIndex: 10})
          .to(`[data-slug=${car}]`, {duration: 1, width: "600px", ease: "expo.inOut"});
      }));

      vehicles.forEach(key => key.addEventListener('mouseout', () => {
        let car = key.firstElementChild.dataset.slug;
        let fleetTl = gsap.timeline();
        fleetTl.set(`[data-slug=${car}]`, {zIndex: 1})
          .to(`[data-slug=${car}]`, {duration: 1, width: "0", ease: "expo.out"});
      }));
      // var vehicles_array = <?php echo json_encode($GLOBALS['vehicles']); ?>;

      const previews = document.querySelectorAll('.fleet__preview');

      previews.forEach((key) => {
        key.style.backgroundImage = `url(/exoticcarclub/img/${key.dataset.slug}/${key.dataset.slug}.jpg)`;
      });

      vehiclesTl = gsap.timeline();
      vehiclesTl.fromTo(vehicles,
        {x: "-5%", opacity: 0},
        {x: "0%", opacity: 1, duration: 0.5, stagger: 0.05}, "0.3");
    // }
  }

  if (document.querySelectorAll('.fleet__item').length != 0) {
    prepareFleet();
  }


  /********************************/
  /*          VEHICLE             */
  /********************************/


  function refreshVehicle() {

    const integer = document.getElementById('acceleration__speedometer__integer');
    // Execute only on vehicles pages
    // if (typeof(integer) != 'undefined' && integer != null) {
      
      let fractional = document.getElementById('acceleration__speedometer__fractional'),
          needle = document.querySelector('.acceleration__speedometer__needle'),
          circle = document.querySelector('.acceleration__speedometer__circle__inner'),
          integerValue = parseInt(integer.dataset.value),
          integerY = - integerValue * 10,
          fractionalValue = parseInt(fractional.dataset.value),
          fractionalY = - (integerValue * 10 + fractionalValue),
          acceleration = (integerValue * 10 + fractionalValue) / 10;

      fractionalY = fractionalY.toString() + "%";
      integerY = integerY.toString() + "%";

// console.log(integer);
// console.log(fractional);
// console.log(`${integer.dataset.value},${fractional.dataset.value}`);
// console.log(`${integerY},${fractionalY}`);

      let vehicleTl = gsap.timeline();
      vehicleTl.addLabel("start")
        .to(integer, {y: integerY, ease: "expo.inOut", duration: acceleration})
        .to(fractional, {y: fractionalY, ease: "expo.inOut", duration: acceleration}, "start")
        .to(needle, {rotate: "90deg", ease: "expo.inOut", duration: acceleration}, "start")
        .to(circle, {rotate: "360deg", ease: "expo.inOut", duration: acceleration}, "start");

      // SLIDESHOW
      // Credit to Lars Faye
      // https://cheewebdevelopment.com/boilerplate-vanilla-javascript-content-slider/
      const slideshow = document.querySelector('.slideshow');

      if (slideshow != null ) { //make sure we don't run this script if the slideshow is not present

        let slides = document.querySelectorAll('.slideshow__slide'), // grab all slides
            dots = document.querySelectorAll('.slideshow__dots>li'), // get all slideshow indicators
            slideCount = slides.length, //count slides
            currentSlide = 0, // find a starting place for the current slide
            slideHeight = null, // we'll need this later for height calculation
            initialHeight = slides[0].clientHeight; // find the height of the first slide

        slides[0].classList.add('active'); //on load, activate the first slide

        function moveToSlide(n) { // declare our slide navigation function
          slides[currentSlide].className = 'slideshow__slide'; // assign the slide HTML element
          dots[currentSlide].className = '';
          currentSlide = (n + slideCount) % slideCount; // determine current slide (for prev/next functions)
          slides[currentSlide].className = 'slideshow__slide active'; //if it's the current slide, add active class
          dots[currentSlide].className = 'active';
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
            document.getElementById(element).addEventListener('click',nextSlide);
            document.body.addEventListener('keydown',nextSlide, false); // if a key is pressed, attach a listener to find out which one
          },
          prevSlide: function(element){
            document.getElementById(element).addEventListener('click',prevSlide);
            document.body.addEventListener('keydown',prevSlide, false);
          }
        }

        slideHandlers.nextSlide('slideshow__nav__next');
        slideHandlers.prevSlide('slideshow__nav__prev');

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

        dots.forEach(key => key.addEventListener('click', () => {
          let dot = key.dataset.slideTo;
          moveToSlide(parseInt(dot));
        }));
        
        slideshow.addEventListener("touchstart", startTouch, false);
        slideshow.addEventListener("touchmove", moveTouch, false);

        let slideshowAuto = setInterval(nextSlide, 2000);

        // Slideshow start / stop on hover
        function startSlideshow() {
          slideshowAuto = setInterval(nextSlide, 2000);
          // console.log('startSlideshow');
        };
        function stopSlideshow() {
          clearInterval(slideshowAuto);
          slideshowAuto = 0;
          // console.log('stopSlideshow');
        }
        document.getElementById('slideshow__nav__prev').addEventListener("mouseover", stopSlideshow, false);
        document.getElementById('slideshow__nav__prev').addEventListener("mouseout", startSlideshow, false);
        document.getElementById('slideshow__nav__next').addEventListener("mouseover", stopSlideshow, false);
        document.getElementById('slideshow__nav__next').addEventListener("mouseout", startSlideshow, false);
        
      } //end slideshow
    // }
  }


});