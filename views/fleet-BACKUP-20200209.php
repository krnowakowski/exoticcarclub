<body data-barba="wrapper">

  <main data-barba="container" data-barba-namespace="fleet">
    <div>
<?php
foreach($GLOBALS['vehicles'] as $key => $value) {
?>
      <div class="row">
        <div class="col-12">
          <a class="fleet-vehicle" href="<?=get_lang_slug($GLOBALS['path_lang_translate'], $_SESSION['lang'], F_FLEET)?>/<?=$value['slug']?>" style="background-image: url(img/<?=$value['slug']?>/<?=$value['slug']?>.jpg);" data-content="<?=$value['name']?>"></a>
        </div>
      </div>
<?php } ?>
      <!--div class="row">
        <div class="col-12">
          <a class="fleet-vehicle" href="2.html" style="background-image: url(img/ferrari-portofino/ferrari-portofino.jpg);" data-content="Ferrari Portofino"></a>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <a class="fleet-vehicle" href="3.html" style="background-image: url(img/chevrolet-camaro-zl1/chevrolet-camaro-zl1.jpg);" data-content="Chevrolet Camaro ZL1"></a>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <a class="fleet-vehicle" href="4.html" style="background-image: url(img/porsche-911-turbo-s/porsche-911-turbo-s.jpg);" data-content="Porsche 911 Turbo S"></a>
        </div>
      </div-->
    </div>
  </main>


  <script src="https://polyfill.io/v3/polyfill.min.js?features=default%2CArray.prototype.find%2CIntersectionObserver" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/@barba/core"></script>
  <script src="<?=SITE_DIR?>js/jquery-3.4.1.min.js"></script>
  <script src="<?=SITE_DIR?>js/bootstrap.min.js"></script>
  <script src="<?=SITE_DIR?>js/gsap.min.js"></script>
  <script src="<?=SITE_DIR?>js/ScrollToPlugin.min.js"></script>
  <script src="<?=SITE_DIR?>js/exoticcarclub.js"></script>
</body>

</html>