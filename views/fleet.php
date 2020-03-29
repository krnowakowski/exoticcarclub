<style>
/* Let's get this party started */
::-webkit-scrollbar {
    width: 12px;
}
 
/* Track */
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
    -webkit-border-radius: 10px;
    border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
    -webkit-border-radius: 10px;
    border-radius: 10px;
    background: var(--color-ecc); 
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
}
::-webkit-scrollbar-thumb:window-inactive {
  background: rgba(255,0,0,0.4); 
}
.progressbar {
  position: fixed;
  top: 0;
  left: 99.5%;
  background: rgba(255, 255, 255, 0.5);
  width: 2px;
  z-index: 1001;
}

@media (max-width: 900px) {
  .progressbar {
    display: none;
  }
}
</style>

<main class="wrapper" data-barba="container" data-barba-namespace="fleet">

  <div class="fleet">
  
    <div class="fleet__wrapper">
<?php
foreach($GLOBALS['vehicles'] as $key => $value) {
?>
      <div class="fleet__preview" data-slug="<?=$value['slug']?>"></div>
<?php } ?>
    </div>

    <ul class="fleet__list">
<?php
foreach($GLOBALS['vehicles'] as $key => $value) {
?>
      <li class="fleet__item">
        <a href="<?=get_lang_slug($GLOBALS['path_lang_translate'], $_SESSION['lang'], F_FLEET)?>/<?=$value['slug']?>" data-slug="<?=$value['slug']?>"><?=$value['name']?></a>
      </li>
<?php } ?>
    </ul>


    <ul class="fleet__mobile__list">
<?php
foreach($GLOBALS['vehicles'] as $key => $value) {
?>
      <li class="fleet__mobile__item">
        <a class="fleet__mobile__link" href="<?=get_lang_slug($GLOBALS['path_lang_translate'], $_SESSION['lang'], F_FLEET)?>/<?=$value['slug']?>">
          <img src="/exoticcarclub/img/<?=$value['slug']?>/<?=$value['slug']?>-thumb.png">
          <h3 class="fleet__mobile__name"><b><?=$value['name']?></b></h3>
          <span class="fleet__mobile__item__details"><?=$value['engine']?>, <?=$value['power']?>KM, 0-100 = <?=$value['acceleration'][0]?>,<?=$value['acceleration'][1]?>sek., <?=$value['v-max']?>km/h</span>
        </a>
      </li>
<?php } ?>
    </ul>


  </div>



<?php /*
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
    </div>
  </main>
*/ ?>
