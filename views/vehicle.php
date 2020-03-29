<?php
$vehicle = $path['call_parts'][PATH_SUBSITE];
$id = array_search($vehicle, array_column($GLOBALS['vehicles'], 'slug'));
$vehicle_data = $GLOBALS['vehicles'][$id];
$next_vehicle = $id == count($GLOBALS['vehicles']) - 1 ? 0 : $id + 1;
$prev_vehicle = $id == 0 ? count($GLOBALS['vehicles']) - 1 : $id - 1;
$alternate = $id % 2;
?>

<main class="wrapper" data-barba="container" data-barba-namespace="vehicle">

  <div class="fullpage-wrapper" id="fullpage-<?=$id?>">

    <div class="section hero">
      
      <!--picture class="vehicle__image">
        <source srcset="/exoticcarclub/<?=D_IMAGES.$vehicles[6]['slug']?>/ferrari-portofino.jpg" media="(max-width: 639px) and (orientation: portrait)">
        <source srcset="/exoticcarclub/<?=D_IMAGES.$vehicles[6]['slug']?>/ferrari-portofino.jpg" media="(max-width: 839px) and (orientation: landscape)">
        <source srcset="/exoticcarclub/<?=D_IMAGES.$vehicles[6]['slug']?>/ferrari-portofino.jpg" media="(min-width: 640px) and (orientation:portrait)">
        <source srcset="/exoticcarclub/<?=D_IMAGES.$vehicles[6]['slug']?>/ferrari-portofino.jpg" media="(min-width: 840px) and (orientation:landscape)">
        <img src="/exoticcarclub/<?=D_IMAGES.$vehicles[6]['slug']?>/ferrari-portofino.jpg" alt="<?=$vehicle_data['name']?>">
      </picture-->

      <img class="hero__image" src="/exoticcarclub/<?=D_IMAGES.$vehicles[$id]['slug']?>/<?=$vehicles[$id]['slug']?>.jpg" alt="<?=$vehicle_data['name']?>">

      <div class="hero__info">
        <div class="hero__title">
          <h1><?=$vehicle_data['name']?></h1>
        </div>
        <div class="hero__details">

          <div class="hero__details__item acceleration">

            <div class="acceleration__speedometer">
              <div class="acceleration__speedometer__circle">
                <div class="acceleration__speedometer__circle__inner"></div>
              </div>
              <div class="acceleration__speedometer__needle"></div>
            </div>

            <div class="acceleration__speedometer__numbers">
              <span id="acceleration__speedometer__integer" data-value="<?=$vehicle_data['acceleration'][0]?>">
                0<br/>1<br/>2<br/>3<br/>4<br/>5<br/>6<br/>7<br/>8<br/>9
              </span>
              <span>.</span>
              <span id="acceleration__speedometer__fractional" data-value="<?=$vehicle_data['acceleration'][1]?>">
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

          <div class="hero__details__item mobile__hidden">
            <span><?=$vehicle_data['engine']?></span>
            <small>Silnik</small>
          </div>

          <div class="hero__details__item">
            <span><?=$vehicle_data['power']?> KM</span>
            <small>Moc</small>
          </div>

          <div class="hero__details__item">
            <span><?=$vehicle_data['v-max']?> km/h</span>
            <small>V max</small>
          </div>

        </div>

        <div class="hero__arrow mobile__hidden">
          <i class="hero__arrow__down"></i>
        </div>

      </div>

    </div>


    <div class="section fp-auto-height-responsive">
      <div class="vehicle__section">
        <div class="vehicle__section__text --p-medium">
          <p class="lead"><?=$translation->vehicles($vehicle.'-paragraph-1')?></p>
        </div>
        <div class="vehicle__section__img --p-medium" style="background-image: url(/exoticcarclub/<?=D_IMAGES.$vehicle_data['slug']?>/<?=$vehicle_data['slug'].array_keys($vehicle_data['img'])[1]?>.jpg);">
        </div>
      </div>
    </div>


    <div class="section fp-auto-height-responsive">
      <div class="vehicle__section vehicle__section--reverse">
        <div class="vehicle__section__text --p-medium">
          <p class="lead"><?=$translation->vehicles($vehicle.'-paragraph-2')?></p>
        </div>
        <div class="vehicle__section__img --p-medium" style="background-image: url(/exoticcarclub/<?=D_IMAGES.$vehicle_data['slug']?>/<?=$vehicle_data['slug'].array_keys($vehicle_data['img'])[2]?>.jpg);">
        </div>
      </div>
    </div>

    <div class="section fp-auto-height-responsive">
      <div class="vehicle__section">
        <div class="vehicle__section__text --p-medium">
          <p class="lead"><?=$translation->vehicles($vehicle.'-paragraph-3')?></p>
        </div>
        <div class="vehicle__section__img --p-medium vehicle__section__img--last" style="background-image: url(/exoticcarclub/<?=D_IMAGES.$vehicle_data['slug']?>/<?=$vehicle_data['slug'].array_keys($vehicle_data['img'])[3]?>.jpg);">
        </div>
      </div>
    </div>

    <div class="section fp-auto-height-responsive">
    
      <div class="slideshow">

  <?php
      $temp_arr = array_slice($vehicle_data['img'], 3);
      foreach($temp_arr as $key => $value) {
  ?>
        <div class="slideshow__slide">
          <img src="/exoticcarclub/<?=D_IMAGES.$vehicle_data['slug']?>/<?=$vehicle_data['slug'].$key?>.jpg" alt="<?=$vehicle_data['name'].$value?>">
        </div>
  <?php } ?>

        <ul class="slideshow__nav">
          <li id="slideshow__nav__prev"><span>&#10094;</span></li>
          <li id="slideshow__nav__next"><span>&#10095;</span></li>
        </ul><!-- end .slideshow__nav -->

        <!-- The dots/circles -->
        <ul class="slideshow__dots">
  <?php
        $slide_to = 0;
        foreach($temp_arr as $key => $value) {
  ?>
          <li class="<?=$slide_to == 0 ? 'active' : ''?>" data-slide-to="<?=$slide_to++?>"></li>
  <?php } ?>
        </ul>

      </div><!-- end .slideshow -->
    </div><!-- end .section -->

    <div class="section fp-auto-height-responsive swipe">
        <a class="swipe__left" href="<?=$vehicles[$prev_vehicle]['slug']?>">
          <div class="swipe__bg" style="background-image: url(/exoticcarclub/<?=D_IMAGES.$vehicles[$prev_vehicle]['slug']?>/<?=$vehicles[$prev_vehicle]['slug']?>.jpg);"></div>
          <div class="swipe__overlay">
            <div class="swipe__overlay__text"><span>&#10094;</span> &nbsp;<?=$vehicles[$prev_vehicle]['name']?></div>
          </div>
        </a>
        <a class="swipe__right" href="<?=$vehicles[$next_vehicle]['slug']?>">
          <div class="swipe__bg" style="background-image: url(/exoticcarclub/<?=D_IMAGES.$vehicles[$next_vehicle]['slug']?>/<?=$vehicles[$next_vehicle]['slug']?>.jpg);"></div>
          <div class="swipe__overlay">
            <div class="swipe__overlay__text"><?=$vehicles[$next_vehicle]['name']?>&nbsp; <span>&#10095;</span></div>
          </div>
        </a>
    </div>


    <!--a class="nav next" href="/exoticcarclub/<?=get_lang_slug($GLOBALS['path_lang_translate'], $_SESSION['lang'], F_FLEET)?>/<?=$vehicles[$next_vehicle]['slug']?>/">NEXT</a>
    <a class="nav prev" href="/exoticcarclub/<?=get_lang_slug($GLOBALS['path_lang_translate'], $_SESSION['lang'], F_FLEET)?>/<?=$vehicles[$prev_vehicle]['slug']?>/">PREV</a-->
