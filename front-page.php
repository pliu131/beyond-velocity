<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Quark
 * @since Quark 1.0
 */

get_header(); ?>

<div id="primary" role="main">
  <div class="row">
    <div class="section">
      <ul class="services">
        <li class="service">
          <a class="service__link" href="<?php echo get_site_url() ?>/strategic-finance"><h3 class="service__title">Strategic Finance</h3>
            <div class="service__icon">
              <img src="<?php bloginfo('template_url'); ?>/images/service-strategic-finance.png" alt="" class="service__image">
            </div></a>
          </li>

          <li class="service">
            <a class="service__link" href="<?php echo get_site_url() ?>/ma">
              <h3 class="service__title">Mergers &amp; Acquisitions</h3>
              <div class="service__icon">
                <img src="<?php bloginfo('template_url'); ?>/images/service-transaction-support.png" alt="" class="service__image">
              </div>
            </a>
          </li>

          <li class="service">
            <a class="service__link" href="<?php echo get_site_url() ?>/capital-financing">
              <h3 class="service__title">Capital &amp; Financing</h3>
              <div class="service__icon">
                <img src="<?php bloginfo('template_url'); ?>/images/service-capital-financing.png" alt="" class="service__image">
              </div>
            </a>
          </li>

          <li class="service">
            <a class="service__link" href="<?php echo get_site_url() ?>/finance-operations">
              <h3 class="service__title">Finance &amp; Operations</h3>
              <div class="service__icon">
                <img src="<?php bloginfo('template_url'); ?>/images/service-finance-operations.png" alt="" class="service__image">
              </div>
            </a>
          </li>

          <li class="service">
            <a class="service__link" href="<?php echo get_site_url() ?>/vertical-solutions">
              <h3 class="service__title">Investor &amp; Industry</h3>
              <div class="service__icon">
                <img src="<?php bloginfo('template_url'); ?>/images/service-company-operations.png" alt="" class="service__image">
              </div>
            </a>
          </li>

          <li class="service">
            <a class="service__link" href="<?php echo get_site_url() ?>/board-advisory">
              <h3 class="service__title">Board Participation</h3>
              <i class="fa fa-users service__icon" aria-hidden="true"></i>
            </a>
          </li>
        </ul>
      </div>
    </div><!-- .section --> 

    <?php 
    $image_one = get_field('half_section_one_image');
    $image_two = get_field('half_section_two_image');
    $image_three = get_field('full_section_image');
    ?>

    <div class="section-table">
      <div class="section section--half section--image">
        <div class="section__image" style="background-image: url(<?php echo $image_one['url']; ?>)"></div>
        <div class="section__overlay"></div>
        <div class="section__content">
          <h2 class="section__title">
            <?php the_field('half_section_one_title') ?>
          </h2>
          <!-- 20px -->
          <div class="section__text">
            <?php the_field('half_section_one_text'); ?>
          </div>
        </div><!-- .section_content --> 
      </div><!-- .section --> 

      <div class="section--spacer"></div>

      <div class="section section--half section--image">
        <div class="section__image" style="background-image: url(<?php echo $image_two['url']; ?>)"></div>
        <div class="section__overlay"></div>
        <div class="section__content">
          <h2 class="section__title">
            <?php the_field('half_section_two_title') ?>
          </h2>
          <!-- 20px -->
          <div class="section__text">
            <?php the_field('half_section_two_text'); ?>
          </div>
        </div><!-- .section_content --> 
      </div><!-- .section -->
    </div><!-- .section-table -->

    <!-- #3c3c3b blend mode-->
    <div class="row">
      <div class="col grid_12_of_12">
        <div class="section section--full section--image section--secondary" style="background-image: url(<?php echo $image_three['url']; ?>)">
          <div class="section__overlay"></div>

          <div class="row">
            <div class="col grid_6_of_12">
              <div class="section__content">
                <h2 class="section__title">
                  <?php the_field('full_section_title') ?>
                </h2>
                <!-- 20px -->
                <div class="section__text">
                  <?php the_field('full_section_text'); ?>
                </div>
              </div><!-- .section_content --> 
            </div><!-- .section --> 
          </div><!-- .col --> 
        </div><!-- .row --> 
      </div>
    </div>

    <!-- background #39424b, -->
  </div> <!-- /#primary.site-content -->

  <?php get_footer(); ?>
