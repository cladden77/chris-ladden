<?php // Close main ?>
</main>

<footer>
  <section class="container footer">
    <div class="row">
      <div class="col-12">
        <!-- Footer Content and menu here -->
        <h3>Footer Menu</h3>
        <?php // Footer Menu
          wp_nav_menu( array('theme_location' => 'footer', 'container' => 'nav', 'menu_class' => 'footer-nav') );
        ?>
      </div>
    </div>
  </section>
  <section class="container footer footer--copywright">
    <div class="row">
      <!-- Footer Copywright and Credit here -->
      <div class="col-6 sm-col-12 sm-text-center">
        <h5>Created by Chris Ladden</h5>
      </div>
      <div class="col-6 sm-col-12 sm-text-center footer--copywright__wrap text-right">
        <h5 class="copyright">&copy; <?php echo date("Y"); ?> Chris Ladden All Rights Reserved.</h5>
      </div>
    </div>
  </section>
</footer>

<?php get_template_part('parts/partials/remodal'); ?>

<?php wp_footer(); ?>
</body>
</html>
