<?php
/**
* Header file for the Teczilla WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */
?>
<!doctype html>
<html <?php language_attributes();?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
		
	<?php wp_head();?>	
	</head>
	<body <?php body_class(); ?>>

		<?php $teczilla_preloader= get_theme_mod('teczilla_preloader_option',1);
		if($teczilla_preloader==0) { ?>
		        <div id="preloader"></div>
		    <?php } ?>

	<?php
	if ( ! function_exists( 'wp_body_open' ) ) {
		function wp_body_open() 
		{
			do_action( 'wp_body_open' );
		}
	} 
	?>
<div class="wrapper-area">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'teczilla-freelancer' ); ?></a>
		<div class="full-width-header">
            <!--Header Start-->
            <header id="tec-header" class="tec-header">
                <!-- Menu Start -->
    <?php 

 $teczilla_show_header_butn = get_theme_mod('teczilla_show_header_butn', 0);
    $teczilla_sticky_thumb = get_theme_mod('teczilla_sticky_thumb',0);
     if($teczilla_sticky_thumb==0){
    ?>
            <div class="teczilla-menu-area menu-sticky <?php if(is_user_logged_in()) { ?> tec-agncy-stick <?php } ?>">
                <?php } else { ?>
                <div class="menu-area">
                    <?php } ?> 
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="logo-area">
                                     <?php
                                        if( function_exists( 'has_custom_logo' ) && has_custom_logo() ){
                                        the_custom_logo();
                                        } 
                                        if (display_header_text()==true){ 
                                        ?>
                                         <h1 class="teczilla-title">
                                             <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                             <?php esc_html(bloginfo( 'title' )); ?>
                                             </a>
                                         </h1>
                                       
                                        <?php } ?>
                                </div>
                            </div>
                            <div class="col-lg-<?php if($teczilla_show_header_butn == 1){ echo "6"; } else{ echo "9"; } ?> text-<?php if($teczilla_show_header_butn == 1){ echo "left"; } else{ echo "right"; } ?>">
                                <nav id="site-navigation" class="main-navigation" role="navigation">
                                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars"></i></button>
                                <?php
                                 if ( has_nav_menu( 'primary' ) ) {
                                    wp_nav_menu( array(
                                        'theme_location' => 'primary',
                                        'menu_id'        => 'primary-menu',
                                    ) );
                                        }
                                        else
                                        {
                                 ?>
                                <ul class="teczilla-add-menu">
                                    <li class="header-menus">
                                        <a class="teczilla-add-menu" href="<?php echo esc_url( admin_url( 'nav-menus.php' ));  ?>"><?php echo esc_html__( 'Add Menu Here', 'teczilla-freelancer' ); ?>
                                        </a>
                                    </li>
                                </ul>
                                <?php
                                }
                                ?>
                                </nav>
                            </div>
                                 <?php 
                    $teczilla_show_header_butn = get_theme_mod('teczilla_show_header_butn', 0);

                                $teczilla_header_freelancer_button = get_theme_mod('teczilla_header_freelancer_button','Know More');
                                $teczilla_header_freelancer_button_url = get_theme_mod('teczilla_header_freelancer_button_url','#');

                                if($teczilla_header_freelancer_button !=="" || $teczilla_header_freelancer_button_url !=="")

                                    if($teczilla_show_header_butn == 1){
                             ?>
                            <div class="col-lg-3 buttn">
                                <nav id="site-navigation" class="main-navigation" role="navigation">
                                    <div id="primary-menu" class="menu">
                                        <ul><li aria-current="page"><a href="<?php echo esc_url($teczilla_header_freelancer_button_url); ?>"><?php echo esc_html($teczilla_header_freelancer_button); ?> <i class="fa fa-long-arrow-right"></i></a></li></ul>
                                    </div>
                                </nav>
                            </div>
                           <?php } ?>
                        </div>
                    </div>

                </div>
                <!-- Menu End -->
            </header>
            <!--Header End-->
        </div>
