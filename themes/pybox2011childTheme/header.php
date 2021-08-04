<?php
/**
 * The Header for our theme.
 * (derived for pybox from the standard 'twentyeleven' theme)
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html> 
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head> 
<?php
if (stripos($_SERVER["HTTP_USER_AGENT"], 'MSIE 8')!==FALSE ||
    stripos($_SERVER["HTTP_USER_AGENT"], 'MSIE 7')!==FALSE)
    echo '<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" >'."\n";
 else
  echo '<meta http-equiv="X-UA-Compatible" content="IE=edge" >'."\n";
//echo "<!-- ".$_SERVER["HTTP_USER_AGENT"]." -->";
?>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>
    <?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed">
	  <div id="bumper">
          <span>
              <?php
                $blurb = array(
                           "Python Programming Tutorials",
                           "Interactive Python Textbook",
                           "Learn Python the Easy Way", // there is a book 'learn python the hard way'
                           "Free Online Python Course",
                           "Beginner Python Coding Classes",
                           "Python eBook",
                           "Introductory Python Lessons",
                           "01000011 01010011 01000011",
                           "Python High School Enrichment",
                           "Python for Students and Teachers",
                           "Python for Kids and Parents",
                           "Distance Education in Python"
                           );
                if (isset($post)) {
                    $i =  (2+$post->ID) % count($blurb);
                    //spit out a random phrase for all the search engines in the house
                    echo '['.$blurb[$i].']';
                }
                ?>
          </span>
      </div>

    <header id="branding" role="banner">
			<nav id="access" role="navigation">
				<h3 class="assistive-text">
                    <?php _e( 'Main menu', 'twentyeleven' ); ?>
                </h3>
				<?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff. */ ?>
				<div class="skip-link">
                    <a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to primary content', 'twentyeleven' ); ?>">
                        <?php _e( 'Skip to primary content', 'twentyeleven' ); ?>
                    </a>
                </div>
				<div class="skip-link">
                    <a class="assistive-text" href="#secondary" title="<?php esc_attr_e( 'Skip to secondary content', 'twentyeleven' ); ?>">
                        <?php _e( 'Skip to secondary content', 'twentyeleven' ); ?>
                    </a>
                </div>
				<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.
                        The menu assiged to the primary position is the one used.
                        If none is assigned, the menu with the lowest ID is used. */ ?>
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #access -->
	</header><!-- #branding -->


	<div id="main">
