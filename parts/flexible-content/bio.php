<?php

//vars
$header = get_sub_field('header');
$subheader = get_sub_field('subheader');
$bioimg_id = get_sub_field('bio_image');
$bioimg = wp_get_attachment_image_src($bioimg_id, 'bio');
$bioalt_text = get_post_meta($bioimg_id , '_wp_attachment_image_alt', true);
$content = get_sub_field('content');
$img_id = get_sub_field('image');
$img = wp_get_attachment_image_src($img_id, 'bio');
$alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true);
$link = get_sub_field('button');

?>
<section class="container bio">
  <div class="row row--full-width">
    <div class="col-10 sm-col-11 col-centered col-no-pad">
      <?php if($header) : ?>
        <h3 class="bio__header text-center">
          <?php echo $header; ?>
        </h3>
      <?php endif; ?>
    </div>
    <div class="row row--full-width">
      <div class="col-3 offset-1 sm-col-8 sm-col-centered bio__bio-image">
        <img src="<?php echo $bioimg[0]; ?>" alt="<?php echo $bioalt_text; ?>" />
      </div>
      <div class="col-8 sm-col-11 col-right col-no-pad bio__description" style="background:url('<?php echo $img[0]; ?>') center center/cover no-repeat;">
        <?php if($subheader) : ?>
          <h4>
            <?php echo $subheader; ?>
          </h4>
        <?php endif; ?>
        <?php if($content) : ?>
          <div class="bio__content">
            <?php echo $content; ?>
          </div>
        <?php endif; ?>

        <?php if($link) : ?>
          <a class="button button--white" href="<?php echo $link['url']; ?>">
            <?php echo $link['title']; ?>
          </a>
        <?php endif; ?>
      </div>
  </div>
  </div>
</section>
