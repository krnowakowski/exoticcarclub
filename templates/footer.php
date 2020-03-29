    	<footer class="section fp-auto-height">
        <div class="footer__wrapper">
          <div>
            <img class="footer__logo" src="/exoticcarclub/img/exotic-car-club-logo.png" alt="Exotic Car Club logo">
          </div>
          <div>
            <address>
            	<?=$translation->footer_site_map('Telefon')?>: <a href="tel:+48720400600">[+48] 720 400 600</a><br />
            	<?=$translation->footer_site_map('Telefon')?>: <a href="tel:+48720400800">[+48] 720 400 800</a><br />
            	ul. Słoneczna 123,<br />
            	05-506 Lesznowola
            </address>
            <ul class="social">
              <li>
                <a href="https://www.facebook.com/Exotic-Car-Club-Poland-152825318243888/" target="_blank" rel="noopener" title="<?=$translation->footer_site_map('Śledź nas na Facebooku')?>"><i class="icon-facebook"></i></a>
              </li>
              <li>
                <a href="https://www.youtube.com/user/exoticcarclubpl" target="_blank" rel="noopener" title="<?=$translation->footer_site_map('Śledź nas na Youtube')?>"><i class="icon-youtube"></i></a>
              </li>
              <li>
                <a href="https://www.instagram.com/exoticcarclubpoland/" target="_blank" rel="noopener" title="<?=$translation->footer_site_map('Śledź nas na Instagramie')?>"><i class="icon-instagram"></i></a>
              </li>
            </ul>
          </div>
          
          <div>
            <ul>
              <li>
                <a href="/exoticcarclub/<?=get_lang_slug($GLOBALS['path_lang_translate'], $_SESSION['lang'], F_FLEET)?>"><?=$translation->footer_site_map('Nasza flota')?></a>
              </li>
              <li>
                <a href="/exoticcarclub/<?=get_lang_slug($GLOBALS['path_lang_translate'], $_SESSION['lang'], F_OFFER)?>"><?=$translation->footer_site_map('Oferta')?></a>
              </li>
              <li>
                <a href="/exoticcarclub/<?=get_lang_slug($GLOBALS['path_lang_translate'], $_SESSION['lang'], F_CONTACT)?>"><?=$translation->footer_site_map('Kontakt')?></a>
              </li>
              <li>
                <a href="/exoticcarclub/<?=get_lang_slug($GLOBALS['path_lang_translate'], $_SESSION['lang'], F_FAQ)?>">FAQ</a>
              </li>
            </ul>
          </div>

          <div>
            <ul>
              <li>
                <a href="/exoticcarclub/<?=get_lang_slug($GLOBALS['path_lang_translate'], $_SESSION['lang'], F_ABOUT)?>"><?=$translation->footer_site_map('O nas')?></a>
              </li>
              <li>
                <a href="/exoticcarclub/<?=get_lang_slug($GLOBALS['path_lang_translate'], $_SESSION['lang'], F_WASZKA)?>">Przemek „Waszka” Waszczuk</a>
              </li>
              <li>
                <a href="/exoticcarclub/<?=get_lang_slug($GLOBALS['path_lang_translate'], $_SESSION['lang'], F_EVENTS)?>">Exotic Rage</a>
              </li>
              <li>
                <a href="/exoticcarclub/<?=get_lang_slug($GLOBALS['path_lang_translate'], $_SESSION['lang'], F_PARTNERS)?>"><?=$translation->footer_site_map('Partnerzy')?></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="footer__copyright">&copy; Copyright Exotic Cars Club 2020</div>
    	</footer>

    </div><!-- END fullpage wrapper -->

  </main><!-- END barba wrapper -->

  <div class="screen-wipe-front"></div>
  <div class="screen-wipe-back"></div>
  <div class="screen-wipe-logo"><?php require_once D_INCLUDES.'logo_svg.php';?></div>

</body>

<script src="https://polyfill.io/v3/polyfill.min.js?features=default%2CArray.prototype.find%2CIntersectionObserver" crossorigin="anonymous"></script>
<script src="https://unpkg.com/@barba/core"></script>
<script src="/exoticcarclub/js/jquery-3.4.1.min.js"></script>
<script src="/exoticcarclub/js/fullpage.js" type="text/javascript"></script>
<script src="/exoticcarclub/js/gsap.min.js"></script>
<script src="/exoticcarclub/js/ScrollToPlugin.min.js"></script>
<script src="/exoticcarclub/js/exoticcarclub.js"></script>

<?php
/*
// // Debug console
// if($debug == 1) { ?>
// 	<button id="btn-session-unset" class="btn btn-light">S</button>
// 	<button id="btn-cookies-unset" class="btn btn-light">C</button>
// 	<button id="btn-debug" class="btn btn-light"><i class="fa fa-bug"></i></button>
// <?php 
//   include_once D_INCLUDES.'debug.php';
}*/
?>	
</html>