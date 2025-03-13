<?php
    function theme_31w_customize_register($wp_customize) {
        // Le code pour ajouter des sections, des réglages et des contrôles ira ici.
        $wp_customize->add_section('hero_section', array(
        'title' => __('Hero Section', 'theme_31w'),
        'priority' => 30,
        ));
    
    //////////////////////////////////////////////////////author
    
        $wp_customize->add_setting('hero_author', array(
        'default' => __('Massimo Trimboli', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
        ));
    
    $wp_customize->add_control('hero_author', array(
        'label' => __('author', 'theme_31w'),
        'section' => 'hero_section',
        'type' => 'text',
        ));
    
        $wp_customize->add_setting('hero_subtitle', array(
        'default' => __('Your success starts here.', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('hero_subtitle', array(
        'label' => __('Hero Subtitle', 'theme_31w'),
        'section' => 'hero_section',
        'type' => 'text',
    ));

    ///////////////////////////////// courriel
    $wp_customize->add_setting('hero_email', array(
      'default' => __('email@email.com.', 'theme_31w'),
      'sanitize_callback' => 'sanitize_text_field',
  ));
  
  $wp_customize->add_control('hero_email', array(
      'label' => __('hero email', 'theme_31w'),
      'section' => 'hero_section',
      'type' => 'text',
  ));

  ///////////////////////////////// numero de telephone
  $wp_customize->add_setting('hero_phone', array(
    'default' => __('123-456-7890', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('hero_phone', array(
    'label' => __('hero phone', 'theme_31w'),
    'section' => 'hero_section',
    'type' => 'text',
));

///////////////////////////////// adresse
$wp_customize->add_setting('hero_adress', array(
  'default' => __('123 rue adresse ville', 'theme_31w'),
  'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('hero_adress', array(
  'label' => __('hero adress', 'theme_31w'),
  'section' => 'hero_section',
  'type' => 'text',
));
    
    //////////////////////////////////////////////////// background
    
    $wp_customize->add_setting('hero_background', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background', array(
        'label' => __('Hero Background Image', 'theme_31w'),
        'section' => 'hero_section',
    )));
    
    /////////////////////////// couleur texte hero
    
    $wp_customize->add_setting('hero_text_color', array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_text_color', array(
      'label' => __('couleur texte hero', 'theme_31w'),
      'section' => 'hero_section',
    )));

    /////////////////////////// couleur svg hero
    
    $wp_customize->add_setting('hero_svg_color', array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_svg_color', array(
      'label' => __('couleur svg hero', 'theme_31w'),
      'section' => 'hero_section',
    )));
    
    
    
    ////////////////// nouvelle section
    $wp_customize->add_section('footer_section', array(
      'title' => __('footer Section', 'theme_31w'),
      'priority' => 30,
      ));
    
      /////////// champ mission
    
      $wp_customize->add_setting('footer_mission', array(
        'default' => __('mission du club de voyage', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
        ));
    
    $wp_customize->add_control('footer_mission', array(
        'label' => __('mission', 'theme_31w'),
        'section' => 'footer_section',
        'type' => 'text',
        ));
    
    
    //////////////////////////////////////////////////// couleur texte footer
    
    $wp_customize->add_setting('footer_text_color', array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_text_color', array(
      'label' => __('couleur texte footer', 'theme_31w'),
      'section' => 'footer_section',
    )));

    /////////////////////////// couleur svg footer
    
    $wp_customize->add_setting('footer_svg_color', array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_svg_color', array(
      'label' => __('couleur svg footer', 'theme_31w'),
      'section' => 'footer_section',
    )));
    
    }
    
    add_action('customize_register', 'theme_31w_customize_register');
?>