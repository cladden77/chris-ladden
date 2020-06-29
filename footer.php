<?php // Close main ?>
</main>

<footer>
  <section class="container footer footer--copyright">
    <div class="row row--align-items-center">
      <!-- Footer Copyright and Credit here -->
      <div class="col-2 md-col-2 sm-col-12 footer__logo-wrap">
        <a href="<?php echo home_url(); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/logo--primary.svg" alt="Ladden Studios" />
        </a>
      </div>
      <div class="col-4 md-col-10 sm-col-12">
        <h6><?php // Footer Menu
          wp_nav_menu( array('theme_location' => 'footer', 'container' => 'nav', 'container_class' => 'footer-nav') );
        ?></h6>
      </div>
      <div class="col-6 md-col-12 sm-col-12 sm-text-center">
        <h6 class="copyright">&copy; <?php echo date("Y"); ?> Ladden Studios All Rights Reserved.</h6>
      </div>
    </div>
  </section>
</footer>

<?php get_template_part('parts/partials/remodal'); ?>

<?php wp_footer(); ?>
</body>
</html>
