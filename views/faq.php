<main class="wrapper" data-barba="container" data-barba-namespace="faq">

  <div id="faq">

    <h1>FAQ</h1>
        

    <div class="faq__accordion">
<?php
for ($i=1; $i<=13; $i++) {
?>
      <div class="faq__tab">
        <input type="radio" id="faq_<?=$i?>" name="faq">
        <label class="faq__tab__label" for="faq_<?=$i?>">
          <span><?=$translation->faq('q',$i)?></span><span class="faq__arrow"></span></label>
        <div class="faq__tab__content"><?=$translation->faq('a',$i)?></div>
      </div>
<?php } ?>

  </div>
