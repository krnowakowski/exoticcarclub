<?php
$vehicle = $path['call_parts'][PATH_SUBSITE];
$id = array_search($vehicle, array_column($GLOBALS['vehicles'], 'slug'));
$vehicle_data = $GLOBALS['vehicles'][$id];
$next_vehicle = $id == count($GLOBALS['vehicles']) - 1 ? 0 : $id + 1;
$prev_vehicle = $id == 0 ? count($GLOBALS['vehicles']) - 1 : $id - 1;
?>

<body data-barba="wrapper">

  <main class="container-fluid" data-barba="container" data-barba-namespace="vehicle">

    <div class="row">

      <div class="col-12 col-lg-6 p-0">
      <!--header style="background-image: url(<?=D_IMAGES.$vehicles[0]['slug']?>/lamborghini-aventador-sv.jpg);"></header-->

        <div id="carousel-vehicle" class="carousel slide carousel-fade" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel-vehicle" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-vehicle" data-slide-to="1"></li>
            <li data-target="#carousel-vehicle" data-slide-to="2"></li>
            <li data-target="#carousel-vehicle" data-slide-to="3"></li>
            <li data-target="#carousel-vehicle" data-slide-to="4"></li>
          </ol>
          <div class="carousel-inner">
<?php
  $active = ' active';
  foreach($vehicle_data['img'] as $key => $value) {
?>
            <div class="carousel-item<?=$active?>">
              <img src="/exoticcarclub/<?=D_IMAGES.$vehicle_data['slug']?>/<?=$vehicle_data['slug'].$key?>.jpg" class="d-block w-100" alt="<?=$vehicle_data['name'].$value?>">
            </div>
<?php
    $active = '';
  }
?>
          </div>
          <a class="carousel-control-prev" href="#carousel-vehicle" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel-vehicle" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

      <div class="col-12 col-lg-6">
        <h1><?=$vehicle_data['name']?></h1>
        
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad non minus porro. Rerum magnam ab, esse sunt nisi a
          praesentium pariatur quia unde architecto eveniet ipsum molestiae maxime sit, assumenda.</p>
        <p>Labore maiores ratione enim tenetur sequi, esse. Expedita necessitatibus et distinctio quas eum, magni dolorem
          similique, quod aut, ratione optio! Laudantium similique deleniti beatae facere reiciendis laboriosam nulla
          fugit illum.</p>
        <p>Atque iusto, sequi necessitatibus accusantium ipsum obcaecati. Deserunt, repudiandae, magnam fugit distinctio
          enim fuga excepturi incidunt eligendi nam officia accusantium id nemo omnis suscipit officiis doloremque,
          laboriosam tempora quas ullam.</p>
        <p>Quibusdam officia fugit modi repudiandae recusandae mollitia at aperiam. Quod sed, eos nam laudantium, debitis
          eligendi hic dolore tempore vitae sequi, natus consectetur numquam adipisci! Corporis nihil autem neque
          quisquam.</p>
        <p>Repellat non repudiandae illum possimus, amet cum blanditiis dolorem harum odit quibusdam accusantium nisi
          tempore, eos ratione soluta rerum aspernatur eligendi provident quas sunt. Quis odit dolores earum ullam
          perspiciatis!</p>
        <p>Quod voluptatem veniam, optio at praesentium, saepe incidunt quia? Culpa optio perspiciatis, odit quibusdam
          voluptatem esse ipsam doloremque rerum hic quas, ducimus, ab nobis quia ad unde vitae error accusamus?</p>
        <p>Impedit odit deserunt quos, vero delectus. Enim asperiores voluptatum, modi beatae! Beatae provident, minima
          quo dolore officiis fugiat corrupti excepturi nobis suscipit ullam nesciunt, voluptatem aliquid iure repellat
          atque repellendus!</p>
        <p>Optio voluptate, provident tenetur aut molestias quod itaque id facilis illum dignissimos, sequi quaerat! Vel
          cumque, labore iste quam velit veniam reiciendis id, alias, maxime illum necessitatibus dolore aliquid rem.</p>
        <p>Dolores illum similique recusandae, facilis eligendi tempore illo, necessitatibus eius ipsa magnam quae,
          excepturi veniam laboriosam reiciendis culpa est amet, quis? Expedita sequi, exercitationem possimus molestiae
          at sunt quisquam commodi.</p>
        <p>Corporis fuga, perspiciatis iste aspernatur debitis possimus odit sint aut, ratione officia sed id pariatur
          voluptatem dolores atque asperiores doloribus praesentium labore laudantium veritatis. Totam, recusandae
          mollitia dignissimos cupiditate! Voluptas!</p>
      </div>
    </div>

    <a class="nav next" href="/exoticcarclub/<?=get_lang_slug($GLOBALS['path_lang_translate'], $_SESSION['lang'], F_FLEET)?>/<?=$vehicles[$next_vehicle]['slug']?>/">NEXT</a>
    <a class="nav prev" href="/exoticcarclub/<?=get_lang_slug($GLOBALS['path_lang_translate'], $_SESSION['lang'], F_FLEET)?>/<?=$vehicles[$prev_vehicle]['slug']?>/">PREV</a>

    <div class="screen-wipe-front"></div>
    <div class="screen-wipe-back"></div>
    <div class="screen-wipe-logo">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="512.2px" height="60.9px" viewBox="0 0 512.2 60.9" style="enable-background:new 0 0 512.2 60.9;" xml:space="preserve">
                  <polygon class="logo__color" points="104.4,23.9 104.4,27.8 81.3,27.8 81.3,8.6 104.3,8.6 104.3,12.4 86.2,12.4 86.2,16.6 100.4,16.6
        100.4,19.3 86.2,19.3 86.2,23.9    "></polygon>
                <polygon class="logo__color" points="134.5,27.8 126.2,20.6 118.1,27.8 112,27.8 123,18.2 112,8.7 118.5,8.7 126.7,15.9 134.8,8.7
        141,8.7 130,18.3 141,27.8     "></polygon>
                <path class="logo__color" d="M169.1,18.6v-0.9c0-4.1-3.6-5.5-9.4-5.5c-5.7,0-9.2,1.4-9.2,5.5v0.9c0,4.1,3.5,5.5,9.2,5.5
        C165.5,24.2,169.1,22.7,169.1,18.6 M145.6,18.6v-1c0-6.5,4.8-9.7,14.1-9.7c9.4,0,14.3,3.1,14.3,9.7v1c0,6.6-4.9,9.7-14.3,9.7
        C150.4,28.3,145.6,25.2,145.6,18.6"></path>
                <polygon class="logo__color" points="205,12.7 195.3,12.7 195.3,27.8 190.4,27.8 190.4,12.7 180.7,12.7 180.7,8.7 205,8.7    "></polygon>
                <rect x="213.2" y="8.6" class="logo__color" width="4.9" height="19.2"></rect>
                <path class="logo__color" d="M239.9,28.4c-8,0-13.1-2.3-13.1-9.8v-1c0-7,5.2-9.7,14-9.7c4.8,0,9.8,0.7,13.2,3.5l-2.3,3.8
        c-2.2-2-5.6-3-10.9-3c-5.3,0-9.2,1.2-9.2,5.5v0.8c0,4.3,3.9,5.6,9.3,5.6c4.8,0,8.5-1.1,10.9-3.5l2,3.9
        C250.7,27.3,246.5,28.4,239.9,28.4"></path>
                <path class="logo__color" d="M287.6,28.4c-8,0-13.1-2.3-13.1-9.8v-1c0-7,5.2-9.7,14-9.7c4.8,0,9.8,0.7,13.2,3.5l-2.3,3.8
        c-2.2-2-5.6-3-10.9-3s-9.2,1.2-9.2,5.5v0.8c0,4.3,3.9,5.6,9.3,5.6c4.8,0,8.5-1.1,10.9-3.5l2,3.9C298.5,27.3,294.3,28.4,287.6,28.4
        "></path>
                <path class="logo__color" d="M326.6,21.5l-5.1-9.6l-5.1,9.6H326.6z M328.4,24.9h-13.9l-1.6,2.9h-5.2l10.9-19.4h6l10.7,19.4h-5.4
        L328.4,24.9z"></path>
                <path class="logo__color" d="M347.8,18.3h10.4c2.5,0,4.2-1,4.2-3.1c0-2.1-1.7-2.6-4.2-2.6h-10.4V18.3z M356.2,21.9h-8.4v6h-4.8V8.6h15.5
        c5.5,0,8.8,1.5,8.8,6.4c0,3.4-1.9,5.7-5.5,6.5l6.6,6.4h-6.2L356.2,21.9z"></path>
                <path class="logo__color" d="M402,28.4c-8,0-13.1-2.3-13.1-9.8v-1c0-7,5.2-9.7,14-9.7c4.8,0,9.8,0.7,13.2,3.5l-2.3,3.8
        c-2.2-2-5.6-3-10.9-3c-5.3,0-9.2,1.2-9.2,5.5v0.8c0,4.3,3.9,5.6,9.3,5.6c4.8,0,8.5-1.1,10.9-3.5l2,3.9
        C412.8,27.3,408.6,28.4,402,28.4"></path>
                <polygon class="logo__color" points="445.1,23.6 445.1,27.8 424.5,27.8 424.5,8.6 429.4,8.6 429.4,23.6    "></polygon>
                <path class="logo__color" d="M452.1,17.5V8.7h4.9v8.7c0,5,3.1,6.8,7.8,6.8c4.4,0,7.6-1.8,7.6-6.8V8.7h4.8v8.9c0,7.4-4.5,10.9-12.4,10.9
        C456.9,28.4,452.1,24.9,452.1,17.5"></path>
                <path class="logo__color" d="M507.3,21.4c0-1.3-1.3-2-2.9-2h-12.9v4.2h12.3C506.4,23.7,507.3,22.6,507.3,21.4 M503.4,12.6h-11.8v3.7h11.3
        c1.7,0,3.1-0.7,3.1-2.1C506,13.1,505,12.6,503.4,12.6 M512.2,22.2c0,3.9-3,5.7-8.8,5.7h-16.6V8.6h17.5c4.6,0,6.6,1.6,6.6,4.5
        c0,2.2-1.3,3.7-3.1,4.4C510.6,17.9,512.2,19.7,512.2,22.2"></path>
                <path class="logo__color" d="M89.2,56.4l-0.1-1.7c-0.4,0.7-0.9,1.2-1.5,1.5c-0.6,0.3-1.2,0.5-2,0.5c-1,0-1.7-0.3-2.3-0.9
        c-0.5-0.6-0.8-1.4-0.8-2.5v-8h1.9v7.8c0,0.8,0.1,1.3,0.4,1.6c0.3,0.3,0.7,0.5,1.3,0.5c1.1,0,2-0.6,2.8-1.9v-8h1.9v11.2H89.2z"></path>
                <path class="logo__color" d="M107.2,45.9c0.6,0.6,0.9,1.4,0.9,2.5v8h-1.9v-7.7c0-0.8-0.1-1.3-0.4-1.7c-0.3-0.3-0.7-0.5-1.3-0.5
        c-0.6,0-1.1,0.2-1.6,0.5c-0.5,0.3-0.9,0.8-1.3,1.5v7.9h-1.9V45.3h1.7l0.2,1.7c0.4-0.6,0.9-1.1,1.5-1.4c0.6-0.3,1.2-0.5,1.9-0.5
        C105.8,45,106.6,45.3,107.2,45.9"></path>
                <path class="logo__color" d="M123.1,49.9c0-1.1-0.2-1.9-0.7-2.5c-0.4-0.6-1.1-0.9-2-0.9c-1.6,0-2.5,1.2-2.6,3.5h5.2V49.9z M125,51.5h-7.1
        c0.1,1.2,0.4,2.1,0.9,2.7c0.5,0.6,1.2,0.9,2.1,0.9c0.5,0,1-0.1,1.5-0.2c0.5-0.2,0.9-0.4,1.4-0.7l0.8,1.2c-1.2,0.9-2.5,1.4-3.9,1.4
        c-1.6,0-2.8-0.5-3.6-1.5c-0.9-1-1.3-2.4-1.3-4.2c0-1.2,0.2-2.2,0.6-3.1c0.4-0.9,0.9-1.6,1.6-2.1c0.7-0.5,1.5-0.8,2.5-0.8
        c1.5,0,2.6,0.5,3.4,1.5c0.8,1,1.2,2.3,1.2,4C125,50.8,125,51.2,125,51.5"></path>
                <polygon class="logo__color" points="138.5,56.4 135.8,51.7 133,56.4 130.8,56.4 134.7,50.5 131.2,45.3 133.5,45.3 135.8,49.4 138.2,45.3
        140.4,45.3 137,50.5 140.8,56.4    "></polygon>
                <path class="logo__color" d="M154.8,50.8c0-2.9-0.8-4.3-2.5-4.3c-0.6,0-1.1,0.2-1.5,0.5c-0.5,0.3-0.8,0.7-1.2,1.3v5.4
        c0.3,0.4,0.6,0.8,1.1,1c0.4,0.2,0.9,0.3,1.4,0.3C153.8,55.1,154.8,53.7,154.8,50.8 M155.9,46.5c0.7,1,1,2.5,1,4.3
        c0,1.8-0.4,3.2-1.1,4.2c-0.8,1.1-1.8,1.6-3.2,1.6c-1.2,0-2.2-0.4-2.9-1.3v5.3l-1.9,0.2V45.3h1.7l0.1,1.5c0.4-0.6,0.9-1,1.5-1.3
        c0.6-0.3,1.2-0.5,1.8-0.5C154.1,45,155.2,45.5,155.9,46.5"></path>
                <path class="logo__color" d="M171.3,49.9c0-1.1-0.2-1.9-0.7-2.5c-0.4-0.6-1.1-0.9-2-0.9c-1.6,0-2.5,1.2-2.6,3.5h5.2V49.9z M173.2,51.5
        h-7.1c0.1,1.2,0.4,2.1,0.9,2.7c0.5,0.6,1.2,0.9,2.1,0.9c0.5,0,1-0.1,1.5-0.2c0.5-0.2,0.9-0.4,1.4-0.7l0.8,1.2
        c-1.2,0.9-2.5,1.4-3.9,1.4c-1.6,0-2.8-0.5-3.6-1.5c-0.9-1-1.3-2.4-1.3-4.2c0-1.2,0.2-2.2,0.6-3.1c0.4-0.9,0.9-1.6,1.6-2.1
        c0.7-0.5,1.5-0.8,2.5-0.8c1.5,0,2.6,0.5,3.4,1.5c0.8,1,1.2,2.3,1.2,4C173.2,50.8,173.2,51.2,173.2,51.5"></path>
                <path class="logo__color" d="M187,45.3c0.6,0.2,1.1,0.5,1.6,0.9l-1,1.3c-0.4-0.3-0.8-0.5-1.1-0.7c-0.4-0.1-0.8-0.2-1.2-0.2
        c-0.9,0-1.6,0.4-2.1,1.1c-0.5,0.7-0.8,1.8-0.8,3.2s0.2,2.5,0.7,3.1c0.5,0.7,1.2,1,2.1,1c0.5,0,0.9-0.1,1.2-0.2
        c0.4-0.1,0.8-0.4,1.2-0.7l0.9,1.3c-1,0.8-2.2,1.2-3.4,1.2c-1.5,0-2.7-0.5-3.6-1.5c-0.9-1-1.3-2.4-1.3-4.2c0-1.2,0.2-2.2,0.6-3.1
        c0.4-0.9,1-1.6,1.7-2.1c0.7-0.5,1.6-0.7,2.6-0.7C185.8,45,186.4,45.1,187,45.3"></path>
                <path class="logo__color" d="M199,56.7c-0.9,0-1.7-0.3-2.2-0.8c-0.5-0.5-0.8-1.3-0.8-2.4v-6.7h-1.9v-1.5h1.9v-2.5l1.9-0.2v2.8h2.6
        l-0.2,1.5H198v6.7c0,0.6,0.1,1,0.3,1.3c0.2,0.3,0.5,0.4,1,0.4c0.5,0,1-0.2,1.5-0.5l0.7,1.3C200.8,56.4,199.9,56.7,199,56.7"></path>
                <path class="logo__color" d="M214.5,49.9c0-1.1-0.2-1.9-0.7-2.5c-0.4-0.6-1.1-0.9-2-0.9c-1.6,0-2.5,1.2-2.6,3.5h5.2V49.9z M216.3,51.5
        h-7.1c0.1,1.2,0.4,2.1,0.9,2.7c0.5,0.6,1.2,0.9,2.1,0.9c0.5,0,1-0.1,1.5-0.2c0.5-0.2,0.9-0.4,1.4-0.7l0.8,1.2
        c-1.2,0.9-2.5,1.4-3.9,1.4c-1.6,0-2.8-0.5-3.6-1.5c-0.9-1-1.3-2.4-1.3-4.2c0-1.2,0.2-2.2,0.6-3.1c0.4-0.9,0.9-1.6,1.6-2.1
        c0.7-0.5,1.5-0.8,2.5-0.8c1.5,0,2.6,0.5,3.4,1.5c0.8,1,1.2,2.3,1.2,4C216.4,50.8,216.4,51.2,216.3,51.5"></path>
                <path class="logo__color" d="M229.7,54.7c0.4-0.3,0.8-0.7,1.2-1.2V48c-0.4-0.5-0.8-0.8-1.2-1.1c-0.4-0.2-0.9-0.4-1.4-0.4
        c-0.9,0-1.5,0.4-2,1.1c-0.5,0.7-0.7,1.8-0.7,3.2c0,1.4,0.2,2.5,0.7,3.2c0.4,0.7,1.1,1.1,1.9,1.1C228.8,55.1,229.3,55,229.7,54.7
         M232.9,56.4h-1.7l-0.2-1.5c-0.4,0.6-0.8,1-1.4,1.3c-0.6,0.3-1.2,0.5-1.8,0.5c-1.3,0-2.4-0.5-3.1-1.6c-0.7-1-1.1-2.5-1.1-4.2
        c0-1.1,0.2-2.2,0.5-3c0.4-0.9,0.9-1.6,1.5-2.1c0.7-0.5,1.4-0.8,2.3-0.8c1.1,0,2.1,0.5,3,1.4v-5.8l1.9,0.2V56.4z"></path>
                <path class="logo__color" d="M253.7,40.3c0.3,0.3,0.4,0.6,0.4,1c0,0.4-0.1,0.7-0.4,0.9c-0.3,0.2-0.6,0.4-1,0.4c-0.4,0-0.7-0.1-1-0.4
        c-0.3-0.2-0.4-0.6-0.4-0.9c0-0.4,0.1-0.7,0.4-1c0.3-0.3,0.6-0.4,1-0.4C253.1,39.9,253.5,40,253.7,40.3 M253.3,58.2
        c-0.3,0.6-0.6,1.1-1.1,1.5c-0.5,0.4-1.2,0.8-2,1.2l-0.6-1.4c0.6-0.3,1-0.5,1.3-0.8c0.3-0.2,0.5-0.6,0.7-1c0.1-0.4,0.2-1.1,0.2-1.8
        V45.3h1.9v10.5C253.7,56.8,253.6,57.6,253.3,58.2"></path>
                <path class="logo__color" d="M263.7,50.9c0,2.8,1,4.3,2.9,4.3c1.9,0,2.9-1.4,2.9-4.3c0-2.8-1-4.3-2.9-4.3C264.6,46.6,263.7,48,263.7,50.9
         M270.2,46.6c0.9,1,1.3,2.5,1.3,4.3c0,1.2-0.2,2.2-0.6,3.1c-0.4,0.9-1,1.6-1.7,2.1c-0.7,0.5-1.6,0.7-2.7,0.7
        c-1.6,0-2.8-0.5-3.7-1.6c-0.9-1-1.3-2.5-1.3-4.3c0-1.2,0.2-2.2,0.6-3.1c0.4-0.9,1-1.6,1.7-2.1c0.7-0.5,1.6-0.7,2.7-0.7
        C268.1,45,269.4,45.5,270.2,46.6"></path>
                <path class="logo__color" d="M286,56.4l-0.1-1.7c-0.4,0.7-0.9,1.2-1.5,1.5c-0.6,0.3-1.2,0.5-2,0.5c-1,0-1.7-0.3-2.3-0.9
        c-0.6-0.6-0.8-1.4-0.8-2.5v-8h1.9v7.8c0,0.8,0.1,1.3,0.4,1.6c0.3,0.3,0.7,0.5,1.3,0.5c1.1,0,2-0.6,2.8-1.9v-8h1.9v11.2H286z"></path>
                <path class="logo__color" d="M302.3,45.1l-0.4,1.9c-0.3-0.1-0.7-0.1-1-0.1c-0.7,0-1.3,0.3-1.7,0.8c-0.4,0.5-0.8,1.3-1,2.4v6.4h-1.9V45.3
        h1.7l0.2,2.3c0.3-0.8,0.7-1.5,1.2-1.9c0.5-0.4,1.1-0.6,1.8-0.6C301.6,45,302,45.1,302.3,45.1"></path>
                <path class="logo__color" d="M316.8,45.9c0.6,0.6,0.9,1.4,0.9,2.5v8h-1.9v-7.7c0-0.8-0.1-1.3-0.4-1.7c-0.3-0.3-0.7-0.5-1.3-0.5
        c-0.6,0-1.1,0.2-1.6,0.5c-0.5,0.3-0.9,0.8-1.3,1.5v7.9h-1.9V45.3h1.7l0.2,1.7c0.4-0.6,0.9-1.1,1.5-1.4c0.6-0.3,1.2-0.5,1.9-0.5
        C315.4,45,316.2,45.3,316.8,45.9"></path>
                <path class="logo__color" d="M332.7,49.9c0-1.1-0.2-1.9-0.7-2.5c-0.4-0.6-1.1-0.9-2-0.9c-1.6,0-2.5,1.2-2.6,3.5h5.2V49.9z M334.6,51.5
        h-7.1c0.1,1.2,0.4,2.1,0.9,2.7c0.5,0.6,1.2,0.9,2.1,0.9c0.5,0,1-0.1,1.5-0.2c0.5-0.2,0.9-0.4,1.4-0.7l0.8,1.2
        c-1.2,0.9-2.5,1.4-3.9,1.4c-1.6,0-2.8-0.5-3.6-1.5c-0.9-1-1.3-2.4-1.3-4.2c0-1.2,0.2-2.2,0.6-3.1c0.4-0.9,0.9-1.6,1.6-2.1
        c0.7-0.5,1.5-0.8,2.5-0.8c1.5,0,2.6,0.5,3.4,1.5c0.8,1,1.2,2.3,1.2,4C334.7,50.8,334.6,51.2,334.6,51.5"></path>
                <path class="logo__color" d="M344.9,59.6c-0.8,0.8-1.9,1.2-3.4,1.4l-0.2-1.5c0.7-0.1,1.3-0.3,1.8-0.6c0.4-0.2,0.8-0.5,1-0.9
        c0.3-0.4,0.5-0.9,0.7-1.5h-0.7l-3.8-11.2h2.1l3,9.7l2.9-9.7h2l-3.7,11.2C346.3,57.8,345.7,58.8,344.9,59.6"></path>
                <path class="logo__color" d="M49,15.9C49,15.9,49,15.9,49,15.9C49,15.9,49,15.9,49,15.9"></path>
                <path class="logo__color" d="M47.7,29l-0.1,0.2c-0.8,1.6-5,1.6-10.1-1c-4.2-2.2-7.1-3.2-8.8-4.8h0c0,0.1-0.1,0.2-0.2,0.3l0.1-0.2
        c-0.3,0.7,0.2,1.3,0.4,1.4c2.3,1.4,5.5,3.7,8.2,6c5.2,4.4,7.7,6.5,6.4,7.7l-0.2,0.2c-1.4,1.3-5.1,0.1-9.2-4.4
        c-3.4-3.7-5.3-6.6-6.5-8.8l-0.2-0.3c0,0,0,0.1-0.1,0.1c-1.7,1.8-4.9,5.5-6.4,9c-1.7,4.1-1.9,6.3-2,7.1c0,0,0.1,0.7,0.1,0.7
        c0.1,0.5-0.4,0.9-0.6,1.2c-0.1,0.1-0.2,0.2-0.3,0.3l-0.1,0c0-0.1-0.1-0.2-0.2-0.4c-0.3-0.3-0.7-0.8-0.5-1.3c0,0,0.2-0.8,0.2-0.9
        c0,0,0-2.7,1.7-7.5c1.3-3.8,5.1-7.9,5.9-9.4l-0.3,0c-2.5,0.4-6.8-0.1-11.4-2.3C8.2,19.2,6,16,6.8,14.3l0.1-0.2
        c0.8-1.6,3.5,0.3,9.2,4c2.9,1.9,6.1,3.7,8.6,4.8c0.1,0.1,1,0.1,1.4-0.6l0,0.1c0,0,0-0.1,0.1-0.1l0,0c-2.3-0.4-4.7-1.5-8-4.9
        c-3.9-4.1-5-8.2-3.8-9.4l0.2-0.2c1.2-1.1,3.7,1.6,7.5,6.7c2,2.7,2.6,4.9,4.5,6.6c0.6,0.3,1.5-0.6,1.6-0.6c0,0,0.2-0.1,0.2-0.5
        c-0.1-0.3-0.1-0.6,0.2-0.9c0.3-0.4,0.8-0.5,1.2-0.3c0,0,0,0,0.1,0c0.3,0,0.6,0.1,0.8,0.2c0.2,0.1,0.3,0.4,0.4,0.7c0,0,0,0,0.1,0
        c0.4,0.3,0.4,0.8,0.1,1.2c-0.2,0.3-0.5,0.4-0.8,0.4c-0.4,0.1-0.9,0.2-1,0.4c-0.1,0.6,0,0.6,0.2,0.8c2.5,0.5,6.1,0.9,9.3,1.6
        C45,25.5,48.5,27.6,47.7,29 M51.3,4.7C45.2,1.6,36.8,0,26.2,0C15.8,0,7.6,1.5,1.6,4.6C0.5,9.2,0,14.5,0,20.5
        c0,14,2.7,24.1,8.2,30.2c4.1,4.5,9.7,6.8,16.9,6.8h2.6c7.2,0,12.8-2.3,16.9-6.9c5.4-6.1,8.1-16.2,8.1-30.1
        C52.8,14.5,52.3,9.3,51.3,4.7"></path>
      </svg>
    </div>

  </main>

  <script src="https://polyfill.io/v3/polyfill.min.js?features=default%2CArray.prototype.find%2CIntersectionObserver" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/@barba/core"></script>
  <script src="/exoticcarclub/js/jquery-3.4.1.min.js"></script>
  <script src="/exoticcarclub/js/bootstrap.min.js"></script>
  <script src="/exoticcarclub/js/gsap.min.js"></script>
  <script src="/exoticcarclub/js/ScrollToPlugin.min.js"></script>
  <script src="/exoticcarclub/js/exoticcarclub.js"></script>
