<?php

//vars
$header = get_sub_field('header');
$content = get_sub_field('content');

// Conditional classes/styles

?>

<section class="container full-width">
  <div class="row row--full-width">
    <div class="sm-col-11 col-10 columns col-centered">
      <?php if($header) : ?>
        <h2 class="text-center" data-aos="fade-up">
          <?php echo $header; ?>
        </h2>
      <?php endif; ?>
      <?php if($content) : ?>
        <div class="full-width__content">
          <?php echo $content; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>
