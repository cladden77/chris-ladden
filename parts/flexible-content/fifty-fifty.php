<?php
//vars
$header = get_sub_field('header');
$position = get_sub_field('image_position');
$img_id = get_sub_field('image');
$img = wp_get_attachment_image_src($img_id, 'fifty-fifty');
$alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true);
$content_header = get_sub_field('content_header');
$content = get_sub_field('content');
$btnToggle = get_sub_field('button_toggle');
$btn = get_sub_field('button');

// Conditional classes/styles
$rowClass = $position == 'left' ? ' row--reverse' : ''; ?>

<section class="container fifty-fifty">
  <div class="row row--full-width ">
    <div class="sm-col-11 col-10 col-centered">
      <div class="row row--full-width row--align-items-center<?php echo $rowClass; ?>">

        <?php if($header) : ?>
          <div class="col-12">
            <h2 class="text-center">
              <?php echo $header; ?>
            </h2>
          </div>
        <?php endif; ?>

        <div class="col-5 md-col-12 stretch md-text-center fifty-fifty--content">
          <?php if($content_header) : ?>
            <h3><?php echo $content_header; ?></h3>
          <?php endif;

          echo $content; ?>

          <?php if( $btnToggle ) : ?>
            <div class="text-left md-text-center">
              <a href="<?php echo esc_url($btn['url']); ?>" class="button button--primary" role="link" title="<?php echo $btn['title']; ?>">
                <?php echo $btn['title']; ?>
              </a>
            </div>
          <?php endif; ?>
        </div>

        <div class="col-6 md-col-12 sm-col-12 md-col-centered fifty-fifty--img">
          <img src="<?php echo $img[0]; ?>" alt="<?php echo $alt_text; ?>" />
        </div>

      </div>
    </div>
  </div>
</section>
