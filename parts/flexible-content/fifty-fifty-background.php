<?php
//vars
$header = get_sub_field('header');
$position = get_sub_field('image_position');
$img_id = get_sub_field('image');
$img = wp_get_attachment_image_src($img_id, 'fifty-fifty-background');
$alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true);
$bgimg_id = get_sub_field('bg_image');
$bgimg = wp_get_attachment_image_src($bgimg_id, 'fifty-fifty-background');
$bgalt_text = get_post_meta($bgimg_id , '_wp_attachment_image_alt', true);
$content_header = get_sub_field('content_header');
$content = get_sub_field('content');
$btnToggle = get_sub_field('button_toggle');
$btn = get_sub_field('button');

// Conditional classes/styles
$rowClass = $position == 'left' ? ' row--reverse' : ''; ?>

<section class="container fifty-fifty-background" style="background: linear-gradient(to bottom, rgba(0,181,174,0.9) 0%, rgba(4,57,97,0.9) 100%), url('<?php echo $bgimg[0]; ?>') center <?php echo $bgimg_position; ?>/cover no-repeat;">
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

        <div class="col-5 md-col-12 md-text-center fifty-fifty-background--content">
          <?php if($content_header) : ?>
            <h3><?php echo $content_header; ?></h3>
          <?php endif;

          echo $content; ?>

          <?php if( $btnToggle ) : ?>
            <div class="text-left md-text-center">
              <a href="<?php echo esc_url($btn['url']); ?>" class="button button--white" role="link" title="<?php echo $btn['title']; ?>">
                <?php echo $btn['title']; ?>
              </a>
            </div>
          <?php endif; ?>
        </div>

        <div class="col-6 md-col-12 sm-col-12 md-col-centered fifty-fifty-background--img">
          <img src="<?php echo $img[0]; ?>" alt="<?php echo $alt_text; ?>" />
        </div>

      </div>
    </div>
  </div>
</section>
