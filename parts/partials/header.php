<?php
/**
 * Header template part
 *
 * Template part used globaly
 *
 * @package Ladden Studios
 * @author Chris Ladden
 * @since 0.0.1
 */
 // Variables
?>

<div class="container header navbar-fixed-top">
  <div class="row row--align-items-center row--justify-content-center">
    <div class="col-3 md-col-2 sm-col-10 header__logo-wrap">
      <a href="<?php echo home_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/logo--primary.svg" alt="Ladden Studios" />
      </a>
    </div>
    <div class="col-9 md-col-10 sm-col-6 sm-hide text-right header__navigation-wrap">
      <?php // Primary Menu
        wp_nav_menu( array('theme_location' => 'primary', 'container' => 'nav', 'container_class' => 'primary-nav') );
      ?>
      <a class="button button--outline" data-remodal-target="contact" href="mailto:chris.ladden@gmail.com">Contact</a>
    </div>
    <!--<div class="col-2 md-col-3 sm-col-2 sm-hide text-right header__utility-wrap">
      <a class="header-search header-search-toggle" onmouseup="setTimeout(function(){document.getElementById('header-search').focus()},10);"><i class="fa fa-search"></i></a>

    </div>-->

  <?php // Small Navigation ?>
    <div class="sm-col-2 nifty-nav-wrap sm-only">
      <a href="#" id="nifty-nav-toggle"><span></span></a>
    </div>
  </div>

  <!-- Search Bar -->
  <div class="container container--direction-row header__search-bar" id="modal-search">
    <div class="row">
      <div class="col-12 sm-col-12 header__search-bar__column">
      	<form role="search" method="get" class="search-form" action="<?php get_template_directory_uri(); ?>/">
      		<label>
      			<span class="screen-reader-text">Search:</span>
      			<input type="search" id="header-search" class="search-field" placeholder="Search..." value="" name="s">
      		</label>
      		<button type="submit" class="search-submit" value="Search">
      			<i class="fa fa-search"></i>
      		</button>
      	</form>
        <a class="header__search-bar--close header-search-toggle">
          <i class="far fa-times-circle"></i>
        </a>
      </div>
    </div>
  </div>


  <div class="nifty-panel">
    <!-- Search Bar -->
    <div class="container container--direction-row header__search-bar" id="mobile-modal-search">
      <div class="row">
        <div class="col-12 sm-col-12">
        	<form role="search" method="get" class="search-form" action="<?php get_template_directory_uri(); ?>/">
        		<label>
        			<span class="screen-reader-text">Search:</span>
        			<input type="search" id="header-search" class="search-field" placeholder="Search..." value="" name="s">
        		</label>
        		<button type="submit" class="search-submit" value="Search">
        			<i class="fa fa-search"></i>
        		</button>
        	</form>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row row--justify-content-center">
        <?php // Mobile Menu
          wp_nav_menu(array('theme_location' => 'mobile', 'container' => 'nav', 'menu_class' => 'mobile-nav'));
        ?>
      </div>

      <div class="row row--justify-content-center">
                <a class="button button--primary" href="mailto:chris.ladden@gmail.com">Contact</a>
              </div>
    </div>
  </div>

</div>
