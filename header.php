<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starter_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="main" class="site">
    <header class="o-section c-section--header"<?php $background = get_field('background'); if( !empty( $background ) ): ?> style="background: linear-gradient(180deg, rgba(0, 0, 0, 0.67) 46.88%, rgba(0, 0, 0, 0) 100%), url(<?php echo esc_url($background['url']); ?>) no-repeat center;"<?php endif; ?>>
      <div class="o-section__wrapper">
        <div class="c-header">
          <div class="c-header__col">
            <div class="c-logo">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="c-link c-link--logo">
              <?php if (get_field('logo')) : ?>
                <img class="c-logo__img" src="<?php the_field('logo'); ?>" alt="Logo">
                <?php else : ?>
                <img class="c-logo__img" src="<?php echo get_template_directory_uri();?>/assets/images/logo.svg" alt="Logo">
              <?php endif; ?>
              </a>
            </div>

            <div class="c-hamburger">
              <input class="c-hamburger__checkbox js-hamburger" type="checkbox" aria-label="Menu" />
              <span class="c-hamburger__icon"></span>
              <span class="c-hamburger__icon"></span>
              <span class="c-hamburger__icon"></span>
            </div>
          </div>
          <div class="c-header__col">
            <div class="c-header__wrap js-navs">
              <?php wp_nav_menu( array(
                'theme_location' => 'menu-header',
                'container' => '',
                'container_class' => '',
                'container_id' => '',
                'menu' => '',
                'menu_class' => 's-nav',
                'menu_id' => 'navigation',
                'items_wrap' => '<ul class="%2$s" id="%1$s">%3$s</ul>'
							) );?>
            </div>
          </div>
        </div>

        <?php include get_template_directory() . '/template-parts/partials/home/hero.php'; ?>

        <a class="c-header__btn-bottom" href="#why-us">
          <svg width="16" height="35" viewBox="0 0 16 35" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8.79482 34.7326L15.7353 27.7387C16.0882 27.3835 16.0882 26.8136 15.7353 26.4584C15.3824 26.1031 14.8163 26.1031 14.4634 26.4584L9.05215 31.9055L9.05215 0.910316C9.05215 0.407052 8.64778 -3.21376e-07 8.14782 -3.43229e-07C7.64787 -3.65083e-07 7.2435 0.407052 7.2435 0.910316L7.2435 31.9055L1.84697 26.4584C1.49406 26.1031 0.927939 26.1031 0.575033 26.4584C0.398579 26.636 0.310353 26.8654 0.310353 27.1023C0.310353 27.3391 0.398579 27.5685 0.575033 27.7461L7.52288 34.74C7.86844 35.0879 8.44191 35.0879 8.79482 34.7326Z" fill="white"/>
          </svg>            
        </a>
      </div>
    </header>