<?php

/*************************************************************************************************
THESE STYLES ARE GENERATED DYNAMICALLY BASED ON USER SETTINGS IN WORDPRESS
Do not edit this file if you do not know what you're doing
*It can get a bit thick in here, but I tried to seperate them as best as possible.*
*************************************************************************************************/

//set up variables
//backgrond options
$background_image = get_field('background_image', 'option');
$background_image = $background_image['sizes']['background-photo'];
$background_position = get_field('background_position', 'option');
$background_repeat = get_field('background_repeat', 'option');
$background_attachment = get_field('background_attachment', 'option');
$background_overlay_color = get_field('background_overlay_color', 'option');
$background_overlay_opacity = get_field('background_overlay_opacity', 'option');

//custom fonts
$heading_font_type = get_field('heading_font_type','option');
$heading_font = get_field( 'heading_fonts', 'option' );
$custom_heading_font_family = get_field( 'custom_heading_font_family', 'option' );

$body_font_type = get_field('body_font_type','option');
$body_font = get_field( 'body_fonts', 'option' );
$custom_body_font_family = get_field( 'custom_body_font_family', 'option' );

$fonts = array(

  //these keys need to match the keys in the options exactly
  'Lato' => "'Lato', sans-serif",
  'Open Sans' => "'Open Sans', sans-serif",
  'Montserrat' => "'Montserrat', sans-serif",
  'Roboto' => "'Roboto', sans-serif",
  'Source Sans Pro' => "'Source Sans Pro', sans-serif",
  'Oswald' => "'Oswald', sans-serif",
  'Quattrocento' => "'Quattrocento', serif",
  'Quattrocento Sans' => "'Quattrocento Sans', sans-serif",
  'Josefin Slab' => "'Josefin Slab', serif",
  'Josefin Sans' => "'Josefin Sans', sans-serif",
  'Arvo' => "'Arvo', serif",
  'Ubuntu' => "'Ubuntu', sans-serif",
  'Droid Sans' => "'Droid Sans', sans-serif",
  'Droid Serif' => "'Droid Serif', serif"

);

//site colors
$logo_color = get_field( 'text_logo_color', 'option' );
$main_color = get_field('main_color', 'option');
$menu_color = get_field('menu_color', 'option');
$footer_text_color = get_field('footer_text_color', 'option');

//album colors
$music_background_color = get_field( 'music_background_color', 'option' );
$music_text_color = get_field( 'music_text_color', 'option' );

//mobile
$mobile_menu_background_color = get_field( 'mobile_menu_background_color', 'option');
$mobile_menu_text_color = get_field( 'mobile_menu_text_color', 'option');

?>

  /** Custom Styles Set by Site Owner **/

  html, body{
    <?php
      if( $body_font_type == "Google Font" ){ //if Google Font
        echo "font-family: " . $fonts[$body_font] . ";";
      } elseif( $body_font_type == "Custom" ) { //if Custom Font
        echo "font-family: $custom_body_font_family;";
      } else {
        echo 'font-family: "Helvetica Neue", Helvetica, sans-serif;';
      }
    ?>
  }

  h1, h2, h3, h4, h5, h6,
  #mobile_menu,
  .site_header #logo_wrap a,
  .music_section .album .album_info_wrapper .album_info_wrapper .album_type,
  .music_section .album .album_info_wrapper .album_info_wrapper .album_button,
  table.tour_dates,
  .site_footer .credits,
  .mailing_list,
  .site_header nav#header_nav{
    <?php
      if( $heading_font_type == "Google Font" ){ //if Google Font
        echo "font-family: " . $fonts[$heading_font] . ";";
      } elseif( $heading_font_type == "Custom" ) { //if Custom Font
        echo "font-family: $custom_heading_font_family;";
      } else {
        echo 'font-family: "Helvetica Neue", Helvetica, sans-serif;'; //fall back to helvetica because why not
      }
    ?>
  }

  #site_wrap{
    <?php
      // Background Image
      echo ( $background_image ? "background-image: url('$background_image');" : '' );
      // Background Position
      if( $background_position ){
        switch($background_position){
          case 'Fullscreen':
            echo "background-position: center center;
              -webkit-background-size: cover;
              -moz-background-size: cover;
              -o-background-size: cover;
              background-size: cover;";
            break;
          case 'Top Left':
            echo "background-position: top left;";
            break;
          case 'Top Middle':
            echo "background-position: top center;";
            break;
          case 'Centered':
            echo "background-position: center center;";
            break;
        }
      }
      // Background Repeat
      if($background_repeat){
        switch( $background_repeat ){
          case 'Repeat':
            echo "background-repeat: repeat;";
            break;
          case 'Repeat Horizontally':
            echo "background-repeat: repeat-x;";
            break;
          case 'Repeat Vertically':
            echo "background-repeat: repeat-y;";
            break;
          case 'No Repeat':
            echo "background-repeat: no-repeat;";
            break;
        }
      }
      // Background Attachment
      if($background_attachment){
        switch( $background_attachment ){
          case 'Scrolling Background':
            echo "background-attachment: scroll;";
            break;
          case 'Fixed Background':
            echo "background-attachment: fixed;";
            break;
        }
      }
    ?>
  }

  #site_wrap #overlay_color{
    <?php
      // Background Color
      echo ( $background_overlay_color ? "background-color: $background_overlay_color;" : '' );
      // Background Overlay
      $opacityConversion = $background_overlay_opacity/100;
      echo "opacity: $opacityConversion;";
    ?>
  }

  html, body, a{
    <?php echo( $main_color ? "color: $main_color;" : "" ); ?>
  }

  #logo{
    <?php echo( $logo_color ? "color: $logo_color;" : "" ); ?>
  }

  .site_header nav#header_nav ul li a{
    <?php echo( $menu_color ? "color: $menu_color;" : "" ); ?>
  }

  .site_footer{ <?php echo( $footer_text_color ? "color: $footer_text_color;" : "" ); ?> }
  .mailing_list .mailing_list_title, .mailing_list form, .mailing_list form input[type="email"]{ <?php echo( $footer_text_color ? "color: $footer_text_color;" : "" ); ?> }
  .mailing_list input[type="email"], .mailing_list input[type="submit"]{ <?php echo( $footer_text_color ? "border-color: $footer_text_color;" : "" ); ?> }
  .mailing_list form input{ <?php echo( $footer_text_color ? "color: $footer_text_color;" : "" ); ?> }
  .mailing_list form ::-webkit-input-placeholder { <?php echo( $footer_text_color ? "color: $footer_text_color;" : "" ); ?> }
  .mailing_list form :-moz-placeholder { <?php echo( $footer_text_color ? "color: $footer_text_color;" : "" ); ?> }
  .mailing_list form ::-moz-placeholder { <?php echo( $footer_text_color ? "color: $footer_text_color;" : "" ); ?> }
  .mailing_list form :-ms-input-placeholder { <?php echo( $footer_text_color ? "color: $footer_text_color;" : "" ); ?> }
  .mailing_list form label.placeholder{ color: <?php echo( $footer_text_color ? "color: $footer_text_color;" : "" ); ?> }
  .mailing_list form input[type="submit"]{
    <?php echo( $footer_text_color ? "background-color: $footer_text_color;" : "" ); ?>
    <?php
      if($background_overlay_opacity){
        echo "color: $background_overlay_color;";
      } else {
        echo "color: #ffffff;";
      }
    ?>
  }

  .music_section{ <?php echo( $music_background_color ? "background-color: $music_background_color;" : "" ); ?> }
  .music_section .album{ <?php echo( $music_background_color ? "background-color: $music_background_color;" : "" ); ?> }
  @media only screen and (min-width: 768px) {
    .music_section{ background-color: transparent; }
  }
  .music_section .album{ <?php echo( $music_background_color ? "background-color: $music_background_color;" : "" ); ?> }
  .music_section .album .album_info_wrapper .album_info .album_button{ <?php echo( $music_background_color ? "color: $music_background_color;" : "" ); ?> }

  .music_section .album .album_info_wrapper .album_info .album_type{ <?php echo( $music_text_color ? "color: $music_text_color;" : "" ); ?> }
  .music_section .album .album_info_wrapper .album_info .album_title{ <?php echo( $music_text_color ? "color: $music_text_color;" : "" ); ?> }
  .music_section .album .album_info_wrapper .album_info .album_description{ <?php echo( $music_text_color ? "color: $music_text_color;" : "" ); ?> }
  .music_section .album .album_info_wrapper .album_info .album_button{ <?php echo( $music_text_color ? "background-color: $music_text_color;" : "" ); ?> }

  #mobile_menu{ <?php echo( $mobile_menu_background_color ? "background-color: $mobile_menu_background_color;" : "" ); ?> }
  #mobile_header{
    <?php
      if( $mobile_menu_background_color ){
        echo "background-color:" . hex2rgba($mobile_menu_background_color, 0.90) . "; border-bottom: " . $mobile_menu_background_color . ";";
      }
    ?>
  }

  <?php if( $mobile_menu_text_color ): ?>
    #mobile_menu ul li a{ color: <?php echo $mobile_menu_text_color; ?>; }
    #mobile_header #mobile_site_title{ color: <?php echo $mobile_menu_text_color; ?>; }
    #mobile_header #mobile_menu_toggle i{ color: <?php echo $mobile_menu_text_color; ?>; }
  <?php endif; ?>

  .placeholder_section .placeholder_copy{ <?php echo ( $background_overlay_color ? "background-color: $background_overlay_color;" : '' ); ?> }
  .placeholder_section .placeholder_copy a{
    <?php echo( $main_color ? "background-color: $main_color;" : "" ); ?>
    <?php echo ( $background_overlay_color ? "color: $background_overlay_color;" : '' ); ?>
  }

  #user_controls ul li a:hover{
    <?php echo( $main_color ? "background-color: $main_color;" : "" ); ?>
  }
